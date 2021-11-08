<?php
  session_start();
  
  include("../include/funcoes.php");
  
  if (isset($_GET["nome"]) && $_GET["nome"] != "")
  {
    $arrListaTarefa = [];
    $idExisteTarefa = false;
    
    if (isset($_SESSION["arrListaTarefas"]))
    {
      foreach ($_SESSION["arrListaTarefas"] as $itemTarefa)
        if ($_GET["nome"] == $itemTarefa["nome"])
          $idExisteTarefa = true;
    }
    
    if (!$idExisteTarefa)
    {
      $dataFormatado            = new DateTime($_GET["data"]);
      $arrListaTarefa["nome"]   = $_GET["nome"];
      $arrListaTarefa["data"]   = $dataFormatado->format("d/m/Y");
      $arrListaTarefa["tarefa"] = $_GET["tarefa"];

      if (isset($_GET["descricao"]))
        $arrListaTarefa["descricao"] = $_GET["descricao"];
      else
        $arrListaTarefa["descricao"] = "";
  
      if (isset($_GET["prazo"]))
        $arrListaTarefa["prazo"] = $_GET["prazo"];
      else
        $arrListaTarefa["prazo"] = "";
  
      $arrListaTarefa["prioridade"] = $_GET["prioridade"];
  
      switch ($_GET["concluida"])
      {
        CASE 0:
          $arrListaTarefa["concluida"] = "Não";
        break;
        CASE 1:
          $arrListaTarefa["concluida"] = "Sim";
        break;
        CASE 2:
          $arrListaTarefa["concluida"] = "Em Andamento";
        break;
      }
      
      $_SESSION["arrListaTarefas"][] = $arrListaTarefa;
    }
  }
  
  if (array_key_exists("arrListaTarefas", $_SESSION))
    $arrListaTarefa = $_SESSION["arrListaTarefas"];
  else
    $arrListaTarefa = [];
  
  include("template.php");