<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions return values</title>
</head>
<body>
<?php

function addNums($num1,$num2){

    $sum = $num1 * $num2;
    return $sum;


}

$result = addNums(5,6);
$result = addNums(50, $result);

echo $result;

?>

</body>
</html>

