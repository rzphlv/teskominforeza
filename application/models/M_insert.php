<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_insert extends CI_model {

	function get()
    	{
    		return $this->db->get('orang');
    	}

    	function get_by_nik($nik)
    	{
    		$this->db->where('nik', $nik);
    		$this->db->from('orang');
    		return $this->db->get();
    	}

    	function insert($data)
    	{
    		$this->db->insert('orang', $data);
    	}

    	function delete($nik)
    	{
    		$this->db->where('nik', $nik);
    		$this->db->delete('orang');
    	}

    	function update($data, $where)
    	{
    		$this->db->where($where);
    		$this->db->update('orang', $data);
    	}
}
