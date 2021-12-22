<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs extends CI_Model {

	function get_data_obat(){
        $t_obat=$this->db->get('t_obat');
        return $t_obat->result();
    }

    function get_data_farmasi(){
        $farmasi=$this->db->get('farmasi');
        return $farmasi->result();
    }

      
    function get_obatByid($id){
        $this->db->where('id_obat',$id);
        return $this->db->get('t_obat')->row();
    }

    function get_farmasiByid($id){
        $this->db->where('id_farmasi',$id);
        return $this->db->get('farmasi')->row();
    }

    public function get_nama_obat_keyword($keyword){
        $this->db->select('*');
        $this->db->from('t_obat');
        $this->db->like('nama_obat',$keyword);
        return $this->db->get()->result();
    }


    function insert($data,$table){
        $this->db->insert($table,$data);
        if ($this->db->affected_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
      
    function update($data,$table,$where,$value){
        $this->db->where($where,$value);
        $this->db->update($table,$data);
        if($this->db->affected_rows()>0){
            return true;
        } else {
            return false;
        }
    }  
      
    function delete($id,$table){
        $this->db->where($id);
        $this->db->delete($table);
    }

}
