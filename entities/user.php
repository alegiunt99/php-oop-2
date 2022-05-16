<?php

    include 'creditCard.php';

    include 'shopProducts.php';

    class User{
        

        public $name;
        public $surname;
        public $email;
        public $choosedProducts = [];

        protected $phoneNumber;

        public $isSubscribed = false;

        function __construct($_name, $_surname, $_email, $_phoneNumber){
            
            $this->name = $_name;

            $this->surname = $_surname;

            $this->email = $_email;

            $this->phoneNumber = $_phoneNumber;

        }

        public function getCreditCard($_cardNumber, $_dateEnd){
            
            $creditCard = new CreditCard($this->name, $this->surname, $_cardNumber, $_dateEnd);

            $creditCard->isAvaiable();

            var_dump($creditCard);

        }
        
    }

    // creo un secondo utente creando uno sconto per lui che è iscritto
    class SubcribedUser extends User{

        public $sconto = 20;

        public function setDiscount(){
            
            $discount = ($this->product_price / 20) * 100;

            $this->product_price = $this->product_price - $discount;

            return $this->product_price;

        }

    }
    

?>