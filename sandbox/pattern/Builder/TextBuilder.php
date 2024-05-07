<?php

namespace pattern\Builder;

class TextBuilder implements Builder
{
    private Message $message;

    public function make()
    {
        $this->message = new Message();
    }

    public function makeHeader()
    {
        $this->message->setPart(new Header('Верхняя линия'));
    }

    public function makeBody()
    {
        $this->message->setPart(new Body('Среднея линия'));
    }

    public function makeFooter()
    {
        $this->message->setPart(new Footer('Нижняя линия'));
    }

    public function makeCustom()
    {
        $this->message->setPart(new Custom('Измененная линия'));
    }

    public function getText():Message
    {
        return $this->message;
    }
}