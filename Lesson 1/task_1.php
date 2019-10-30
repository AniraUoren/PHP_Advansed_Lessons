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

    public function displayProductCard(){
        // вывод карточки товара на экран

        echo "<div>" .
            "<p>". $this->vendorCode.  "</p>" .
            "<p>". $this->name .  "</p>" .
            "<p>". $this->description .  "</p>" .
            "<p>" . $this->price ."</p>" .
            "</div>";
    }

    public function editProductParams(){
        //метод для редактирования данных о товаре
    }

    public function deleteProductFromDB(){
        //удаление данных о товаре из базы данных
    }

}

class CartProduct extends Product{
    public $quantity;

    public function __construct($id, $vendorCode, $name, $description, $price, $quantity)
    {
        parent::__construct($id, $vendorCode, $name, $description, $price);
        $this->quantity = $quantity;
    }

    public function displayProductCard()
    {
        echo "<div>" .
            "<p>". $this->vendorCode.  "</p>" .
            "<p>". $this->name .  "</p>" .
            "<p>". $this->description .  "</p>" .
            "<p>" . $this->price ."</p>" .
            "<p>" . $this->quantity ."</p>" .
            "</div>";
    }
}

$product = new Product(1, 1000001, "t-shirt", "some description for t-shirt", 100);
//$product->DisplayProductCard();
//var_dump($product);
$cartProduct = new CartProduct(2, 1000002, "t-shirt", "some description for t-shirt", 100, 3);

echo "/////////////////////////Вывод карточки товара (каталог)////////////////";
$product->displayProductCard();
echo "/////////////////////////Вывод карточки товара (корзина)////////////////";
$cartProduct->displayProductCard();