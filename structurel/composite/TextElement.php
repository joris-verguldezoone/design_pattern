<?php 

require_once('./IRenderable.php');

class TextElement implements IRenderable
{
    public function __construct(private string $text)
    {
    }

    public function render(): string
    {
        return $this->text;
    }
}