<?php
function autoriza(){
    $instancia = get_instance();
    $usuarioLogado = $instancia->session->userdata("usuario_logado");
    if (!$usuarioLogado){
        $instancia->session->set_flashdata("danger", "Você deve ser logar-se antes");
        redirect("/");
    } else {
        return $usuarioLogado;
    }
}
