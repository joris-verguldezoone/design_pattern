<?php 
require_once('./interfaces/ILowerBody.php');


require_once('./class/LowerBodyClothing.php');

require_once('./class/BangladeshiPant.php');
require_once('./class/BangladeshiJean.php');
require_once('./class/BangladeshiShort.php');


class BangladeshiFactory implements ILowerBody
{
    public function createJeans($name, $price, $image, $description, $origin): IClothes
    {
        return new BangladeshiJean($name, $price, $image, $description, $origin);
    }

    public function createPants($name, $price, $image, $description, $origin): IClothes
    {
        return new BangladeshiPant($name, $price, $image, $description, $origin);
    }

    public function createShort($name, $price, $image, $description, $origin): IClothes
    {
        return new BangladeshiShort($name, $price, $image, $description, $origin);
    }
}
?>