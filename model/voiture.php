<?php
class Voiture{
	
private $id;
private $nom;
private $vitesse;
private $matricule;
private $image;
private $prix;
private $logo;
private $poid;
private $hauteur;
private $largeur;
private $description;
private $marque;
private $id_equipe;


public  function __construct($id,$nom,$vitesse,$matricule,$image,$prix,$logo,$poid,$hauteur,$largeur,$description,$marque,$id_equipe)
{
	$this->id=$id;
    $this->nom=$nom;
    $this->vitesse=$vitesse;
    $this->matricule=$matricule;
    $this->image=$image;
    $this->prix=$prix;
    $this->logo=$logo;
    $this->poid=$poid;
    $this->hauteur=$hauteur;
    $this->largeur=$largeur;
    $this->description=$description;
    $this->marque=$marque;
    $this->id_equipe=$id_equipe;



}

public  function getid()
{
	return $this->id;
}
public function getnom()
{
	return $this->nom;
}

public function getvitesse()
{
	return $this->vitesse;
}

public function getmatricule()
{
	return $this->matricule;
}

public function getimage() {
    return $this->image;
 } 
 
 public function getprix() {
    return $this->prix;
} 
    
public function getlogo() {
     return $this->logo;
}
public function getpoid() {
      return $this->poid;
     } 
public function gethauteur() {
       return $this->hauteur;
    } 
public function getlargeur() {
        return $this->largeur;
     } 

     public function getdescription() {
        return $this->description;
     } 

public function getmarque() {
         return $this->marque;
      } 
public function getid_equipe() {
        return $this->id_equipe;
     } 



}




?>