<?php

function getWeight($stroke){
//    $arrayStroke= str_split($stroke);
    $counter=0;
    foreach (str_split($stroke) as $k=>$v){
        $counter = ($v=='!') ? $counter+=2 : $counter +=3;
    }
    return $counter;
}

function balance($left,$right){
    $left= getWeight($left);
    $right=getWeight($right);
    $resultEq = $left<=>$right;
    switch ($resultEq){
        case 1:
            return 'left';
        case 0:
            return 'balanced';
        case -1:
            return 'right';
    }
}
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
    <h1><?=balance('!?','!?');?></h1>
</body>
</html>
