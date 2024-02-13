<?php
interface IClothes
{
    public function getName(): string;
    public function getPrice(): int;
    public function getImage(): string;
    public function getDescription(): string;
    public function getOrigin(): int;
}

?>