<?php
require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
verificaUsuario();

$categorias = listaCategorias($conexao);
?>
    <h1>Formulário de produto</h1>
    <form class="" action="adiciona-produto.php" method="POST">
      <table class="table">
        <?php include ("formulario-base.php"); ?>

        <tr>
          <td><button class="btn btn-primary" type="submit" name="button">Cadastrar</button></td>
        </tr>
      </table>

    </form>
  <?php include("rodape.php") ?>
