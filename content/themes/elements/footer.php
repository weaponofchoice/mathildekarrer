  </main>

  <!-- Info overlay -->
  <?php
  $about_text = get_field( 'about_text', 'option' );
  ?>
  <div class="overlay">
    <div class="overlay_header">
      <a href="<?php echo home_url(); ?>">
        <h1 class="is_bold is_uppercase">Mathilde Karrèr</h1>
        <h1 class="is_italic">Photography</h1>
      </a>

      <a class="overlay_close">
        <span class="system is_uppercase">close<img src="<?php echo get_template_directory_uri(); ?>/img/close-white.svg"></span></a>
    </div>

    <div class="overlay_content">
      <?php echo $about_text; ?>
    </div>
  </div>

  <!-- Scripts -->
  <?php wp_footer(); ?>
</body>
</html>
