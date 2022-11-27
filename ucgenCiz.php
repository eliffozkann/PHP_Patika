<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-light-blue.css">
	<style>
footer {
  text-align: center;
  padding: 30px;
  background-color: #483D8B;
  color: white;
  display: block;
}
</style>
</head>
<body>
<div class="w3-container w3-theme-d4">

<h1>0 İle Üçgen Oluşturma</h1>
<?php 

function ucgen($say){   
      for($i=0;$i<=$say;$i++){    
        $j=0; 
          while($j<=$i){
             $j++;
            echo $j*0 ;  
          }
          echo   "<br>"; 
   }
}

function ucgen2($sayi){   
  for($i=0;$i<=$sayi;$i++){
  for($j=0;$j<=$i;$j++){
    echo $j*0;
  }
  echo   "<br>"; 
}
echo   "<hr>";
function f($sayi)
{
    $sayi2 = 2;
    $total = 1;
    for ($i = 1; $i <= $sayi; $sayi--) {
        $total *= $sayi;
    }
    return $total;
}

echo f(3) * f(2);
} 

echo "<h2>For - While İle</h2>";
ucgen(15);
echo   "<hr>";
echo "<h2>For - For İle</h2>";
ucgen2(15);


?>

</div>

<footer style="text-align:center">Elif Özkan -- PHP Çalışması</footer>
</body>
</html>
