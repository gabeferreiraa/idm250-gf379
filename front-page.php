<?php get_header(); ?>
<h1>
    <?php echo get_the_title();?>
</h1>

<div class="">
    <?php echo the_post_thumbnail();?>
</div>

<div class="main-content">
    <?php echo get_the_content();?>
</div>

<?php get_footer(); ?>