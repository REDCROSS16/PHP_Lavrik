<?php
    if (isset($_GET['num'])) {
    echo $_GET['num'] * $_GET['num'];
} else {
    echo 'Ошибка: ничего не передано';
}
?>