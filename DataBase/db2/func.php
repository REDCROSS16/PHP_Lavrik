<?php

# подключение к бд
function connect() {
    return mysqli_connect(HOST, USER, PASSWORD, DB_TEST);
}


# функция селект
function select($query) : array
{
    $db = connect();
    $result = mysqli_query($db, $query);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    return $data;
}


function deleteWorker($id)
{
    $db = connect();
    $query = "DELETE FROM workers WHERE id = $id";
    try {
        mysqli_query($db, $query);
    } catch (Exception $exception) {
        var_dump($exception);
    }

    return true;
}

function insertWorker ($name, $age, $salary)
{
    $db = connect();
    $query = "INSERT INTO workers SET name='$name',age=$age,salary=$salary";

    try {
        mysqli_query($db, $query);
    } catch (Exception $e) {
        echo $e;
    }
}

function maxId()
{
    $db = connect();
    $query = "SELECT MAX(id) FROM workers";
    $result = mysqli_query($db, $query);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    return $data[0]['MAX(id)'];
}

function input($name)
{
    if (isset($_POST[$name])) {
        $value = $_POST[$name];
    } else {
        $value = '';
    }

    return '<input name="' . $name . '" value=' . $name .'>';
}