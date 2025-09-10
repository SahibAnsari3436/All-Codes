<?php
/**
** Template Name: Blog
**/
 get_header(); ?>
 
<div class="breadcumb-wrapper breadcumb-layout1 bg-fluid pt-200 pb-200" data-bg-src="<?php echo home_url();?>/wp-content/uploads/2021/11/covid-banner-1-1024x764-1.jpg" style="background-image: url(&quot;<?php echo home_url();?>/wp-content/uploads/2021/11/covid-banner-1-1024x764-1.jpg&quot;);">
<div class="container">
<div class="breadcumb-content text-center">
<h1 class="breadcumb-title"><?php the_title();?></h1>
<ul class="breadcumb-menu-style1 mx-auto"><li>
<a href="<?php echo home_url();?>">Home</a></li>
<li class="active"><?php the_title();?></li></ul>
</div></div></div>


    <section class="vs-blog-wrapper space-top space-md-bottom" id="blog">

        <div class="container">

            <div class="row ">
			<?php 
               $args = array('post_type' => 'post', 'posts_per_page' => -1);
               $my_query = new WP_Query($args);
               while($my_query->have_posts()) :
               $my_query->the_post();
               $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->id), 'full');
			  
            ?>  

                <div class="col-md-4 col-sm-6 col-lg-4">

                    <div class="vs-blog blog-grid">

                        <div class="blog-img image-scale-hover">

                            <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo $thumb['0']; ?>" alt="Blog Image" class="w-100"></a>

                        </div>

                        <div class="blog-content">

                            <h4 class="blog-title fw-semibold"><a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a></h4>

                            <div class="blog-meta">

                                <a href="<?php echo get_the_permalink(); ?>"><i class="far fa-calendar"></i><?php the_time('F j, Y'); ?></a>

                                <a href="#"><i class="fa fa-comments"></i><?php comments_number(); ?></a> 

                            </div>

                        </div>

                    </div>

                </div>
				<?php 
               $count++;
               endwhile;
               wp_reset_query(); 
            ?>	

            </div>

        </div>

    </section>

 
 <?php get_footer(); ?>