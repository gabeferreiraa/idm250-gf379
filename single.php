<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="single-row">
  <div class="content-wrapper">
    <h1 class="page-header">
      <?php echo get_the_title(); ?>
    </h1>

    <?php get_template_part('components/post-meta'); ?>
    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>

    <?php get_template_part('components/content'); ?>
    <?php get_template_part('components/author-box'); ?>

  </div>
  <aside>
    <ul>
      <?php dynamic_sidebar('footer-widget'); ?>
    </ul>
  </aside>
</section>
<section class="content-wrapper">
  <?php get_template_part('components/related-posts'); ?>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>