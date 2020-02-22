<?php


namespace App\models;


class CartProduct extends Model
{
    private $quantity;

    /**
     * CartProduct constructor.
     * @param $id
     * @param $vendorCode
     * @param $name
     * @param $price
     * @param $size
     * @param $color
     * @param $rating
     * @param $pictures
     * @param $quantity
     */
    public function __construct($id, $vendorCode, $name, $price, $size, $color, $rating, $pictures, $quantity)
    {
        parent::__construct($id, $vendorCode, $name, $price, $size, $color, $rating, $pictures);

        $this->quantity = $quantity;
    }

    public function showCartElements(){
        //вывод сохраненной пользовательской корзины
    }

}