<?php
function message($str = "")
    {
        echo $str; 
    }
    if (isset($_POST["sayi"])) {
        $number = @$_POST["sayi"];
        if ($number === "") {
            message("Lütfen boş bırakmayın!", "error");
        } else {
            if ($number % 3 === 0) {
                message("${number} sayısı 3 ile tam bölünüyor");
            } else {
                $afterNum = $number;
                $afterNum++;
                while ($afterNum % 3 !== 0) {
                    $afterNum++;
                }
                message("${number} sayısı 3 ile tam bölünmüyor. 3 ile ilk bölünecek sayı: ${afterNum}");
            }
        }
    }

?> 

 Bu sayfayı kullanmama gerek kalmadı. Fonksiyonu html içinde çağırdım ve form inputu içinde fonksiyonu çağırdım. 
 Eğer çağırmasaydım form un action komutuna bu sayfanın yolunu yazmam gerekiyordu.