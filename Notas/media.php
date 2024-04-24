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