<?php
/*
Template Name: Lecture Notes listing
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
                        <!-- <div class="range-slider" data-slider>
                        <span class="range-slider-handle"></span>
                        <span class="range-slider-active-segment"></span>
                        <input type="hidden">
                        </div> -->
			<div class="entry-content">
			    <?php the_content(); ?>
                            <!-- <div class="row">
                            <div class="large-4 columns">
                            <h3> Slides</h3>
                            <?php mwp_get_directory_listing ("/var/www/sandbox/DigitalHistory/Lectures/Slides/", "http://sandbox.hackinghistory.ca/DigitalHistory/Lectures/Slides/", "html"); ?>
                            </div> 
                            <div class="large-4 columns">
                            <h3> Source Files</h3>
                            <?php mwp_get_directory_listing ("/var/www/sandbox/DigitalHistory/Lectures/Source/", "http://sandbox.hackinghistory.ca/DigitalHistory/Lectures/Source/", "org"); ?>
                            </div> 
                            </div> --> <!-- end row -->
			</div>
<?php $args = array(
	'authors'      => '',
	'child_of'     => $post->ID,
	'date_format'  => get_option('date_format'),
	'depth'        => 0,
	'echo'         => 1,
	'exclude'      => '',
	'include'      => '',
	'link_after'   => '',
	'link_before'  => '',
	'post_type'    => 'page',
	'post_status'  => 'publish',
	'show_date'    => '',
	'sort_column'  => 'menu_order, post_title',
        'sort_order'   => '',
	'title_li'     => __('Children of  this Page'), 
	'walker'       => ''
); ?>
<?php wp_list_pages( $args ); ?>  
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php/* comments_template(); */?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>
