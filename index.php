<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package appbuilderBiz
 */
$varSlideshow = (array)get_option( 'WordApp_slideshow' );
     
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
	if($varSlideshow['onoff'] =="on"){
	  ?>
    <div class="slider">
        <div class="slide-group">
	<?php	  
		  
  if(isset($varSlideshow['one']) && $varSlideshow['one'] !== "") {
	  
	  echo ' <div class="slide"><img src="'.$varSlideshow["one"].'"/></div>';
  }	
	if(isset($varSlideshow['two']) && $varSlideshow['two'] !== "") {
	  
	  echo ' <div class="slide"><img src="'.$varSlideshow['two'].'"/></div>';
  }	
	if(isset($varSlideshow['three']) && $varSlideshow['three'] !== "") {
	  
	  echo ' <div class="slide"><img src="'.$varSlideshow['three'].'"/></div>';
  }	
	if(isset($varSlideshow['four']) && $varSlideshow['four'] !== "") {
	  
	  echo ' <div class="slide"><img src="'.$varSlideshow['four'].'"/></div>';
  }	
	if(isset($varSlideshow['five']) && $varSlideshow['five'] !== "") {
	  
	  echo ' <div class="slide"><img src="'.$varSlideshow['five'].'"/></div>';
  }	
		 ?>
           </div>
        </div>
    
    
<?php 
		  }
?>
			
			
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
			
			
			
	
	
				if ( is_single() ):
					
			
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					endwhile;
			
				else:
					echo '<ul class="table-view" style="margin:0px">';
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-blog', get_post_format() );

					endwhile;
					echo '</ul>';
			
					?>
			
			
			
				<?php
			/* Start the Loop */

			endif;
			?>
			
			<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
