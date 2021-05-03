<?php

namespace exercise_41;


$figure1 = new Cube;
$figure2 = new Cube;
$figure3 = new Cube;


$arr = [$figure1, $figure2, $figure3];

foreach ($arr as $a) {
    if ($a instanceof Figure3d) {
        echo $a->getSurfaceSquare();
    }
}


foreach($arr as $a) {
    if ($a instanceof Figure3d) {
        echo $a->getVolume();
    } else if ($a instanceof Cube) {
        echo $a->getSurfaceSquare();
    }
}