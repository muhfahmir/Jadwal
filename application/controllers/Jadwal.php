<?php 
    class Jadwal extends CI_Controller{
        public function index(){
            $table = 'kuliah';
            $where = 'user_id';
            $id = $this->session->userdata('id');
            $data['jadwal'] = $this->Jadwal_Model->get_specific_data($table, $where, $id)->result();
            $data['title'] = "Data Jadwal";
            $data['active'] = "jadwal";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('jadwal',$data);
            $this->load->view('templates/footer');
        }

        public function new(){
            $data['title'] = "Tambah Jadwal";
            $data['active'] = "jadwal";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('new_jadwal',$data);
            $this->load->view('templates/footer');
        }

        public function new_act(){
            $this->_rules();

            if($this->form_validation->run() == FALSE){
                $this->new();
            }else{
                $nama = $this->input->post('nama');
                $hari = $this->input->post('hari');
                $jam = $this->input->post('jam');
                $deskripsi = $this->input->post('deskripsi');
                $data = array(
                    'name' => $nama,
                    'hari' => $hari,
                    'deskripsi' => $deskripsi,
                    'jam' => $jam,
                    'status' => 0,
                    'user_id' => $this->session->userdata('id')
                );

                $this->Jadwal_Model->insert_data('kuliah',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Jadwal baru telah ditambahkan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('jadwal');
            }
        }

        public function update($id){
            $table = 'kuliah';
            $where = 'id';
            $data['jadwal'] = $this->Jadwal_Model->get_specific_data($table, $where, $id);
            $data['title'] = "Update Aktivitas";
            $data['active'] = "jadwal";
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar');
            $this->load->view('update_jadwal',$data);
            $this->load->view('templates/footer');
        }

        public function update_act(){
            $this->_rules();
            if($this->form_validation->run()==FALSE){
                $this->update('');
            }else{
                $id = $this->input->post('id');
                $nama = $this->input->post('nama');
                $hari = $this->input->post('hari');
                $jam = $this->input->post('jam');
                $deskripsi = $this->input->post('deskripsi');
                $status = $this->input->post('status');

                $data = array(
                    'name' => $nama,
                    'hari' => $hari,
                    'jam' => $jam,
                    'deskripsi' => $deskripsi,
                    'status' => $status
                );

                $where = array (
                    'id' => $id
                );

                $this->Jadwal_Model->update_data('kuliah',$data, $where);
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                Jadwal Kuliah Berhasil Diperbarui.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>');
                redirect('jadwal');
            }
        }

        public function delete($id){
            $table = 'kuliah';
            $where = 'id';
            $data['jadwal'] = $this->Jadwal_Model->get_specific_data($table, $where, $id);
            $result = $data['jadwal']->result();
            foreach($result as $a):
                $jadwal = $a->name;
            endforeach;

            $where = array('id' => $id);
            $delete = $this->Jadwal_Model->delete_data($table, $where);

            if($delete){
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Jadwal Kuliah Berhasil Dihapus.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>');
            }
            else{
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Jadwal Kuliah gagal dihapus. Silakan hapus data yang berelasi dengan Jadwal Kuliah '.$jadwal.' terlebih dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>';
                $this->session->set_flashdata('msg',$msg);
            }
            redirect('jadwal');
        }

        public function _rules(){
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('jam','Jam','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
            $this->form_validation->set_rules('hari','Hari','required');
        }
    }
?>