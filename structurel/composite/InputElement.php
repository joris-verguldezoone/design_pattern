<?php 

require_once('./IRenderable.php');

class InputElement implements IRenderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}