<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<div class="card">
  <div class="header">
    <div class="top">
      <div class="circle">
        <span class="red circle2"></span>
      </div>
      <div class="circle">
        <span class="yellow circle2"></span>
      </div>
      <div class="circle">
        <span class="green circle2"></span>
      </div>
      <div class="title">
        <p id="title2">Resultado</p>
      </div>
    </div>
  </div>
  <div class="code-container">
    <textarea readonly="" name="code" id="code" class="area">

<?php
$peso =  $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso / ($altura * $altura);


if ($imc < 18.5) {
    echo "Você está com o seu peso abaixo do normal";
}

elseif ($imc >= 18.5 && $imc <=24.9) {
    echo "Seu peso está Normal";
}

elseif ($imc >= 25.0 && $imc <=29.9) {
    echo"Você está com excesso de Peso";
}

elseif ($imc >= 30.0 && $imc <=34.9) {
    echo" Você tem obesidade de Classe I";
}

elseif ($imc >= 35.0 && $imc <= 39.9) {
    echo"Você tem obesidade de Classe II";
}

elseif ($imc >= 40) {
    echo"Você tem obesidade de Classe III";
}
?>

</textarea
    >
  </div>
</div>

</body>
</html>