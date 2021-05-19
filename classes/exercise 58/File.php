<?php
namespace exercise_58;
use mysql_xdevapi\Exception;

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
        return pathinfo($this->filePath, PATHINFO_EXTENSION);
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
        return  filesize($this->filePath);
    }

    /*
   Получить текст загруженного файла
    * */
    public function getText()
    {
        $extenstions = ['txt', 'doc', 'tmp'];
        if (in_array($this->getExt(), $extenstions)) {

            try {
                return file_get_contents($this->filePath);
            } catch (Exception $e) {
                echo $e;
                return false;
            }
        } else {
            echo 'неподходящее расширение';
            return false;
        }
    }
    // устанавливает текст файла
    public function setText($text) : File
    {
        $file ='1.txt';
        file_put_contents($file, $text, FILE_APPEND | LOCK_EX);
        echo 'файл обновлен';
        return $this;
    }

    // добавляет текст в конец файла
    public function appendText($text)
    {
        // TODO: Implement appendText() method.
    }

    public function replace($newPath)
    {
        // TODO: Implement replace() method.
    }



    public function delete()
    {
        // TODO: Implement delete() method.
    }




    public function rename($newName)
    {
        // TODO: Implement rename() method.
    }

    public function copy($copyPath)
    {
        // TODO: Implement copy() method.
    }

}