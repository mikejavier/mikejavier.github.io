<?php get_header();?>
<main>	

    <section class="blog wrap">
        <div class="section-title">
            <h1><i class="fa fa-pencil"></i> Blog</h1>
        </div>
        <?php if (have_posts()): while (have_posts()) : the_post();?>
        <article class="article md-effect">
            <figure class="article-thumb"><?php if ( function_exists( 'the_post_thumbnail' ) )the_post_thumbnail('medium');?></figure>
            <div class="article-excerpt">
                <a href="<?php the_Permalink()?>"><h2 class="article-title"><?php the_title();?></h2></a>
                <p><?php the_excerpt(); ?></p>
            </div>
        </article>
        <?php endwhile; else:?>
        <?php endif;?> 
        <div class="pagination"><?php echo paginate_links( array('prev_next' => false) ); ?></div>
    </section>

</main>
        
<?php get_sidebar(); ?>

<?php get_footer();?>