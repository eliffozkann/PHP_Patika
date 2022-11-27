<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
</head>
<body>

<div class="w3-container w3-flat-peter-river">
<pre>
print_r(); ==> Bir değişkenin veya dizinin gösterimini ekrana basar.
var_dump(); ==> Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.
explode(); ==> Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
implode(); ==> Dizi elemanlarını birleştirip bir dizge elde eder.
count(); ==> Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.
is_array(); ==> Değişkenin bir dizi içerip içermediğine bakar

shuffle(); ==> Bir diziyi karıştırır.
array_combine(); ==> Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
array_count_values(); ==> Bir dizideki tüm değerleri sayar.
array_flip(); ==> Bir dizideki anahtarlarla değerleri yer değiştirir.
array_key_exists(); ==> Belirtilen anahtar veya indis dizide var mı diye bakar.
array_map(); ==> Belirtilen dizilerin elemanlarını geriçağırım işlevini uygular.,
array_filter(); ==> Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.
array_rand(); ==> Bir diziden belli sayıda rasgele anahtar döndürür.
array_merge(); ==> Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.
array_reverse(); ==> Diziyi tersine sıralayıp döndürür.
array_search(); ==> Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.

in_array(); ==> Bir dizide bir değerin varlığını araştırır.
array_shift(); ==> Dizini başlangıcından bir eleman çıkarır.
array_pop(); ==> Dizinin sonundaki elemanı diziden çıkartır.
array_slice(); ==> Bir dizinin belli bir bölümünü döndürür
array_sum(); ==> Bir dizideki değerlerin toplamını hesaplar.
array_product(); ==> Bir dizideki değerlerin çarpımını bulur.
array_unique(); ==> iziden yinelenen değerleri siler.
array_values(); ==> Bir dizinin tüm değerlerini döndürür.
array_push(); ==> Belli sayıda elemanı dizinin sonuna ekler.
array_unshift(); ==> Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
array_keys(); ==> Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.


current(); ==> Bir dizideki geçerli öğeyi döndür
end(); ==> Bir dizinin dahili işaretçisini son elemanına ayarlar
next(); ==> Bir dizinin dahili işaretçisini ilerletir
prev(); ==> Dahili dizi işaretçisini geri alır.
reset(); ==> Bir dizinin dahili göstericisini ilk elemana konumlar.
extract(); ==> Bir dizideki değişkenleri simge tablosuna dahil eder
asort(); ==> Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
arsort(); ==> Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
ksort(); ==> Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
krsort(); ==> Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
</pre>
</div>

<div class="w3-container w3-flat-concrete">

<h1>Dizi Fonksiyonları - 1</h1>
<?php 
$arr = [1,2,3,4,5,6,7,8,9];

echo "arr = [1,2,3,4,5,6,7,8,9]; <br><br><br>";
echo "<pre>"; //arrayi düzgün şekilde yansıtır
echo "print_r(arr); ==> <br>";
print_r($arr);

echo "------------------------------------------------------------------------------------------ <br>";
echo "var_dump(arr); ==> <br>";
var_dump($arr);

echo "------------------------------------------------------------------------------------------ <br>";
echo "dizge = implode('=^^', arr); ==> <br>";
$dizge = implode('=^^',$arr); 
//virgülün solundaki dize elemanları arasına ne konulalcağını belirler
//virgülün sağı ise hangi dize elemanlarını birleştireceğini belirler
print_r($dizge);

echo "<br>------------------------------------------------------------------------------------------ <br>";
echo "newArr = explode('=^^',dizge); ==> <br>";
$newArr = explode('=^^',$dizge); 
//virgülün solundaki dize elemanları arasında ne silineceğini belirler
//virgülün sağı ise hangi dize elemanlarını kullanacağını belirler
print_r($newArr);

echo "<br>------------------------------------------------------------------------------------------ <br>";
echo "echo count(arr); ==> ";
echo count($arr); // arrayin sayısını söyler

echo "<br>------------------------------------------------------------------------------------------ <br>";
echo "echo is_array(arr); ==> ";
echo is_array($arr); // array olup olmadığıdır. 1 true, 0 false ama ekrana 0 yadırmaz. true olunca yazdırır
?>

<hr>
<h1>Dizi Fonksiyonları - 2</h1>
<?php 
echo "<pre>";
$sayilar = range(1, 20); // başlangıç sayısı(1) ve bitiş sayısı(20) ve 3. olarak artış sayısı girilir ve dizi oluşturur
shuffle($sayilar); //diziyi karıştırmaya yarar
print_r($sayilar);
echo "<br>++++++++++++++++++++++++++++++++++++++++++++++++++++++ <br>";
foreach ($sayilar as $sayi) {
    echo "$sayi ";
}

echo "<br><br><br>-------------------------array_combine----------------------------------------------------------------- <br>";
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b); // s dizi sini key, b dizisini value kabul edip bunlaro tek array de birleştirir

print_r($c);


echo "<br><br>-------------------------array_count_values----------------------------------------------------------------- <br>";
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array)); // hangi value den kaç tane var onu yazar


echo "<br><br>-------------------------array_flip----------------------------------------------------------------- <br>";
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);  // dizi deki key ve value değerlerini yer değiştirir
print_r($flipped);


echo "<br><br>-------------------------array_key_exists----------------------------------------------------------------- <br>";
$dizi = array('ilk' => 1, 'ikinci' => 4);
if (array_key_exists('ilk', $dizi)) { // belirtilen anahtar ve indis var mı diye kontrol eder.
    echo "'ilk' elememanı dizide mevcut";
}


