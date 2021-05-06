<?php
// namespace exercise_43;
interface iTest1
{

}

var_dump(interface_exists('iTest1'));
var_dump(interface_exists('iTest2'));
echo '<pre>';
print_r(get_declared_interfaces());
echo '</pre>';