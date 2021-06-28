<?php
require_once '../func.php';
session_start();


//if (!isset($_SESSION['counter'])) {
//    $_SESSION['counter'] = 1;
//} else {
//    $_SESSION['counter'] = $_SESSION['counter'] + 1;
//}
//
//
////Выведем значение счетчика:
//echo 'Вы обновили эту страницу '. $_SESSION['counter'].' раз!';

//unset($_SESSION['counter']);


//if (isset($_REQUEST['submit'])) {
//    $_SESSION['name'] = $_REQUEST['name'];
//    $_SESSION['surname'] = $_REQUEST['surname'];
//} else {
//    echo 'error, session not started';
//}
//
//echo nextRow() . 'Тестирование' . nextRow() . 'сессий' . nextRow();
//echo makeLink('test.php', 'тесссст!');
//?>
<!---->
<!--<html>-->
<!--    <div>-->
<!--        <form action="" method="get">-->
<!--            <div><input type="text" name="name" placeholder="имя"></div>-->
<!--            <div><input type="text" name="surname" placeholder="фамилия"></div>-->
<!--            <div><input type="submit" name="submit"></div>-->
<!--        </form>-->
<!--    </div>-->
<!--</html>-->


<!--По заходу на страницу запишите в сессию текст 'test'. Затем обновите страницу и выведите содержимое сессии на экран. -->
<?php
$_SESSION['test'] = 'hello alex';

if (isset($_SESSION['test'])) echo $_SESSION['test'];