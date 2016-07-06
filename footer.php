<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appbuilderBiz
 */

?>
 
        </div>
      </div>

    </div><!-- ~ .app -->

    <div ui-yield-to="modals"></div>


<?php wp_footer(); ?>
<script type="text/javascript" src="http://jakiestfu.github.io/Snap.js/snap.js"></script>
	<script type="text/javascript">
	
		var 
		
		// Helper
		$ = function(id){
			return document.getElementById(id);
		},
		
		// Instance
		snapper = new Snap({
			element: document.getElementById('content')
		}),
		
		// 
		UpdateDrawers = function(){
			var state = snapper.state(),
				towards = state.info.towards,
				opening = state.info.opening;
			if(opening=='right' && towards=='left'){
				$('right-drawer').classList.add('active-drawer');
				$('left-drawer').classList.remove('active-drawer');
			} else if(opening=='left' && towards=='right') {
				$('right-drawer').classList.remove('active-drawer');
				$('left-drawer').classList.add('active-drawer');
			}
		};
		
		snapper.on('drag', UpdateDrawers);
		snapper.on('animating', UpdateDrawers);
		snapper.on('animated', UpdateDrawers);
		
		$('toggle-left').addEventListener('click', function(){
			snapper.open('left');
		});
		
		$('toggle-right').addEventListener('click', function(){
			snapper.open('right');
		});
		
	</script>

  </body>
</html>

