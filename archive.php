<?php get_header(); ?>

<div class="archive-container">
  <?php if (have_posts()) : ?>
    <h1 class="archive-title"><?php the_archive_title(); ?></h1>
    <ul class="archive-post-list">
      <?php while (have_posts()) : the_post(); ?>
        <li class="archive-post-item">
          <a href="<?php the_permalink(); ?>" class="archive-post-link"><?php the_title(); ?></a>
        </li>
      <?php endwhile; ?>
    </ul>

    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>

  <?php else : ?>
    <p class="no-posts">No posts found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>