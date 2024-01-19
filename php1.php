<?php
/*
Traccia 1:
- Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente:
    +-|Continent
    +-----------|Country
    +--------------------|Region
    +---------------------------|Province
    +------------------------------------|City
    +------------------------------------------|Street
- Ogni classe avra' un attributo public del tipo:
    $nameContinent:
    $nameCountry;
    $nameRegion;
    $nameProvince;
    $nameCity;
    $nameStreet;
- La prima classe genitore avra' la seguente struttura:
    class Continent
    {
      public $nameContinent;
      
      public function __construct($continent)
      {
        $this->nameContinent = $continent;
      }
      
    }
- Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato `getMyCurrentLocation()` che stampi a schermo la seguente frase:
 “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“*/

 class Continent{
    public $nameContinent;

    public function __construct($_continent){
        $this->nameContinent = $_continent;
    }

 }

 class Country extends Continent{
    public $nameCountry;

    public function __construct($_continent,$_country){
        parent::__construct($_continent);
        $this->nameCountry = $_country;
    }
 }

 class Region extends Country{
    public $nameRegion;
    public function __construct($_continent,$_country,$_region){
        parent::__construct($_continent,$_country);
        $this->nameRegion = $_region;
    }
 }


 class Province extends Region{
    public $nameProvince;
    public function __construct($_continent,$_country,$_region,$_province){
        $this->nameProvince = $_province;
        parent::__construct($_continent,$_country,$_region);
    }
 }

class City extends Province{
    public $nameCity;
    public function __construct($_continent,$_country,$_region,$_province,$_city){
        $this->nameCity = $_city;
        parent::__construct($_continent,$_country,$_region,$_province);
    }
}

class Street extends City{
    public $nameStreet;
    public function __construct($_continent,$_country,$_region,$_province,$_city,$_street){
        $this->nameStreet = $_street;
        parent::__construct($_continent,$_country,$_region,$_province,$_city);
    }

    public function getMyCurrentLocation(){
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet";
    }
}


$location=new Street("Europa","Italia","Lazio","FR","Ceccano","Via fontana dei piatti");


$location->getMyCurrentLocation();