<?php get_header(); ?>

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.png') ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large"> Me, Myself & I</h1>
      <h2 class="headline headline--medium">Jag är FrontEndutvecklare från Sveden </h2>
      <h3 class="headline headline--small"> Intresserad av att  <strong>samarbeta?</strong> Kontakta mig! </h3>
      <a href="<?php echo get_post_type_archive_link('program'); ?>" class="btn btn--large btn--blue">Här är mina utbildningsprogram</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Uppkommande Händelser</h2>

        <?php 
          $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));

          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post();
            get_template_part('template-parts/content', 'event');
          }
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event') ?>" class="btn btn--blue">Visa alla evenemang</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Från min blogg</h2>
        <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2  
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="event-summary">
              <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Läs mer</a></p>
              </div>
            </div>
          <?php } wp_reset_postdata();
        ?> 

        
        
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">Visa alla blogginlägg</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/smart_home.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Smart Home</h2>
        <p class="t-center">Ett program för automatisering av hem, hushållsarbete- eller aktivitet. </p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/Smart-Home_GalinaMiteva" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/memory_game.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Memory Game</h2>
        <p class="t-center">En liten minnesspel.</p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/React-memory-game" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/roll_the_dice.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Tärningar</h2>
        <p class="t-center">Kasta tärning och leka</p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/React-inlamningsuppgift-1" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>
  


  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/sinus-e_shop.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Sinus e-shop</h2>
        <p class="t-center">E-handels med sportsarticlar</p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/Sinus-webshop-group_slutproject-backend" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>


  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/vadret.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Kolla på vädret!</h2>
        <p class="t-center">Ett simple weather app som använder information från APIn https://openweathermap.org </p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/Kunskapskontroll2-Galina-Miteva" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/events.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center"> Handel med biljetter.</h2>
        <p class="t-center">Handla biljett för nåt evenemang!</p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/Node_Router_Shop_Ticket " class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/air_bean.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Air-bean e-handel</h2>
        <p class="t-center">Air-bean e-handels kart </p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/AirBean_Redux_Router_Node-eshopping" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/login.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">User registrering</h2>
        <p class="t-center">Användarregistrering program</p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/Redux_Router_UserRegistration" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/FN-mal.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">FN mål</h2>
        <p class="t-center">FN mål för global utveckling</p>
        <p class="t-center no-margin"><a href="https://github.com/galinamiteva/React-inlamning2-FN-goals" class="btn btn--blue">Besök mitt github</a></p>
      </div>
    </div>
  </div>
    </div>
      <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
      </div>
    </div>
  </div>

  <?php get_footer();

?>