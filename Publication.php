<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
  <style>
    
    #button2{
        padding: 10px;
        margin: ;
        background-color: ababab;
        width: 230px;
        border-radius:10px;
        color: ababab;
        font-size:12px;

      }

    #post_bar{
         margin-top:20px;
         background-color:white;
         padding:10px;
         width: 960px;
         
         margin:auto;
      }
      
      #post{
        padding:4px;
        font-size:13px;
        display:flex;
        margin-bottom:20px;
      }
    #profile_pic{
        width:60px;
        margin-top:30px;
        border-radius:80px;
        border:solid 3px white
      }
#button2{
        padding: 10px;
        background-color: ababab;
        width: 230px;
        border-radius:10px;
        color: ababab;
        font-size:12px;
        height:10%;
        margin-top:46px;


      }
       #butt {
        padding: 4px;
        background-color: ababab;
        width: 100px;
        border-radius:8px;
        color: ababab;
        margin:right;
       }
      nav {
            width: 100%;
            height: 60px;
            background:#405d9b;
            border-bottom: 0.5px solid rgb(167,167,167);
        }
      .liste-items {
        display: flex;
        justify-content: center;
        color: #f1f1f1;
        list-style-type: none;
        gap:36px;
        line-height:50px;
        font-size: 22px;
      }
      .liste-items li a {
        text-decoration:none;
        list-style:none;
        color: white;
        gap:14px;
      }

      .list-items ul a {
        color:white;
        text-decoration: none;
      }
      .items {
        cursor: pointer;
        margin: 0 20px;
        flex-shrink: 0;
      }
     .main-p {
      display: flex;
      margin-left:170px;
     }
     .img-li {
      display:flex;
      gap:12px;
     }
    
    </style>
<body style="font-family:tahoma; background-color:#d0d8e4;">
    
    <div>
      <ul class="me">
        <li style="font-size:34px;list-style:none;color:#405d9b;">Socialbook</li>
      </ul>
    </div>
    <header>
           <nav class="liste-items">
              <li><a href="Publication.php">Publication</a></li>
              <li class="items"><a href="MEMBRES1.php">Membres</a></li>
              <li><a href="Profil.php">Profil</a></li>
              <li><a href="Présentation.php">Présentation</a></li>
              <li><a href="Menu.php">Menu</a></li>
           </nav>
    </header>
   
    <div class="main-p">
       <img id="profile_pic" src="image/bar.jpg" alt="">
       <input type="text" name="search" id="button2" placeholder="Quoi de neuf?" required>
    
    </div><br>
   
    <div id="post_bar">
              <!--posts-->
              <div id="post">
                 <div>
                    <img src="image/user1.jpeg"style="width:70px; height:70px;margin:4px;margin-top:-12px;border-radius:120px;border:solide 3px white;">
                 </div>
                 <div>
                  <div style="font-weight:bold;color:#405d9b;">Fatima Sy</div>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt odit aliquam sed, voluptates vel iusto perspiciatis cumque! Quidem laboriosam molestiae excepturi ipsa rem voluptas quia ullam repellat eos voluptatum! Quasi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, id distinctio! Eius, illo voluptatem. Et, numquam architecto. Consequuntur magni totam ut nesciunt porro? Vero assumenda explicabo dolorum pariatur quidem. Architecto.
                    <img style="width:850px;height:360px" src="image/fille4.jpg" alt="">
                    <br/><br/>
                    <a href="">Aimé</a>.<a href="">commenté</a>.<span style="color:#999;">23 Avril 2020</span>
                 </div>
              </div>
              <!--posts 1-->
              <div id="post">
                 <div>
                    <img src="image/user2.jpeg"style="width:70px; height:70px;margin-top:-12px;border-radius:120px;border:solide 3px white;">
                 </div>
                 <div>
                  <div style="font-weight:bold;color:#405d9b;">Idy Lam</div>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt odit aliquam sed, voluptates vel iusto perspiciatis cumque! Quidem laboriosam molestiae excepturi ipsa rem voluptas quia ullam repellat eos voluptatum! Quasi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, id distinctio! Eius, illo voluptatem. Et, numquam architecto. Consequuntur magni totam ut nesciunt porro? Vero assumenda explicabo dolorum pariatur quidem. Architecto.
                    <img style="width:850px;height:360px" src="image/mecanic1.jpg" alt="">
                    <br/><br/>
                    <a href="">Aimé</a>.<a href="">commenté</a>.<span style="color:#999;">April 23 2020</span>
                 </div>
              </div>
              <!--posts 2-->
              <br><br>
              <div id="post">
                 <div>
                    <img src="image/eto1.jpg"style="width:70px; height:70px;margin:4px;margin-top:-12px;border-radius:120px;border:solide 3px white;">
                 </div>
                 <div>
                  <div style="font-weight:bold;color:#405d9b;">Ramatoulaye</div>
                   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio minima ab esse optio cupiditate mollitia itaque veniam explicabo libero illo soluta accusantium magni repellat, in necessitatibus qui asperiores rem debitis.
                   <br><br>
                    <img style="width:850px;height:360px" src="image/fiil3.jpg" alt="">
                    <a href="">Aimé</a>.<a href="">commenté</a>.<span style="color:#999;">April 23 2020</span>
                 </div>
              </div>
            
      </div> 
    </div>

    <?php 
    
    include'connexion1.php';

    ?>
    
        <?php
        if (isset($_GET['click'])) {

            $field = $_GET['field'];
            
            $sql = "SELECT * FROM users1 WHERE nom  LIKE '%$field%'";
            
            $result = mysqli_query($connect, $sql);
    
            while ($row = mysqli_fetch_assoc($result)) {
               
                echo 'Fatima';
                
            }
        } else {
            echo "" ;
        }
    
        ?>
    
</body>
</html>