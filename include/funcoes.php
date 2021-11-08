<?php
  /**
   * Recebe uma variável por parâmetro e imprime
   * com uma estrutura de leitura amigável.
   * @param $param
   */
  function ppr($param)
  {
    echo "<pre>";
    print_r($param);
    echo "</pre>";
  }
  
  /**
   * Retorna <b>TRUE</b> se for um  valor válido.
   * Usado para verificar campos ou arrays enviados.
   * @param $value - Array / Campo
   * @return bool
   */
  function str_value($value)
  {
    return ($value !== '' && $value !== null && $value !== false);
  }