<div class="et_pb_blog_grid_wrapper">
	<div class="et_pb_blog_grid clearfix">
		<div class="et_pb_ajax_pagination_container">
			<div class="et_pb_salvattore_content" data-columns="3">
				<?php
				    $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => -1 ) );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="product projects">
					            <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
										<div class="thumbnail-container">
										<div class="product-more-icon"><i class="fa fa-plus"></i></div>
						                <?php if ( has_post_thumbnail() ) { ?>
						                    <?php 
						                    $images = get_field('project_gallery');
						                    			
						                    if( $images ): ?>
						                    	<?php foreach( $images as $image ): ?>
						                    		<a href="<?php echo $image['url']; ?>" data-fancybox="<?php the_ID(); ?>" data-caption="<?php echo $image['caption']; ?>" style="display: block;">
														<div class="thumb-overlay"></div>
						                    			<?php echo the_post_thumbnail(); ?>
						                    		</a>
						                    	<?php endforeach; 
						                    endif; ?>
											
						                <?php } ?>
										</div>
					                <div class="project-info">
					                    <h4><?php echo get_the_title(); ?></h4>
										<?php if( get_field('completion_date') ): ?>
										<p class="project-para">
											<span class="blue-brand-text"><?php echo esc_html_e('Completed: '); ?></span><?php the_field('completion_date'); ?>
										</p>
										<?php endif; ?>
										<?php if( get_field('project_location') ): ?>
										<p class="project-para">
											<span class="blue-brand-text"><?php echo esc_html_e('Location: '); ?></span><?php the_field('project_location'); ?>
										</p>
										<?php endif; ?>
					                </div>
					            </article>
							</div>
				        <?php endwhile;
				    endif;
				    wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</div>