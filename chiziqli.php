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


// Kvadratning tomoni a berilgan uning perimetri P=4*a va yuzasi S=a*a Aniqlang

/*
1. Boshlash
2. a o'zgaruvchisiga qiymat berib olamiz
3. Perimetrini topib olish
4. Yuzasini topish
5. stop (Tugatish)
*/
// 1-amal boshladik <?php bu bilan
$a = 5; // 2-amal a ga qiymat berib oldik


function PerimetriniTopish() // 3-amal funksiya yaratdik PerimetriniTopish unda Perimetini topdik
{
    global $a;
    $P = 4*$a;
    echo "To'g'ri to'rtburchakning perimetri $P";
}

echo PerimetriniTopish();

// 4-amal Yuzasini topib olamiz
// bunga ham fuksiya yaratgan qulayroq

function YuzasiniTopish()
{
    global $a;
    $S = $a * $a;
    echo "To'gri to'rtburchakning yuzasi $S";
}

echo YuzasiniTopish();


//    Chiziqli algorithmlarga tushundingiz deb umid qilaman



?>