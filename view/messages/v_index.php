
            <main>
            <div class="container">
                <h1> CHAT </h1>
                        <!-- <a href='index.php?c=add'><button type="button" class="btn btn-success">Добавить сообщение</button></a>
                        <a href='index.php?view=table'><button type="button" class="btn btn-info">Отобразить как таблицу</button></a>
                        <br> -->
                    <div>
                        <? foreach ($messages as $message): ?>
                        <div class='message'>
                            <strong><?=$message['name'];?></strong>
                            <em><?=$message['data'];?></em>
                            <div><?=$message['text'];?></div>
                           <a href="index.php?c=message&id=<?=$message['id_message'];?>"> <button type="button" class="btn btn-primary">Читать далее</button></a>
                        </div>
                        <? endforeach;?>
                    </div>
            </div>  
            </main>

