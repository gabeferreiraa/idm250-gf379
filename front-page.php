<?php get_header(); ?>
<h1 class="home-title">

</h1>

<div class="">
    <?php echo the_post_thumbnail();?>
</div>

<div class="home-content">
    <?php echo get_the_content();?>
</div>

<?php get_footer(); ?>