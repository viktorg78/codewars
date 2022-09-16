<?php

namespace Loger;

class CreateLogFile
{
    /** @var string */
    private $file;
    /** @var string */
    private $directory;
    /** @var resource|false */
    private $fp;

    /**
     * @param string $file
     * @param string $directory
     */
    public function __construct($file, $directory = 'Log')
    {
        $this->file = $file;
        $this->directory = $_SERVER['DOCUMENT_ROOT'] .'/'. $directory . '/';
        // если не работает, проверь пути записи файла
    }

    function __destruct()
    {
        fclose($this->fp);
    }

    public function getNameFile()
    {
        return $this->file;
    }

    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @param $directory string
     * @return void
     */
    public function setDirectory($directory)
    {
        $this->directory = $_SERVER['DOCUMENT_ROOT'] . $directory . '/';
    }

    /**
     * @param $file string
     * @return void
     */
    public function setNameFile($file)
    {
        $this->file = $file;
    }

    public function createFile()
    {
        mkdir($this->directory, 0755);
        $this->fp = fopen($this->directory . $this->file, 'a+');
    }

    /**
     * @param $message string
     * @return void
     */
    public function setMessage($message)
    {
        fwrite($this->fp, $message . "\r\n");
    }
}