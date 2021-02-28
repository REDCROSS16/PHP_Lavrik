<?php

include_once('model/messages.php'); #тут подключаются функции сообщений

$strId = $_GET['id'] ?? ''; #получаем айди с гет запроса (тот что вверху)

$id = (int)$strId;
$message = messageOne($id); #с БД получаем инфу о месадже и том кто написал
// $title = $message['name'];
$hasMessage = $message!==false;

if ($hasMessage) {
    $pageTitle = $message['name'];
    $pageContent = template('v_message', [
        'message' => $message,
    ]);
    // include('view/v_message.php');
    
} else {
    header('HTTP/1.1 404 not found'); #отправляет заголовок
    // include('view/errors/v_404.php');
    $pageContent = template('errors/v_404');
}
