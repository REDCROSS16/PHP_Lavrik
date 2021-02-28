

<div>Страница редактирования сообщения от <strong><?=$message['name'];?></strong></div>
		
		<form method="POST" >
			Имя:<br> 

			<input type="text" name="name" value="<?=$message['name']?>"><?=$name;?><br>

			Текст сообщения:<br>

			<textarea type="text" name="text"><?=$message['text'];?></textarea><br>

			<input type='submit' name='update' value='Update' ></input>
	
        </form>
        <a href="index.php">Вернуться на главную</a>
</div>

