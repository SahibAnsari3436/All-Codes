<?php 
/*
 * Template Name: blog detail
 * Template Post Type: post, page, product
 */
get_header();?>
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="<?php echo home_url();?>/wp-content/uploads/2021/11/covid-banner-1-1024x764-1.jpg" style="background-image: url(&quot;<?php echo home_url();?>/wp-content/uploads/2021/11/covid-banner-1-1024x764-1.jpg&quot;);">
<div class="container">
<div class="breadcumb-content text-center">
<h1 class="breadcumb-title"><?php the_title();?></h1>
<ul class="breadcumb-menu-style1 mx-auto"><li>
<a href="<?php echo home_url();?>">Home</a></li>
<li class="active">Blogs</li></ul>
</div></div></div>

 <section class="vs-blog-wrapper blog-details space-top space-md-bottom">

        <div class="container">

            <div class="row gx-5">

                <div class="col-lg-8 col-xl-9">

                    <div class="vs-blog blog-single">

                        <div class="blog-image">

                           <?php the_post_thumbnail('single-post-thumbnail'); ?>

                        </div>

                        <div class="blog-header">

                            <h2 class="blog-title h1"><?php the_title();?></h2>

                            <div class="blog-meta">

                               <a href="<?php echo get_the_permalink(); ?>"><i class="far fa-calendar"></i><?php the_time('F j, Y'); ?></a>

                                <a href="#"><i class="fa fa-comments"></i><?php comments_number(); ?></a> 

                            </div>

                        </div>
						

                        <div class="blog-content">
							<?php the_content(); ?>
						 <?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>               

                        </div>


                    </div>

                 

                </div>

                <div class="col-lg-4 col-xl-3">

                    <aside class="sidebar-area sticky-sidebar">


                        <div class="widget   ">

                            <h3 class="widget_title">Latest Posts</h3>

                            <div class="vs-widget-recent-post">
							<?php 
               $args = array('post_type' => 'post', 'posts_per_page' => 4);
               $my_query = new WP_Query($args);
               while($my_query->have_posts()) :
               $my_query->the_post();
               $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'full');
			  
            ?>  

                                <div class="recent-post d-flex align-items-center">

                                    <div class="media-img">

                                        <img src="<?php echo $thumb['0']; ?>" width="100" height="73" alt="Recent Post Image">

                                    </div>

                                    <div class="media-body pl-30">

                                        <h4 class="recent-post-title h5 mb-0"><a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a></h4>

                                        <a href="#" class="text-theme fs-12"><?php the_time('F j, Y'); ?></a>

                                    </div>

                                </div>
								<?php 
               $count++;
               endwhile;
               wp_reset_query(); 
            ?>	


                            </div>

                        </div>


                    </aside>

                </div>

            </div>

        </div>

    </section>

 <?php get_footer(); ?>