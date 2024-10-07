<?php
//! Classe - Classificazione, caratteristiche comuni che avranno gli oggetti di quella classe

//keyword : class
//Regole del nome: Iniziale maiuscola, in inglese e al singolare. Importante usara le convenzioni perché i framework si aspettano che tu usi queste convenzioni

class Nome
{
    //! Attibuti o proprietà
    //! metodo costruttore
    //!metodi o comportamenti
}

class Animal{
    //! attributi - caratteristiche comuni agli oggetti di questa classe, le caratteristiche comuni è consigliabile inserirle all'inizio della classe.
    // * attributi o metodi statici: agiscono sulla classe e non sull'oggetto
    public $species;
    public $name;
    public $age;
    public static $counter = 0; //keyboard static

    //! metodo costruttore __construct()
    // serve a costruire il mio oggetto. Quì dichiaro la logica che serve per la creazione dell'oggetto.
    public function __construct($specie, $nome, $eta) //ogni attributo deve essere legato al un parametro formale
    {
        $this -> species = $specie;
        //$this - pseudovariabile(variabile speciale, variabile magica) indica il futuro oggetto che instanzieremo

        // -> operatore degli oggetti

        // significato: del singolo oggetto (this) prendi l'attributo che si chiama species.
        // = parametro in ingresso
        $this->name = $nome;
        $this->age = $eta;
        Animal::$counter++; //:: - scope resolution operator
    }

    //! metodi o commportamenti
    public function info(){
        echo "E' un/a $this->species di nome $this->name e ha $this->age anni. \n";
    }

}

//! creiamo un oggetto

$dylan = new Animal('cane', 'dyaln', 16); //nuovo oggetto di classe
var_dump($dylan);


//! ereditarietà: la possibilità di una classe di ereditaria le informazioni di una classe padre - Un professore e uno studente avranno classi in comune ma avranno classi specifiche a seconda della loro posizione
//multipla (c++, python) è permesso comporre classi che siano derivanti da più classi d base
//singola - una sottoclasse eredita/deriva da un'unica classe parent (student erdita da user)
//! extends - Keyword, questa classe è figlia dell'altra
class Pet extends Animal{
    //attributi, costrutte, metodi


    public $owner;
    public $city;
public function __construct($a, $b, $c, $padrone, $citta){

    parent::__construct($a,$b,$c);

    $this->owner = $padrone;
    $this->city = $citta;
}

}



$pet = new Pet('Gennaro','Napoli');
var_dump($pet);

?>