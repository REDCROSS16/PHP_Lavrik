<?php
require_once 'config.php';
require_once 'func.php';
if (isset($_GET['del'])) {
    deleteWorker($_GET['del']);
    header('Location: index.php');
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    insertWorker($name, $age, $salary);
}

$maxId = maxId();
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

</head>
<button  type="button" class="btn btn-dark"><a href="addWorker.php" style="color:white;text-decoration: none">Добавить работника</a></button>
<div class="progress">
    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<table class="table table-striped" style="width: 60%">
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">salary</th>
        <th scope="col">Option</th>
    </tr>
    <?php

    $query = "SELECT * FROM workers";

    $data = select($query);
    $result = '';

    foreach ($data as $item ) {
        $result .= '<tr>';
        $result .= '<td >' . $item['id'] . '</td>';
        $result .= '<td>' . $item['name'] . '</td>';
        $result .= '<td>' . $item['age'] . '</td>';
        $result .= '<td>' . $item['salary'] . '</td>';
        $result .= '<td><a href="?del='. $item['id'] .'"' . '>Delete</a></td>';
        $result .= '</tr>';
    }

    echo $result;
    ?>

</table>
<script src="app.js"></script>


