<?php /*Template Name: FAQ links Page*/ ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(). '/js/faq.js' ?> "></script>
<?php get_header(); ?>

<?php 
  $args = array(
    'post_type' => 'faq',
    'posts_per_page' => -1,
    'meta_key' => 'order',
    'orderby' => 'meta_value',
    'order' => 'ASC',
  );

  $the_query = new WP_Query($args);
  
  if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
      $counter = get_field('order');
      ?>

      <div class="nav">
          <ul>
              <li>
                  <a href="#<?php echo $counter?>">
                      <h3><?php echo the_title(); ?></h3>
                  </a>
              </li>
          </ul>
      </div>

      <div class="toggle" id="<?php echo $counter?>">
        <p> <?php echo the_content() ;?> </p>
      </div>
 
 
      <?php
    endwhile;
  endif;
            // Reset Post Data
  wp_reset_postdata();

?>


<?php get_footer(); ?>

