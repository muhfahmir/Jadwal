<?php 
    class Register extends CI_Controller{
        public function index(){
            if($this->session->userdata('nama')){
                redirect('dashboard');
            }
            $data['title'] = "Register";
            $this->load->view('register',$data);
        }

        public function action(){
            $this->_rules();
            if($this->form_validation->run()==FALSE){
                $this->index('');
            }else{
                $data['user'] = $this->Jadwal_Model->getUsers()->result();
                $username = strtolower($this->input->post('username'));
                foreach($data['user'] as $user) :
                    if($user->username==$username){
                        $msg = $this->msg_danger('username telah terpakai.');
                        $this->session->set_flashdata('msg',$msg);
                        redirect('register');
                    }
                endforeach;
                $password = $this->input->post('password');
                $confirm = $this->input->post('confirm');
                if($password!=$confirm){
                    $msg = $this->msg_danger('Konfirmasi password salah.');
                    $this->session->set_flashdata('msg',$msg);
                    redirect('register');
                }
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $nama = $this->input->post('nama');
                $role = 2;

                $data = array(
                    'name' => $nama,
                    'username' => $username,
                    'password' => $password,
                    'role' => $role
                );

                $this->Jadwal_Model->insertUser($data);
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">
                Registrasi Sukses. Silakan login! :)
                </div>');
                redirect('login');
            }
        }

        public function _rules(){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('nama','Nama','required');
        }

        public function msg_danger($msg){
            $danger = '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            '.$msg.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            return $danger;
        }
    }
?>
