<?php

$arr = [];

for ($i=0; $i < 10; $i++) {
    $arr[] = 'x';
}

print_r( $arr );

$arr2 = [];

for($i=0;$i<= 10; $i++) {
    $arr2[] = $i;
}

print_r($arr2);

$array = [
    ['href' => '1.html', 'text' => 'ссылка 1'],
    ['href' => '2.html', 'text' => 'ссылка 2'],
    ['href' => '3.html', 'text' => 'ссылка 3'],
];

$out = '<ul>';
foreach ($array as $item) {
    $out .= '<li><a href="' . $item['href'] . '">' . $item['text'] . '</a></li>';
}
$out .= '</ul>';

echo $out;

$users = [
    ['name' => 'Коля', 'age' => '30', 'salary' => '500'],
    ['name' => 'Вася', 'age' => '31', 'salary' => '600'],
    ['name' => 'Петя', 'age' => '32', 'salary' => '700'],
];

$out2 = '<table>';
foreach ($users as $user) {
    $out2 .= '<tr>'
        . '<td>' . $user['name'] . '</td>'
        . '<td>' . $user['age'] . '</td>'
        . '<td>' . $user['salary'] . '</td>'
        . '</tr>';
}

$out2 .= '</table>';

echo $out2;