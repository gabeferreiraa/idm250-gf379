<?php

?>

<?php get_header();?>

<?php if(have_posts()) : ?>

<h1 class="archive-title"><?php the_archive_title();?></h1>
<ul class="archive-post-list">
    <?php while(have_posts()) : the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
    <?php endwhile; ?>
</ul>

<?php the_posts_pagination(); ?>

<?php else : ?>

<p>No posts found.</p>

<?php endif ?>

<?php get_footer(); ?>

