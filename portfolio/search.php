<?php

get_header();
pageBanner(array(
  'title' => 'Sökresultat',
  'subtitle' => 'Du sökte efter:  &rdquo;' . esc_html(get_search_query(false))  . '&rdquo;'
));
 ?>

<div class="container container--narrow page-section">
<?php
  if (have_posts()) {
    while(have_posts()) {
      the_post();
      get_template_part('template-parts/content', get_post_type());
    }
    echo paginate_links();
  } else {
    echo '<h2 class="headline headline--small-plus">Inga resultat matchar den här sökningen.</h2>';
  }

  get_search_form();
  
?>

</div>

<?php get_footer();

?>