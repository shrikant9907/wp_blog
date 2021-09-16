<?php get_header(); ?> 

<!-- Page Heading Section -->
<section class="common-section-ui heading-bg py_50 bg-dark flex center_center d-flex">
  <h1 class="text-white text-uppercase"><?php the_title(); ?></h1>
</section>
<!-- Page Heading Section End -->

<!-- Breadcrumb Start -->
<section class="common-section-ui page-breadcrumb bg-light pti_20 pbi_20">
  <div class="container">
    <p class="text-muted f14 m-0"><a href="<?php echo site_url('/'); ?>" class="text-muted">Home</a> / <a href="<?php echo site_url('/blog'); ?>" class="text-muted">Blog</a> / <?php the_title(); ?></p>
  </div>
</section>
<!-- Breadcrum End -->
<?php 
if(have_posts()): 
	while(have_posts()): 
		the_post();  
		$image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
		?>
		<div class="single-page common-section-ui">
			<div class="container">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-8">
						<div class="card cui2 w-100 typography">
							<div class="card-body pri_30 pli_30 pbi_30">
								<h1 class='text-primary'><?php the_title(); ?></h1>
								<?php if(has_post_thumbnail()) { ?>
									<img class="card-img-top r_0 mb_20 border" src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
								<?php } else { ?>
									<img class="card-img-top r_0 mb_20 border" src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder_500x300.jpg" alt="">
								<?php } ?>
								<div class="text-dark px_5 py_5 mb_10 f14 d-flex justify-content-between">
									<span><i class="fa fa-user mr_5 text-primary" aria-hidden="true"></i> <?php the_author(); ?></span>
									<span><i class="fa fa-tag mr_5 text-primary" aria-hidden="true"></i> 
									<?php
									$categories = get_the_category();
									$separator = ' ';
									$output = '';
									if ( ! empty( $categories ) ) {
										foreach( $categories as $category ) {
											$output .= '<a class="text-dark" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'mycourse' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
										}
										echo trim( $output, $separator );
									}

									?></span> 
									<span><i class="fa fa-clock mr_5 text-primary" aria-hidden="true"></i> <?php //echo get_the_date(); ?> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' ); ?></span>
								</div>
								<div class="f16">
									<?php the_content(); ?>
									<?php
										$prev_post = get_previous_post();
										if (!empty( $prev_post )): ?>
											<div class='article-nextpost'>
												<a class="btn btn-primary btnui3s mb_20" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">Previous: <?php echo esc_attr( $prev_post->post_title ); ?></a>
											</div>
										<?php endif ?>
								
										<?php
										$next_post = get_next_post();
										if (!empty( $next_post )): ?>
											<div class='article-nextpost'>
												<a class="btn btn-primary btnui3s mb_20" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">Next: <?php echo esc_attr( $next_post->post_title ); ?></a>
											</div>
										<?php endif; ?> 
									<?php comment_form(); ?>
					 			</div>
							</div>
						</div>                        
					</div>
					<div class="col-12 col-sm-6 col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
		endwhile; 
endif; 
?>    
<?php get_footer(); 