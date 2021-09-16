<?php get_header(); ?> 

<section class="404page common-section-ui">
	<h1 class="heading_style type2 text-center f34 text-uppercase">Error 404</h1>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<i class="fas text-danger display-1 fa-frown-open"></i>
				<div class="py_20">
					<h3 class="f20_26 mb_20">The page your are looking for does not exist.</h3>
					<p class="mb_0"><a class="mb_0 btn btn-primary btnui3s px_30" href='<?php echo site_url('/'); ?>'>Go To Home page</a></p>
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer();