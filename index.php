<?php
session_start();
include "settings.php";
$conn = new mysqli($url, $user, $password,$db);
//echo $_SESSION["username"];

if(!isset($_SESSION["username"])){
  $conn = new mysqli("localhost", "root", "","users");
  $UUID = uniqid();
  $_SESSION["username"]=$UUID;
  $result = $conn->query('INSERT INTO users (id, UUID, team) VALUES (NULL, "'.$UUID .'", NULL)');
}


if(isset($_SESSION["username"])){
    $sql = 'SELECT * FROM users WHERE UUID="'.$_SESSION["username"].'"';
    if($result = $conn->query($sql)){
    foreach($result as $row){
         
        $userid = $row["id"];
        $UUID = $row["UUID"];
        $team = $row["team"];
        }
    }
    if($userid==null){
        unset($_SESSION["username"]); 
        header('Location: index.php');
    } 
    else{
        $sql = 'UPDATE users SET team='.intval($userid)%4+1 . ' WHERE UUID="'.$_SESSION["username"].'"';
        $result = $conn->query($sql);
        echo '
        <style>
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
	opacity: 1;
        transition: opacity 1s ease-in-out;
    }
    #fullscreen-video {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0;
        transition: opacity 1s ease-in-out;
        object-fit: cover;
    }
        .btn-new {
        font-size: 50px;
        text-decoration: none;
        padding: 20px;
        border-radius: 10px;
        color: white;
        transition: .2s linear;
        background: rgb(28, 198, 255);
    }
    
    .btn-new:hover {
        -webkit-transform: rotateZ(25deg);
        -ms-transform: rotateZ(25deg);
        transform: rotateZ(25deg);
    }
    .cent{
      display:flex;
      flex-direction: column;
      align-items: center;
        position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .blue{
        background-color: rgb(28, 198, 255);
        width: 100%;
        height: 50px;
      }
      .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 50px;
      background-color: rgb(28, 198, 255);
      text-align: center;
    }
    </style>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
       <meta charset="UTF-8">
       <title>Команда!</title>
      </head>
      <body>
      <video id="fullscreen-video" autoplay loop muted>
      <source src="vid'.intval($userid)%4+1 .'.mp4" type="video/mp4">

      Your browser does not support the video tag.
      </video>
        <div class="cent">
        <img id="robo" style="width: 200px;
      height: 200px;" src="robo.png">
            <a class="btn-new" id="play-video" > Определить команду!</a>
        </div>
        
      </body>
      <script>
    document.getElementById("play-video").addEventListener("click", function(e) {
        e.preventDefault();
        var video = document.getElementById("fullscreen-video");
        video.style.opacity = "1";
	document.getElementById("play-video").style.opacity="0";
  document.getElementById("robo").style.opacity="0";
        video.play();
        video.addEventListener("ended", function() {
            video.currentTime = 0;  // Rewind to the beginning
            video.play();
        });
    });
</script>
    </html>';}
} 

?>