<div class="row post">
	<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
	
	<header>
		<p>
			<span class="fa fa-user-secret"></span> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>  <span class="fa fa-clock-o"></span>
			<?php the_time('F j:Y, g:i a');?>  <span class="fa fa-tags"></span>
			<?php 
				$categories = get_the_category();
				$output = '';
				$separator = ',';
				if($categories){
					foreach($categories as $category){
						$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
					}
					echo trim($output, $separator);
				}
			?>
		</p>
	</header>
	<article>
		<?php if(is_single()): ?>
			<p>
				<?php the_content();?>
			</p>
		<?php else: ?>
			
				<div class="col-md-5">
					<?php the_post_thumbnail('small');?>
				</div>
				<div class="col-md-7">
					<p>
						<?php echo get_the_excerpt();?>
					</p>
				</div>
			
		<?php endif;?>
		
	</article>
</div>

