<?php
  if (isset($arrListaTarefa))
  {
    
    echo "<tr>
                  <th>Nome</th>
                  <th>Dt. Nascimento</th>
                  <th>Tarefas</th>
                  <th>Descricao</th>
                  <th>Prazo</th>
                  <th>Prioridade</th>
                  <th>Concluída</th>
                </tr>";
    
    foreach ($arrListaTarefa as $tarefa)
    {
      echo "<tr>
              <td>{$tarefa["nome"]}</td>
              <td style='text-align: center'>{$tarefa["data"]}</td>
              <td style='text-align: left'>{$tarefa["tarefa"]}</td>
              <td style='text-align: left'>{$tarefa["descricao"]}</td>
              <td style='text-align: center'>{$tarefa["prazo"]}</td>
              <td style='text-align: center'>{$tarefa["prioridade"]}</td>
              <td style='text-align: center'>{$tarefa["concluida"]}</td>
            </tr>";
    }
  }
?>
</table>
</body>
</html>