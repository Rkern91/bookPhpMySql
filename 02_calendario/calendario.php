<?php
  function linha($semana)
  {
    echo "<tr>";
    
    for ($i = 0; $i <= 6; $i++)
    {
      if (isset($semana[$i]))
      {
        if ($i == 0)
          echo "<td style='color: red'><b>{$semana[$i]}</b></td>";
        elseif ($i == 6)
          echo "<td><b>{$semana[$i]}</b></td>";
        else
          echo "<td>{$semana[$i]}</td>";
      }
      else
        echo "<td></td>";
    }
        
    echo "</tr>";
  };
  
  function calendario()
  {
    $dia    = 1;
    $semana = [];
    
    array_push($semana, "");
    array_push($semana, "");
    
    while($dia <= 31)
    {
      
      
      if (date("d") == $dia)
        array_push($semana, "<b>" . $dia . "</b>");
      else
        array_push($semana, $dia);
      
      if (count($semana) == 7)
      {
        linha($semana);
        $semana = [];
      }
      
      $dia++;
    }
    
    linha($semana);
  };
?>

  <table border='1'>
    <tr>
      <th>Dom</th>
      <th>Seg</th>
      <th>Ter</th>
      <th>Qua</th>
      <th>Qui</th>
      <th>Sex</th>
      <th>Sáb</th>
    </tr>
    <?php calendario() ?>
  </table>
  
  <br>

  <?php
    $hora = date("H:i");
    
    if ($hora >= "13:00" && $hora <= "18:30")
      echo "Boa tarde!";
  
    if ($hora >= "18:31" && $hora <= "23:59")
      echo "Boa Noite!";
  
    if ($hora >= "00:00" && $hora <= "12:59")
      echo "Bom dia!";
  ?>
