<?php

$id = (int)$_GET['id'];
$pageTitle = 'Add Tag';

$res = '';

// $tags = '#' . 'asdad asdasdas';
// foreach ($tags as $tag) {
//     $res .= '#' . $tag;
// }




$content = template('messages/v_add_tag', [
    'tags' => $tags,
]);

$pageContent = template('base/v_con2col', [
    'left' => template('messages/v_tag_left'),
    'content' => $content,
    'title' => 'One message',
]);






// $tags = getTagsFromDb($id);