<?php
// 2- Masala: To'g'ri to'rtburchakning a va b tomoni berilgan.
// Uning yuzasi S=a*b va perimetri P=2*(a+b) ni aniqlang

/* 
1 = a va b ga qiymat berib olamiz
2 = Uning yuzasini topish
3 = Uning perimetrini topish
4 = Tamom

*/



$a = 5; 
$b = 2;

function YuzasiniTop($a ,$b)
{
 $S=$a*$b;
 echo "To'gri to'rtburchakning yuzasi $S";
}
echo YuzasiniTop($a , $b);
echo "<br>";
function PerimetriniTop($a ,$b)
{
    $P = 2*($a+$b);
    echo $P;
}

echo PerimetriniTop($a , $b); // Javob 14 chiqadi buni bilish uchun sizda php o'rnatilgan bo'lshi kerak va terminalda php index.php deb yozish kerak







?>