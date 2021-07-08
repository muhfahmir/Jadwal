<?php 
    class Login extends CI_Controller{
        public function index(){
            if($this->session->userdata('username')){
                redirect('dashboard');
            }
            $data['title'] = "Login";
            $this->load->view('login',$data);
        }

        public function action(){
            $this->_rules();
            if($this->form_validation->run()==FALSE){
                $this->index('');
            }else{
                $username = strtolower($this->input->post('username'));
                $password = $this->input->post('password');
                $data['user'] = $this->Jadwal_Model->get_data_login($username);
                foreach($data['user'] as $u){
                    $cek = $u->password;
                    $id = $u->id;
                    $name = $u->name;
                    $role = $u->role;
                }
                if(!$data['user']){
                    $msg = $this->msg_danger('username salah.');
                    $this->session->set_flashdata('msg',$msg);
                    redirect('login');
                }
                if(password_verify($password, $cek)){
                    $this->session->set_userdata('id',$id);
                    $this->session->set_userdata('username',$username);
                    $this->session->set_userdata('name',$name);
                    $this->session->set_userdata('role',$role);
                    redirect('dashboard');
                }
                else{
                    $msg = $this->msg_danger('password salah.');
                    $this->session->sess_destroy();
                    $this->session->set_flashdata('msg',$msg);
                    redirect('login');
                }
            }
        }

        public function _rules(){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
        }

        public function msg_danger($msg){
            $danger = '<div class="alert alert-danger text-center" role="alert">
            '.$msg.'
            </div>';
            return $danger;
        }
    }
?>