<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
#bar2{
background-color:#e9ebee;
width:800px;
margin:auto;
margin-top:50px;
padding:10px;
padding-top:50px;
text-align:center;
font-weight:bold;
height:660px;
}
.menu{
    
    grid-template-columns:repeat(4,1fr);
    display: grid;
    width: 200px;
    padding: 14px;
    gap: 10px;
    margin-left: 100px;
}
.sous-menu {
    background-color: white;
    border-radius: 8px;
    margin: 0 26px 0 26px;
    padding: 18px;
    
   
}
 h3{
    display: flex;
}
.sous-menu img {
    width: 20px;
    height: 20px;
}
#profile_pic{
    width:60px;
    margin-top:-40px;
    border-radius:80px;
    border:solid 3px white
  }
  #p2{
    color: ababab;
    font-family:26px;
   margin-top:-20px;
    margin-left: 10px;
    color:black;
    font-size: 18px;
  }

  .main-p {
    display: flex;
    margin-left:;

   }
   #button{
    width:340px;
    height:35px;
    border-radius:4px;
    border:none;
    background-color: rgb(155, 150, 150);
    color:black;
    margin-left:-174px;
    
 }
 .sous-menu p a {
    list-style: none;
    text-decoration:none;
    color:black;
 }
 .back_btn {
    color: #09b070;
    text-decoration: 0;
    display: flex;
    align-items: center;
  }
   .back_btn img {
   height: 16px;
    margin-right:5px ;
    width:30px;
  } 
 

</style>
<body style="background-color:white;">
<a href="profil.php" class="back_btn"><img src="image/back.png"> Retour</a>
    <div id="bar2">
    <form method="post" action="connecter.php">
    <br>
    <div class="main-p">
       <img id="profile_pic" src="image/bar.jpg" alt="">
      <p id="p2">Socialbook</p>
    </div>
    <hr>
    <div class="menu">
        <div class="sous-menu">
            <img src="image/horlo.png" alt="">
           <p><a href="Souvenirs.php">Souvenirs</a></p>
        </div><br>
        <div class="sous-menu">
            <img src="image/enreg.png" alt="">
            <p>Enregistrement</p>
        </div><br>
        <div class="sous-menu">
            <img src="image/group.png" alt="">
            <p>Groupes</p>
        </div><br>
        <div class="sous-menu">
            <img src="image/vidéo.png" alt="">
            <p>Vidéo</p>
        </div><br>
        <div class="sous-menu">
            <img src="image/14690838.png" alt="">
            <p><a href="Marketplace.php">Marketplace</a></p>
        </div><br>
        <div class="sous-menu">
            <img src="image/search friends.png" alt="">
            <p>Retrouver des amis</p>
        </div><br>
        <div class="sous-menu">
            <img src="image/fils.png" alt="">
            <p>Fils</p>
        </div><br>
        <div class="sous-menu">
            <img src="image/evenement.png" alt="">
            <p>Événements</p>
        </div>
    </div>
    <br>
    <input type="submit"id="button"value="Déconnexion"name=" Déconnexion">
    </form>
    </div>
</body>
</html>
