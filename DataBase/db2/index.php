<style>
    a.active {
        text-decoration: none;
        color: goldenrod;
    }
    a {
        text-decoration: none !important;
        color: black;
    }
</style>
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

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$notesOnPage = 5;
$from = ($page - 1 ) * $notesOnPage;

$query = "SELECT * FROM workers LIMIT $from, $notesOnPage";
$data = select($query);



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
<?php
# создание пагинации
 $query = "SELECT COUNT(*) as count FROM workers";
 $count = select($query);
 $pages = ceil($count[0]['count'] / $notesOnPage);
if ($page > 1) {
    $previousPage = $page - 1;
    echo "<a href='?page=$previousPage'><<</a>";
} else {
    echo "<a href='#' disabled><<</a>";
}

 for ($i=1; $i <= $pages; $i++) {
     if ($page == $i) {
         echo '<a href="?page=' . $i . '" class="active">' . $i . '</a> ';
     } else {
         echo '<a href="?page=' . $i . '">' . $i . '</a> ';
     }

 }
# пагинация
 if ($page < $pages) {
     $nextPage = $page + 1;
     echo "<a href='?page=$nextPage'>>></a>";
 } else {
     echo "<a href='#' disabled>>></a>";
 }
?>


