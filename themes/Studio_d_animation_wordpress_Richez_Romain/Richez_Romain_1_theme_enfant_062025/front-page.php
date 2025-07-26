<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <video class="video-banner" autoplay muted loop playsinline>
            <source src="<?php echo wp_upload_dir()['baseurl']; ?>/2025/06/StudioKoukaki-videoheadersansson1-Copie.mp4" type="video/mp4">
        </video>
        <div class="logoSlideUp">
            <img class="logo-banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo Fleurs d'oranger & chats errants" />
        </div>
    </section>
    <section id="story" class="story">
        <h2 class="commune"><span class="delaiUn">L'</span><span class="delaiDeux">histoire</span></h2>
        <article id="" class="story__article">
            <p class="texteInverse"><?php echo get_theme_mod('story'); ?></p>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',

        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters" class="left">
            <div class="characters-inner">
                <h3><span class="delaiUn">Les</span> <span class="delaiDeux">personnages</span></h3>
            </div>
        
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php
                    while ($characters_query->have_posts()) {
                        $characters_query->the_post();
                        echo '<div class="swiper-slide">';
                        echo '<figure>';
                        echo get_the_post_thumbnail(get_the_ID(), 'medium');
                        echo '<figcaption>' . get_the_title() . '</figcaption>';
                        echo '</figure>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </article>
        <article class="left" id="place">
            <?php $upload_dir = wp_upload_dir(); ?>
            <img src="<?php echo $upload_dir['baseurl']; ?>/2025/06/big_cloud.png" class="cloud cloud1" alt="Nuage 1" />
            <img src="<?php echo $upload_dir['baseurl']; ?>/2025/06/little_cloud.png" class="cloud cloud2" alt="Nuage 2" />
            <div>
                <h3 class="commune"><span class="delaiUn">Le</span> <span class="delaiDeux">Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>
    <section class="left" id="studio">
        <h2 class="commune"><span class="delaiUn">Studio</span>  <span class="delaiDeux">Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
