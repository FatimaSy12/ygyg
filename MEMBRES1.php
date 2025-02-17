<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Employés</title>
    <link rel="stylesheet" href="css/style5.css">
</head>
<body>
    <div class="form">
     <a href="Publication.php" class="back_btn"><img src="image/back.png"> Retour</a>
        <h1 style="color:white;font-size:28px;">Listes des Membres</h1>
        <a href="ajouter.php" class="Btn_add"> <img src="image/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>id</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "connexion1.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($conn , "SELECT * FROM ajout");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'employé ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['nom']?></td>
                            <td><?=$row['prenom']?></td>
                            <td><?=$row['age']?></td>
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="image/write.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="image/remove.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
   
   
   
   
    </div>
</body>
</html>