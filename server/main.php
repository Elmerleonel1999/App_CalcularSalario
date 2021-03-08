<?php
  
  include('./funciones.php');
  
  if(isset($_POST)){
    $nombre = $_POST['nombre'];
    $horas = floatval($_POST['horas']);
    $salarioHoras = floatval($_POST['salario']);

    //  echo 'Nombre: ' . $nombre . '<br/>';
    //  echo 'Horas: ' . $horas . '<br/>';
    //  echo 'Salario: ' . $salarioHoras . '<br/>';

    //  $horasExtras = getHorasExtras($horas); //esto viene del archivo funcinones.php
    //  echo 'Horas Extras: ' . $horasExtras;
     
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
      <table class="table table-bordered ">
      <thead class="bg-dark">
        <tr>
          <th colspan="2" class="text-center text-white">DATOS FINALES</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class=" bg-secondary text-white">Nº</th>
          <td>1</td>
        </tr>
        <tr>
          <th class=" bg-secondary text-white">NOMBRE</th>
          <td>Leonel Marquez</td>
        </tr>
        <tr>
          <th class=" bg-secondary text-white">HORAS LABORADAS</th>
          <td>75</td>
        </tr>
        <tr>
          <th class=" bg-secondary text-white">SALARIO NETO</th>
          <td>$455</td>
        </tr>
      </tbody>
    </table>
    </div>
    
  </main>
  </body>
  </html>

