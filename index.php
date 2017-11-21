<?php 
	get_header();
?>
	<div class="col-md-12">
		<div class="col-md-8">
			<?php 
				if( have_posts() ):
					while( have_posts() ): the_post();
						get_template_part('content');
					endwhile;	
				endif;	
			?>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
<?php		
	get_footer();
?>