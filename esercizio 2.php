<?php
class Vertebrates
{
    public function __construct()
    {
        $this->printVertebrates();
    }

    protected function printVertebrates(): void
    {
        echo "Sono un vertebrato. \n";
    }
}

class WarmBlooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded(): void
    {
        echo "Sono un sangue caldo. \n";
    }
}

class ColdBlooded extends Vertebrates
{
    public function __construct()
    {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded(): void
    {
        echo "Sono un sangue freddo. \n";
    }
}

class Mammals extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printMammals();
    }

    protected function printMammals(): void
    {
        echo "Sono un Mammifero. \n";
    }
}

class Birds extends WarmBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printBirds();
    }

    protected function printBirds(): void
    {
        echo "Sono un Uccello. \n";
    }
}



class Fish extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish(): void
    {
        echo "Sono un pesce \n";
    }
}


class Reptiles extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printReptiles();
    }

    protected function printReptiles(): void
    {
        echo "Sono un rettile \n";
    }
}

class Amphibians extends ColdBlooded
{
    public function __construct()
    {
        parent::__construct();
        $this->printAmphibians();
    }

    protected function printAmphibians(): void
    {
        echo "Sono un Anfibio \n";
    }
}



$froggy = new Amphibians();

?>