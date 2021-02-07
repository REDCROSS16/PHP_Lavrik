<?php

include_once('model/messages.php');
include_once('core/arr.php');

$id = $_GET['id'];

if (isset($_GET)) {
    deleteMessage($id);
    header('Location: index.php');
    exit();
}