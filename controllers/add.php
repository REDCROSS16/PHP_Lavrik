<?php

include_once('model/messages.php');
include_once('core/arr.php');

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$fields = extractFields($_POST,['name', 'text']);

		$validateErrors = messagesValidate($fields);
		if (empty($validateErrors)) { #если $validateErrors не пустой то выполнится ветвление
			messagesAdd($fields);
			header('Location: index.php');
			exit();
		}
	}
	else {
		$fields = ['name' => '', 'text' => ''];
		$validateErrors = [];
	}
	
include('view/v_add.php');
?>