<html>
  <head>
    <meta charset="utf-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
  </head>
  <body>
    <h1>Gerenciador de Tarefas</h1>
    <form>
      <fieldset>
        <legend>Nova tarefa</legend>
        <label>
          Nome:
          <input type="text" name="nome" required/>
        </label>
        <label>
          Dt. Nascimento:
          <input type="date" name="data" required/>
        </label>
        <label>
          Tarefa:
          <input type="text" name="tarefa" required/>
        </label>
        <label>
          Descrição (Opcional):
          <textarea name="descricao"></textarea>
        </label>
        <label>
          Prazo (Opcional):
          <input type="text" name="prazo" />
        </label>
        <fieldset>
          <legend>Prioridade:</legend>
          <label>
            <input type="radio" name="prioridade" value="Baixa" checked />
            Baixa
            <input type="radio" name="prioridade" value="Media" />
            Média
            <input type="radio" name="prioridade" value="Alta" />
            Alta
          </label>
        </fieldset>
        <label>
          Tarefa concluída:
          <input type="radio" name="concluida" value="0" /> Não
          <input type="radio" name="concluida" value="1" /> Sim
          <input type="radio" name="concluida" value="2" checked/> Em Andamento
        </label>
        <input type="submit" value="Cadastrar" />
      </fieldset>
    </form>
    <table>
<?php
  include("sel_lista_tarefas.php");
?>