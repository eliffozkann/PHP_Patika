<?php

function get($get){
    if(isset($_GET[$get])){
        return trim($_GET[$get]);
    } else{
        return false;
    }
}

function post($post){
    if(isset($POST[$post])){
        return trim($POST[$post]);
    } else{
        return false;
    }
}

function session($session){
    if(isset($_SESSION[$session])){
        return trim($_SESSION[$session]);
    } else{
        return false;
    }
}

?>