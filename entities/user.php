<?php
    
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

        

    }

    class SubcribedUser extends User{

        public $sconto = 20;

    }
    

?>