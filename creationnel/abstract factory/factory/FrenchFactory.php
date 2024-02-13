<?php 
require_once('./interfaces/ILowerBody.php');

require_once('./class/LowerBodyClothing.php');
require_once('./class/FrenchPant.php');
require_once('./class/FrenchJean.php');
require_once('./class/FrenchShort.php');



class FrenchFactory implements ILowerBody
{
    public function createJeans($name, $price, $image, $description, $origin): IClothes
    {
        return new FrenchJean($name, $price, $image, $description, $origin);
    }

    public function createPants($name, $price, $image, $description, $origin): IClothes
    {
        return new FrenchPant($name, $price, $image, $description, $origin);
    }

    public function createShort($name, $price, $image, $description, $origin): IClothes
    {
        return new FrenchShort($name, $price, $image, $description, $origin);
    }
}
?>