<?php


function nextRow() : string
{
    return '<br>';
}

function makeLink($path, $text) : string
{
    return '<a href=' . $path . '>' . $text . '<a>';
}