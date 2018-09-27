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
        <li><a href="index.php?id=HTML">HTML</li></a>
        <li><a href="index.php?id=CSS">CSS</li></a>
        <li><a href="index.php?id=JavaScripts">JavaScripts</li></a>
        <li><a href="index.php?id=PHP">PHP</li></a>
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
    echo file_get_contents("data/".$_GET['id']);
} else {
    echo "<h2>Hello, PHP</h2>";
}
?>
  </body>
</body>
</html>
