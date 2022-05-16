<?php
    
    class User{
        public $name;
        public $surname;
        public $email;

        protected $phoneNumber;

        public $isSubscribed = true;

        function __construct($_name, $_surname, $_email){

        }
    }


?>