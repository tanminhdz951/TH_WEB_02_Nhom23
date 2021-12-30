<?php
    class loginmodel extends DModel{

        public function __construct()
        {
            parent::__construct();
        }

        public function login($table_admin, $username, $password){
            $sql = "SELECT * FROM $table_admin WHERE username =? AND password =? ";
            return $this->db->affectedRows($sql,$username, $password);

        }
        public function getlogin($table_admin, $username, $password){
            $sql = "SELECT * FROM $table_admin WHERE username =? AND password =? ";
            return $this->db->selectUser($sql,$username, $password);
        }
        
        public function category($table, $username){  
            $sql = "SELECT * FROM $table WHERE username =? ";
            return $this->db->select($sql);
        }
        public function insert_category($table,$data){
            return $this->db->insert($table, $data );
            
        }
    }
?>