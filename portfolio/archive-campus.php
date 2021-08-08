<?php

get_header();
pageBanner(array(
  'title' => 'EC Utbildning AB',
  'subtitle' => 'EC Utbildning är över 30 år i branschen, rätt så erfarna in IT och teknik. Vi är specialiserade på tillämpad IT och ny teknik. Vi har dessutom ett stort företagsnätverk som vi samarbetar med för att ständigt utveckla och ligga nära marknadens behov i alla våra tjänster.Vi har campus i följande städer: Göteborg, Malmö, Helsingborg, Ronneby, Solna, Västrås, Växjö och Orebro .'
));
 ?>

<div class="container container--narrow page-section">

<div class="acf-map">

<?php
  while(have_posts()) {
    the_post();
    $mapLocation = get_field('map_location');
   ?>
    <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php echo $mapLocation['address']; ?>
    </div>
  <?php } ?>
</div>



</div>

<?php get_footer();

?>