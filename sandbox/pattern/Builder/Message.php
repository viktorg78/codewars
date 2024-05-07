<?php

namespace pattern\Builder;

class Message
{
    private string $text = '';
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setPart(string $part): void
    {
        $this->text .= $part.'<br>';
    }
}