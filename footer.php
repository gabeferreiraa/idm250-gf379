<footer class="site-footer">
  <div class="footer-container">
    <nav class="footer-nav">
      <p>&copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.</p>
      <?php
      wp_nav_menu( array(
        'theme_location' => 'footer-menu',
        'menu_class'     => 'footer-menu',
        'container'      => false,
      ) );
      ?>
    </nav>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>