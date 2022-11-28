<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">

</head>
<body class="w3-container w3-metro-light-blue">

<form action="" method ="post" class="w3-panel w3-ios-blue w3-padding-64">
    <h3>Girilen Sayının 3 İle Bölümünü Hesaplayan Program</h3>
    <input type="text" name="sayi" <?php message()?> placeholder="Bir Sayı Giriniz.."> <br><br>
    
    <button type="submit" >Gönder</button> <br>
</form>


<div class="w3-panel w3-ios-dark-blue w3-padding-32"> 
<?php
function message($str = "")
    {
        echo $str; 
    }
    if (isset($_POST["sayi"])) {
        $number = @$_POST["sayi"];
        if ($number === "") {
            message("Lütfen boş bırakmayın!");
        } else {
            if ($number % 3 === 0) {
                message("${number} sayısı 3 ile tam bölünüyor.");
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
</div>


<div class="w3-container w3-metro-dark-blue w3-panel w3-padding-32" style="text-align:center"><footer style="text-align:center"><h3>Elif Özkan -- PHP Çalışması</h3></footer></div>
</body>
</html>
