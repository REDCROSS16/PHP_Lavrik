<?php

$id = (int)$_GET['id'];
$pageTitle = 'Add Tag';

$res = '';


$result = getTagsFromDb();
foreach ($result as $tag) {
    $res .= '[ <a href="#">' . '#'. $tag['name'] .  '</a>' . ' ] ';
}
$tags = $res;

$content = template('messages/v_add_tag', [
    'tags' => $tags,
]);

$pageContent = template('base/v_con2col', [
    'left' => template('messages/v_tag_left'),
    'content' => $content,
    'title' => 'One message',
]);

if (isset($_POST['tag'])) {
    if (addTags($_POST['tag'])) {
        header('Location: index.php?c=tag&id=' . $id);  
    }

}



var_dump($res);
