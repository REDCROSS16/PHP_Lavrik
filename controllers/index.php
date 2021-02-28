<?php

include_once('model/messages.php'); #подключается модель сообщения, все функции из модели\
$title = 'Главная страница';

$db = dbConnect(); #подключаемся к базе

$messages = messagesAll(); #функция вызывает все сообщения
$isTable = ($_GET['view'] ?? '') === 'table'; // index.php?view=table
$template = $isTable ? 'v_index_table' : 'v_index'; #отображаем один из шаблонов

include("view/$template.php"); #подключает модель view в зависимости от полученных данных в гет запросе

?>
