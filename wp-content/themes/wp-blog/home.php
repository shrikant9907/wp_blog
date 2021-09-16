<?php
/*
* Template Name: Blog Listing Template
*/ 
get_header();
?> 
<!-- Page Heading Section -->
<section class="common-section-ui heading-bg py_50 bg-dark flex center_center d-flex">
  <h1 class="text-white text-uppercase">Blog</h1>
</section>
<!-- Page Heading Section End -->

<!-- Breadcrumb Start -->
<section class="common-section-ui page-breadcrumb bg-light pti_20 pbi_20">
  <div class="container">
    <p class="text-muted f14 m-0"><a href="<?php echo site_url('/'); ?>" class="text-muted">Home</a> / About Us</p>
  </div>
</section>
<!-- Breadcrum End -->

<!-- Blog Page Content Start -->
<div class="blog-page common-section-ui">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-8">
        <?php 
          if(have_posts()): 
            while(have_posts()): 
              the_post();  
              $image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
              ?>
              <div class="card cui2 w-100 typography">
                <div class="card-body pri_30 pri_30 pli_30 pbi_30">
                  <h2 class='text-primary'><a class="text-primary tdn d-block" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
                  <?php if(has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>" class="d-inline-block w-100 border  mb_20"><img class="card-img-top r_0" src="<?php echo  $image; ?>" alt="<?php the_title(); ?>" /></a>
                  <?php } else { ?>
                    <a href="<?php the_permalink(); ?>" class="d-inline-block w-100 border mb_20"><img class="card-img-top r_0" src="<?php echo get_stylesheet_directory_uri(); ?>/images/placeholder_500x300.jpg" alt=""></a>
                  <?php } ?>
                  <div class="text-dark px_5 py_5 mb_10 f14 d-flex justify-content-between">
                    <span>
                      <i class="fa fa-user mr_5 text-primary" aria-hidden="true"></i>
                      <?php the_author(); ?>
                    </span>
                    <span>
                      <i class="fa fa-tag mr_5 text-primary" aria-hidden="true"></i> 
                      <?php
                        $categories = get_the_category();
                        $separator = ' ';
                        $output = '';
                        if ( ! empty( $categories ) ) {
                          foreach( $categories as $category ) {
                            $output .= '<a class="text-dark" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'wp-blog' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                          }
                          echo trim( $output, $separator );
                        }
                      ?>
                    </span> 
                    <span><i class="fa fa-clock mr_5 text-primary" aria-hidden="true"></i> <?php echo human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' ); ?></span>
                  </div>
                  <div class="f16">
                    <p><?php echo wp_trim_words(get_the_content(), 30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btnui3s text-white"><?php _e('Continue Reading'); ?> <i class="ml_5 fas fa-angle-double-right"></i></a>
                  </div>
                </div>
              </div>                        
              <?php 
            endwhile; 
            wb_pagination();
          endif; 
        ?>   
      </div>
      <div class="col-12 col-sm-6 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<!-- Blog Page Content End -->
 
<?php get_footer(); 