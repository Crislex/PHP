<?php
  if(isset($_POST['num'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <title>Conversor a Binario</title>
</head>
<body>
<div class="card text-center" style="width: 18rem; margin-left: 38%; margin-top: 5%;">
        <div class="card-header">
            Conversor a Binario
        </div>
        <div class="card-body">
                <div class="mb-3">
                  <?php
                  $num = $_POST['num'];
                  //Verifica que el número sea menor a -128 o que sea mayor a 127
                  if($num < -128 || $num > 127){
                    echo'<script language="javascript"> alert("El valor del Byte debe estar entre -128 y 127"); window.location.href="Index.html";</script>';
                  //Verifica que el número sea mayor o igual a cero
                  }elseif($num >= 0){
                    $num2 = $num;
                    $numbi[0] = 0;
                    $numbi[1] = 0;
                    $numbi[2] = 0;
                    $numbi[3] = 0;
                    $numbi[4] = 0;
                    $numbi[5] = 0;
                    $numbi[6] = 0;
                    $numbi[7] = 0;
                    $array_count = count($numbi);
                    //recorre el arreglo y asigna un valor a la posicion que recorre
                    for($i = 0; $i <= $array_count; $i++){
                      $div = $num2 % 2;
                      $num2 = ((int)($num2 / 2));
                      $numbi[$i] = $div;
                    }
                    echo '<label class="form-label">El byte '.$num.' en binario es:</label><br>';
                    echo '<div class="alert alert-dark" role="alert"> '.$numbi[7].$numbi[6].$numbi[5].$numbi[4].'  '.$numbi[3].$numbi[2].$numbi[1].$numbi[0].' </div>';
                  }else{
                    //obtiene el valor absoluto de el número ingresado si es negativo
                    $absnum = abs($num+1);
                    $num2 = $absnum;
                    $numbi[0] = 0;
                    $numbi[1] = 0;
                    $numbi[2] = 0;
                    $numbi[3] = 0;
                    $numbi[4] = 0;
                    $numbi[5] = 0;
                    $numbi[6] = 0;
                    $numbi[7] = 0;
                    $array_count = count($numbi);
                    //recorre el arreglo y asigna un valor a la posicion que recorre
                    for($i = 0; $i <= $array_count; $i++){
                      $div = $num2 % 2;
                      $num2 = ((int)($num2 / 2));
                      $numbi[$i] = $div;
                    }
                    //cambia los valores 0 del arreglo por 1 y los valores 1 por 0
                    for($i = 0; $i <= $array_count; $i++){
                      if($numbi[$i] == 0){
                        $numbi[$i] = 1;
                      }else{
                        $numbi[$i] = 0;
                      }
                    }
                    echo '<label class="form-label">El byte '.$num.' en binario es:</label><br>';
                    echo '<div class="alert alert-dark" role="alert"> '.$numbi[7].$numbi[6].$numbi[5].$numbi[4].'  '.$numbi[3].$numbi[2].$numbi[1].$numbi[0].' </div>';
                  }
                  ?>
                </div>
                <a class="btn btn-primary" href="Index.html" role="button">Calcular de Nuevo</a>
        </div>
    </div>
</body>
</html>
<?php }else{
  header('Location:Index.html');
} 
?>