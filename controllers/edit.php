<?php

$strId = $_GET['id'] ?? ''; #получаем айди с гет запроса (тот что вверху)
$id = (int)$strId;
$message = messageOne($id);
$pageTitle = 'EDIT';


if (isset($_POST['update'])) {
    $fields = extractFields($_POST, ['name', 'text']);
    if (updateMessage($id, $fields))  {
        header('Location: index.php');
    } else {
        echo 'error';
    }
    
} 

$pageContent = template('messages/v_edit', [
    'message' => $message,
]);

