            <h1>Produtos cadastrados</h1>
            <table class="table">
                <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td><?= anchor("produtos/{$produto['id']}", $produto["nome"]) ?></td>
                    <td>
                        <?= character_limiter($produto["descricao"], 10)?>
                    </td>
                    <td><?= numeroEmReais($produto["preco"])?></td>
                </tr>
                <?php endforeach ?>
            </table>
                        
            <?php if ($this->session->userdata("usuario_logado")): ?>
                <?= anchor('produtos/formulario','Novo Produto', array("class" => "btn btn-primary")) ?>
                
                <?= anchor('login/logout','Logout', array("class" => "btn btn-primary")) ?>
            <?php else :  ?>
                <h1>Login</h1>
                <?php
                echo form_open("login/autenticar"); //Caminho para a função no controle específico

                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "senha",
                    "maxlength" => "255",
                    "class" => "form-control"                
                ));

                echo form_label("Senha", "senha");
                echo form_input(array(
                    "name" => "senha",
                    "id" => "senha",
                    "maxlength" => "255",
                    "class" => "form-control"                
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "type" => "submit",
                    "content" => "Login"                
                ));

                echo form_close();            
                ?>
            
                <h1>Cadastro de novo usuário</h1>
                <?php
                echo form_open("usuarios/novo");

                echo form_label("Nome", "nome");
                echo form_input(array(
                    "name" => "nome",
                    "maxlength" => "255",
                    "class" => "form-control"                
                ));

                echo form_label("Email", "email");
                echo form_input(array(
                    "name" => "email",
                    "id" => "senha",
                    "maxlength" => "255",
                    "class" => "form-control"                
                ));

                echo form_label("Senha", "senha");
                echo form_input(array(
                    "name" => "senha",
                    "id" => "senha",
                    "maxlength" => "255",
                    "class" => "form-control"                
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "type" => "submit",
                    "content" => "Cadastrar"                
                ));
                echo form_close();
                ?>
            <?php endif; ?>