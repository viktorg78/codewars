<?php

namespace api;

abstract class Request
{
    /**
     *  create Создание запроса на сторонний адрес
     *
     * @param string $url
     * @param array $data
     * @param string $method
     * @return string Возврощает отвер сервиса
     */
    public abstract static function create(string $url, array $data, string $method): string;

}