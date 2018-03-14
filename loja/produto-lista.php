<?php
require_once("cabecalho.php");
require_once("banco-produto.php");

?>
<table class="table table-striped table-bordered">
  <?php
    $produtos = listaProdutos($conexao);  //exibe os produtos na tela
    foreach ($produtos as $produto) :
  ?>
    <tr>
      <td><?php echo $produto['nome']?></td>
      <td><?php echo $produto['preco']?></td>
      <td><?php echo substr($produto['descricao'], 0, 40)?></td> <!--mostrando somente os 15 primeiro caracteres-->
      <td><?php echo $produto['categoria_nome']?></td>
      <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>" >Alterar</td>
      <td>
      <form action="remove-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <button class="btn btn-danger">Remover</button>
      </form>
      </td>
    </tr>
  <?php
    endforeach
   ?>

</table>

<?php include ("rodape.php");
