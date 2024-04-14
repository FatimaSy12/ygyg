<?php
$servername="localhost";
$username="root";
$password="";
$dbname="apprenant_db";

//ligne de connexion
$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn){
    echo '';
}


//recupérer les donnés de l'inscription


if (isset($_POST['Se Connecter'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    //affissage des donnés
    echo $Nom;
    echo $Prenom;

    //insertion des donnés a la base des donnés

    $sql = "INSERT INTO user(email and password)
    VALUES('$email','$password')";


     if (mysqli_query ($conn,$sql) ){
        header('location: Acceuil.php');
     }
     else {
        echo 'erreur';
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>
<style>
    #bar{
        height: 100px; 
        background-color:rgb(59,89,152);
        color:#d9dfeb;
        padding:4px;
 }
 #signup_button{
    background-color:#42b72a;
    width:70px;
    text-align:center;
    padding:4px;
    border-radius:4px;
    float:right;
 }
 #bar2{
    background-color:white;
    width:800px;
    margin:auto;
    margin-top:50px;
    padding:10px;
    padding-top:50px;
    text-align:center;
    font-weight:bold;
 }
 #text{
    height:35px;
    width: 400px;
    border-radius:4px;
    border:solid 1px #ccc;
    padding:4px;
    font-size:14px;
 }
 #button{
    width:400px;
    height:40px;
    border-radius:4px;
    border:none;
    background-color:rgb(59,89,152);
    color:white;
 }
 li a {
    list-style: none;
    text-decoration:none;
    color:black;
 }
 li {
    list-style: none;
    text-decoration:none;
    
      
 }
 a {
    list-style: none;
    text-decoration:none;
    
 }
 
</style>
<body style="font-family:tahoma;background-color:#e9ebee;">
    <div  id="bar">
        <div style="font-size:40px;">Socialbook</div>
    </div>
    <div id="bar2">
          Se connecter à Socialbook Apprenant Diamniadio<br><br>

        <form method="post" action="Publication.php">
            
            <input type="text"id="text"placeholder="email"required><br><br>

            <input type="password"id="text"placeholder="password"required><br><br>
            

            <input type="submit"id="button"value="Se Connecter"name="Se Connecter"><br><br>
            
            <li><a href="index.php">s'inscrire</a></li>
        </form>
    </div>
</body>
</html>