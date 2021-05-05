<?php

namespace exercise_43;

interface iProgrammer 
{
    public function __construct($name, $salary); // задаем имя и зарплату
	public function getName(); // получить имя
	public function getSalary(); // получить зарплату
	public function getLangs(); // получить массив языков, которые знает программист
	public function addLang($lang);
}