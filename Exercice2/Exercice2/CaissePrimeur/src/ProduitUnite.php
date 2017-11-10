<?php 

require_once('Produit.php');


class ProduitUnite extends Produit{

    private $prixUnite = 0;

    private $nombreProduit = 0;

    private static $instanceU = 0;


	public function __construct($PrixU,$Nombre){
        echo "<br>Creation d'un produit";
        parent::__construct();
        self::$instanceU++;
        $this->prixUnite = $PrixU;
        $this->nombreProduit = $Nombre;
    }
    
    public function __toString(){
        $text = "<hr> Produit ".
                "<br> Prix au kilo :".$this->prixUnite.
                "<br> Nombre de produit : ".$this->nombreProduit."<hr>";
        return $text;
    }


    public static function nbInstance(){
        echo "<br><br>";
        return self::$instanceU;
        
    }
  




    //accesseurs

	public function setPrix($Prix)
	{
	  $this->prixUnite = $Prix;
	}

	public function setNombre($NB)
	{
	  $this->nombreProduit = $NB;
	}
  

    
    public function Calculer(){
        echo "<br><br>";
        return ($this->nombreProduit*$this->prixUnite);

    }


    // public function CalculerUnite(){
    //     echo "<br><br>";
    //     return ($this->nombreProduit*$this->prixUnite);
    // }

    
}