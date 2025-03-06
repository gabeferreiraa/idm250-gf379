<?php
/* 
Template Name: About
*/


?>

<?php get_header(); ?>
<div class="content-wrapper"> <!-- Add this wrapper -->
    <div class="about-content">
        <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image-container">
                <div class="title-overlay">
                    <h1><?php echo get_the_title(); ?></h1>
                </div>
                <div class="featured-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        <?php else: ?>
            <h1><?php echo get_the_title(); ?></h1>
        <?php endif; ?>

        <div class="about-text">
            <?php echo get_the_content(); ?>
        </div>
    </div>
</div> <!-- Closing content-wrapper -->
<?php get_footer(); ?>