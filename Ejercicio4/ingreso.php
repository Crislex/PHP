<?php
  if(isset($_POST['num']) && !empty($_POST['num'])){
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
            <form method="POST" action="datos.php">
                <div class="mb-3">
                    <label class="form-label">Ingrese los números a la lista:</label>
                    <?php
                      $num = $_POST['num'];
                      //Genera inputs hasta la cantidad ingresada por el usuario
                      for($i = 1; $i <= $num; $i++){
                        echo '<input type="number" class="form-control" name="list'.$i.'" placeholder="Número '.$i.'" required><br/>';
                        echo '<input type="hidden" name="cant" value="'.$i.'">';
                      }
                    ?>
                </div>
                <input type="submit" class="btn btn-primary" value="Continuar" />
            </form>
        </div>
    </div>
</body>

</html>

<?php
  }else{
    header('Location:Index.html');
  }
?>