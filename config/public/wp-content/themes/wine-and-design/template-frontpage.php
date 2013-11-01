<?php
/*
Template Name: Frontpage
*/
?>

<?php get_header(); ?>
 <section class="s-home">

           <?php include(TEMPLATEPATH.'/modules/module-featured-event.php'); ?>

      </section>
      <div class="previous-event-button">
        <div class="wrapper">
          <a href="<?php echo home_url(); ?>/previous-events">
            <div class="previous-event-button__info">
              <img src="<?php bloginfo('template_directory'); ?>/images/icon-arrow-right-white.png" />
              <h1>
                Previous events
              </h1>
            </div>
          </a>
        </div>
      </div>
      <div class="wrapper">
        <div class="features">
          <div class="heading">
            <h1>
              what is Wine&Design?
            </h1>
          </div>
          <p>
            What started out as the designers from Platform45 wanting to host an event like our developers host Ruby on Beer and Code & Coffee, has become the very successful, Wine & Design; a monthly gathering of talented SA designers striving towards design driven change.
          </p>
          <p>
            The events take place in the creative hubs of both Johannesburg and Cape Town, each month introducing a new, established designer as guest speaker and a local winery offering tastings and opportunity to buy wine at cellar prices.
          </p>
          <p>
            Being a software development company, Platform45 values design as an essential, powerful tool that is ultimately what determines the user experience. Design has the power to change the world. Wine & Design is about networking and driving that change.
          </p>
          <p>
            Each Wine & Design sees a new theme to which tastings from top local wineries are prepared accordingly e.g. Champagne, Red, Organic etc. After being inspired from engaging guest speeches, and with a glass of wine in hand, our guests are encouraged to mingle and network while having a bite.
          </p>
          <p>
            Wine & Design is the bringing together of brilliant people, bright ideas and beautiful food and wine…
          </p>
            <a href="<?php echo home_url(); ?>/about" class="button">
                Read more
            </a>
        </div>
        <div class="features">
          <div class="heading">
            <h1>
              Latest on blog
            </h1>
          </div>
          <p>
            Platform45 is your modern day solution to your business problems. We build beautiful software with extreme quality. Using the latest technology standards in code, we build and create with Ruby on Rails, JavaScript, IOS, and more!
          </p>
          <p>
            Not only do we build cool ideas using agile, success driven, and test driven development but with our revolutionary communication we are able to build efficiently so the bills don’t add up!
          </p>
          <p>
            Once we build your project you are not done. You get access the bountiful resource that is Network45. Network45 gives you access to talk and collaborate with our past clients, get access to our distribution, help you connect with the people you need to find, and receive fantastic offers on other business needs. At Platform45 we truly want to become your platform for success.
          </p>
          <a href="<?php echo home_url(); ?>/blog" class="button">
                Read more
            </a>
        </div>
      </div>
      <div class="sponsor">
        <div class="wrapper">
          <h1>
            Sponsored by
          </h1>
          <ul>
            <li>
              <a class="platform45" href="http://www.platform45.com" target="_blank"></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="wrapper">
        <div class="featured-by">
          <h1>
            Featured by
          </h1>
          <ul>
            <li>
              <a class="jhblive" href="http://www.jhblive.com/live/event_view.jsp?event_id=149562" target="_blank"></a>
            </li>
            <li>
              <a class="between10and5" href="http://10and5.com/2013/07/03/introducing-wine-design/" target="_blank"></a>
            </li>
            <li>
              <a class="wineland" href="" target="_blank"></a>
            </li>
            <li>
              <a class="bizcom" href="http://www.bizcommunity.com/Article/196/13/97073.html" target="_blank"></a>
            </li>
            <li>
              <a class="elle" href="" target="_blank"></a>
            </li>
            <li>
              <a class="elledeco" href="" target="_blank"></a>
            </li>
            <li>
              <a class="motherliving" href="http://www.marketme.co.za/2013/07/23/wine-design-connects-creatives-in-cape-town-johannesburg/" target="_blank"></a>
            </li>
            <li>
              <a class="stufftodo" href="http://www.stufftodo.co.za/event/wine-design/" target="_blank"></a>
            </li>
            <li>
              <a class="strawberry" href="http://www.strawberryporcelain.com/2013/08/wine-design.html" target="_blank"></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="push"></div>
    </div>
<?php get_footer(); ?>
