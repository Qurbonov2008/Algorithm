<?php

// Dasturni ishga tushurush uchun terminlani ochib php tarmoqlanuvchi.php deb yozing


// a,b va c sonlari belrilgan ularni max sonini toping

/*
1 - a,b,va c sonlarni kiritish
2 - a>b sonini tekshirish agar a b dan katta bo'lsa //// agar b soni a sonidan katta bo'lsa A variyantda ko'rsatilgan
A. 
1. b>c agar b soni c sonidan katta bo'lsa //// agar c soni b sonidan katta bo'lsa B variyanta turibdi
2. max son b
B.
1. c>a agar c soni a sonidan katta bo'lsa //// agar a soni katta bo'ladigo bo'lsa C variyanta turibdi
2. max son c
C.
1. max son a
3 - a>c sonini tekshirish agar a soni c sonidan katta bo'lsa
4 - max son a
*/

$a = 42;
$b = 333;
$c = 6;

if ($a > $b) {
    if ($a > $c) {
        echo "max son $a";
    } elseif ($c > $b) {
        echo "max son $c";
    } else {
        echo "max son $b";
    }
} elseif ($b > $c) {
    echo "max son $b";
} elseif ($c > $a) {
    echo "max son $c";
}
// misolimiz o'z nixoyasiga yeti a,b,c o'zgaruvchilar soni o'rniga istalgan soningizni qo'yib ko'ring
