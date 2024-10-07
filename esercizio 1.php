<?php
class Continent
{
    public $nameContinent;
    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }

    public function getMyCurrentLocation()
    {
        echo "Mi trovo in $this->nameContinent \n";
    }
}


class Country extends Continent
{
    public $nameCountry;
    public function __construct($continent, $country)
    {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }

    public function getMyCurrentLocation()
    {
         echo"Mi trovo in $this->nameContinent, $this->nameCountry \n";
    }
}


class Region extends Country
{
    public $nameRegion;
    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent,$country);
        $this->nameRegion = $region;
    }

    public function getMyCurrentLocation()
    {
         echo"Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion  \n";
    }
}

class Province extends Region
{
    public $nameProvince;
    public function __construct($continent, $country, $region ,$province)
    {
        parent::__construct($continent,$country,$region);
        $this->nameProvince = $province;
    }

    public function getMyCurrentLocation()
    {
         echo"Mi trovo in $this->nameContinent, $this->nameCountry, nella regione $this->nameRegion, in provincia di $this->nameProvince  \n";
    }
}

class City extends Province
{
    public $nameCity;
    public function __construct($continent, $country, $region ,$province, $city)
    {
        parent::__construct($continent,$country,$region, $province);
        $this->nameCity = $city;
    }

    public function getMyCurrentLocation()
    {
         echo"Mi trovo in $this->nameContinent, $this->nameCountry, nella regione $this->nameRegion, in provincia di $this->nameProvince, precisamente nella città di $this->nameCity \n";
    }
}

class Street extends City
{
    public $nameStreet;
    public function __construct($continent, $country, $region ,$province, $city, $street)
    {
        parent::__construct($continent,$country,$region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation()
    {
         echo"Mi trovo in $this->nameContinent, $this->nameCountry, nella regione $this->nameRegion, in provincia di $this->nameProvince, precisamente nella città di $this->nameCity e sono residente a $this->nameStreet \n";
    }
}




$myLocation =new Street('Giappone','Regno del fuoco','Campania','Villaggio della foglia', 'Konoha', 'casa del Hokage');
$myLocation->getMyCurrentLocation();


?>