<?php 
include_once '../model/client.php';
include_once '../controller/servicec.php';
if(!isset($_POST['id'])||!isset($_POST['nom']))
{
	echo "erreur de ";
}

$service=new Client ( $_POST['id'],$_POST['nom']);


$produitc=new servic();
$produitc->Ajouterclient($service);
header('location:client.php');


?>