<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">

        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Galina Miteva</strong> Portfolio</a></h1>          
          <h4><a class="site-footer__link" href="#">galina.miteva@utb.ecutbildning.se</a></h4>
          <p><a class="site-footer__link" href="#">phone : 076 171 1957</a></p>
        </div>

        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Utforska</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo site_url('/about-us') ?>">Om mig</a></li>
                <li><a href="<?php echo get_post_type_archive_link('program') ?>">Mina utbildningsprogram</a></li>
                <li><a href="<?php echo get_post_type_archive_link('event'); ?>">Händelser</a></li>
                <li><a href="<?php echo get_post_type_archive_link('campus'); ?>">Mitt Campus</a></li>
              </ul>
            </nav>
          </div>

          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Privacy policy</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
                
              </ul>
            </nav>
          </div>
        </div>

        <div class="site-footer__col-four">
          <h3 class="headline headline--small">Kontakta Mig</h3>
          <nav>
            <ul class="min-list social-icons-list group">              
              <li><a href="https://www.linkedin.com/in/galina-miteva-633546134/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              <li><a href="https://github.com/galinamiteva?tab=repositories" class="social-color-youtube"><i class="fa fa-github" aria-hidden="true"></i></a></li>
              <li><a href="https://www.facebook.com/galina.miteva.98/" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/galina_miteva/" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>