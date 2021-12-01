<!DOCTYPE html>

<?php 
session_start();
$user = $_SESSION['User'];
if($user == null || $user == ""){

    echo "No session";
    header("Location: login.html");
    die();

} 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Inconsolata&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

    body {

        margin: 0;
        display: flex;
        width: 100%;
    }

    .user {

        width: 100%;
        display: flex;
        flex-direction: column;
        background-color: blue;
        align-items: center;
        border-right: 10px solid black;
        background-image: url(https://images.pexels.com/photos/2680270/pexels-photo-2680270.jpeg?cs=srgb&dl=pexels-mudassir-ali-2680270.jpg&fm=jpg);
        /*background-repeat: no-repeat; background-position: center center;*/
    }

    .user p {

        font-family: 'M PLUS 1 Code', sans-serif;
        font-size: 30px;
        color: white;

    }

    .user a{

        margin: 49px 0px;
        font-family: 'Inconsolata', monospace;
        font-size: 20px;
        color: white;

    }

    .textInput {

        height: 200px;

    }

    .content {
        /*width: 70%;*/
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: rgb(54, 54, 54);
    }

    .content textarea {

        resize: none;
        padding: 5px;
        width: 50%;
        border-radius: 10px;
        background-color: rgb(165, 165, 165);
    }

    .descrip{
        margin: 5px 20px;
        font-family: sans-serif;
    }

    .pub1 {

        width: 65%;
        display: flex;
        flex-direction: column;
        background-color: rgb(221, 221, 221);
        border-radius: 20px;
        padding: 10px 0px;
        margin-top: 30px;

    }

    .infoUs {
        display: flex;
    }

    .imUs {

        width: 60px;
        height: 50px;
        text-align: center;
        border-radius: 10px;

    }

    .imUs img {
        max-height: 100%;
        border-radius: 10px;
    }

    .nameUs {

        font-size: 20px;
        margin-right: 10px;
    }

    .time {

        font-size: 10px;
    }

    .imgp {

        width: 100%;
        text-align: center;
    }

    .imgp img {

        max-width: 90%;
    }

    .optionPub{
        display: flex;
        padding: 0px 20px;
        justify-content: space-around;
        text-align: center;
        height: 25px;
        
    }

    .imgUser{

        width: 50%;
    }

    .imgUser img{

        max-width: 100%;
        border-radius: 50%;
    }

    .content p{

        margin: 6px 0px;
        font-weight: bold;
        font-family: 'IBM Plex Sans', sans-serif;
        color: violet;

    }

    .opTxt{
        display: flex;
    }

    .opTxt div{
        margin: 5px 20px;
        display: flex;
        align-items: center;
        background-color: rgb(172, 106, 235);
        width: 75px;
        height: 40px;
        border-radius: 20px;
        justify-content: center;

    }

    .opTxt div img{

        width: 30px;
        height: 30px;
        margin: 0px 5px;

    }

    .optionPub div{

        width: 30%;
        background-color: gray;
        padding: 3px 0px;
        cursor: pointer;
        font-family: 'Varela Round', sans-serif;
        border-radius: 10px;
        margin-top: 2px;
    }

</style>

<body>

    <div class="user">

        <p>Bienvenido <?php echo $_SESSION['User'];  ?></p>

        <div class="imgUser"><img src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-photo-183042379.jpg" alt=""></div>

        <a href="https://tonynopro.itch.io/pinol-the-game">Descarga Pinol The Game</a>

        <a href="logout.php" class="logout">Cerrar sesión</a>

    </div>

    <div class="content">


        <p>Ve a contarles lo que piensas</p>

        <textarea name="think" id="" cols="30" rows="3" placeholder="Escribe tus pensamientos mas profundos..."></textarea>

        <div class="opTxt">

            <div class="foto"><img src="Images/camera.png" alt=""></div>
            <div class="video"><img src="Images/video.png" alt=""></div>
            
        </div>

        <div class="pub1">

            <div class="infoUs">

                <div class="imUs"><img src="https://img.itch.zone/aW1hZ2UvODAyOTU3LzQ0OTc0MTAuanBn/794x1000/fD4ihf.jpg"
                        alt="image User"></div>
                <div class="nameUs">Pinol Sanchez</div>
                <div class="time">18:12</div>

            </div>

            <div class="descrip">El mejor juego que he jugado en mi vida</div>

            <div class="imgPub">

                <div class="imgp">
                    <img src="https://i.ibb.co/6npck94/imagen-2021-11-30-224205.png" alt="imgpub">
                </div>

                <div class="optionPub">

                    <div class="like">Like</div>
                    <div class="comme">Comenta</div>
                    <div class="share">Compartir</div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>