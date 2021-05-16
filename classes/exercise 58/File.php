<?php
namespace exercise_58;

class File implements iFile
{
    public function __construct($filePath)
    {
        parent::__construct($filePath);
    }
}