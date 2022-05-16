<?php
    
    class User{
        public $name;
        public $surname;
        public $email;
        public $sconto = 0;

        protected $phoneNumber;

        private $isSubscribed = true;

        function __construct($_name, $_surname, $_email, $_phoneNumber){
            
            $this->name = $_name;

            $this->surname = $_surname;

            $this->email = $_email;

            $this->phoneNumber = $_phoneNumber;

        }

        public function subscribed(){

            if ($this->isSubcribed = false) {
                return $this->sconto = 0;
            }else{
                return $this->sconto = 20;
            }
            echo($this->sconto);
        }
    }

    

?>