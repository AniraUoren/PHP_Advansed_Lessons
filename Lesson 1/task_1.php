<?php

class Product {
    public $id;
    public $vendorCode;
    public $name;
    public $description;
    public $price;

    public function __construct($id = 0, $vendorCode = 0, $name = 'nonename', $description = 'nodescription', $price = 0)
    {
        $this->id = $id;
        $this->vendorCode = $vendorCode;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function DisplayProductCard(){
        // вывод карточки товара на экран
    }

    public function EditProductParams(){
        //метод для редактирования данных о товаре
    }

    public function DeleteProductFromDB(){
        //удаление данных о товаре из базы данных
    }

}

$product = new Product(1, 1000001, "t-shirt", "some description for t-shirt", 100);

//наследниками класса могут быть например карточки товара в корзине, т.к. там добавляется еще значение quantity
