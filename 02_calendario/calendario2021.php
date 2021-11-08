<?php
  include("../include/funcoes.php");
  
  /**
   * Função que recebe por parâmetro o número de um mês do ano,
   * monta uma data e devolve um array com informações gerais do mês.
   * @param $mesAtual - Inteiro representando os meses do ano de 01 a 12.
   * @return array
   */
  function montarDataMes($mesAtual)
  {
    $dataMkTime = mktime(false, false, false, $mesAtual, 01, 2021);
    
    $nrDiasMes   = date("t", $dataMkTime);
    $dsMes       = date("F", $dataMkTime);
    $dsDiaSemana = date("l", $dataMkTime);
    $nrDiaSemana = date("w", $dataMkTime);
    
    return [
      "nrDiaMes"    => $nrDiasMes,
      "dsMes"       => $dsMes,
      "dsDiaSemana" => $dsDiaSemana,
      "nrDiaSemana" => $nrDiaSemana,
    ];
  }
  
  /**
   * Retorna a linha com a descrição dos dias da semana.
   * @return string
   */
  function cabecalhoDiasSemana()
  {
    return "<tr>
              <th>Dom</th>
              <th>Seg</th>
              <th>Ter</th>
              <th>Qua</th>
              <th>Qui</th>
              <th>Sex</th>
              <th>Sáb</th>
            </tr>";
  }
  
  /**
   * Monta e retorna as linhas dos dias da semana.
   * @param $linhaDiasSemana
   * @return string
   */
  function montarLinhas($linhaDiasSemana)
  {
    $linha = "<tr>";
    
    for ($i = 0; $i <= 6; $i++)
    {
      if (isset($linhaDiasSemana[$i]))
        $linha .= "<td>$linhaDiasSemana[$i]</td>";
    }
    
    $linha .= "</tr>";
    
    return $linha;
  }
  
  /**
   * Monta o calendário do mês atual.
   * @param $arrDadosMes
   * @return string
   */
  function montarTabela($arrDadosMes)
  {
    $dsDias       = cabecalhoDiasSemana();
    $rmInicioSemana = false;
    $diaMes       = 1;
    $semana       = [];
    $linhas       = "";
    
    while($diaMes <= $arrDadosMes["nrDiaMes"])
    {
      if (!$rmInicioSemana)
      {
        for ($i = 0; $i < $arrDadosMes["nrDiaSemana"]; $i++)
          array_push($semana, "");
        
        $rmInicioSemana = true;
      }
      
      array_push($semana, $diaMes);
  
      if ($diaMes == $arrDadosMes["nrDiaMes"])
      {
        while(count($semana) < 7)
          array_push($semana, "");
      }
  
      if (count($semana) == 7)
      {
        $linhas .= montarLinhas($semana);
        $semana = [];
      }
      
      $diaMes++;
    }
    
    return "<table border='2'>
              {$dsDias}
              {$linhas}
            </table>";
  }
  
  for ($nrMesAtual = 01; $nrMesAtual <= 12; $nrMesAtual++)
  {
    $arrDadosMes = montarDataMes($nrMesAtual);
    $mesAtual    = $arrDadosMes["dsMes"];

    echo "<b>{$mesAtual}</b>";
    echo montarTabela($arrDadosMes);
    echo "<br>";
  }
?>


