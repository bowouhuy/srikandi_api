<?php

Class M_auth extends CI_Model {
    public function get_user($where){
        $query = $this->db->get_where('tb_user', $where);
        return $query;
    }
}