<?php get_header(); ?>


<div>
	
	<h1 class = "sitetitle"><?php single_cat_title(); ?></h1>
	
	<div class = "blogcontainer">

		
			
		

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class = "postcontainer">	
					<h3><?php the_title(); ?></h3>

					<?php if(has_post_thumbnail()) : ?>
						
						<img src="<?php the_post_thumbnail_url(); ?>" class="postimg">

					<?php endif; ?>

					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>"><button type="button">Read more</button></a>
				</div>
			<?php endwhile; endif; ?>
			
		

	</div>




</div>



<?php get_footer(); ?>

