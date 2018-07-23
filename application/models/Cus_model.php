<?php
class Cus_model extends CI_Model {
    
     function get_cus() {
        $query = $this->db->query('SELECT output FROM dorm_analyze where id= "58147737"');
        return $query->result();
    }
   /* public function ins_cus($no){
        $sql ="INSERT INTO 'questionnaire09'('id') VALUES ($no)";
         $query = $this->db->query($sql);*/
             
     function insert_entry($no){
        $this->db->insert('questionnaire09',$data);
        
    }
}