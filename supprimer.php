<?php
  //connexion a la base de données
  include_once "connexion1.php";
  //récupération de l'id dans le lien
  $id= $_GET['id'];
  //requête de suppression
  $req = mysqli_query($conn , "DELETE FROM ajout WHERE id = $id");
  //redirection vers la page index.php
  header("Location:MEMBRES1.php")
?>