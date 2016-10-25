<?php if (! defined("BASEPATH")) exit("Não é permitido o acesso direto ao script");

class Utils extends CI_Controller{
    public function migrate(){
        $this->load->library('migration');
        $success = $this->migration->current();
        if ($success){
            echo 'Migrado';
        } else {
            echo 'Erro: '. show_error($this->migration->error_string());
        }
    }
}
?>