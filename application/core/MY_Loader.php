<?php if (! defined("BASEPATH")) exit("Não é permitido o acesso direto ao script");

class MY_Loader extends CI_Loader{
    public function template ($nome, $dados = array()){
        $this->view("cabecalho.php");
        $this->view($nome,$dados);
        $this->view("rodape.php");
    }
}
