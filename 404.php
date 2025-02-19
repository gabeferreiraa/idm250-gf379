<?php get_header(); ?>
<div class="error-screen">
  <h1>Oops the page you're looking for doesn't exist.</h1>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Return home</a>
</div>
<?php get_footer(); ?>