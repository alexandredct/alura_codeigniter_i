<?php
class Vendas_model extends CI_Model{
    public function salva($venda){        
        $this->db->insert("vendas",$venda);
        $this->db->update("produtos", //tabela
            array("vendido" => 1), //alteração
            array("id" => $venda["produto_id"]) //where
        );
    }
}