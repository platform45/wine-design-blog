<?php get_header(); ?>
<section class="s-single-event">
        <div class="s-single-event__container">
          <div class="event-summary__jhb">
            <div class="wrapper">
              <div class="single-event-info">
                <h1>
                  Dessert
                </h1>
                <h2>
                  Next event
                </h2>
                <h3>
                  Name Surname
                </h3>
                <h4>
                  30 October 2013
                </h4>
                <h4>
                  19:00
                </h4>
                <div class="button">
                  <a href="contact.html">
                    <p>
                      Count me in!
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="map-container">
          <div class="map-details">
            <img src="images/icon-pin.png" />
            <h2>
              Assemblage Studios
            </h2>
            <p>
              41 Gwi Gwi Mrwebi St, Newtown, Johannesburg
            </p>
          </div>
          <div class="map">
            <?php the_field( 'event_location' ); ?>
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
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
          </p>
          <div class="button">
            <a href="#.html">
              <p>
                Read more
              </p>
            </a>
          </div>
        </div>
        <div class="features">
          <img src="<?php bloginfo('template_directory'); ?>/images/icon-wine-glass.png" />
          <div class="heading">
            <h1>
              About the wine
            </h1>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
          </p>
          <div class="button">
            <a href="#.html">
              <p>
                Read more
              </p>
            </a>
          </div>
        </div>
      </div>
      <section class="s-single-event">
        <div class="wrapper">
          <div class="video-clip">
            <iframe width="800" height="500" src="//www.youtube.com/embed/Oc6BT-ONeyA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      <div class="horisontal-divider-line"></div>
      <div class="wrapper">
        <div class="button single-event">
          <a href="contact.html">
            <p>
              Count me in!
            </p>
          </a>
        </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
