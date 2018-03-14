<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loja.css">
    <title>Minha loja</title>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Minha Loja</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li><a href="formulario.php">Adicionar Produto</a></li>
            <li><a href="produto-lista.php">Lista de Produtos</a></li>
            <li><a href="contato.php">Contato</a></li>
          </ul>
        </div>


      </div>
    </div>

  <div class="container">
  <div class="principal">
  <?php  mostraAlerta("success");
  mostraAlerta("danger");
  ?>
