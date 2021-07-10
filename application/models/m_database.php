<?php

class M_database extends CI_Model
{
    public function getAllDatabase()
    {
        return $this->db->get('datasiak2020')->result_array();
    }

    public function inputData()
    {
        $data = [
            "NPSN" => $this->input->post('NPSN', true), //mengamankan data dengan parameter true, pake XSS filter seperti binding
            "Nama_Sekolah" => $this->input->post('Nama_Sekolah', true),
            "Besaran_Bantuan" => $this->input->post('Besaran_Bantuan', true)
        ];
        $this->db->insert('datasiak2020', $data);
    }

    function hapus_data($NPSN){
        $this->db->delete('datasiak2020',['NPSN'=>$NPSN]);
    }
}