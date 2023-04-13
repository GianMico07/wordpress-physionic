<?php get_header()?>

<section class="banner">
    <div class="container">
        <h1><?php the_title();?></h1>
        <p><?php the_excerpt();?></p>
        <?php echo get_the_post_thumbnail();?>
        <p><?php echo get_the_date('M d Y');?></p>
    </div>
</section>

<?php get_footer()?>