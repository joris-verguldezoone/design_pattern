<?php 

require_once('./IteratorManager.php');

// Celui qui va posséder la liste d'objet
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
        return new IteratorManager($this->items);
    }
}