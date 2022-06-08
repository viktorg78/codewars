<?php

namespace api;


use JsonSerializable;


class DTOApi implements JsonSerializable
{
    /** @var string */
    private $name;
    /** @var int */
    private $number;

    /**  */
    public static function create(string $name, int $number):DTOApi{
        $result = new DTOApi();
        $result->number = $number;
        $result->name = $name;
        return $result;
    }

    public function jsonSerialize()
    {
        return [
                 "name" => $this->name,
                 "number" => $this->number
              ];
    }
}