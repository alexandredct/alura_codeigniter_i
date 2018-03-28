<?php 
class Produtos extends CI_Controller{
	public function index(){		
		$this->load->database();
		$this->load->model('produtos_model');
		$produtos = $this->produtos_model->buscarTodos();
		
		$dados = array("produtos" => $produtos);
		
		$this->load->view("produtos/index.php", $dados);
	}
}
?>