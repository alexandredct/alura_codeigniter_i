<?php if (! defined("BASEPATH")) exit("Não é permitido o acesso direto ao script");

class Usuarios extends CI_Controller{
    public function novo(){
              
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha"))
        );
        
        //$this->load->database(); Carregado no autoload
        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);
        $this->load->template("usuarios/novo");
    }
}