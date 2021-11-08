<?php
  if (isset($arrListaTarefa))
  {
    
    echo "<tr>
                  <th>Tarefas</th>
                  <th>Descricao</th>
                  <th>Prazo</th>
                  <th>Prioridade</th>
                  <th>Concluída</th>
                </tr>";
    
    foreach ($arrListaTarefa as $tarefa)
      echo "<tr>
                    <td>{$tarefa["nome"]}</td>
                    <td>{$tarefa["descricao"]}</td>
                    <td style='text-align: center'>{$tarefa["prazo"]}</td>
                    <td style='text-align: center'>{$tarefa["prioridade"]}</td>
                    <td style='text-align: center'>{$tarefa["concluida"]}</td>
                  </tr>";
  }
?>
</table>
</body>
</html>