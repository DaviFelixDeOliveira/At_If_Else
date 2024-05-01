<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Média</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../imc/style.css">
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
        <p id="title2"><big><big><big>Resultado</big></big></big></p>
      </div>
    </div>
  </div>
  <div class="code-container">
    <textarea readonly="" name="code" id="code" class="area">

<?php
$nt1 =  $_POST['nota1'];
$nt2 = $_POST['nota2'];
$nt3 = $_POST['nota3'];

$media = ($nt1 + $nt2 + $nt3)/3;

if ($media < 7 ) {
    echo "burro com $media de média";
}

elseif ($media >7) {
    echo "boa, passo com $media de média 👍";
}
?>

</textarea>
  </div>
</div>
