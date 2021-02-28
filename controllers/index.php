<?php

include_once('model/messages.php'); #подключается модель сообщения, все функции из модели\
$pageTitle = 'Главная страница';

$db = dbConnect(); #подключаемся к базе

$messages = messagesAll(); #функция вызывает все сообщения
$isTable = ($_GET['view'] ?? '') === 'table'; // index.php?view=table
$template = $isTable ? 'v_index_table' : 'v_index'; #отображаем один из шаблонов

$pageContent = template("messages/$template", [
    'messages' => $messages,
]);

?>
