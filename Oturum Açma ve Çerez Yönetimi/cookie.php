
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>cookie</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">

</head>
<body class="w3-container w3-metro-light-blue">

<div class="w3-panel w3-ios-dark-blue w3-padding-32">
<ul>
    <li>$name : Cookie’nin ismidir. Cookie bu isim üzerine çağırılır.</li>
    <li>$value : Cookie değeridir.</li>
    <li>$time : Tarayıcı üzerinde aktif olacağı saniye cinsinden tutulan cookie süresidir. Bir değer verilmez ise tarayıcı kapandığında cookie silinir, tarayıcı açık kaldığı süre içerisinde aktif olur. Zaman değeri, şu anki zaman + aktif olacağı süre şeklinde verilebilir. (örnek: time() + 60 //60 saniye)</li>
    <li>$path : Sitede hangi dizin içerisinde çalışması gerektiğini belirtir. Bütün sitede aktif olunması istenir ise ” / ” değeri girilir.</li>
    <li>$domain : Cookie’nin çalıştığı site içerisinde hangi alt domain üzerinde çalışacağını belirtir. Yazılmaz ise çalıştığı sitedeki ana domain baz alınır, tüm site üzerinde etkili olur.</li>
    <li>$secure : True olarak aktif edilir ise sadece HTTPS bağlantılarda PHP çerez kullanımı gerçekleşir. Cookie güvenliği arttırma işlemi için kullanılır. Çerez bilgisi sadece https bağlantısı ile alınacağı belirtilir.</li> 
    <li>$http_only : True olarak kullanımı aktif edilir ise cookie sadece sunucu üzerinden erişilebilir olacaktır. Javascript ile tarayıcı üzerinde cookie düzenlenemeyecektir.</li>
</ul>

</div>

<?php
// setcookie('isim','Elif', time() + 100); // 100 sn sonra cookie gider, sayfa yenilenince gidiyor
// echo "<pre>";
// print_r($_COOKIE);
setcookie('renk','#000000', time() + 86400,'/','localhost',false, false); // 100 sn sonra cookie gider, sayfa yenilenince gidiyor
?>

    
</body>
</html>




