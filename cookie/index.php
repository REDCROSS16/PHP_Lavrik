<?php
//if (!isset($_COOKIE['counter'])) {
//    setcookie('counter', 1);
//} else {
//    setcookie('counter', $_COOKIE['counter'] + 1);
//}
//setcookie('test', '123', time() + 3600);
//setcookie('test', 'Test!!!!', time() + 3600 * 24);
//
//echo $_COOKIE['test'];


//setcookie('test', 'Test!!!!', time());
//
//echo 'Кука: ' . $_COOKIE['test'];

//1. По заходу на страницу запишите в куку с именем test текст '123'.
//Затем обновите страницу и выведите содержимое этой куки на экран.

//echo $_COOKIE['test'];

//2.Удалите куку с именем test.
//setcookie('test', '', time());


//3. Сделайте счетчик посещения сайта посетителем.
//Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
//echo "Вы посетили наш сайт {$_COOKIE['counter']} раз!";


//4. Спросите дату рождения пользователя. При следующем заходе на сайт
//напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!
if ($_REQUEST['clearCookie']) {
    setcookie('birthday', '', time());
//    echo 'Куки очищены!';
}
//echo $_COOKIE['birthday'];
if (!isset($_COOKIE['birthday'])) {
    setcookie('birthday',  $_REQUEST['birthday'], time() + 3600);
}

//дата сейчас

?>
<form action="">
    <label for="birthday">Введите день рождения</label>
    <input id="birthday" type="date" name="birthday" value="<?=$_COOKIE['birthday'];?>">
    <input type="submit">
</form>

<?php
if (isset($_COOKIE['birthday'])) {
    $now = new DateTime('now');
//день рождения с кук
    $birth = new DateTime($_COOKIE['birthday']);

    $days = $now->diff($birth)->days;

    if ($days < 1) {
        echo 'поздравляем с ДР';
    } else {
        echo "до вашего ДР {$days} дней";
    }
}
?>

<form action="">
    <input type="submit" value="очистить куки" name="clearCookie">
</form>




