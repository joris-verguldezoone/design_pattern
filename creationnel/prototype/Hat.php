<?php 
require_once('./Clothes.php');

class Hat extends Clothes {
    public function clone(): Clothes {
        return new Hat($this->prix);
    }
}