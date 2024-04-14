<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sepbook</title>
</head>
<style type="text/css">
      #blue_bar{
        height:50px;
        background-color:#405d9b;
        color:#d9dfeb;
      }
      #button{
        padding: 10px;
        background-color: #405d9b;
        width: 240px;
        border-radius:10px;
        color: white;
        border: none;
        font-size:14px;

      }
      #button2{
        padding: 10px;
        background-color: ababab;
        width: 200px;
        border-radius:10px;
        color: noir;
        border: none;
        font-size:14px;

      }
      #profile_pic{
        width:120px;
        margin-top:-200px;
        border-radius:80px;
        border:solid 3px white;
      }
      #menu_buttons{
        width:100px;
        display: inline-block;
        margin:2px;
      }
      
      #friends_img{
        width:100px;
        float:left;
        margin:8px;
      }
      #friends_bar{
        background-color:white;
        min-height:400px;
        margin-top:20px;
        color:#aaa;
        padding:8px;
      }
      #friends{
        clear:both;
        font-size:12px;
        font-weight:bold;
        color:#405d9b;
      }
      textarea{
        width: 100%;
        border:none;
        font-family:tahoma;
        font-size:14px;
        height:60px;

      }
      #post_button{
        float:right;
        background-color:#405d9b;
        border:none;
        color:white;
        padding:4px;
        font-size:14px;
        border-radius:2px;
        width:50px;
      }
      #post_bar{
         margin-top:20px;
         background-color:white;
         padding:10px;
      }
      #post{
        padding:4px;
        font-size:13px;
        display:flex;
        margin-bottom:20px;
      }
      nav {
            width: 100%;
            height: 50px;
            background:#405d9b;
            border-bottom: 0.5px solid rgb(167,167,167);
        }
        
      .liste-items {
        display: flex;
        justify-content: center;
        color: #f1f1f1;
        list-style-type: none;
        
        line-height:50px;
        font-size: 22px;
      }
      .items {
        cursor: pointer;
        margin: 0 20px;
        flex-shrink: 0;
      }
      .items span {
        font-size: 17px;
      }
      .items:nth-child(3){
        margin-left:0;
      }
      /*sous liste */

      .sous-liste {
        position: relative;
        top: -2px;
        display: none;

      }
      .items-sous-liste {
        list-style-type: none;
        text-align: center;
        padding: 0 10px;
        background: #405d9b;
        border-bottom:0.5px solid rgb(167,167,167);
      }
      .items-sous-liste:hover{
        background: rgb(156,156,156);
      }
      .items:hover > ul {
        display: block;
      }
      .me {
        display: flex;
        list-style:none;
        gap:120px;
        margin-top:14px;
      }
      .moi {
        display: flex;
      }
      .AP-a li a {
        
        color:black;
      }
      .AP-a li  {
        list-style: none;
        text-decoration: none;
      }
      .AP-a a{
        list-style: none;
        text-decoration: none;
        margin-left:10px;
      }
      .arrow li {
        list-style: none;
        width:40px;
        height:40px;
        background-color:#262626;
        margin:0 10px;
        /*border-radius:50%;*/
        transition: .5s;
        
      }
      .arrow li:hover {
        background:#0070ff;
      }
      .arrow li span {
        position: absolute;
        width: 10px;
        height: 10px;
        border: 2px solid #fff;
        transition: .5s;
      }
      .arrow li.prev span {
        margin-top: 20px;
        margin-left: 14px;
        border-right: none;
        border-top:none;
        transform:translateY(-50%) rotate(45deg);
        
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
      } 
      
      
</style>
<body style="font-family:tahoma; background-color:#d0d8e4;">
<a href="MEMBRES1.php" class="back_btn"><img src="image/back.png"> Retour</a>
 <form action="">
    <!--top bar-->
    <!--cover area-->
    <div style="width:800px;margin:auto;min-height:400px;">
      <div style="background-color:white;text-align:center;color:#405d9b;">
         <img src="image/li.jpg"style="width:100%;height:300px;">
         <img id="profile_pic"src="image/profl.jpg">
         <br>
         <div style="font-size:20px";>Anta Sy</div>
         <br>
         <input type="submit" id="button" value="+ Ajouter des stories" name="+ Ajouter des stories">
         <br><br>
         <input type="submit" id="button2" value="Modifier le profil" name="Modifier le profil">
         <br><br>
      </div>
      <div style="background-color: white;width:800px;height: 200px;margin:auto;">
      <div>
        <ul class="me">
          <li><a href="Publication.php">Publication</a></li>
          <li>photos</li>
          <li>Reels</li>
        </ul>
        <hr>
        <h2>Détails</h2>
        <div class="AP-a">
          <ul>
            <li><a href="Apropos.php">Voir vos informations À propos</a></li><br>
            <li><a href="MEMBRES1.php">Membres</a></li>
          </ul>
       </div><br><br>
       <div style="background-color: white;width:800px;height: 200px;margin:auto;">
         <img style=" width:80px;margin-top:-200px;border-radius:80px; border:solid 3px white;margin-top:20px;" src="image/profl.jpg">
         <div style="margin-left:88px;margin-top:-60px; font-size:20px;">Anta Sy</div>
         <div style="margin-left:88px;font-size:12px;">7 oct. 2001</div>
      </div>
      </div>
    </div>
 </form>
</body>
</html>