<?php
class Equipe{
	
private $id;
private $nom;
private $prix;
private $ancienete;
private $description;
public  function __construct($id,$nom,$prix,$ancienete,$description)
{
	$this->id=$id;
    $this->nom=$nom;
	$this->prix=$prix;
	$this->ancienete=$ancienete;
	$this->description=$description;	


}

public  function getid()
{
	return $this->id;
}
public function getnom()
{
	return $this->nom;
}
public function getprix()
{
	return $this->prix;
}

public function getancienete()
{
	return $this->ancienete;
}

public function getdescription()
{
	return $this->description;
}




}



?>