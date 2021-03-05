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
  <title>Serie Fibonnacci</title>
</head>
<body>
<div class="card text-center" style="width: 18rem; margin-left: 38%; margin-top: 5%;">
        <div class="card-header">
            Serie Fibonacci
        </div>
        <div class="card-body">
                <div class="mb-3">
                  <?php
                  $num = $_POST['num'];
                  $y=2;
                  //Verifica que el numero sea menor o igual a 0
                  if($num <= 0){
                    echo'<script language="javascript"> alert("El número debe ser mayor a 0"); window.location.href="Index.html";</script>';
                  }else{
                    $n1 = 0;
                    $n2 = 1;
                    $n3 = 0;
                    echo '<div class="alert alert-primary" role="alert"> '.$n1.'  '.$n2.' ';
                    //imprime $n3 mientras sea menor a igual al numero ingresado
                    for($i=0; $n3<=($num-$i); $i++){
                      $n3 = $n1 + $n2;
                      $n1 = $n2;
                      $n2 = $n3;
                      echo $n3.' ';
                      $y +=1;
                    }
                    echo '</div><label class="form-label">Los '.$y.' términos de Fibonacci hasta '.$num.'</label>';
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