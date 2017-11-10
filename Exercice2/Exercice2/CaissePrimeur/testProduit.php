<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS



	// Fichier de tests "unitaires" 


	// afficher les erreurs du script 

	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
    
	require_once("src/Produit.php");
	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnite.php");

	// instanciation

	$PK = new ProduitKilo(10, 50);
 	$PU = new ProduitUnite(16, 70);

	// instanciation

	$PK2 = new ProduitKilo(10, 50);
 	$PU2 = new ProduitUnite(16, 70);

	// instanciation

	$PK3 = new ProduitKilo(10, 50);
 	$PU4 = new ProduitUnite(16, 70);

    // var_dump($P1);
    // var_dump($P2);

    echo $PK;
    echo $PU;

    $PK->setPrix(6);

    echo $PK->Calculer()."€";
    echo $PU->Calculer()."€";
    

    $PK->setPrix(6);
    $PK->setKilo(50);
    $PU->setPrix(9);
    $PU->setNombre(45);


    echo $PK;
    echo $PU;

    echo $PK->Calculer()."€";
    echo $PU->Calculer()."€";


    echo Produit::nbInstance()." Produit ont été créés";
    echo "<br>Dont <br>".ProduitKilo::nbInstance()." Produit au kilo";
    echo "<br>Et<br>".ProduitUnite::nbInstance()." Produit à l'unité";

?>