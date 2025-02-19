<footer class="site-footer">
  <div class="footer-container">
    <p>&copy; <?php echo date("Y"); ?> Your Website Name. All rights reserved.</p>
    <nav class="footer-nav">
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