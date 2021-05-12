<?php

class NameGenerator
{
    private $names = [];

    public function __construct()
    {
        echo '<input type="text" name="name">';
        echo '<input type="submit" action="add">';
    }

    private function getRandomName() {
        $count = count($this->names);
        $rand = mt_rand(0, $count);
        return $this->names[$rand];
    }

    public function add($name) : NameGenerator{
        $this->names[] = $name;
        return $this;
    }

    public function view () {
        $out = "<a href='#'><h3>Вы выбрали имя :</h3></a>";
        $out .= "<h2>" . $this->getRandomName() . "</h2>";
        echo ($out);
    }
}

$NG = new NameGenerator();
$NG->add('Vasya')->add('Alexey')->add('asdasd');
$NG->view();