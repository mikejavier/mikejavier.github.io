<?php get_header();?>
<main>	
    <section class="wrap single-portfolio">
        <?php if (have_posts()): while (have_posts()) : the_post();?>
    	<figure>
    		<img src="<?php echo types_render_field( "thumb-do-projeto", array( "output" => "raw" ) ); ?>" class="single-portfolio-thumb" alt="">
    		<figcaption><?php the_title(); ?></figcaption>
    	</figure>
        <div class="single-portfolio-content"><?php the_content(); ?></div>
        <footer class="single-portfolio-footer">
        	<a href="<?php echo types_render_field( "link-do-projeto", array( "output" => "raw" ) ); ?>" class="flat-button md-effect-color">ir para o site</a>
        </footer>
        <?php endwhile; endif;?>
    </section>
</main>
        
<?php get_sidebar(); ?>

<?php get_footer();?>


