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

//$worker1 = [
//    'name' => 'Кирилл',
//    'age' => 28,
//    'salary' => 1000
//];
//
//$worker4 = [
//    'name' => 'Джон',
//    'age' => 20,
//    'salary' => 700
//];

//$columns = ['name', 'age', 'birthday'];
//$values = ['alex', 28, '19921216']; # YYYYMMDD

//$columns = 'name';
//$values = 'Alex';

//$query = insert($table, $columns, $values);
//$query = insert2($table_workers, $worker4);

//if (mysqli_query($db, $query)){
//    echo '<br> добавлено';
//} else {
//    die( mysqli_error($db) );
//}


# удаляем с БД универсальный удалятель
function delete($table, $condition, $value) : string
{
//    DELETE FROM table where id = 1
    return "DELETE FROM $table WHERE {$condition}={$value}";
}

# выбиараем все результаты
function select($table, $column = '*', $condition='', $order = '') : string
{
    return "SELECT $column FROM $table $condition $order";
}

$res = mysqli_query($db, select($table_workers,'*'));


//Преобразуем то, что отдала нам база в нормальный массив PHP $data:
for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

echo '<pre>';
print_r($data);
echo '</pre>';

//COUNT считает!!!!!!
$countQuery = "SELECT COUNT(*) as count FROM workers WHERE id>0";

$countRes = mysqli_query($db, $countQuery);
for ($data2 = []; $row = mysqli_fetch_assoc($countRes); $data2[] = $row);
print_r($data2);

$likeQuery = "SELECT * FROM workers WHERE name LIKE '%я'";
$likeRes = mysqli_query($db, $likeQuery);
for($like=[]; $row = mysqli_fetch_assoc($likeRes); $like[]=$row);

echo '<pre>';
print_r($like);
echo '</pre>';

