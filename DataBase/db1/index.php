<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'test_16';
$db = mysqli_connect($host, $user, $password, $db_name);
?>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
    </tr>
    <?php
    require_once './index.php';
    $query = "SELECT * FROM workers";
    $result = mysqli_query($db, $query);
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
    $result = '';
    foreach ($data as $item ) {
        $result .= '<tr>';
        $result .= '<td>' . $item['id'] . '</td>';
        $result .= '<td>' . $item['name'] . '</td>';
        $result .= '<td>' . $item['age'] . '</td>';
        $result .= '<td>' . $item['salary'] . '</td>';
        $result .= '</tr>';
    }

    echo $result;
    ?>

</table>


