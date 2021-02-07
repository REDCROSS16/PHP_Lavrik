<h1> Table </h1>
<a href='index.php'>Отобразить как список сообщений</a>
<table>
    <? foreach ($messages as $message): ?>
        <tr>
            <td tr style='border:1px solid black'>
                <a href='index.php?c=edit&id=<?=$message['id_message'];?>'>
                <?=$message['name'];?></td>
            <td tr style='border:1px solid black'><?=$message['data'];?></td>
            <td tr style='border:1px solid black'><?=$message['text'];?></td>
        </tr>    
    <? endforeach;?>
</table>