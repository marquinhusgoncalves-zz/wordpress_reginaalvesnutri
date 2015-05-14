				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
			 
				    <h4><?php the_title(); ?></h4>
				    <div class = "time"><?php the_time('j \d\e F \d\e Y'); ?></div>
				    <div style = "width: 100%; height: 180px; background: url(<?php echo catch_that_image() ?>) no-repeat; background-size: 100%"></div>
			    <?php the_excerpt(); ?>
			    <!-- <div class="btn-toolbar text-center">
				    <a class="btn btn-primary pull-left" role="button" href="<?php the_permalink(); ?>">&laquo; Leia Mais</a>
			    </div> -->
			 
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>