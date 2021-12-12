<?php
include_once 'head.php';
?>
<main>
    <h2>Login de Acesso<h2>

            <?php

            $mensagem = array(
                1=> 'Usuário ou senha invalidos!',
                2=> 'Você precisa ter um usuário válido para acessar!',
                3=> 'Você saiu, volte sempre!'
            );
            

            if( isset($_GET['msg']) || is_numeric($_GET['msg']) ){

                $cod = $_GET['msg'];
            ?>
            <h3><?php echo $mensagem[$cod]; ?></h3>
            <?php
            }
            ?>

            <form action="login-processa-php" method="post">
                <input type="hidden" value="login" name="acao"><br>
                <label for="email">E-mail:</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="senha">Senha:</label><br>
                <input type="password" id="senha" name="senha"><br>
                <hr>
                <input type="submit" value="Login">
            </form>
</main>
<?php

include_once '.footer.php';
?>