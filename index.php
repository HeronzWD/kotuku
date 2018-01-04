<?php
/**
 * The main template file
 *
 *
 *
 * index.php in Kotuku 1.0 is synonymous with page.php. It is the default
 * layout used for Hall, Programmes, About, Team, Guides, and Help Center.
 * It is full-width and fluid.
 *
 *
 * @package Kotuku
 */


 if ( is_page( 'Classroom' ) ) :
     get_header( 'classroom' );
   else:
     get_header();
   endif;
?>

  <?php
  while (have_posts()) : the_post();
    the_content();
  endwhile;
  ?>

<?php
get_footer();
