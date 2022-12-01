<?php
session_start();
include 'fonksiyon/helper.php';

$user = [
    'elifozkan' => '123456',
    'admin' => '987654',
];

if (get('islem') == 'giris'){
    $_SESSION['username'] = post('username');
    $_SESSION['password'] = post('password');

    if (!post('username')){
        $_SESSION['error'] = 'Lütfen kullanıcı adınızı giriniz';
        header('Location:login.php');
        exit();
    } elseif (!post('password')){
        $_SESSION['error'] = 'Lütfen şifrenizi giriniz';
        header('Location:login.php');
        exit();
    } else {
        if (array_key_exists(post('username'), $user)){
            if ($user[post('username')] == post('password')) {

            } else {
                $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı.';
                header('Location:login.php');
                exit();
            }
        } else {
            $_SESSION['error'] = 'Kayıtlı kullanıcı bulunamadı.';
            header('Location:login.php');
            exit();
        }
    }
}

?>

