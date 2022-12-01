<?php

session_start(); //önce oturumu açmak lazım ki neyi hangi oturumu sileceğini bilsin
session_destroy(); // oturum silmeye yarar

header('Location: a.php');