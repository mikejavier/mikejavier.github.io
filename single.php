<?php get_header();?>
<main>	
    <section class="wrap single">
        <?php if (have_posts()): while (have_posts()) : the_post();?>
        <h1 class="single-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; endif;?>

        <div class="coments">
            <?php comments_template(); ?>   
        </div>
    </section>
</main>
        
<?php get_sidebar(); ?>

<?php get_footer();?>