<?php

$id = (int)$_GET['id'];
$pageTitle = 'Add Tag to message : ' . $id;

$res = '';


$result = getTagsFromPageId($id);
foreach ($result as $tag) {
    $res .= '[ <a href="#">' . '#'. $tag['tag_name'] .  '</a>' . ' ] ';
}
$tags = $res;

$content = template('messages/v_add_tag', [
    'tags' => $tags,
]);

$pageContent = template('base/v_con2col', [
    'left' => template('messages/v_tag_left'),
    'content' => $content,
    'title' => $pageTitle,
]);

if (isset($_POST['tag'])) {
    if (addTags($_POST['tag'], $id)) {
        header('Location: index.php?c=tag&id=' . $id);  
    }

}

