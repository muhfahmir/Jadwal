<?php 
    class Jadwal_Model extends CI_Model{
        private $dbUsers;
        
        public function __construct()
        {
            $this->dbUsers = $this->load->database('jadwal_users', TRUE);
        }

        public function getUsers()
        {
            return $this->dbUsers->get('user');
        }

        public function insertUser($data)
        {
            $this->dbUsers->insert('user',$data);
        }

        public function get_data_table($table){
            return $this->db->get($table);
        }

        public function get_specific_data($table,$where,$id){
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($where,$id);
            $query = $this->db->get();
            return $query;
        }

        public function get_num_data($table,$where){
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($where);
            $query = $this->db->get()->num_rows();
            return $query;
        }

        public function insert_data($table,$data){
            $this->db->insert($table,$data);
        }

        public function update_data($table, $data, $where){
            $this->db->update($table,$data,$where);
        }

        public function delete_data($table, $where){
            //$this->db->query("SET foreign_key_checks = 0");
            $db_debug = $this->db->db_debug; //save setting

            $this->db->db_debug = FALSE; //disable debugging for queries

            //check for errors, etc

            $this->db->where($where);
            $query = $this->db->delete($table);
            $this->db->db_debug = $db_debug; //restore setting
            //$this->db->query("SET foreign_key_checks = 1");

            if($query){
                return true;
            }
            return false;
        }

        public function get_data_login($username){
            $this->dbUsers->select('*');
            $this->dbUsers->from('user');
            $this->dbUsers->where('username',$username);
            $query = $this->dbUsers->get();
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
        }
    }

?>