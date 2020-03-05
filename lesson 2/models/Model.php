<?php


namespace App\models;


abstract class Model
{
    private $id;
    private $vendorCode;
    private $name;
    private $price;
    private $size;
    private $color;
    private $rating;
    private $pictures;

    /**
     * Model constructor.
     * @param $id
     * @param $vendorCode
     * @param $name
     * @param $price
     * @param $size
     * @param $color
     * @param $rating
     * @param $pictures
     */
    public function __construct($id, $vendorCode, $name, $price, $size, $color, $rating, $pictures)
    {
        $this->id = $id;
        $this->vendorCode = $vendorCode;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->color = $color;
        $this->rating = $rating;
        $this->pictures = $pictures;
    }

    public function getElement($id){
        //получение одной записи о товаре из БД
    }

    public function getAllElements(){
        //получение всех записей о товаре из БД
    }

    public function editElement($id){
        //редактирование записи о товаре в БД
    }

    public function deleteElement($id){
        //удаление записи о товаре в БД
    }

}