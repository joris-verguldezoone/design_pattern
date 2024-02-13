<?php 
require_once('./Clothes.php');

class Pant extends Clothes {
    public function clone(): Clothes {
        return new Pant($this->prix);
    }
}