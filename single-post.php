<?php get_header() ?>
    
    <a href="<?php bloginfo('url'); ?>">
        <div class="cel-arrow-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-arrow-left.png" alt="">
        </div>
    </a>

    <?php get_sidebar('socials'); ?>

    <!-- montre le contenu du poste -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
    <?php endif; ?>
      

    <!-- lien vers un autre projet aléatoire en excluant le poste actuel -->
    <?php $loop = new WP_Query( array( 
        'post__not_in' => [get_the_ID()],
        'post_type' => 'post', 
        'posts_per_page' => '1',
        'orderby' => 'rand',
        ) ); ?>

    <div class="cel-seemore-container">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>		
            <a href="<?php the_permalink(); ?>">   
                <div class="cel-seemore">
                    <div class="cel-seemore-wording">
                        <?php the_title('<h3> Projet suivant :<br>', '</h3>'); ?>     
                    </div>
                    <div class="cel-seemore-thumbnail">               
                        <?php the_post_thumbnail('medium') ?>
                    </div>
                </div>
            </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>

<?php get_footer() ?>