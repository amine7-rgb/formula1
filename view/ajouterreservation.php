<?php 
include_once '../model/reservation.php';
include_once '../controller/servicec.php';




if(!isset($_POST['id'])||!isset($_POST['date'])||!isset($_POST['reference'])||!isset($_POST['id_circuit'])||!isset($_POST['id_equipe'])||!isset($_POST['id_client']))
{
	echo "erreur de ";
}



 $service= new Reservation($_POST['id'],$_POST['date'],$_POST['reference'],$_POST['id_circuit'],$_POST['id_equipe'],$_POST['id_client']);


   $produitc=new servic();
   $produitc->Ajouterreservation($service);
   header('location:index.php');


?>

