<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tcga_c extends CI_Controller {

	public function __construct() {
		parent::__construct();
    }

	public function index()
	{
		$carregaDados["paginaMeio"] = "Tcga_v";
		$this->load->view("Principal_v", $carregaDados);
	}

	public function runAnalisys()
	{
		$genes = "";
		$listGenes = [];
		$strCmdText = "";
		$listGenes = $this->input->post("listGenesJS", TRUE);
		
		if(empty($listGenes))
		{
			echo "Error, gene list is empty!";
			return;
		}
           
		foreach ($listGenes as $value)
		{
			$genes .= " " . $value;
		}

		$strCmdText = "/usr/bin/Rscript TcgsBiolinks_Expressao.R" . "Caminho_arquivos_processados TCGA-STAD 10 " . sizeof($listGenes) . $genes;

		// $output = shell_exec($strCmdText);
		// $output = shell_exec('/usr/bin/Rscript /var/www//html/teste.r');
		// echo "<pre>$output</pre>";
		//echo $strCmdText;
	}
}
