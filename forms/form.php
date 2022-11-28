<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-ios.css">
</head>
<body>
<div class="w3-container w3-metro-light-blue">


<form action="post.php" method ="post" class="w3-panel w3-ios-blue">
    <h3>POST FORMU</h3>
    <input type="text" name="isim" placeholder="İsim"> <br><br>
    <input type="text" name="soyisim" placeholder="Soyisim"> <br>
<hr>
    <label>Dİller</label><br>
    <input type="checkbox" value="php" name="dil[]" >
    <label>PHP</label><br>
    <input type="checkbox" value="node" name="dil[]" >
    <label>NodeJS</label><br>
    <input type="checkbox" value="js" name="dil[]" >
    <label>JS</label><br>

 
    <button type="submit">Gönder</button>
</form>


<form action="get.php" method ="get" class="w3-panel w3-ios-blue">
    <h3>GET FORMU</h3>
    <input type="text" name="isim" placeholder="İsim"> <br><br>
    <input type="text" name="soyisim" placeholder="Soyisim"> <br>
<hr>
    <label>Dİller</label><br>
    <input type="checkbox" value="php" name="dil[]" >
    <label>PHP</label><br>
    <input type="checkbox" value="node" name="dil[]" >
    <label>NodeJS</label><br>
    <input type="checkbox" value="js" name="dil[]" >
    <label>JS</label><br>


    <button type="submit">Gönder</button>
</form>

<form action="request.php?islem=ekle" method ="post" class="w3-panel w3-ios-blue">
    <h3>REQUEST FORMU</h3>
    <input type="text" name="isim" placeholder="İsim"> <br><br>
    <input type="text" name="soyisim" placeholder="Soyisim"> <br>
<hr>
    <label>Dİller</label><br>
    <input type="checkbox" value="php" name="dil[]" >
    <label>PHP</label><br>
    <input type="checkbox" value="node" name="dil[]" >
    <label>NodeJS</label><br>
    <input type="checkbox" value="js" name="dil[]" >
    <label>JS</label><br>


    <button type="submit">Gönder</button>
</form>


<?php

?>



</div>
<div class="w3-container w3-metro-dark-blue w3-panel w3-padding-32" style="text-align:center"><footer style="text-align:center"><h3>Elif Özkan -- PHP Çalışması</h3></footer></div>
</body>
</html>