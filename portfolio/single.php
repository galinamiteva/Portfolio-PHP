<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blogg Hem</a> <span class="metabox__main">Postat av <?php the_author_posts_link(); ?> på <?php the_time('n.j.y'); ?> i <?php echo get_the_category_list(', '); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

    </div>
    

    
  <?php }

  get_footer();

?>