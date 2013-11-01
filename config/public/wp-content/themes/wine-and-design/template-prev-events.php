<?php
/*
Template Name: Previous Events
*/
?>
<?php get_header(); ?>



<section class="s-previous-events">
       <?php include(TEMPLATEPATH.'/modules/module-featured-event.php'); ?>
        <div class="wrapper">
          <h1 class="previous-event-heading">
            Johannesburg's Previous events
          </h1>

          <?php
  query_posts( array( 'post_type' => 'event-item') );
  if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
  <div>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
         <div class="previous-event-slot">
            <div class="previous-event-slot-image">
              <?php
            if(has_post_thumbnail()) {
            echo
              the_post_thumbnail('portfolio-thumbnails');
            } else {
            }
            ?>
            </div>
            <div class="previous-event-slot-info">
              <h1>

                  <?php the_title(); ?>
              </h1>
            </div>
          </div>
          </a>
      </div>

<?php endwhile; else :
  echo wpautop( 'Coming soon!' ); endif; wp_reset_query(); ?>

            <a href="index.html" class="button previous">
                Back to home
            </a>
        </div>
      </section>
      <div class="push"></div>
    </div>

<?php get_footer(); ?>
