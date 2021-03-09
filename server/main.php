<?php
  
  include('./funciones.php');
  
  if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $horas = floatval($_POST['horas']);
    $salarioHora = floatval($_POST['salario']);

    $salarioTotal = 0.0;
    $salarioDescontado = 0.0;
    $salarioNeto = 0.0;

    if($nombre != ""){
      if($horas != 0.0){
        if($salarioHora != 0.0){
          $salarioTotal = SalarioTotal($horas, $salarioHora);
          $salarioDescontado = SalarioDescontado($salarioTotal);
          $salarioNeto = SalarioNeto($salarioTotal, $salarioDescontado);
        }
      }else{

      }
    }
     
  }

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
  </head>
  <body>
  <header class="bg-dark pt-5 pb-5">
    <h1 class="text-white text-center">Aplicacion para calcular sueldo</h1>
  </header>

  
  <main class="row mt-3">
    <div class="col-md-4 mx-auto">
      <div class="alert alert-secondary text-center" role="alert">
        Las horas ingresadas, son horas laboradas en una semana
      </div>
      <table class="table table-bordered ">
      <thead class="bg-dark">
        <tr>
          <th colspan="2" class="text-center text-white">DATOS FINALES</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <th class="text-secondary">NOMBRE DE EMPLEADO</th>
          <td class="text-success"><?php echo $nombre; ?></td>
        </tr>
        <tr>
          <th class="text-secondary">HORAS LABORADAS</th>
          <td class="text-success"><?php echo $horas; ?></td>
        </tr>
        <tr>
          <th class="text-secondary">SALARIO TOTAL</th>
          <td class="text-success"><?php echo $salarioTotal; ?></td>
        </tr>
        <tr>
          <th class="text-secondary">DESCUENTO</th>
          <td class="text-success"><?php echo "10%"; ?></td>
        </tr>
        <tr>
          <th class="text-secondary">TOTAL DESCONTADO</th>
          <td class="text-success"><?php echo $salarioDescontado; ?></td>
        </tr>
        <tr>
          <th class="text-secondary">SALARIO NETO</th>
          <td class="text-success"><?php echo $salarioNeto; ?></td>
        </tr>
      </tbody>
    </table>
    </div>
    
  </main>
  </body>
  </html>

