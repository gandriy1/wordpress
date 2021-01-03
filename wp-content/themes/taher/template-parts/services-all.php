<?php
/**
 * Template part for displaying service detail
 */

function get_service_link($service_key){
    return add_query_arg('service', $service_key, get_permalink( get_page_by_title( 'Services' ) ) );
}
?>

<div class="row">
	<div class="col-md-12">
		<div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-12 -->

	<div class="col-md-4">

		<div class="service-item clearfix">
			<div class="thumb"><img src="<?php echo sh_get_image_url('services/woodwork.jpg') ?>" alt="image" /></div>
			<div class="service-item-wrap">
				<h3 class="title font-size-18"><a href="<?php echo get_service_link('woodwork') ?>">Woodwork</a></h3>
				<p>Decks, Fences, Pargolus, Stairs and any other custom woodwork</p>
				<a href="<?php echo get_service_link('woodwork') ?>"  
					class="wprt-button small rounded-3px">Learn More</a>
			</div>
		</div>

		<div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-4 -->

	<div class="col-md-4">
		<div class="service-item clearfix">
			<div class="thumb"><img src="<?php echo sh_get_image_url('services/stonework.jpg') ?>" alt="image" /></div>
			<div class="service-item-wrap">
				<h3 class="title font-size-18"><a href="<?php echo get_service_link('stonework') ?>">Stonework</a></h3>
				<p>Interlocking, steps, retaining walls, decorations and all other types of work with stones</p>
				<a href="<?php echo get_service_link('stonework') ?>" class="wprt-button small rounded-3px">Learn More</a>
			</div>
		</div>

		<div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-4 -->

	<div class="col-md-4">
		<div class="service-item clearfix">
			<div class="thumb"><img src="<?php echo sh_get_image_url('services/sodding.jpg') ?>" alt="image" /></div>
			<div class="service-item-wrap">
				<h3 class="title font-size-18"><a href="<?php echo get_service_link('sodding') ?>">Sodding & Planting</a></h3>
				<p>Grass sodding and plants for your gardens, backyard, and frontyard areas</p>
				<a href="<?php echo get_service_link('sodding') ?>" class="wprt-button small rounded-3px">Learn More</a>
			</div>
		</div>
	</div><!-- /.col-md-4 -->
</div><!-- /.row -->

<div class="row">
	<div class="col-md-12">
		<div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-12 -->

	<div class="col-md-4">
		<div class="service-item clearfix">
			<div class="thumb"><img src="<?php echo sh_get_image_url('services/design.jpg') ?>" alt="image" /></div>
			<div class="service-item-wrap">
				<h3 class="title font-size-18"><a href="<?php echo get_service_link('design') ?>">Design</a></h3>
				<p>Upon request we provide consepts and layouts to refine landcaping projects to your taste</p>
				<a href="<?php echo get_service_link('design') ?>" class="wprt-button small rounded-3px">Learn More</a>
			</div>
		</div>

		<div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-4 -->

	<div class="col-md-4">
		<div class="service-item clearfix">
			<div class="thumb"><img src="<?php echo sh_get_image_url('services/water-features.jpg') ?>" alt="image" /></div>
			<div class="service-item-wrap">
				<h3 class="title font-size-18"><a href="<?php echo get_service_link('water_features') ?>">Water Features</a></h3>
				<p>Various irrigation and decoration setups add style to your next landscaping project</p>
				<a href="<?php echo get_service_link('water_features') ?>" class="wprt-button small rounded-3px">Learn More</a>
			</div>
		</div>

		<div class="wprt-spacer" data-desktop="0" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-4 -->

	<div class="col-md-4">
		<div class="service-item clearfix">
			<div class="thumb"><img src="<?php echo sh_get_image_url('services/lighting.jpg') ?>" alt="image" /></div>
			<div class="service-item-wrap">
				<h3 class="title font-size-18"><a href="<?php echo get_service_link('lighting') ?>">Outdoor Lighting</a></h3>
				<p>Lighting of driveways and gardens can bring up features of your yard in eyes of guests</p>
				<a href="<?php echo get_service_link('lighting') ?>" class="wprt-button small rounded-3px">Learn More</a>
			</div>
		</div>
	</div><!-- /.col-md-4 -->

	<div class="col-md-12">
		<div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
	</div><!-- /.col-md-12 -->
</div><!-- /.row -->
