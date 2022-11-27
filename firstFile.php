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
	<div class="w3-container w3-theme-d4" style="text-align:center">
<h1>ELİF</h1>
<?php echo "komut 1"; ?>
<h1>Başlık 1</h1>
<?php echo "<P>Elif Özkan Elif Özkan Elif Özkan Elif Özkan Elif Özkan Elif Özkan </P>"; ?>
<?= "Son Komut!" ?>
<!-- <script>alert('<?= "Ben bir java koduyum " ?>')</script> -->
<hr>
<h1>DEĞİŞKENLER</h1>
<?=
$isim = "Şahin ERSEVER";
echo "Benim adım $isim";
?>
<hr>
<h1>SABİTLER</h1>
<?=
define("SABIT_ADI", "TUTULACAK_DEGER");
echo SABIT_ADI;
?>
<hr>

<h1>Veri Türleri</h1>
<?=
$a = "true";
$b = 2.3;
$b = -2;
$c = "Seni kendime sakladım";
echo "<br> $a --- ";
echo gettype($a);
echo "<br> $b --- ";
echo gettype($b);
echo "<br> $b --- 2.b type ---";
echo gettype($b);
echo "<br> $c --- ";
echo gettype($c);
?>
<hr>
<?php
echo "Toplama 8+5 : ";
echo 8 + 5;
?> 


<hr>
<?php
$a = 3;
$b = 4;
$c = true;
var_dump($a);
var_dump($c);
echo $a == $b; // Sonuç: false
echo " ";
echo $a === $b; // Sonuç: false
echo " ";
echo $a != $b; // Sonuç: true
echo " ";
echo $a !== $b; // Sonuç: true
echo " ";
echo $a < $b; // Sonuç: true
echo " ";
echo $a > $b; // Sonuç: false
echo " ";
echo $a <= $b; // Sonuç: true
echo " ";
echo $a >= $b; // Sonuç: false
echo " ";
echo $a <=> $b;

// Sonuç: -1
?>

<hr>
<div style="text-align:left">
<?php
$bir = ["elif", "özkan"];
$iki = ["elma", "armut"];
echo "<pre>";
print_r($bir);
echo "<br>--------------------------------------------------------------<br>";
echo "ikinci meyve: ";
echo $iki[1];
echo "<br>--------------------------------------------------------------<br>";
$kisi = [
  "isim" => "Şahin",
  "soyisim" => "ERSEVER",
  "dogumtarihi" => "10.01.1993",
];
print_r($kisi);
echo "<br>--------------------------------------------------------------<br>";
echo "Merhaba benim adım " .
  $kisi["isim"] .
  " " .
  $kisi["soyisim"] .
  "  Doğum tarihim " .
  $kisi["dogumtarihi"];
echo "<br>--------------------------------------------------------------<br>";
$hayvanlar = ["kedi", "köpek", "tavşan"];
echo "$hayvanlar[0]<br>";
echo "$hayvanlar[1]<br>";
echo $hayvanlar[2];
echo "<br>--------------------------------------------------------------<br>";
$hayvan_gruplari = [
  "surungen_hayvanlar" => [
    "Yılan",
    "Kertenkele" => ["keler", "bukalemun", "geko", "agama"],
  ],
  "ucabilen_hayvanlar" => ["Kartal", "Güvercin", "Şahin"],
];
echo $hayvan_gruplari["surungen_hayvanlar"]["Kertenkele"][1];
echo "<br>--------------------------------------------------------------<br>";
$kisiler = [
  ["id" => 1, "isim" => "Şahin"],
  ["id" => 2, "isim" => "Fatma"],
  ["id" => 3, "isim" => "Burak"],
  ["id" => 4, "isim" => "Eslem"],
  ["id" => 5, "isim" => "Sabah"],
];
foreach ($kisiler as $value) {
  if ($value["id"] < 6 && $value["id"] > 2) {
    echo $value["isim"] . "<br/>";
  }
}
?> 
</div>

<hr>
<h1>Fonksiyonlar</h1>

<?php
function topla($sayi1, $sayi2 = 30)
{
  return $sayi1 + $sayi2;
}
echo "topla(10, 20)= " . topla(10, 20) . "<br>";

echo "topla(10)= " . topla(10);
echo "<br>--------------------------------------------------------------<br>";
$islem["topla"] = function ($num1, $num2) {
  echo $num1 + $num2 . "<br>";
};
$islem["cikar"] = function ($num1, $num2) {
  echo $num1 - $num2 . "<br>";
};
$islem["bol"] = function ($num1, $num2) {
  echo $num1 / $num2 . "<br>";
};
$islem["carp"] = function ($num1, $num2) {
  echo $num1 * $num2 . "<br>";
};
$islem["topla"](10, 5);
$islem["cikar"](10, 5);
$islem["bol"](10, 5);
$islem["carp"](10, 5);
?> 

<hr>
<div style="text-align:left">
<h1>Recursive Fonksiyonlar</h1>
<?php
$categories = [
  ["id" => 1, "parent" => 0, "name" => "Back-end Teknolojileri"],
  ["id" => 2, "parent" => 0, "name" => "Front-End Teknolojileri"],
  ["id" => 3, "parent" => 0, "name" => "Mobil Uygulama"],
  ["id" => 4, "parent" => 1, "name" => "PHP"],
  ["id" => 5, "parent" => 1, "name" => "NodeJS"],
  ["id" => 6, "parent" => 4, "name" => "Laravel"],
  ["id" => 7, "parent" => 4, "name" => "Codeigniter"],
  ["id" => 8, "parent" => 2, "name" => "Javascript"],
  ["id" => 9, "parent" => 8, "name" => "VueJS"],
  ["id" => 10, "parent" => 8, "name" => "AngularJS"],
  ["id" => 11, "parent" => 3, "name" => "IOS"],
  ["id" => 12, "parent" => 3, "name" => "Android"],
  ["id" => 13, "parent" => 11, "name" => "Swift"],
  ["id" => 14, "parent" => 12, "name" => "Kotlin"],
  ["id" => 15, "parent" => 12, "name" => "Java"],
  ["id" => 16, "parent" => 12, "name" => "Flutter"],
  ["id" => 17, "parent" => 12, "name" => "React Native"],
  ["id" => 18, "parent" => 11, "name" => "Flutter"],
  ["id" => 19, "parent" => 11, "name" => "React Native"],
];
function categoryList(array $categories, int $parent = 0): string
{
  $html = "<ul>";
  foreach ($categories as $category) {
    if ($category["parent"] == $parent):
      $html .= "<li>" . $category["name"];
      $html .= categoryList($categories, $category["id"]);
      $html .= "</li>";
    endif;
  }
  $html .= "</ul>";
  return $html;
}
echo categoryList($categories);
?>
</div>

</div>

<footer style="text-align:center">Elif Özkan -- PHP Çalışması</footer>
</body>
</html>

