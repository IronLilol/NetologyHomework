<?php
$test_path=$_GET['test_path'];
$file = file_get_contents('tests/'.$test_path.'.json');
$fileDecode = json_decode($file, true);
var_dump($fileDecode)
?>
<html>
<head>
    <meta charset="utf-8">
    <title>загрузка тестов</title>
</head>
<body>
<form method="get">
    Введите точное название файла с тестом:<input type="text" name="test_path">
    <input type="submit" value="Отправить">
</form>
</body>
</html>
