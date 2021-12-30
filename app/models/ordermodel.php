<?php
    class ordermodel extends DModel{

        public function __construct()
        {
            parent::__construct();
        }
        

        public function category($sql){
            
            return $this->db->select($sql);
        }

        public function categorybyid($table, $cond){
            $sql = "SELECT * FROM $table Where $cond";
           return $this->db->select($sql,);
        }       

        public function insert_category($table,$data){
            return $this->db->insert($table, $data );
            
        }
        public function update_category($table,$data,$cond){
            return $this->db->update($table, $data ,$cond);
        }

        public function delete_category($table,$cond){
            return $this->db->delete($table,$cond);
        }
    }
?>