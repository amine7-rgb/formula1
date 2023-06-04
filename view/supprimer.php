<?php 

include_once '../config.php';
include_once '../controller/servicec.php';


$produitc=new servic();
$prod=$produitc->supprimervoiture($_POST['id']);




header('location:voiture.php');

?>


