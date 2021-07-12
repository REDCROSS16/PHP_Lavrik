<?php require_once 'func.php';?>
<!--<form action="index.php" method="post">-->
<!--    <div><input type="text" name="name"> Имя</div>-->
<!--    <div><input type="text" name="age"> Возраст</div>-->
<!--    <div><input type="text" name="salary">Зарплата</div>-->
<!--    <div><input type="submit" name="submit" value="Добавить"></div>-->
<!--</form>-->


<form action="index.php" method="post">
    <label for="">Заполните поля</label><br>
    <?=input('name');?>Имя<br>
    <?=input('age');?>Возраст<br>
    <?=input('salary');?>Зарплата<br>
    <input type="submit" value="ADD" name="submit">
</form>