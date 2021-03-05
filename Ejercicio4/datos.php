<?php
  if(isset($_POST['cant']) && !empty($_POST['cant'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Lista de Números</title>
</head>

<body>
    <div class="card text-center" style="width: 18rem; margin-left: 38%; margin-top: 5%;">
        <div class="card-header">
            Lista de números
        </div>
        <div class="card-body">
                <div class="mb-3">
                    <?php
                      $num = $_POST['cant'];
                      $listnum = array();
                      $imapres = array();
                      $negativos = array();
                      $pares = array();
                      $ceros = 0;
                      $token = 0;
                      $porcentaje = 0;
                      $menoPar = 0;
                      $mayorPar = 0;
                      for($i = 0; $i <= ($num-1); $i++){
                        $listnum[$i] = $_POST['list'.($i+1)];
                      }
                      $array_count = count($listnum);
                      for($i = 0; $i < $array_count; $i++){
                        //Obtiene cantidad de ceros
                        if($listnum[$i] == 0){
                            $ceros ++;
                        }
                        //Obtiene numeros impares y pares
                        if($listnum[$i] % 2 != 0){
                           $imapres[$i] = $listnum[$i];
                        }elseif($listnum[$i] > 0){
                          $pares[$i] = $listnum[$i];
                          $token ++;
                        }
                        //Obtiene numeros negativos
                        if($listnum[$i] < 0){
                          $negativos[$i] = $listnum[$i];
                        }
                      }
                      //Porcentaje de ceros en la lista
                      echo '<label class="form-label">Porcentaje de ceros ingresado en la lista:</label>';
                      if($array_count > 0){
                      $porcentaje = 100 / $array_count;
                      }else{$porcentaje = 0;}
                      echo '<label class="form-label">'.$porcentaje * $ceros.' %</label><br>';
                      //Promedio numeros impares
                      echo '<label class="form-label">Valor promedio de los números impares en la lista:</label>';
                      $impares_count = count($imapres);
                      if($impares_count > 0){
                      $sumImp = 0;
                      foreach($imapres as $imapres){
                        $sumImp += $imapres;
                      }
                      echo '<label class="form-label">'.round($sumImp / $impares_count,2).'</label><br>';
                    }else{
                      echo '<div class="alert alert-danger" role="alert">No se ingresaron números impares</div>';
                    }
                      //Numeros negativos ordenados descendentes
                      echo '<label class="form-label">Números negtivos ordenados de forma descendente:</label>';
                      rsort($negativos);
                      $negativos_count = count($negativos);
                      if($negativos_count > 0){
                      foreach($negativos as $k=>$v){
                        echo '<label class="form-label"> '.$v; if($k < $negativos_count - 1){echo', </label>';}
                      }
                    }
                      else{ echo '<div class="alert alert-danger" role="alert">No se ingresaron números negativos</div>'; }
                      //Menor y mayor de numeros pares
                      if($token > 0){
                      echo '<br><label class="form-label">Número menor par positivo de la lista:</label><br>';
                      $menor = min($pares);
                      $mayor = max($pares);
                      echo '<label class="form-label">'.$menor.'</label><br>';
                      echo '<label class="form-label">Número mayor par positivo de la lista:</label><br>';
                      echo '<label class="form-label">'.$mayor.'</label><br>';
                      }else{
                        echo '<br><label class="form-label">Número mayor y menor par positivo de la lista:</label><br>';
                        echo '<div class="alert alert-danger" role="alert">No se ingresaron números pares positivos</div>';
                      }
                    ?>
                </div>
            <a class="btn btn-primary" href="Index.html" role="button">Salir</a>
        </div>
    </div>
</body>

</html>

<?php
  }else{
    header('Location:ingreso.php');
  }
?>