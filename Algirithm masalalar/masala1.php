<?php
/*
 Masala Fizz Bizz 
 Sikl 20 gacha aylanadi agar son 3 ga bo'linsa fizz 5 ga bo'linsa bizz,
agar son 3 ga va 5 ga bo'linadigon bo'lsa Fizz Bizz ekranga chiqarishi kerak

*/


class Solution
{
    public function fizz_bizz($n) {
        // birinchi 3 yoki 5 ga emas 3 bilan 5 ga bo'lib olamiz chunki
        // agar biz birinchi sonni 3 ga bo'ladigon bo'lsak u pastga tushmaydi pastdagi kodni o'qimaydi,
        // 5 ga ham shunaqa agar bu xato deydigon bo'lsangiz o'zingiz kodni izohdan oching va  run qilib ko'ring 
        for($i=1; $i<$n; $i++)
        {
            // if($i % 3==0)
            // {
            //     echo "$i: fizz";
            // }elseif($i % 5==0)
            // {
            //     echo "$i: bizz";
            // }elseif($i%3==0 && $i%5==0)
            // {
            //     echo "$i: fizz bizz";
            // }
            // Bu tepadagi kod ishlaydi faqat xato ishlaydi

            // To'g'ri variyanti esa → pastda
            if($i%3==0 && $i%5==0)
            {
                echo "$i: fizz bizz";
            }elseif($i%3==0)
            {
                echo "$i: fizz";
            }elseif($i%5==0)
            {
                echo "$i: bizz";
            }
        }
    }
}

$n = readline("Son kiriting: ");

$masala1 = new Solution();
$masala1->fizz_bizz($n);