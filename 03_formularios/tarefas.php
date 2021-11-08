<?php
  session_start();
  
  include("../include/funcoes.php");
  
  if (isset($_GET["nome"]) && $_GET["nome"] != "")
  {
    $arrListaTarefa = [];
    
    $arrListaTarefa["nome"] = $_GET["nome"];
    
    if (isset($_GET["descricao"]))
      $arrListaTarefa["descricao"] = $_GET["descricao"];
    else
      $arrListaTarefa["descricao"] = "";
  
    if (isset($_GET["prazo"]))
      $arrListaTarefa["prazo"] = $_GET["prazo"];
    else
      $arrListaTarefa["prazo"] = "";
    
    $arrListaTarefa["prioridade"] = $_GET["prioridade"];
  
    if (isset($_GET["concluida"]))
      $arrListaTarefa["concluida"] = $_GET["concluida"];
    else
      $arrListaTarefa["concluida"] = "Não";
    
    $_SESSION["arrListaTarefas"][] = $arrListaTarefa;
  }
  
  if (array_key_exists("arrListaTarefas", $_SESSION))
    $arrListaTarefa = $_SESSION["arrListaTarefas"];
  else
    $arrListaTarefa = [];
  
  include("template.php");