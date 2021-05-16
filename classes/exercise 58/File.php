<?php
namespace exercise_58;
require_once 'iFile.php';

class File implements iFile
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    /*
   Временный путь к загруженному файлу
     * */
    public function getPath()
    {
        return $this->filePath;
    }

    /*
    Получить расширение полученного файла
     * */
    public function getExt()
    {
        $extension = pathinfo($this->filePath, PATHINFO_EXTENSION);
        return $extension;
    }

    /*
        Получить папку где хранится загруженный файл
         * */
    public function getDir()
    {
        return pathinfo($this->filePath, PATHINFO_DIRNAME);
    }

    /*
    Получить имя загруженного файла
     * */
    public function getName()
    {
        return pathinfo($this->filePath, PATHINFO_FILENAME);
    }
    /*
    Получить размер загруженного файла
     * */
    public function getSize() {

    }

    public function replace($newPath)
    {
        // TODO: Implement replace() method.
    }



    public function delete()
    {
        // TODO: Implement delete() method.
    }
    public function appendText($text)
    {
        // TODO: Implement appendText() method.
    }

    public function setText($text)
    {
        // TODO: Implement setText() method.
    }

    public function rename($newName)
    {
        // TODO: Implement rename() method.
    }
    public function getText()
    {
        // TODO: Implement getText() method.
    }
    public function copy($copyPath)
    {
        // TODO: Implement copy() method.
    }

}