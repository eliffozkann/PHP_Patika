<?php

session_start();

if(isset($_SESSION['kullanici']['isim'])){
    echo 'Merhaba ' . $_SESSION['kullanici']['isim'] . 'hoş geldiniz';
    echo "<pre>";
    print_r($_SESSION);
} else {
    echo 'Lütfen oturum açınız';
}


