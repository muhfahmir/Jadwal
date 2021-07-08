<?php 
    class User extends CI_Controller{
        public function index(){
            if($this->session->userdata('role')!='1'){
                redirect('dashboard');
            }
            $data['user'] = $this->Jadwal_Model->get_data_table('user')->result();
            $data['title'] = "Data User";
            $data['active'] = "user";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('user',$data);
            $this->load->view('templates/footer');
        }

        public function delete($username){
            $data['user'] = $this->Jadwal_Model->get_data_user($username);
            foreach($data['user'] as $u):
                $user = $u->name;
            endforeach;
            $where = array('username' => $username);
            $delete = $this->Jadwal_Model->delete_data('user', $where);

            if($delete){
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data User Berhasil Dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            }
            else{
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data user gagal dihapus. Silakan hapus data yang berelasi dengan user '.$user.' terlebih dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                $this->session->set_flashdata('msg',$msg);
            }
            redirect('user');
        }
    }
?>