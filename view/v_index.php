
            <main>
                <h1> CHAT </h1>
                    <a href='index.php?c=add'>Добавить сообщение</a>
                    <a href='index.php?view=table'>Отобразить как таблицу</a>
                    <br>
                <div>
                    <? foreach ($messages as $message): ?>
                    <div>
                        <strong><?=$message['name'];?></strong>
                        <em><?=$message['data'];?></em>
                        <div><?=$message['text'];?></div>
                        <a href="index.php?c=message&id=<?=$message['id_message'];?>">Читать далее</a>
                        <hr>
                    </div>
                    <? endforeach;?>
                </div>
            </main>

