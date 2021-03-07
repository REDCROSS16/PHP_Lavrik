<?php


$id = $_GET['id'];


$result = getTagsFromPageId($id);


foreach ($result as $tag) {
    $res .= '[ <a href="#">' . '#'. $tag['tag_name'] .  '</a>' . ' ] ';
}
$tags = $res;

$content = template('messages/v_del_tag', [
    'result' => $result,
]);

$pageContent = template('base/v_con2col', [
    'left' => template('messages/v_tag_left'),
    'content' => $content,
    'title' => 'Delete tags',
]);