<?php
if(isset($_GET['accepte_cookie'])){
        setcookie('accepte_cookie', 'true', time() + 365*24*3600);
        header('Location:./');
        die();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fonts/all.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>
    <section class="index_section">
        <header>
            <span class="logo"><a href="index.php"><img src="assets/img/logo8.png" alt=""></a></span>
            <div class="navlinks">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about.php">À propos</a></li>
                    <li><a href="program.php">Planning</a></li>
                    <li><a href="tarifs.php">Tarifs</a></li>
                    <li><a href="partner.php">Partenaires</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars menu_burger"></i>
        </header>
        <div class="index_container">
            <div class="index_imgBx">
                <img src="assets/img/woman3.png" alt="">
            </div>
            <div class="index_content">
                <img class="index_content_title" src="assets/img/titre.png" alt="">
                <p><span>Découvrez la Fashion Day : Un événement</span> <span>prestigieux pour soutenir les enfants atteints</span> <span>d'albinisme et les orphelins.</span></p>
                <a href="about.php">Lire plus</a>
            </div>
        </div>
    </section>
    <?php include 'includes/footer.php' ?>
    <?php 
        if(!isset($_COOKIE['accepte_cookie'])){
    ?>
    <?php include 'includes/cookies.php' ?>
    <?php 
        }
    ?>
</body>
</html>