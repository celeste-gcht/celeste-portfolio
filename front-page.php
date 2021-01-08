<?php get_header() ?>    
    <?php get_sidebar('socials'); ?>
    <main> 
      <div id="filterBtns" class="cel-filter">
          <button class="btn cel-filter__item" onclick="filterSelection('query2')">Web design</button>
          <button class="btn cel-filter__item" onclick="filterSelection('query1')">Design Graphique</button>
          <button class="btn active cel-filter__item" onclick="filterSelection('tout')">Tout</button>
      </div>
        <section class="cel-grid">



          <?php 
            // query - Design graphique
            $query1 = new WP_Query( array( 
              'cat'     => 4,
              'orderby' => 'menu_order',
              'order'   => 'ASC'
              ) ); ?>  
              
                           
            <?php if ( $query1->have_posts() ) : ?>
            
                <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
                  <div class="proj-prev filterDiv query1">
                      <div class="proj-prev__image">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('medium'); ?>
                        </a>
                      </div>
                      <div class="proj-prev__desc">
                        <a href="<?php the_permalink(); ?>">
                          <h2 class="proj-prev__desc__heading"><?php the_title(); ?></h2>
                          <p class="proj-prev__desc__subtitle"><?php the_field('field_5ec47047f1990')?></p>
                          </a> 
                      </div>                                
                  </div>
                <?php endwhile; ?>               
                <?php wp_reset_postdata(); ?>              
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            <?php 

            // query webdesign
            $query2 = new WP_Query( array( 
              'cat'     => 3,
              'orderby' => 'menu_order', 
              'order'   => 'ASC'
              ) ); ?>               
            <?php if ( $query2->have_posts() ) : ?>
                <?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
                <div class="proj-prev filterDiv query2">
                  <div class="proj-prev__image">
                      <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('medium'); ?>
                        </a>
                      </div>
                      <div class="proj-prev__desc">
                       <a href="<?php the_permalink(); ?>">
                          <h2 class="proj-prev__desc__heading"><?php the_title(); ?></h2>
                          <p class="proj-prev__desc__subtitle"><?php the_field('field_5ec47047f1990')?></p>
                          </a>
                      </div>                       
                    </a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

            
          </section>
    </main>
  

<?php get_footer() ?>