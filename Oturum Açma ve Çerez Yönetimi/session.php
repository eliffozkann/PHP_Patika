<?php
session_start(); //tarayıcı kapatlana kadar burada bilgiler tutulur

$_SESSION['kullanici'] = [
    'isim' => 'Elif',
    'soyisim' => 'Özkan',
    'yas' => 23,
    'eposta' => 'elffozkann@gmail.com',
]; //oturum açılınca bu session değeri kullanılıır

