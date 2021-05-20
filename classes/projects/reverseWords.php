<?php
// Реверс вордс функция

function reverseWords($str) {
  $result = '';
  
  $array = explode(' ', $str);
  
  foreach ($array as $item) {
        $result .= strrev($item) . ' ';    
  }
  
  return $result;
}



echo reverseWords('hello world');