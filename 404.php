<?php get_header(); ?>
<div class="error-screen">
  <h2 class="error-code">Error 404</h2>
  <h1>Oops, the page you're looking for doesn't exist.</h1>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link">Return Home</a>
</div>
<?php get_footer(); ?>