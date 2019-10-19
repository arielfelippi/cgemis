<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publications_c extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$carregaDados["paginaMeio"] = "Publications_v";
		$this->load->view("Principal_v", $carregaDados);
	}
}
