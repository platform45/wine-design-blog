<?php get_header(); ?>
<section class="s-single-event">
        <div class="s-single-event__container">
          <div class="event-summary" style="background-image: url(<?php the_field( 'event_image' ); ?>);">
            <div class="wrapper">
              <div class="single-event-info">
                <h1>
                  <?php the_title(); ?>
                </h1>
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
        </div>
        <div class="map-container">
          <div class="map-details">
            <img src="<?php bloginfo('template_directory'); ?>/images/icon-pin.png" />
            <h2>
              <?php the_field( 'event_location_name' ); ?>
            </h2>
            <p>
              <?php the_field( 'event_address' ); ?>
            </p>
          </div>
          <div class="map">
            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  <?php the_field( 'event_location' ); ?>></iframe><br />


          </div>
        </div>
      </section>
      <div class="wrapper">
        <div class="features">
          <img src="<?php bloginfo('template_directory'); ?>/images/icon-loud-speaker-large.png" />
          <div class="heading">
            <h1>
              About the speaker
            </h1>
          </div>
          <p>
            <?php the_field( 'about_the_speaker' ); ?>
          </p>
        </div>
        <div class="features">
          <img src="<?php bloginfo('template_directory'); ?>/images/icon-wine-glass.png" />
          <div class="heading">
            <h1>
              About the wine
            </h1>
          </div>
          <p>
            <?php the_field( 'about_the_wine' ); ?>
        </p>
        </div>
      </div>
      <section class="s-single-event">
        <div class="wrapper">
          <div class="video-clip">
            <iframe width="800" height="500" <?php the_field( 'video' ); ?> frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      <div class="horisontal-divider-line"></div>
      <div class="wrapper">
          <a href="contact.html" class="button">
              Count me in!
          </a>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
