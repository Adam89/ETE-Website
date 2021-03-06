<?php
/**
 * The main template file
*/
get_header(); ?>
<section class="section-main">
	<div class="container no-padding">
    	<div class="col-md-8 no-padding imgset freemium-post">
			 <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-md-12 no-padding-right margin-bottom-3">
          	<div class="col-md-12 white-bg no-padding">
                    <div class="col-md-12 page-title clearfix">
                       <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="col-md-12 margin-top-2 single-content text-justify clearfix">
						          <?php $freemium_feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); if($freemium_feat_image!="") { ?>
                        <img src="<?php echo $freemium_feat_image; ?>" alt="Banner" class="img-responsive img-responsive-freemium" />
                        <?php }
                        the_content(); ?>
                    </div>
              </div>
             </div>			
			<?php endwhile; ?>
            <?php comments_template(); ?>
        </div>
		<?php get_sidebar(); ?>    
    </div>
</section>
<?php get_footer(); ?>