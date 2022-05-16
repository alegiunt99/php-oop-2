<?php
    include 'creditCard.php';
    
    class User{
        

        public $name;
        public $surname;
        public $email;

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

    }
    

?>