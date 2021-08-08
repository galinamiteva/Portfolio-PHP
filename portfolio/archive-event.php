<?php

get_header();
pageBanner(array(
  'title' => 'Alla händelser',
  'subtitle' => 'Se vad som händer i min värld.'
));
 ?>

<div class="container container--narrow page-section">
<?php
  
  while(have_posts()) {
    the_post(); 
    get_template_part('template-parts/content-event');
   }
  echo paginate_links();
?>

<hr class="section-break">

<p>Letar du efter en sammanfattning av tidigare händelser? <a href="<?php echo site_url('/past-events') ?>">Kolla in på tidigare evenemangsarkiv</a>.</p>

</div>

<?php get_footer();

?>