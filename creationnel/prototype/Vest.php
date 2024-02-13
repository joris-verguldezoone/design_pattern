<?php 
require_once('./Clothes.php');

class Vest extends Clothes {
    public function clone(): Clothes {
        return new Vest($this->prix);
    }
}