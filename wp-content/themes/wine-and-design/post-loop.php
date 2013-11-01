
<?php
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

query_posts('posts_per_page=3&paged=' . $paged);
?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="wrapper">
          <div class="blog-post">
           <div class="my-thumbnail"><?php
            if(has_post_thumbnail()) {
            echo
              the_post_thumbnail('portfolio-thumbnails');
            } else {
            }
            ?>
            </div>
            <h1 id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
          <?php the_title(); ?></a></h1>
          <h4>
             <?php the_date(); ?>  <?php the_tags('  Tags:', ', ', ''); ?>
          </h4>
            <div>
             <?php the_excerpt();?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>


  <?php else : ?>

  <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1>Not Found</h1>
  </div>

<?php endif; ?>