echo "<br><br>-------------------------array_map----------------------------------------------------------------- <br>";
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a); // a arrayinin hepsini teker teker dönerek bunları cube fonksiyonunda kullanılır
print_r($b);

echo "<br><br>-------------------------array_filter----------------------------------------------------------------- <br>";
$sayilar2 = range (1, 10);
$sayilar3 = range(1,10);

$cift = array_filter($sayilar2, function($e){
return $e % 2 == 0 ? $e : false;
});

$tek = array_filter($sayilar3, function($e){
    return $e % 3 == 0 ? $e : false;
});
echo "Çift Sayılar: ";
print_r($cift);

echo "<br><br>-------------------------array_merge----------------------------------------------------------------- <br>";
$arrayy1 = array("color" => "red", 2, 4);
$arrayy2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($arrayy1, $arrayy2); // iki arrayi birleştirdi daha fazla birleştirme de yapabilirdi
print_r($result);


echo "<br><br>-------------------------array_rand----------------------------------------------------------------- <br>";
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2); // virgülün solu dizi tanımı, sağ tarafı ise kaç tane rastgele key döndüreceğinin tanımı
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";


echo "<br><br>-------------------------array_reverse----------------------------------------------------------------- <br>";
$girdi  = array("php", 4.0, array("green", "red"));
$normal = array_reverse($girdi);
$korunan = array_reverse($girdi, true); //Diziyi tersine sıralayıp döndürür.

print_r($girdi);
print_r($normal);
print_r($korunan);


echo "<br><br>-------------------------array_search----------------------------------------------------------------- <br>";
$array5 = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array5); // $key = 2;
print_r($key."<br>");
$key = array_search('red', $array5);   // $key = 1;
print_r($key);


echo "<br><br>-------------------------in_array----------------------------------------------------------------- <br>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) { //Bir dizide bir değerin varlığını araştırır.
    echo "Irix var";
}
if (in_array("mac", $os)) {
    echo "Mac var";
}


echo "<br><br>-------------------------array_shift----------------------------------------------------------------- <br>";
$deste = array("as", "papaz", "kız", "vale");
$kart = array_shift($deste); //dizinin ilk elemanını çıkarır
print_r($deste);


echo "<br><br>-------------------------array_pop----------------------------------------------------------------- <br>";
$depo = array("portakal", "muz", "elma", "ahududu");
$meyve = array_pop($depo); //Dizinin sonundaki elemanı diziden çıkartır.
print_r($depo);


echo "<br><br>-------------------------array_slice----------------------------------------------------------------- <br>";
$inp = array("a", "b", "c", "d", "e");
//Bir dizinin belli bir bölümünü döndürür
$oup = array_slice($inp, 2); 
// ilk parametre dizi, 2. parametre nrden başlayacağı, 3. parametre kaç eleman getireceği
// çıktısı: "c", "d", "e"
$oup = array_slice($inp, -2, 1);  // çıktısı: "d"
$oup = array_slice($inp, 0, 3);   // çıktısı: "a", "b", "c"


echo "<br><br>-------------------------array_sum----------------------------------------------------------------- <br>";
//Bir dizideki değerlerin toplamını hesaplar.
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";


echo "<br><br>-------------------------array_product----------------------------------------------------------------- <br>";
//Bir dizideki değerlerin çarpımını bulur.
$a = array(2, 4, 6, 8);
echo "çarpım(a) = " . array_product($a) . "\n";
echo "çarpım(array()) = " . array_product(array()) . "\n";


echo "<br><br>-------------------------array_unique----------------------------------------------------------------- <br>";
//Diziden yinelenen değerleri siler.
$girdi = array("a" => "yeşil", "kırmızı", "b" => "yeşil", "mavi", "kırmızı");
$sonuç = array_unique($girdi);
print_r($sonuç);


echo "<br><br>-------------------------array_values----------------------------------------------------------------- <br>";
//Bir dizinin tüm değerlerini döndürür.
$dizi = array("beden" => "XL", "renk" => "sarı");
print_r(array_values($dizi));


echo "<br><br>-------------------------array_push----------------------------------------------------------------- <br>";
$küme = array("elma", "armut"); //Belli sayıda elemanı dizinin sonuna ekler.
array_push($küme, "muz", "portakal");
print_r($küme); 

$küme[] = "kabak"; // bu şekilde de son eleman olarak kabak eklendi
// köşeli parantezlerin içine sayı girilirse ilgili indis value si değişir



echo "<br><br>-------------------------array_unshift----------------------------------------------------------------- <br>";
//Bir dizinin başlangıcına bir veya daha fazla eleman ekler.
$liste = array("ayva", "muz");
array_unshift($liste, "elma", "armut");
print_r($liste);


echo "<br><br>-------------------------array_keys----------------------------------------------------------------- <br>";
//Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
print_r(array_keys($array));



echo "<br><br>-------------------------asort----------------------------------------------------------------- <br>";
//Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
// value ları küçükten büyüğe sıralar
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits); 
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

echo "<br><br>-------------------------arsort----------------------------------------------------------------- <br>";
//Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
// value ları büyükten küçüğe sıralar
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


echo "<br><br>-------------------------ksort----------------------------------------------------------------- <br>";
//Bir diziyi key lerine göre küçükten büyüğe doğru sıralar.
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


echo "<br><br>-------------------------krsort----------------------------------------------------------------- <br>";
//Bir diziyi key lerine göre büyükten küçüğe doğru sıralar.
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


?>



</div>
<div class="w3-container w3-metro-dark-blue w3-panel w3-padding-32" style="text-align:center"><footer style="text-align:center"><h3>Elif Özkan -- PHP Çalışması</h3></footer></div>
</body>
</html>



