<?php get_header(); ?>



<div class="container">



            <?php if ( get_header_image() ) : ?>
                <div id="site-header">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img class="img-fluid rounded mx-auto d-block" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    </a>
                </div>
            <?php endif; ?>



    <div class="row mt-5">
        <div class="col-lg-8">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="border-0 border-dark rounded shadow p-3 mb-5 bg-white rounded ">
                    <h2 class="text-center"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
                        <p><?php the_category(); ?></p>
                        <p><?php the_tags(); ?></p>
                       <div><?php the_excerpt(); ?></div>
                    </div>
                <?php endwhile; else : ?>
                <?php endif; ?>


        </div>

        <div class="col-lg-4 border-0 border-dark rounded shadow p-3 mb-5 bg-white rounded">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
