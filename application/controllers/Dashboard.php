<?php 
    class Dashboard extends CI_Controller{
        public function index(){
            if(empty($this->session->userdata('username'))){
                redirect('login');
            }
            $this->load->model('Jadwal_Model');
            $data['title'] = "Jadwal Kuliah";
            $data['active'] = "dashboard";
            $table = 'kuliah';
            $where = array('user_id' => $this->session->userdata('id') , 'status' => 0);
            $data['jadwal'] = $this->Jadwal_Model->get_num_data($table, $where);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
        }
    }
?>