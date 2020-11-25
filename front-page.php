<?php get_header() ?>
    

<div class="container">
        <!-- <h1>hello</h1> -->
        <!-- <div class="cel-intro">
            <h1>Hello</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer-planete.png"  alt=""/>
</div> -->
        <!-- grille avec le framework Ui Kit -->
        <?php get_sidebar('socials'); ?>
        <main>


          <div uk-filter="target: .js-filter">
            <ul class="filtre" id="cel-filtre">
              <!-- <li uk-filter-control="filter: .edition">
                <a href="#">Édition</a>
              </li> -->
              <li uk-filter-control="filter: .webdesign">
                <a href="#">Web design</a>
              </li>
              <li uk-filter-control="filter: .projets-digitaux">
                <a href="#">Design Graphique</a>
              </li>
              <li class="uk-active" uk-filter-control="">
                <a href="">Tout</a>
              </li>
            </ul>

            <div class="grid">
              <ul class="js-filter" uk-grid>

              <?php 
                // query digital - Design graphique
                $query3 = new WP_Query( array( 'cat' => 4 ) ); ?>               
                <?php if ( $query3->have_posts() ) : ?>
                    <?php while ( $query3->have_posts() ) : $query3->the_post(); ?>
                         <li class="projets-digitaux">
                            <a href="<?php the_permalink(); ?>">
                                <div class="uk-card">
                                    <div class="cel-vignette">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_field('field_5ec47047f1990')?></p>                                   
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>               
                    <?php wp_reset_postdata(); ?>              
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

                <?php 

                // query webdesign
                $query2 = new WP_Query( array( 'cat' => 3 ) ); ?>               
                <?php if ( $query2->have_posts() ) : ?>
                    <?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
                         <li class="webdesign">
                            <a href="<?php the_permalink(); ?>">
                                <div class="uk-card">
                                <div class="cel-vignette">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                 </div>
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_field('field_5ec47047f1990')?></p>                        
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>


              </ul>
            </div>
          </div>
        </main>
      </div>
      

<?php get_footer() ?>