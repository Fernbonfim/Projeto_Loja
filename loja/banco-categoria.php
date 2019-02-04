<?php
require_once("conecta.php");
function listaCategorias($conexao){
  $categorias = array(); //criando um array de categorias vazias
  $query = "select * from categorias";
  $resultado = mysqli_query($conexao, $query);
  while($categoria = mysqli_fetch_assoc($resultado)){
    array_push($categorias, $categoria);
  }
  return $categorias;

}

