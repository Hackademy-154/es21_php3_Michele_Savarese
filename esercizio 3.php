// todo ES NUMERO 3

// Dato il seguente codice di partenza:
// class Car {
//   private $num_telaio;
// }
// class Fiat extends Car {
//   protected $license;
//   protected $name;
// }
// Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severita' che ritieni piu' opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina e' Opel, con targa ND 123 OJ e numero di Telaio 1234“.


<?php
class Car {
  private $num_telaio;
  public function __construct($telaio){
    $this->num_telaio = $telaio;
  }
  protected function getNumTelaio(){
    return $this->num_telaio;
  }

}

class Fiat extends Car {
  protected $license;
  protected $brand;

  public function __construct($telaio,$license,$brand){
    parent::__construct($telaio);
    $this->license = $license;
    $this->brand = $brand;
    }
}


class Tagliand extends Fiat {
    protected $anno;
    protected $anno_revisione;

    public function __construct($telaio,$license,$brand,$tagliando,$revisione){
        parent::__construct($telaio,$license,$brand);
            $this->anno=$tagliando;
            $this->anno_revisione=$revisione;
    }
    protected function getTagliando(){
        return $this->anno;
    }
    protected function getRevisione(){
        return $this->anno_revisione;
    }

    public function printCar(){
        echo"\n La mia macchina è una {$this->brand}, targata {$this->license}, numero di telaio {$this->getNumTelaio()}, ultima revisione nel {$this->getRevisione()} e ultimo tagliando nel{$this->getTagliando()} \n";
    }
}

$car = new Tagliand("12345", "ef408gh", "FIAT", "2020","2022");
echo $car->printCar();
var_dump($car);
?>