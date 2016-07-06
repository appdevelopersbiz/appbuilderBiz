<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appbuilderBiz
 */



			$data = (array)get_option( 'WordApp_options' );
    	$varColor = (array)get_option( 'WordApp_options' );
    	$varGA = (array)get_option( 'WordApp_ga' ); // Settings page
     	$varMenu = (array)get_option( 'WordApp_menu' );
     	$varStructure = (array)get_option( 'WordApp_structure' );
	  	$varSlideshow = (array)get_option( 'WordApp_slideshow' );
     
    	if(!isset($varMenu['menu'])) $varMenu['menu'] ='';
			if(!isset($data['logo'])) $data['logo'] ='';

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
    <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
	
    <link rel="stylesheet" href="<?php echo get_template_directory_uri( __FILE__ ); ?>/css/ratchet.css" />
		<link rel="stylesheet" href="http://jakiestfu.github.io/Snap.js/snap.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		
		<style type="text/css">
		.appbottom-class{
			display: block;
    	word-wrap: break-word;
    	padding-BOTTOM: 9px;
			line-height: 0px;
		}
		.has-navbar-top .app-body {
    	padding-top: 0px;
		}
		.bar {
    	border-color: <?php echo $data['Color']; ?>;
    	background: <?php echo $data['Color']; ?>;
		}
		.iconWordAppColor {
			color: <?php echo $data['ColorText']; ?>;
			font-size:17px!important;
		}
		.iconWordAppText {
    	color: <?php echo $data['ColorText']; ?>;
		}
		.snap-drawers{
			background:<?php echo $data['backgroundColorSideBars']; ?>;
		}
		.sidebar{
			padding:20px;
			background:<?php echo $data['backgroundColorSideBars']; ?>;
		}
		.app{
			padding:20px;
		}
		.content{
  		background:<?php echo $data['backgroundColor']; ?>;
			background-image: url('<?php echo $data['background']; ?>');
			
		}
		h1,h2,h3,h4{
			color:<?php echo $data['ColorTextHHH']; ?>;
			}
		p{
			color:<?php echo $data['ColorTextP']; ?>;
		}	
		.app-content, .app-search{
			margin-top: 32px;
    	padding-bottom: 31px;		
		}
		.navbar-absolute-top {
			padding-bottom: 5px;
    	padding-top: 15px;
		} 
		.topBar{			
			height: 65px;
		}
		.topIcon{
			margin-top: 19px;
		}
		.content{
			padding-top: 68px!important;
			padding-bottom: 100px!important;
			padding-right: 10px!important;
			padding-left: 10px!important;
		}
		.snap-drawer {
			padding:7px;
		}
		</style>
<?php wp_head(); ?>
</head>

		
<body   <?php body_class(); ?>>
<?php /*
    <!-- Sidebars -->
    <div 
            class="sidebar sidebar-left">
	
							 <p><img src="<?php echo esc_url($data['logo']) ?>" style="max-width:90%;padding:5px"></p>
										<div id="widget-search" class="widget widget_search"  data-role="">

												<?php get_search_form(); ?>
											</div>
										<?php 
									if($varMenu['side'] == "on"){
										$menu_items = wp_get_nav_menu_items($varMenu['menu']);

										$menu_list = '<div  class="list-group" >';

										foreach ( (array) $menu_items as $key => $menu_item ) {
												$title = $menu_item->title;
												$url = $menu_item->url;
												$menu_list .= '<a href="' . $url . '" class="list-group-item">' . $title . '</a>';
										}
										$menu_list .= '</div>';

									echo $menu_list;
									}
										?>
										<div  class="widget-area" role="complementary">	<?php

									 dynamic_sidebar( 'wordapp-mobile-sidebar-left' ); 
												?>
									</div>
</div>

    <div 
            class="sidebar sidebar-right">
	<?php	get_sidebar(); ?>
	</div>
*/
	?>
