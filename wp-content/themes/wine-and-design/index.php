<?php get_header(); ?>
  <div class="blog">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="wrapper">
          <div class="blog-post">
            <?php
            if(has_post_thumbnail()) {
            echo
              the_post_thumbnail('portfolio-thumbnails');
            } else {
            }
            ?>
            <h1 id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
          <?php the_title(); ?></a></h1>
            <p>
             <?php the_excerpt();?>
            </p>
          </div>
        </div>

   <?php endwhile; ?>
      <?php else: ?>
      <p>There are no posts to display. Try searching: jahsgjhasgd </p>
      <?php include(TEMPLATEPATH.'/searchform.php'); ?>
      <?php endif; ?>
   </div>
<?php get_footer(); ?>
