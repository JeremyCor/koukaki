<?php

get_header();
?>

<main id="primary" class="site-main">
    <!-- BANNIERE/VIDEO -->
    <section class="banner">
        <img class="banner__background" src="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" alt="">
        <video class="banner__video" width="1440" autoplay="autoplay" loop="infinite">
            <source src="<?php echo get_theme_file_uri() . '/assets/video/Studio-Koukaki-video.mp4'; ?>"
                type="video/mp4">
        </video>
        <img class="banner__logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>"
            alt="Logo fleurs d'oranger & chats errants">
    </section>
    <!-- HISTOIRE -->
    <section id="story" class="story hidden">
        <h2><span class="story__title hidden">L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>


        <!-- PERSONNAGES -->

        <?php
        get_template_part('template-parts/characters', 'slider');
        ?>


        <!-- LE LIEU -->
        <article id="place">
            <img class="place--big_cloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="Gros nuage qui passe">
            <img class="place--little_cloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="Petit nuage qui passe">
            <div>
                <h3><span class="place__title hidden">Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>

    <!-- LE STUDIO -->
    <section id="studio" class="studio hidden">
        <h2 class><span class="studio__title hidden">Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
    </section>

    <section id="oscars" class="oscars">
        <div class="oscars__title">
            <img src="<?php echo get_theme_file_uri() . '/assets/images/oscars-bg.png'; ?>"
                alt="background du titre des nominations">
            <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
        </div>
        <img class="oscars__logo" src="<?php echo get_theme_file_uri() . '/assets/images/oscars.png'; ?>"
            alt="Nomination aux Oscars 2022">
    </section>
</main><!-- #main -->

<?php
get_footer();
