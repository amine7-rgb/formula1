<?php
include_once '../config.php';
include_once '../controller/servicec.php';

$db=config::getConnexion();
$sql="SELECT * FROM equipe ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$equipes=$recipesStatement->fetchall();

$db=config::getConnexion();
$sql="SELECT * FROM client ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$clients=$recipesStatement->fetchall();


$db=config::getConnexion();
$sql="SELECT * FROM circuit ";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute();
$circuits=$recipesStatement->fetchall();




if (isset($_GET['id'])) {
    $carId = $_GET['id'];

    // Create an instance of the service class
    $service = new servic();

    // Retrieve the car details by ID
    $car = $service->getVoitureById($carId);

    // Process the car details as needed
    // ...
}

 ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <title>resaweb</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">FAST ONE</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">VOITURE</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">CONCEPTION</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Tapez vers le texte">
                <a href="#"> <button class="btn">Recherche</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Réservez votre<br><span>formule 1</span> <br>Pour une course</h1>
            <p class="par">Choisissez la voiture de votre écuries préféré <br> et clizer vous dans la peau d'un vrais pilote de f1</p>


            
                    </div>
                </div>
        </div>
    </div>
 

               
        </div>



        <style>
    .rectangle-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
        width: 70%;
        margin: 0 auto; /* Ajout de cette ligne pour centrer horizontalement */
    }

    .rectangle {
        width: 300px; /* Ajustement de la largeur des rectangles */
        height: 500px;
        background-color: #f1f1f1;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center; /* Ajout de cette ligne pour centrer le contenu verticalement */
        padding: 20px;
        
    }

    .car-image {
        width: 80%;
        height: auto;
        margin-right: 20px;
        object-fit: cover;
        border-radius: 8px;
        margin-top: 50px;
    }
    .logo-image {
        position: absolute; /* Ajout de cette ligne pour rendre la position absolue */
        top: 0px;
        right: 25px;
        width: 50px;
        height: 50px;
        object-fit: cover;
    }

    form {
        width: 50%;
        margin-left: 200px;
        margin-top: 50px;
    }
  
    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input,
    select {
        width: 50%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        padding: 10px 20px;
        background-color: #00d9e1;
        color: #00d9e1;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>






<div class="rectangle-container">
    <div class="rectangle">
    <img class="logo-image" src="uploads/<?php echo $pro['logo']; ?>" alt="Description du logo">
    <img class="car-image" src="./uploads/<?php echo $car['image']; ?>" alt="Description de l'image">

        <form action="ajouterreservation.php" method="POST">
            <input type="hidden" name="id" />

            <label for="date">Date :</label>
            <input type="date" name="date" id="date" required>

            <label for="reference">Référence :</label>
            <input type="text" name="reference" id="reference" required>

            <label for="id_equipe">Équipe :</label>
            <select name="id_equipe">
                <?php foreach ($equipes as $eq): ?>
                    <option value="<?php echo $eq['id'] ?>"><?php echo $eq['nom'] ?></option>
                <?php endforeach; ?>
            </select>

            <label for="id_circuit">Circuit :</label>
            <select name="id_circuit">
                <?php foreach ($circuits as $cir): ?>
                    <option value="<?php echo $cir['id'] ?>"><?php echo $cir['nom'] ?></option>
                <?php endforeach; ?>
            </select>

            <label for="id_client">Client :</label>
            <select name="id_client">
                <?php foreach ($clients as $caa): ?>
                    <option value="<?php echo $caa['id'] ?>"><?php echo $caa['nom'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>


            <button class="cn" style="color: black;" type="submit" name="Ajouter" value="Réserver">Reserver</button>
        </form>
    </div>
</div>

      
    

    
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>