<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_postingan extends CI_Model {
    
	public function getAll()
	{
                $table='berita';
                $query=$this->db->get($table);
                return $query;
	}
}