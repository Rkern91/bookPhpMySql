<?php
  //Na função date(), experimente mudar o Y para y. O que acontece?
  echo "Data: <b>" . date("d/m/y") . "</b>";
  echo "<br>";
  
  //Você consegue exibir a hora no formato de 12 horas, am e pm?
  echo "Horário: <b>" . date("h:i:s a") . "</b>";
  echo "<br>";
  
  //E se você tivesse que exibir o dia da semana? Como faria?
  echo "Dia da Semana: <b>" . date("D") . "</b>";
  echo "<br>";
  
  //Exiba também o nome do mês atual.
  echo "Mês Atual: <b>" . date("F") . "</b>";
  echo "<br>";
  
  //Exiba quantos dias faltam para o próximo sábado.
  