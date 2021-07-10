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
            "NPSN" => $this->input->post('NPSN', true),
            "Nama_Sekolah" => $this->input->post('Nama_Sekolah', true),
            "Besaran_Bantuan" => $this->input->post('Besaran_Bantuan', true)
        ];
        $this->db->insert('datasiak2020', $data);
    }

    function hapus_data($NPSN){
        $this->db->delete('datasiak2020',['NPSN'=>$NPSN]);
    }
    
    public function getUserByNPSN($NPSN)
    {
        return $this->db->get_where('datasiak2020', ['NPSN' => $NPSN])->row_array(); 
    }
    public function editData()
    {
        $data = [
            "NPSN" => $this->input->post('NPSN', true), 
            "Nama_Sekolah" => $this->input->post('Nama_Sekolah', true),
            "Besaran_Bantuan" => $this->input->post('Besaran_Bantuan', true)
        ];
        $this->db->where('NPSN', $this->input->post('NPSN'));
        $this->db->update('NPSN', $data);
    }
}