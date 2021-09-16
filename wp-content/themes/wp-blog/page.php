<?php get_header(); ?> 

<!-- Page Heading Section -->
<section class="common-section-ui heading-bg py_50 bg-dark flex center_center d-flex">
  <h1 class="text-white text-uppercase"><?php the_title(); ?></h1>
</section>
<!-- Page Heading Section End -->

<!-- Breadcrumb Start -->
<section class="common-section-ui page-breadcrumb bg-light pti_20 pbi_20">
  <div class="container">
    <p class="text-muted f14 m-0"><a href="<?php echo site_url('/'); ?>" class="text-muted">Home</a> / <?php the_title(); ?></p>
  </div>
</section>
<!-- Breadcrum End -->

<section class="page-section common-section-ui">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php 
					if(have_posts()): 
						while(have_posts()): 
							the_post(); 
							the_content(); 
						endwhile; 
					endif; 
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();  