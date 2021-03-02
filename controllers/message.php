<?php

$strId = $_GET['id'] ?? ''; #получаем айди с гет запроса (тот что вверху)

$id = (int)$strId;
$message = messageOne($id); #с БД получаем инфу о месадже и том кто написал
// $title = $message['name'];
$hasMessage = $message!==false;
// $tag = getTag($id); #написать функцию

if ($hasMessage) {
    
    $content = template('messages/v_messages_main', [
        'message' => $message,
    ]);

    $pageTitle = $message['name'];

    $pageContent = template('base/v_con2col', [
        'left' => template('messages/v_messages_left'),
        'content' => $content,
        'title' => 'One message',
        'tag' => $tag,
    ]);
} else {
    header('HTTP/1.1 404 not found'); #отправляет заголовок
    $pageContent = template('errors/v_404');
}
