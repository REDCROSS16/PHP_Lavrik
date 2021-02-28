<?php

$id = $_GET['id'];

if (isset($_GET)) {
    deleteMessage($id);
    header('Location: index.php');
    exit();
}