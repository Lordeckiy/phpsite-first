<?php

$name = $_POST['name'];
$mail = $_POST['mail'];

$error = '';
if (trim($mail) == '')
  $error = 'Введите ваш E-mail';
else if (trim($name) == '')
    $error = 'Введите ваше имя';

if ($error != '') {

    echo $error;
    exit;
}

mail('denghosts777@gmail.com', 'Проверка работы формы с сайта Travel', 'ПРОВЕРКА РАБОТЫ БЛ');
?>