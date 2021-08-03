<?php

$title = 'ADD MESSAGE';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$fields = extractFields($_POST,['name', 'text']);
		$validateErrors = messagesValidate($fields);

		if (empty($validateErrors)) { #если $validateErrors не пустой то выполнится ветвление
			messagesAdd($fields);
			header('Location: index2.php');
			exit();
		}
	} else {
		$fields = ['name' => '', 'text' => ''];
		$validateErrors = [];
	}
	
	$pageContent = template('messages/v_add', [
		'fields' => $fields,
		'validateErrors' => $validateErrors,
	]);
// include('view/v_add.php');
?>