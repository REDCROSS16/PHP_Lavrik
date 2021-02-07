<div class="form">
		<a href="index.php">Вернуться на главную</a>
		<form method="post">
			Name:<br>
			<input type="text" name="name" value="<?=$fields['name']?>"><br>
			Text:<br>
			<textarea type="text" name="text"><?=$fields['text'];?></textarea><br>
			<button>Send</button>
			<div class='error-list'>
			<? foreach($validateErrors as $error): ?>
				<p><?=$error?></p>
			<? endforeach; ?>
			</div>
		</form>
</div>