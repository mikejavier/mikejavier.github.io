<?php get_header();?>
<main>	

    <section class="portfolio wrap">
        <div class="section-title">
            <h1><i class="fa fa-suitcase"></i> portfolio</h1>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
        <article class="card-item">
            <span class="card-item-midia"><?php if ( function_exists( 'the_post_thumbnail' ) )the_post_thumbnail();?></span>
            <span class="card-item-text">
                <i class="fa fa-paint-brush <?php echo types_render_field( "design", array( "output" => "raw" ) ); ?> tooltip" data-title="design"></i>
                <i class="fa fa-code <?php echo types_render_field( "front-end", array( "output" => "raw" ) ); ?> tooltip" data-title="front-end"></i>
                <i class="fa fa-mobile-phone <?php echo types_render_field( "mobile", array( "output" => "raw" ) ); ?> tooltip" data-title="mobile"></i>    
                <i class="fa fa-wordpress <?php echo types_render_field( "wordpress", array( "output" => "raw" ) ); ?> tooltip" data-title="wordpress"></i>
            </span>
            <span class="card-item-action">
                <a href="<?php the_Permalink(); ?>" class="flat-button md-effect-color">Detalhes</a>
            </span>        
        </article>
        <?php endwhile; else:?>
        <?php endif;?> 
        <div class="pagination"><?php echo paginate_links( array('prev_next' => false) ); ?></div>
    </section>

</main>
        
<?php get_sidebar(); ?>

<?php get_footer();?>