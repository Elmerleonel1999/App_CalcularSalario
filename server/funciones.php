<?php

  function getHorasExtras($horas)
  {
    $resultdado = $horas - 44;
    return $resultdado;
  }

  function getSalarioNeto($salarioTotal)
  {
    $resultdado = $salarioTotal / 100 * 10;
    return $resultdado;
  }

?>