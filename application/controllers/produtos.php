<?php if (! defined("BASEPATH")) exit("Não é permitido o acesso direto ao script");

class Produtos extends CI_Controller {
    
    public function index(){              
        //$this->load->database(); Carregado no autoload
        $this->load->model("produtos_model");
        $produtos = $this->produtos_model->buscaTodos();
        
        $dados = array("produtos" => $produtos);
        $this->load->helper("form");
        
        $this->load->template("produtos/index.php", $dados);
    }
    
    public function formulario (){
        autoriza();
        $this->load->template("produtos/formulario.php");
    }
    
    public function novo(){
        $usuarioLogado = autoriza();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");
        $this->form_validation->set_rules("nome","nome","required|min_length[5]|callback_nao_tenha_a_palavra_melhor");
        $this->form_validation->set_rules("preco","preço","required");
        $this->form_validation->set_rules("descricao","descrição","trim|required|min_length[10]");
        
        $sucesso =$this->form_validation->run();
        if ($sucesso){            
            $produto = array(
                "nome" => $this->input->post("nome"),
                "descricao" => $this->input->post("descricao"),
                "preco" => $this->input->post("preco"),
                "usuario_id" => $usuarioLogado["id"]
            );
            $this->load->model("produtos_model");
            $this->produtos_model->salva($produto);
            $this->session->set_flashdata("success","Produto cadastrado com sucesso");
            redirect('/');
        } else {
            $this-> load->template('produtos/formulario');
        }
    }
    
    public function nao_tenha_a_palavra_melhor($nome){
        $posicao = strpos(strtolower ($nome), "melhor");
        if ($posicao !== FALSE){ //achou alguma ocorrência
            $this->form_validation->set_message("nao_tenha_a_palavra_melhor", "O campo '%s' não pode conter a palavra MELHOR");
            return FALSE;
        } else {            
            return TRUE;
        }
    }
    
    public function mostra($id){        
        $this->load->model("produtos_model");
        $produto = $this->produtos_model->busca($id);
        $dados = array("produto" => $produto);
        $this->load->helper('typography');
        $this->load->template("produtos/mostra", $dados);
    }    
}