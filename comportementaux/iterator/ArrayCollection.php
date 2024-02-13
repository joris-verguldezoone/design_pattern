<?php 

require_once('./ArrayIterator.php');

class ArrayCollection implements IteratorAggregate
{
    private $items = [];

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    // Méthode pour récupérer un itérateur
    public function getIterator(): Traversable
    {
        return new Toto($this->items);
    }
}