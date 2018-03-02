<?php
/* Template Name: Full Widht page */
/**
 * @package WordPress
 * @subpackage HEELJ
 * @since HEELJ 1.0
*/
?>
<div id="pagina-interna-heelj">
   <?php get_header(); ?>
</div>
<?php
	while ( have_posts() ) : the_post();
	the_content();
	endwhile; // End of the loop.
?>

<?php get_footer(); ?>
