<?php 

function checkControllerName(string $name) : bool {
    return preg_match('/^[aA-zZ0-0_-]+$/', $name);
}


/**
 * Функция создания шаблона для основной части и вложенных  
 */
function template(string $path, array $vars = []) : string {
    $fullPath = "view/$path.php";
    extract($vars);
    ob_start();
    include($fullPath);
    return ob_get_clean();
}
