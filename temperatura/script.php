<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Temperatura</title>
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
 $temperatura = $_POST['temperatura'];
 

if ($temperatura < 0) {
    echo "sinto muito frio, meu coração congelou 🥶";
}

elseif ($temperatura >=0 && $temperatura <15) {
    echo "ainda sinto muito frio, meu coração congelou um pouco 🧊";
}

elseif ($temperatura >= 15 && $temperatura < 25) {
    echo "ainda sinto um pouco de  frio, meu coração está gelado mas não congelado ❄";
}

elseif ($temperatura > 25) {
    echo "não sinto muito frio, meu coração está quente ♨";
}
?>
</textarea>
  </div>
</div>

<button class="btn"> <a href="index.html">voltar</a></button>



<style>
    .btn {
     position: absolute;
     font-size: 17px;
     text-transform: uppercase;
     text-decoration: none;
     padding: 1em 2.5em;
     display: inline-block;
     border-radius: 6em;
     transition: all .2s;
     border: none;
     font-family: inherit;
     font-weight: 500;
     color: white;
     background-color: red;
     right: 900px;
     top: 200px;
     cursor: pointer;
    }
    
    .btn:hover {
     transform: translateY(-3px);
     box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    .btn:active {
     transform: translateY(-1px);
     box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
    
    .btn::after {
        text-decoration: none;
     content: "";
     display: inline-block;
     height: 100%;
     width: 100%;
     border-radius: 100px;
     position: absolute;
     top: 0;
     left: 0;
     z-index: -1;
     transition: all .4s;
    }
    
    .btn::after {
     background-color: red;
    }
    
    .btn:hover::after {
     transform: scaleX(1.4) scaleY(1.6);
     opacity: 0;
    }
</style>

</body>
</html>