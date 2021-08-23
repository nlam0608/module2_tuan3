<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <textarea name="nhapso" placeholder="Nhap so"></textarea>
    <input type="submit" value="submit">
</form>

<?php
$Viettel = [];
$Mobifone = [];
$Vinaphone = [];
$notremember = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textarea = $_POST["nhapso"];
}
    $array = explode(",",$textarea);

    $i = 0;
    while ( $i <= count($array) ) {
        if ($array[$i] >= 970000000 && $array[$i] <= 980000000) {
            array_push($Viettel, $array[$i]);
        } else if ($array[$i] >= 950000000 && $array[$i] <= 960000000) {
            array_push($Mobifone, $array[$i]);
        } else if ($array[$i] >= 910000000 && $array[$i] <= 930000000) {
            array_push($Vinaphone, $array[$i]);
        } else {
            array_push($notremember,$array[$i]);
        }
        $i++;
    }



$a= implode(",",$Viettel);
$b= implode(",",$Vinaphone);
$c= implode(",",$Mobifone);
$d= implode(",",$notremember);


echo "Nhà mạng viettel:".$a;
echo "<br>";
echo "Nhà mạng Vinaphone:".$b;
echo "<br>";
echo "Nhà mạng Mobifone:".$c;
echo "<br>";
echo "Nhà mạng notremember:".$d;

?>
</body>
</html>


