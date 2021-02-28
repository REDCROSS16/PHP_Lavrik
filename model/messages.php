<?php
include_once('core/db.php');

function messagesAll() : array {
    $sql = "SELECT * FROM messages ORDER BY data DESC";
    $query = dbQuery($sql);
    return $query->fetchAll();
}

/**Функция получения запроса от бд
 * @param int $id айди сообщения
 */
function messageOne(int $id)  {
    $sql = "SELECT * FROM messages where id_message=:id";
    $query = dbQuery($sql, ['id' => $id]);
    return $query->fetch();
}
/**
 * Функция обновления сообщения 
 * @param int $id - айди сообщения
 * @param array $fields - поля с текстом сообщения
 * @return bool выполнился апдейт или нет
 */
function updateMessage(int $id, array $fields) : bool {
    $sql = "UPDATE messages SET name= :name, text = :text WHERE id_message=" . $id;
    dbQuery($sql, $fields);
    return true;   
}
/**
 * функция удаления сообщения
 * @param int $id айди сообщения
 * @return bool 
 */
function deleteMessage(int $id) : bool {
    $sql = 'DELETE FROM messages WHERE id_message=' . $id;
    dbQuery($sql);
    return true;
}

function messagesAdd (array $fields) : bool {
    $sql = "INSERT messages (name, text) VALUES (:name, :text)";
    dbQuery($sql, $fields);
    return true;
}

function messagesValidate (array &$fields) : array  {
    $errors = [];
    $textLen = mb_strlen($fields['text'], 'UTF-8');
    if (mb_strlen($fields['name'],'UTF-8') < 2) {
        $errors[] = 'Имя не короче 2 символов';
    }

    if ($textLen < 2 || $textLen > 140) {
        $errors[] = 'Текст от 10 до 140 символов';
    }

    $fields['name'] = htmlspecialchars($fields['name']); #защита от эксес атак чтобы теги нельзя было вписать в поля
    $fields['text'] = htmlspecialchars($fields['text']); #защита от эксес атак чтобы теги нельзя было вписать в поля

    return $errors;

}

// function updateArticle($id, $title, $url, $description, $cid, $file) {
//     $query = "UPDATE posts SET title='" . $title . "', url='" . $url . "', cid=" . $cid . ", description='". $description."', file='" . $file . "' WHERE id='" . $id ."'";
//     return execQuery($query);
// }