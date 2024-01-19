<?php
/*
Traccia 2:
- Data questo semplice schema di classificazione animale
![](https://paper-attachments.dropboxusercontent.com/s_80EAE61E208B688C904FC6ED960CED89900BD5EFCDB984657B8781F9C05B91ED_1705598572455_image-20230508-182600.png)

- crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:
    - le classi non devono avere attributi;
    - ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
    - non puoi realizzare metodi definiti public per stampare il risultato;rt
    - l’unico metodo public ammesso e' il costrutture.
- Il risultato atteso sara':
     $magikarp = new Fish();
    //Nel terminale visaulizzerete:
    Sono un animale Vertebrato
    Sono un animale a Sangue Freddo
    Splash!*/

class Vertebrato
{
    public function __construct()
    {
        echo "Sono un animale Vertebrato\n";
    }
}

class SangueCaldo extends Vertebrato
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un animale a Sangue Caldo\n";
    }
}

class SangueFreddo extends Vertebrato
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un animale a Sangue Freddo\n";
    }
}


class Mammifero extends SangueCaldo
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un Mammifero\n";
    }
}

class Uccello extends SangueCaldo
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un Uccello\n";
    }
}

class Anfibio extends SangueFreddo
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un Anfibio\n";
    }
}

class Rettile extends SangueFreddo
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un Rettile\n";
    }
}

class Pesce extends SangueFreddo
{
    public function __construct()
    {
        parent::__construct();
        echo "Sono un Pesce\n";
    }
}


$magikarp=new Pesce();

$simba=new Mammifero();