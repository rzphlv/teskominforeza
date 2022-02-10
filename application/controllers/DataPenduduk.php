<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DataPenduduk extends CI_Controller {
	function __construct()
    	{
    		parent::__construct();
    		//load helper
    		$this->load->helper('url');
    		$this->load->helper('form');
    		//load library
    		$this->load->library('form_validation');
    		//load model
    		$this->load->model('M_insert');
    	}

    	public function index()
    	{
    		//ambil data dari database
    		$getData = $this->M_insert->get();

    		//menampilkan
    		$this->load->view('tampilan_data',$data);
    	}


}
