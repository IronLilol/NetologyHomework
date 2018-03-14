<?php
?>
<!--к сожалению папку с загруженными тестами "tests" нужно очищать вручную-->
<html>
<head>
    <meta charset="utf-8">
    <title>Загрузка тестов</title>
</head>
<body>
<form enctype="multipart/form-data" action="mistakecheck.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000">
    Отправить: <input name="userfile" type="file">
    <input type="submit" value="Send File">
</form>
</body>
</html>
