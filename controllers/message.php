<?php

include_once('model/messages.php'); #тут подключаются функции сообщений

$strId = $_GET['id'] ?? ''; #получаем айди с гет запроса (тот что вверху)

$id = (int)$strId;
$message = messageOne($id); #с БД получаем инфу о месадже и том кто написал
$hasMessage = $message!==false;

if ($hasMessage) {
    include('view/v_message.php');
    
} else {
    header('HTTP/1.1 404 not found'); #отправляет заголовок
    include('view/errors/v_404.php');
}
