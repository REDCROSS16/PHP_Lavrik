<?php require_once 'func.php';?>
<form action="index.php" method="post">
    <div><input type="text" name="name"> Имя</div>
    <div><input type="text" name="age"> Возраст</div>
    <div><input type="text" name="salary">Зарплата</div>
<!--    <div><input type="submit" name="submit" value="Добавить"></div>-->
</form>


<form action="index.php" method="post">
    <label for="">Заполните поля</label>
    <?=input('name');?>
    <?=input('age');?>
    <?=input('salary');?>
    <input type="submit" value="ADD" name="submit">
</form>

echo 123;