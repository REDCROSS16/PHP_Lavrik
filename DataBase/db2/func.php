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