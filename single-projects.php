<?php get_header(); ?>
<div class="singles-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<section class="single-row">
  <div class="content-wrapper">

<?php the_content(); ?>
    </div>
</section>

</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
