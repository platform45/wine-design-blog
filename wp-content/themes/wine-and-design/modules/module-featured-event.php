<?php
  query_posts( array( 'post_type' => 'event-item' , 'showposts' => 1) );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<section class="s-single-event featured-event">
<div class="s-single-event__container">
          <div class="event-summary" style="background-image: url(<?php the_field( 'event_image' ); ?>);">

              <div class="event-summary__location">
                <h3>
                  <?php the_field( 'event_location_name' ); ?>
                </h3>
              </div>
              <br>
              <div class="single-event-info">

                  <a href="<?php the_permalink() ?>">
                    <h1>
                      <?php the_title(); ?>
                    </h1>
                  </a>

                <h2>
                  Next event
                </h2>
                <h3>
                  <?php the_field( 'guest_speaker' ); ?>
                </h3>
                <h4>
                  <?php the_field( 'event_date' ); ?>
                </h4>
                <h4>
                  <?php the_field( 'event_time' ); ?>
                </h4>
                <a href="contact.html" class="button">
              Count me in!
          </a>
              </div>

          </div>
        </div>
</section>
<?php endwhile; else :
  echo wpautop( 'Coming soon!' ); endif; wp_reset_query(); ?>
