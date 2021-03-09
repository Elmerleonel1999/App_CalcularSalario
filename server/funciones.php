<?php



  function SalarioDescontado($salarioTotal)
  {
    $resultdado = $salarioTotal / 100 * 10;
    return $resultdado;
  }

  function SalarioTotal($horas, $salarioHora)
  {
    $total = 0.0;
    if($horas > 44){
      $extras = $horas - 44;
      $normales = 44;
      $totalExtras = $extras * ($salarioHora / 100 * 50);
      $totalNormales = $normales * $salarioHora;
      $total = $totalExtras + $totalNormales;
    }
    if($horas <= 44){
      $total  = $horas * $salarioHora;
    }
    return $total;
  }

  function SalarioNeto($salarioTotal, $SalarioDescontado){
    $salarioNeto = $salarioTotal - $SalarioDescontado;
    return $salarioNeto;
  }



?>