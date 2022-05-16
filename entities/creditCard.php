<?php

class CreditCard{

    public $nome_intestatario;
    public $cognome_intestatario;
    public $numero_carta;
    
    protected $data_di_scadenza;

    function __construct($_nome, $_cognome, $_numCarta, $_scadenza){

        $this->nome_intestatario = $_nome;

        $this->cognome_intestatario = $_cognome;

        $this->numero_carta = $_numCarta;

        $this->data_di_scadenza = $_scadenza;
    }
    
    public function isAvaiable(){

        if($this->data_di_scadenza > date("Y")){
            echo('<p> La tua il pagamento è andato a buon fine </p>');
        }else{
            echo('<p> Pagamento non avvenuto. La carta di cretdito è scaduta! </p>');
        }
        
    }
}

?>