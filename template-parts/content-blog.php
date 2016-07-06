<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package appbuilderBiz
 */

?>
 <li class="table-view-cell media" id="post-<?php the_ID(); ?>" >
    <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="">
     <?php the_post_thumbnail(array(50, 50), array( 'class'	=> "media-object pull-left")); ?>
			<div class="media-body">
        <?php 
			
				the_title( '' );
		
				?>
        <p><?php 
						echo substr(strip_tags(get_the_content()),0,50);
					?></p>
      </div>
    </a>
  </li>