<div class="snap-drawers">
		<div class="snap-drawer snap-drawer-left" id="left-drawer">
			 <p><img src="<?php echo esc_url($data['logo']) ?>" style="max-width:90%;padding:5px"></p>
										<div id="widget-search" class="widget widget_search"  data-role="">

												<?php get_search_form(); ?>
											</div>
	
										<?php 
									if($varMenu['side'] == "on"){
										$menu_items = wp_get_nav_menu_items($varMenu['menu']);

										$menu_list = '<ul class="table-view" style="margin: 7px;">';

										foreach ( (array) $menu_items as $key => $menu_item ) {
												$title = $menu_item->title;
												$url = $menu_item->url;
												$menu_list .= '<li class="table-view-cell"><a href="' . $url . '" class="">' . $title . '</a></li>';
										}
										$menu_list .= '</ul>';

									echo $menu_list;
									}
										?>
										<div  class="widget-area" role="complementary">	<?php

									 dynamic_sidebar( 'wordapp-mobile-sidebar-left' ); 
												?>
									</div>
		</div>
		<div class="snap-drawer snap-drawer-right" id="right-drawer">
				<?php	get_sidebar(); ?>
	</div>

    <div id="content" class="snap-content">
     <header class="bar bar-nav topBar">
  			 <?php if($varMenu['side'] == "on"): ?>	
			 <a class=" pull-left topIcon" href="#"  id="toggle-left"><i class="icon iconWordAppColor fa fa-bars"></i><br></a>
  			<?php endif;?>	
			 <a class=" pull-right topIcon" href="#"   id="toggle-right"><i class="icon iconWordAppColor fa fa-th"></i><br></a>
											 <?php 
			 									if($data['logo'] == ""){
														echo '<h1 class="title">'.get_bloginfo('name').'</h1>'; 
												}
			 									else{
														echo '<h1 class="title"><img src="'.esc_url($data['logo']).'" style="height:30px;margin-top:30px"></h1>';
													}
													?>
   
			<?php if($varMenu['top'] == "on"): ?>	
<div class="bar bar-standard bar-header-secondary">
  <div class="segmented-control">
			<?php 
								
					$menu_items_top = wp_get_nav_menu_items($varMenu['menuTop']);

						$i =0;
										foreach ( (array) $menu_items_top as $key => $menu_item_top ) {
												$title = $menu_item_top->title;
												$url = $menu_item_top->url;
												$menu_list_top .= '<a class="control-item" href="' . $url . '">' . $title . '</a>';
									
									
											 if ($i == '3') break;
											
												$i++;
										}
										
									echo $menu_list_top;
									
										?>
  </div>
</div>			
			<?php endif;?>	
			</header>
					
				
	<?php 
  if($varMenu['menuBottom'] !== "" && $varMenu['bottom'] == "on" ) {
 echo '<nav class="bar bar-tab">';
	
		$menu_items = wp_get_nav_menu_items($varMenu['menuBottom']);

	$i =0;
	foreach ( $menu_items as $key => $menu_item ) {
   
		
		if($menu_item->object == "custom"){
        	$thedddURL = $menu_item->url;
        	$target = 'rel="external" target="_blank"';
       }
       	else{
       		$thedddURL = $menu_item->url;
       		$target = "";
       }
		  	if(!isset($varMenu['bottomIcon'][$i])) $varMenu['bottomIcon'][$i]='';
       ?>
        <a class="tab-item" href="#">
				<span class="icon iconWordAppColor fa fa-<?php echo $varMenu['bottomIcon'][$i]; ?> "></span>
    		<span class="tab-label iconWordAppText"><?php echo $menu_item->title; ?></span>
  			</a>
	
	
    		
					
     <?php
		
		
		   $i++;
		
		
		if($i == 4){ 
			?>


			<?php
			
			break; 
							
							}
    }
  
	echo "
      </nav>";
	}
	
	?>
  
        

      <!-- App Body -->
     <div class="content">
      <p class="content-padded">
