<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
$coworkers = array('egoing', 'leezche', 'duru', 'teaho');
echo $coworkers[1] . '<br>';
echo $coworkers[3] . '<br>';

var_dump(count($coworkers));
array_push($coworkers, 'graphittie');
array_push($coworkers, 'fire');
var_dump($coworkers);

?>
</body>
</html>