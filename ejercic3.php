<?php
$numero=8.0;
echo "Divisores del numero ".$numero."; ";
for($i=1;$i<=$numero;$i++){
    $residuo=$numero % $i;
    if ($residuo==0)
    {
        echo"[ ".$i."] ";
    }

}


?>