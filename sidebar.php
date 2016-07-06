<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appbuilderBiz
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div  class="widget-area" role="complementary">	<?php
	
 dynamic_sidebar( 'wordapp-mobile-sidebar-right' ); 
			?>
</div>
