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

    public function setDirectory(string $directory)
    {
        $this->directory = $_SERVER['DOCUMENT_ROOT'] . $directory . '/';
    }

    public function setNameFile(string $file)
    {
        $this->file = $file;
    }

    public function createFile()
    {
        mkdir($this->directory, 0755);
        $this->fp = fopen($this->directory . $this->file, 'a+');
    }

    public function setMessage(string $message)
    {
        fwrite($this->fp, $message . "\r\n");
    }
}