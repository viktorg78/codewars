<?php

namespace pattern\Builder;

class Operator
{
    public function make(Builder $builder):Message
    {
        $builder->makeHeader();
        $builder->makeBody();
        $builder->makeFooter();
        $builder->makeCustom();
        return $builder->getText();
    }
}