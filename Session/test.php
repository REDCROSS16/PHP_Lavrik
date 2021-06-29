<?php

session_start();
//echo $_SESSION['name'] . '<br>' . $_SESSION['surname'] . '<br>';
//var_dump($_SESSION);
//var_dump($_SESSION['name']);
//if (isset($_SESSION['country'])) var_dump($_SESSION['country']);
//echo $_SESSION['country'];
?>

<label for="">name</label><input type="text" name="name" value="<?= $_SESSION['name'];?>">
<label for="">surname</label><input type="text" name="surname" value="<?= $_SESSION['surname'];?>">
<label for="">email</label><input type="text" name="email" value="<?= $_SESSION['email'];?>">
