<?php
abstract class Clothes {
    protected $prix;

    public function __construct($prix) {
        $this->prix = $prix;
    }

    abstract public function clone(): Clothes; 

    public function getPrix() {
        return $this->prix;
    }

    public function setPrix($nouveauPrix) {
        $this->prix = $nouveauPrix;
    }
}