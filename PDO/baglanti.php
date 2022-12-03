<?php



try {

    $host = 'localhost';
    $dbname = 'deneme';
    $username = 'root';
    $password = '';

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", "$username", "$password");

    // $db->query("CREATE TABLE pdoile (
    //     id INT,
    //     test VARCHAR(50),
    //     PRIMARY KEY (id)
    // );");
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db->query('USE your');
    $db->query("SET CHARACTER SET utf8mb4");
    $db->query("SET CHARACTER_SET_CONNECTION=utf8mb4");
    $db->query("SET @@lc_time_names = 'tr_TR'");

} catch ( PDOException $e ){
    print $e->getMessage();
}


//TÜM KULLAINICILARI yada 1 KULLANICI GETİRME
$select = $db -> query('SELECT * FROM users');
$users = $select -> fetchAll(PDO::FETCH_ASSOC);

// $select = $db -> query('SELECT * FROM users WHERE user_id=1');
// $users = $select -> fetch(PDO::FETCH_ASSOC); // sadece 1 tane kullanıcı getirme


echo "<pre>";
print_r($users);


echo "<hr>";
// TEK VERİ EKLEME
$sqlAdd = "INSERT INTO users 
        SET isim = 'Ahmet ERSEVER', eposta = 'ahmet@gmail.com', sehir = 'Antalya', posta_kodu = '07', yas=28 ";
$queryAdd = $db->query($sqlAdd);

if ( $queryAdd){
    echo 'Veri eklendi';
} else {
    echo 'Veri ekleme Başarısız!!';
}


echo "<hr>";
//GÜNCELLEME
$sqlUpdate = "UPDATE users SET isim = 'Elfonsia' WHERE user_id = 1";
$queryUpdate = $db->query($sqlUpdate);

if ( $queryUpdate){
    echo 'Güncelleme Başarılı.';
} else {
    echo 'Güncelleme Başarısız!!';
}


echo "<hr>";
//DELETE
$sqlDelete = "DELETE FROM users WHERE sehir = 'Antalya'";
$queryDelete = $db->query($sqlDelete);

if ( $queryDelete){
    echo 'Silme Başarılı.';
} else {
    echo 'Silme işlemi Başarısız!!';
}


echo "<hr>";
// ÇOKLU VERİ EKLEME
$sqlAdd2 = "INSERT INTO users (isim, eposta, sehir, posta_kodu, yas) 
VALUES 
('Ahmet Çakar', 'acakar@gmail.com', 'Aydın', '9760', '35'), 
('Musa Kalkan', 'musa@gmail.com', 'Balıkesir', '10100', '30'), 
('Mehmet Büyük', 'mBuyuk@gmail.com', 'Bilecik', '11300', '40')";

$queryAdd2 = $db->query($sqlAdd2);

if ( $queryAdd2){
    echo 'Çoklu Veri eklendi';
} else {
    echo 'Çoklu Veri ekleme Başarısız!!';
}


echo "<hr>";
//PREPARE
$queryPrepare = $db->prepare("INSERT INTO users SET
                                isim = ?,
                                eposta = ?,
                                sehir = ?,
                                posta_kodu = ?,
                                yas = ?");
$insertPrepare = $queryPrepare->execute(['Hülya Kara', 'hulya@gmail.com', 'Ankara', '06', '22']);
if ( $queryPrepare){
    echo $db->lastInsertId(); //son eklenenin id si
    echo " <br> Prepare ekleme başarılı";
} else {
    echo " <br> Prepare ekleme BAŞARISIZ!!";
} 
?>

