<!-- 
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). (modificato) 
 -->

<?php

    include 'entities/user.php';

    $sandroMazzola = new User('Sandro', 'Mazzola', 'sandroMazz92@alice.it', '+289182839489');
    echo('<pre>');
    var_dump($sandroMazzola);
    echo('</pre>');

    echo('<p>'. $sandroMazzola->subscribed() . '</p>');

?>