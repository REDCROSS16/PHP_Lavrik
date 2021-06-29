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



<?php
//1. По заходу на страницу запишите в сессию текст 'test'. Затем обновите страницу и выведите содержимое сессии на экран.
//$_SESSION['test'] = 'hello alex';
//
//if (isset($_SESSION['test'])) echo $_SESSION['test'];

//2. Пусть у вас есть две страницы сайта. Запишите на первой странице что-нибудь
// в сессию, а затем выведите это при заходе на другую страницу.
//$_SESSION['name'] = 'Red Cross';
//echo makeLink('test.php', 'странца test');

//3. Сделайте счетчик обновления страницы пользователем. Данные храните в сессии.
//Скрипт должен выводить на экран количество обновлений.
//При первом заходе на страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.

//if (!isset($_SESSION['counter'])) {
//    $_SESSION['counter'] = 0;
//} else {
//    $_SESSION['counter'] = $_SESSION['counter'] + 1;
//}
//
//echo 'Вы посетили данную страницу: ' . $_SESSION['counter'];


//4. Сделайте две страницы: index.php и test.php. При заходе на index.php спросите с помощью формы
//страну пользователя, запишите ее в сессию (форма при этом должна отправится на эту же страницу).
//Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.
//if (isset($_REQUEST['submit'])) $_SESSION['country'] = $_REQUEST['country'];
//    ?>
<!--<form action="">-->
<!--    <input type="text" placeholder="country" name="country">-->
<!--    <input type="submit" value="подтвердить" name="submit">-->
<!--</form>-->
<?php
//5. Запишите в сессию время захода пользователя на сайт.
//При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.

//if (!isset($_SESSION['time'])) {
//    $_SESSION['end'] = time();
//    $_SESSION['start'] = time();
//}  else {
//    echo time() - $_SESSION['start'] . ' секунд вы провели на сайте';
//}

//6. Спросите у пользователя email с помощью формы.
//Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email)
//при ее открытии поле email было автоматически заполнено.
if (isset($_REQUEST['submit'])) {
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['surname'] = $_REQUEST['surname'];
    $_SESSION['email'] = $_REQUEST['email'];
}
if (isset($_SESSION['email'])) echo $_SESSION['email'];
?>
<?php echo makeLink('test.php', 'test');?>
<form action="">
    <label for="email">name<input type="text" name="name"></label>
    <label for="email">surname<input type="text" name="surname"></label>
    <label for="email">email<input type="text" name="email"></label>
    <input type="submit" name="submit">
</form>

