    <?php include 'includes/header.php' ?>
        <div class="container tarif_container">
            <div class="tarif_cards_wrapper">
                <div class="tarif_wrapper">
                    <div class="tarif_card card1">
                        <div class="tarif_content_card">
                            <div class="side side--front">
                                <h3>Silver</h3>
                                <p>Une expérience de qualité debout derrière la section Gold, avec un accès anticipé aux stands.</p>                                </p>
                                <p class="price" id="silver_price">Prix</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tarif_wrapper">
                    <div class="tarif_card card2">
                        <div class="tarif_content_card">
                                <h3>Gold</h3>
                                <p>Une place privilégiée juste derrière la section Premium, avec des chaises réservées, un accès anticipé aux stands et aux cocktails.</p>
                                <p class="price" id="gold_price">Prix</p>
                        </div>
                    </div>
                </div>
                <div class="tarif_wrapper">
                    <div class="tarif_card card3">
                        <div class="tarif_content_card">
                                <h3>Premium</h3>
                                <p>Une expérience exclusive avec une place en avant-première de la scène, des tables réservées, un verre offert et un accès anticipé aux stands et aux cocktails.</p>
                                <p class="price" id="premium_price">Prix</p>
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
</body>
</html>