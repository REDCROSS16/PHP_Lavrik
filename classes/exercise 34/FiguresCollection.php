<?php

namespace exercise_34;

class FiguresCollection
{
    private $figures = [];

    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
    }

    function getTotalSquare() {
        $sumSquare = 0;
        foreach ($this->figures as $figure) {
            $sumSquare += $figure->getSquare();
        }
        return $sumSquare;
    }

    function getTotalPerimeter() {
        $sumPerimeter = 0;
        foreach ($this->figures as $figure) {
            $sumPerimeter += $figure->getPerimeter();
        }
    }
}