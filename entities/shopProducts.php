<?php


    class ShopProduct{

        public $product_name;
        public $product_type;
        public $product_price;

        function __construct($_name, $_type, $_price){

            $this->product_name = $_name;

            $this->product_type = $_type;

            $this->product_price = $_price;
        }

    }

    $dogKennel = new ShopProduct('Cuccia per cani', 'Benessere', 29);

    $catKennel = new ShopProduct('Cuccia per gatti', 'Benessere', 32);

    $birdCage = new ShopProduct('Gabbietta', 'Benessere', 25);

    $acquarium = new ShopProduct('Acquario', 'Benessere', 120);

    $dogsFood = new ShopProduct('Cibo per cani', 'Cibo', 26.99);

    $catsFood = new ShopProduct('Cibo per gatti', 'Cibo', 36.99);

    $birdsFood = new ShopProduct('Mangime per uccelli', 'Cibo', 16.99);
    
    $fishsFood = new ShopProduct('Cibo per pesci', 'Cibo', 15.99);

    $dogsToy = new ShopProduct('Giochino per cani', 'Giochi', 27.99);

    $catsToy = new ShopProduct('Giochino per gatti', 'Giochi', 16.99);

    $catLitter = new ShopProduct('Lettiera per gatti', 'Benessere', 18.99);

    $scratchingPost = new ShopProduct('Tira graffi', 'Giochi', 19.99);


?>