<html>
     <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            <h1><?= $produto["nome"]?></h1><br/>            
            <b>Preço: </b> <?= numeroEmReais($produto["preco"])?><br/>
            <b>Descrição: </b><?= auto_typography(html_escape($produto["descricao"]))?><br/>
            
            <h1>Compre agora mesmo</h1>
            <?php
            echo form_open("vendas/nova");
            
            echo form_hidden("produto_id", $produto["id"]);
            
            echo form_label("Data de entrega", "data_de_entrega");
            echo form_input(array(
               "name"  => "data_de_entrega",
                "class" => "form-control",
                "id" => "data_de_entrega",
                "maxlenght" => "255",
                "value" => ""
            ));
            
            echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Comprar",
                "type" => "submit"
            ));
            
            ?>
            
        </div>       
    </body>
</html>