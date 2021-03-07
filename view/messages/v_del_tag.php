
<div>
    <? foreach ($result as $tag): ?>
    <div>
    <a href="#">[#<?=$tag['tag_name'];?>]</a> <a href="index.php?c=delete_tag" style='color:red'>X</a>
    </div>
    <? endforeach ?>
</div>