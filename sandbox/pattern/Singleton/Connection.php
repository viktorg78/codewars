<?php

namespace pattern\Singleton;

final class Connection
{
    private static ?self $instance = null;
    private static string $name;


    /**
     * @return string
     */
    public static function getName(): string
    {
        return self::$name;
    }

    /**
     * @param string $name
     * @return void
     */
    public static function setName(string $name)
    {
        self::$name = $name;
    }

    /**
     * Пораждающий патерн одиночка
     * @return self
     */
    public static function getInstance(): self
    {
        if (self::$instance === null)
            self::$instance = new self();
        return self::$instance;
    }

}