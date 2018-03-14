<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id); //fazendo a busca do produto nessa funcao e atribuindo ela a var produto
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
    <h1>Alterar produto</h1>
    <form class="" action="altera-produto.php" method="POST">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
      <table class="table">
        <?php include ("formulario-base.php"); ?>

        <tr>
          <td><button class="btn btn-primary" type="submit" name="button">Alterar</button></td>
        </tr>
      </table>

    </form>
  <?php include("rodape.php") ?>
