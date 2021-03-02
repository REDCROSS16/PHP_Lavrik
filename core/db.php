<?php


function dbConnect() {
    $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME ,DB_USER,DB_PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]); #новый объект класса PDO

    $db->exec('SET NAMES UTF8');
    return $db;
}


/**
 * Функция одноразового подключения к базе данных
 * @return PDO возвращает объект БАЗЫ данных
 */
function dbInstance() : PDO {
    static $db;
    if ($db === null) { #Чтобы было одинарное подключение к ДБ
        $db = new PDO('mysql:host=localhost;dbname=php1_simple','root','root', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]); #новый объект класса PDO
    
        $db->exec('SET NAMES UTF8');
    }
    return $db;
}

function dbQuery (string $sql, array $params = []) : PDOStatement {
    $db = dbInstance();
    $query = $db->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $query;
}


function dbCheckError(PDOStatement $query) : bool {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}