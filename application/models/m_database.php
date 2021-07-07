<?php

class M_database extends CI_Model
{
    public function getAllDatabase()
    {
        return $this->db->get('datasiak2020')->result_array();
    }

    function hapus_data($NPSN){
        $this->db->delete('datasiak2020',['NPSN'=>$NPSN]);
    }
}