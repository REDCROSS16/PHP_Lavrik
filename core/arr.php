<?php

/**
 * @param array $target - одномерный массив
 * @param array $fields - массив который содержит список строк с полями
 * @return array 
 */
function extractFields(array $target, array $fields) : array {
    $res = [];
    foreach($fields as $field) {
        $res[$field] = trim($target[$field]); 
    }
    return $res;
}

function checkCname(string $cname) : bool {
    $ru = preg_match('~[а-яё]+~iu', $cname); 
    if ($ru) {
        return false;
    }
    $en = preg_match('~[a-z]+~i', $cname);
        return true;
}

