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

<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function Function1($array, $value)
{
    $filtered = array_filter($array);
    $random = array_rand($filtered, $value);
    $result = array_map(function ($item) use ($filtered) {
        return $filtered[$item];
    }, $random);
    return $result;
}

echo "<pre>";
print_r(Function1($planets, 2));
print_r(Function1($planets, 3));
print_r(Function1($planets, 2));
print_r(Function1($planets, 4));
print_r(Function1($planets, 5));
?>

</div>

<footer style="text-align:center">Elif Özkan -- PHP Çalışması</footer>
</body>
</html>