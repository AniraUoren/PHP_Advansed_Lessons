<?php


namespace App\models;


class Product extends Model
{
    private $trend;
    private $category;
    private $brand;
    private $designer;
    private $collection;
    private $material;
    private $description;

    /**
     * Product constructor.
     * @param $id
     * @param $vendorCode
     * @param $name
     * @param $price
     * @param $size
     * @param $color
     * @param $rating
     * @param $pictures
     * @param $trend
     * @param $category
     * @param $brand
     * @param $designer
     * @param $collection
     * @param $material
     * @param $description
     */
    public function __construct($id, $vendorCode, $name, $price, $size, $color, $rating, $trend, $pictures, $category, $brand, $designer, $collection, $material, $description)
    {
        parent::__construct($id, $vendorCode, $name, $price, $size, $color, $rating, $pictures);

        $this->trend = $trend;
        $this->category = $category;
        $this->brand = $brand;
        $this->designer = $designer;
        $this->collection = $collection;
        $this->material = $material;
        $this->description = $description;
    }

    public function showProductCard(){

    }

    public function showProductPage(){

    }

}