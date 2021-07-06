<?php

class M_database extends CI_Model
{
    public function getAllDatabase()
    {
        return $this->db->get('datasiak2020')->result_array();
    }
}