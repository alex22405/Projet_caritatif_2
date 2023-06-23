    <?php include 'includes/header.php' ?>
        <div class="container">
            <div class="program_planning">
                <!-- <h1>Programme</h1> -->
                <article class="slide">
                    <h3> <img src="assets/img/icons8-horloge.gif" alt="">   09H - 17H</h3>
                    <p>Ouverture des stands : 
                        <br/>
                        Les visiteurs auront l'occasion de découvrir les articles disponibles, d'interagir avec les exposants et de se renseigner sur les produits mis en avant lors de la journée.</p>
                </article>
                <article class="slide">
                    <h3><img src="assets/img/icons8-horloge.gif" alt="">   18H - 22H30</h3>
                    <p>Défilé, suivi des premières animations.
                        <br/> Pendant cette partie, les invités pourront assister à des prestations artistiques variées: concert, danses, stand-up.</p>
                </article>
                <article class="slide">
                    <h3><img src="assets/img/icons8-horloge.gif" alt="">   23H - 03H</h3>
                    <p>Poursuite des animations.</p>
                </article>
                <article class="slide">
                    <h3><img src="assets/img/icons8-horloge.gif" alt="">   À partir de 03H</h3>
                    <p>Un secret captivant vous attend... Soyez prêt à plonger dans l'inconnu.</p>
                </article>
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