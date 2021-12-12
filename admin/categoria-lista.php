<?php

include_once '_valida.php';

include_once '../includes/_dados.php';

include_once '_head.php';

$sql = "SELECT * FROM categorias";

$resultado = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($resultado);

include_once '_menu.php';
?>
    <main>
        <h2>Administração das Categorias</h2>
        <a href="categoria-salvar.php">Inserire/a>
        <hr>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            <?php

            if($resultado)

                while ($dado = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $dado['CategorieID'];?></td>
                <td><a href="categoria-salvar.php?acao-solvar&id=<?php echo $dado ['CategoriaID']; ?>"><?php echo $dado ['Nome'];?></a></td>
                <td><a href="categoria-processa.php?acao-excluir&id=<?php echo $dado['CategoriaID']; ?>">Excluir</a></td>
            </tr>
<?php
    }
}else{
?>