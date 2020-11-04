<?php 

class userModel extends CI_Model{

    function buscaTodos(){

        $result= $this->db->get('tabela1')->result_array();
         return $result;
    }


}





?>