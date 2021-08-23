<?php

$num = 59;


function random($min, $max)

{

    return rand($min, $max);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $maytinhdoan = (int)$_POST['result'];


    $anwser = $_POST['so'];

    if ($anwser == 'lonhon') {

        $max = $maytinhdoan;

        $min = (int)$_POST['min'];

        $maytinhdoan = random($min, $max);

        echo "min: " . $min . "<br />";

        echo "max: " . $max . "<br />";

        echo "số máy tính đoán: " . $maytinhdoan;

    } else {

        $min = $maytinhdoan;

        $max = (int)$_POST['max'];

        $maytinhdoan = random($min, $max);

        echo "min: " . $min . "<br />";

        echo "max: " . $max . "<br />";

        echo "số máy tính đoán: " . $maytinhdoan;

    }


} else {

    $min = 1;

    $max = 100;

    $maytinhdoan = random(1, 100);

    echo "số máy tính đoán: " . $maytinhdoan;

}


echo "<br />so  Cường chọn: " . $num;


?>

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

    <input name="so" type="radio" value="lonhon"> Lớn hơn

    <input name="so" type="radio" value="nhohon"> Nhỏ hơn

    <input name="result" type="hidden" value="<?php echo $maytinhdoan ?>">

    <input name="min" type="hidden" value="<?php echo $min ?>">

    <input name="max" type="hidden" value="<?php echo $max ?>">

    <input name="so1" type="submit" value="submit">

</form>

</body>


</html>

