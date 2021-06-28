<?php

session_start();
//echo $_SESSION['name'] . '<br>' . $_SESSION['surname'] . '<br>';
var_dump($_SESSION);
//var_dump($_SESSION['name']);
if (isset($_SESSION['country'])) var_dump($_SESSION['country']);
echo $_SESSION['country'];
