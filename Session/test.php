<?php

session_start();
echo $_SESSION['name'] . '<br>' . $_SESSION['surname'] . '<br>';
var_dump($_SESSION);