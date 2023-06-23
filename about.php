    <?php include 'includes/header.php' ?>
        <div class="container">
            <div class="about_articles">
                <div class="about_box">
                    <h1>Description du projet</h1>
                    <div class="about_cards">
                        <div class="about_card">
                            <img src="" alt="">
                            <div class="about_card-content">
                                <i class="fa-solid fa-user-doctor"></i>
                                <p>Nous discuterons avec un dermatologue afin de mieux comprendre les besoins des enfants albinos défavorisés en termes de produits cosmétiques et de médicaments.</p>
                            </div>
                        </div>
                        <div class="about_card">
                            <img src="" alt="">
                            <div class="about_card-content">
                                <i class="fa-solid fa-capsules"></i>
                                <p>Nous sélectionnerons 20 enfants albinos et leur fournirons des crèmes solaires et des médicaments si nécessaire, pour les aider à mieux se protéger des effets néfastes du soleil.</p>
                            </div>
                        </div>
                        <div class="about_card">
                            <img src="" alt="">
                            <div class="about_card-content">
                                <i class="fa-solid fa-shirt"></i>
                                <p>Collaboration avec des salons de couture : Nous choisirons trois salons de couture renommés pour présenter leurs créations lors du défilé de mode.</p>
                            </div>
                        </div>
                        <div class="about_card">
                            <img src="" alt="">
                            <div class="about_card-content">
                                <i class="fa-solid fa-shirt"></i>
                                <p>Collaboration avec des artistes et des boutiques de prêt-à-porter : Nous sélectionnerons trois artistes talentueux et trois boutiques de prêt-à-porter pour participer à l'événement et présenter leurs créations.</p>
                            </div>
                        </div>
                        <div class="about_card">
                            <img src="" alt="">
                            <div class="about_card-content">
                                <i class="fa-solid fa-palette"></i>
                                <p>Mise en avant des artisans locaux : Nous mettrons en valeur le talent des artisans locaux, tels que des peintres, des cordonniers et des transformateurs de produits locaux. Leurs créations seront également exposées et vendues lors de l'événement.</p>
                            </div>
                        </div>
                        <div class="about_card">
                            <img src="" alt="">
                            <div class="about_card-content">
                                <i class="fa-solid fa-champagne-glasses"></i>
                                <p>Soirée prestigieuse et glamour : Nous organiserons une soirée élégante et glamour, comprenant un défilé de mode, des performances artistiques et des activités divertissantes.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="assets/js/app.js"></script>
</body>
</html>