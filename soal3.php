<?php 
function acakString($panjang){
    $karakter = 'da2c312dfe804ef5bd318133a342251a79n89a9mdfe804ef5b18133a342251o';
    $string = '';

    for ($i=0; $i < $panjang ; $i++) { 
       $random = rand(0, strlen($karakter)-1);
       $string .= $karakter{$random};
    }
    return $string;
}

echo acakString(32);

?>