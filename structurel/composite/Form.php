<?php 
require_once('./IRenderable.php');

class Form implements IRenderable
{
    /**
     * @var IRenderable[]
     */
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode . '</form>';
    }

    public function addElement(IRenderable $element)
    {
        $this->elements[] = $element;
    }
}