<?php

include_once('model/messages.php');
include_once('core/arr.php');

$strId = $_GET['id'] ?? ''; #получаем айди с гет запроса (тот что вверху)
$id = (int)$strId;
$message = messageOne($id);
$title = 'EDIT MESSAGE';


if (isset($_POST['update'])) {
    $fields = extractFields($_POST, ['name', 'text']);
    updateMessage($id, $fields);
    header('Location: index.php');
}

include('view/v_edit.php');  
