
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


if (isset($_POST['inscrire'])) {
    
    $Nom=$_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Genre=$_POST['Genre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //affissage des donnés
    echo $Nom;
    echo $Prenom;

    //insertion des donnés a la base des donnés

    $sql = "INSERT INTO users(Nom,Prenom,Genre,email,password)
    VALUES('$Nom','$Prenom','$Genre','$email','$password')";


     if (mysqli_query ($conn,$sql) ){
        header('location: connecter.php');
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
    <title>Sepbook Log in</title>
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
height:38px;
border-radius:4px;
border:none;
background-color:rgb(59,89,152);
color:white;
}
</style>
<body style="font-family:tahoma;background-color:#e9ebee;">
    <div  id="bar">
        <div style="font-size:40px;">Socialbook</div> 
    </div>
    <div id="bar2">
         Inscrivez-vous à Socialbook Apprenant Diamniadio<br><br>

        <form method="post" action="connecter.php">
            <input type="text"id="text"placeholder="Prenom" required><br><br>
            <input type="text"id="text"placeholder="Nom" required><br><br>

            <span style="font-weight:normal;" required>Genre:</span><br>
            <select id="text" required>
                <option>Masculin</option>
                <option>Feminin</option>
            </select><br><br>

            <input type="text"id="text"placeholder="email" required><br><br>

            <input type="password"id="text"placeholder="password" required><br><br>
            

            <input type="submit"id="button"value="s'inscrire"name="s'inscrire">
            <br><br><br>
        </form>
    </div>
    <script src="inscription.js"></script>
</body>
</html>