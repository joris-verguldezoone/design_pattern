<?php
interface ILowerBody // famille de vêtements 
{                   // compatible avec France ou Bangladesh
    public function createJeans(string $name, int $price, ?string $image, string $description, int $origin): IClothes;
    public function createPants(string $name, int $price, ?string $image, string $description, int $origin): IClothes;
    public function createShort(string $name, int $price, ?string $image, string $description, int $origin): IClothes;
}
?>