'<?php
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







?>'