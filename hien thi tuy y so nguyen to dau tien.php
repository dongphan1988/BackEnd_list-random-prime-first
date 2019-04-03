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
<form action="" method="post">
    <h1>nhap so luong so nguyen to can xuat</h1>
    <input type="text" name="number"/>
    <input type="submit"/> <br>
    <div>List so nguyen to :</div>
</form>
<?php
function checkSNT($num)
{

    if ($num < 2) {
        return false;

    }
    if ($num === 2) {
        return true;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

$lastCount = $_POST["number"];
$count = 0;
$i = 0;
while ($count < $lastCount) {
    if (checkSNT($i)) {
        $count++;
        echo "<br>" . $i . "<br>";
    }
    $i++;
}
?>
</body>
</html>