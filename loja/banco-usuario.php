<?php
require_once("conecta.php");
  function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = Md5($senha); //pegando a senha criptografada. php ja tem essa funcao do Md5
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuarios where email = '{$email}'and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
  };
 ?>
