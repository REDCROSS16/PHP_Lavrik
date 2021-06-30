<?php
require_once '../func.php';

$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'test_16';

$db = mysqli_connect($host, $user, $password, $db_name);

$table = 'USERS';
$table_workers = 'workers';

# функция для инсерта
function insert (string $table, $columns, $values) : string
{
    if (is_array($columns)) {
        $columns = implode(',', $columns);
    }
    if (is_array($values)) {
        $res = '';
        foreach ($values as $value) {
            $res .= "'$value',";
        }
        $res = rtrim($res,',');
        $values = $res;

    } else {
        $values = "'$values'";
    }
    return "INSERT INTO $table ($columns) VALUES ($values)";
}

function insert2 ($table, $array) {
    $columns = '';
    $values = '';
    foreach ($array as $key=>$value) {
        $columns .= $key . ',';
        $values .= "'$value',";
    }
    $values = rtrim($values,',');
    $columns = rtrim($columns,',');

    return "INSERT INTO $table ($columns) VALUES ($values)";
}

echo 'Работа с БД';

$worker1 = [
    'name' => 'Кирилл',
    'age' => 28,
    'salary' => 1000
];

//$columns = ['name', 'age', 'birthday'];
//$values = ['alex', 28, '19921216']; # YYYYMMDD

//$columns = 'name';
//$values = 'Alex';

//$query = insert($table, $columns, $values);
//$query = insert2($table_workers, $worker1);

if (mysqli_query($db, $query)){
    echo '<br> добавлено';
} else {
    die( mysqli_error($db) );
}
