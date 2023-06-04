<?php
class Reservation{
	
private $id;
private $reference;
private $date;
private $id_circuit;
private $id_equipe;
private $id_client;



public  function __construct($id,$date,$reference,$id_circuit,$id_equipe,$id_client)
{
	$this->id=$id;
    $this->date=$date;
    $this->reference=$reference;
    $this->id_circuit=$id_circuit;
    $this->id_equipe=$id_equipe;
    $this->id_client=$id_client;

}

public  function getid()
{
	return $this->id;
}
public function getreference()
{
	return $this->reference;
}

public function getdate()
{
	return $this->date;
}


public function getid_circuit()
{
	return $this->id_circuit;
}

public function getid_equipe()
{
	return $this->id_equipe;
}

public function getid_client()
{
	return $this->id_client;
}


}



?>