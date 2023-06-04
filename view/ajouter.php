<?php 
include_once '../model/voiture.php';
include_once '../controller/servicec.php';






if(!isset($_POST['id'])||!isset($_POST['nom'])||!isset($_POST['vitesse'])||!isset($_POST['matricule'])||!isset($_POST['prix'])||!isset($_POST['logo'])||!isset($_POST['poid'])||!isset($_POST['hauteur'])||!isset($_POST['largeur'])||!isset($_POST['description'])||!isset($_POST['marque'])||!isset($_POST['id_equipe']))
{
	echo "erreur de ";
}

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 
 $service= new Voiture($_POST['id'],$_POST['nom'],$_POST['vitesse'],$_POST['matricule'],$_FILES['image']['name'],$_POST['prix'],$_POST['logo'],$_POST['poid'],$_POST['hauteur'],$_POST['largeur'],$_POST['description'],$_POST['marque'],$_POST['id_equipe']);


   $produitc=new servic();
   $produitc->Ajoutervoiture($service);
   header('location:voiture.php');


?>

