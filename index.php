<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</h1></a>
<ol>
<?php
$list = scandir('./data');
$i = 0;
while ($i < count($list)) {
    if ($list[$i] != '.') {
        if ($list[$i] != '..') {
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</li></a>\n";
        }
    }
    $i = $i + 1;
}

?>
    </ol>

<h2>
<?php
if (isset($_GET['id'])) {
    echo $_GET['id'];
} else {
    echo "<h1>WELCOME</h1>";
}
?>
</h2>
<?php
if (isset($_GET['id'])) {
    echo file_get_contents("data/" . $_GET['id']);
} else {
    echo "<h2>Hello, PHP</h2>";
}
?>
  </body>
</body>
</html>
