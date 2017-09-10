<?php get_header();?>
<main>	

    <section class="portfolio wrap">
        <div class="section-title">
            <h1><i class="fa fa-lightbulb-o"></i> Projetos</h1>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
        <article class="card-item">
            <span class="card-item-midia"><?php if ( function_exists( 'the_post_thumbnail' ) )the_post_thumbnail('medium');?></span>
            <span class="card-item-text"><?php the_excerpt(); ?></span>
            <span class="card-item-action">
                <a href="<?php the_Permalink()?>" class="flat-button md-effect-color" target="_blank"> Detalhes do projeto <i class="fa fa-share-square-o"></i></a>
            </span>        
        </article>
        <?php endwhile; else:?>
        <?php endif;?> 
    </section>

</main>
        
<?php get_sidebar(); ?>

<?php get_footer();?>