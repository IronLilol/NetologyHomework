<?php
$uploaddir = 'tests/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir .
    $_FILES['userfile']['name'])) {
    print "Тест успешно добавлен.";
    echo "Список тестов:", "</br>", '<a href="list.php">/list.php</a>';
} else {
    print "Ошибка";
}
?>