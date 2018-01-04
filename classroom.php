<?php
/**
 * Template Name: Classroom
 *
 * The custom template for the Classroom containing an interactive whiteboard,
 * embeded personal appear.in, information about the tutor. Custom header.
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
get_footer();
