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

/**
 * Добавить тег в БД
 */
function addTags(string $name, int $page_id) {
    $allTags = getTagsFromDb();
    // из всех тегов ищет тег
    foreach ($allTags as $tag) {
        // если тег есть
        if (!in_array($name, $tag)) {
            $sql = "INSERT tag (tag_name) VALUES ('$name')";  
        }
    }
    dbQuery($sql);
    
    $tagId = getTagIdByName($name);
    var_dump($tagId);
    $messageId = $page_id;
    
    if (tagsValidate($messageId, $tagId)) {
        $sql = 'INSERT messages_tag (message_id, tag_id) VALUES (' . $page_id . ',' . $tagId['tag_id'] . ')';
        dbQuery($sql);
    }
    return true;
    
}

/**
 * Получить теги по данному сообщению
 */
function getTagsFromDb() : array {
    $sql = 'SELECT * FROM tag';
    return dbQuery($sql)->fetchAll();
}


function getTagsFromPageId(int $page_id) {
    $sql = 'SELECT * FROM tag JOIN messages_tag ON tag.tag_id=messages_tag.tag_id WHERE messages_tag.message_id=' . $page_id;
    return dbQuery($sql)->fetchAll();
}


function getTagIdByName (string $tag_name) {
    $sql = 'SELECT tag_id FROM tag WHERE tag_name="' . $tag_name . '"';
    return dbQuery($sql)->fetch()['tag_id'];
}

/**
 * Проверка тегов 
 * (чтобы убрать дубликаты)
 */
function tagsValidate (int $messageId, int $tagId) {
    $sql = 'SELECT message_id, tag_id FROM messages_tag';
    $result = dbQuery($sql)->fetchAll();
    foreach ($result as $item) {
        if ($item['message_id'] == $messageId && $item['tag_id'] == $tagId) {
            return false;
        } else {
            return true;
        }
    }
}