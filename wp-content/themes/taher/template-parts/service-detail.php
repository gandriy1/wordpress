<?php
/**
 * Template part for displaying service detail
 */

$current_service = $args['service']
?>

<div id="site-content" class="site-content clearfix">
<div id="inner-content" class="inner-content-wrap">
<div class="row">
	<div class="col-md-12">
		<div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

		<h3 class="line-height-normal margin-bottom-10">What We Do - <?php echo $current_service->name; ?></h3>
		<div class="wprt-lines style-1 custom-3">
			<div class="line-1"></div>
			<div class="line-2"></div>
		</div>
		<div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

		<p class="margin-bottom-0"><?php echo $current_service->description; ?></p>

		<div class="wprt-spacer" data-desktop="35" data-mobi="35" data-smobi="35"></div>                        
	</div><!-- /.col-md-12 -->

	<div class="col-md-12">
		<h3 class="line-height-normal margin-bottom-10">Gallery</h3>
		<div class="wprt-lines style-1 custom-3">
			<div class="line-1"></div>
			<div class="line-2"></div>
		</div>

		<div class="wprt-spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>

		<div class="wprt-galleries-grid arrow-style-1 has-arrows arrow60 arrow-position-2" data-layout="slider" data-column="2" data-column2="2" data-column3="1" data-column4="1" data-gaph="10" data-gapv="10">
			<div id="images-wrap" class="cbp">

				<?php
				foreach ($current_service->images as $image){
					$image_url = sh_get_image_url($image);
					echo '
						<div class="cbp-item">
							<div class="item-wrap">
								<a class="zoom" href="' .$image_url .'"><i class="fa fa-arrows-alt"></i></a>
								<img src="' .$image_url .'" alt="image" />
							</div>
						</div>
					';
				}
				?>

			</div><!-- /#images-wrap -->
		</div><!-- /.wprt-galleries-grid -->
	</div><!-- /.col-md-12 -->

	<div class="col-md-6">
		<div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

		<h3 class="line-height-normal margin-bottom-10"><?php echo $current_service->name ?> types</h3>
		<div class="wprt-lines style-1 custom-3">
			<div class="line-1"></div>
			<div class="line-2"></div>
		</div>

		<div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

		<ul class="wprt-list style-2 accent-color">
				<?php
					foreach ($current_service->work_types as $work_type){
						echo '<li>' .$work_type .'</li>';
					}
				?>
		</ul>
	</div><!-- /.col-md-6 -->

	<div class="col-md-6">
		<div class="wprt-spacer" data-desktop="60" data-mobi="40" data-smobi="40"></div>

		<h3 class="line-height-normal margin-bottom-10">Work Process</h3>
		<div class="wprt-lines style-1 custom-3">
			<div class="line-1"></div>
			<div class="line-2"></div>
		</div>

		<div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

		<ol>
			<li>Consultation & Estimation. Design if needed.</li>
			<li>Design proposal, project proposal, and estimate of project</li>
			<li>Construction installation</li>
			<li>Project assesment & completion</li>
		</ol>
	</div><!-- /.col-md-6 -->
</div><!-- /.row -->

<div class="row">
	<div class="col-md-12">
		<div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

		<h3 class="line-height-normal margin-bottom-10">FAQ</h3>
		<div class="wprt-lines style-1 custom-3">
			<div class="line-1"></div>
			<div class="line-2"></div>
		</div>

		<div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

		<?php
			foreach ($current_service->faq as $faq_item){
				echo '
				<div class="wprt-toggle style-1">
					<h3 class="toggle-title">' .$faq_item->question .'</h3>
					<div class="toggle-content">' .$faq_item->answer .'</div>
				</div>
				';
			}
		?>

		<div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

	</div><!-- /.col-md-12 -->
</div>
</div><!-- /.inner-content-wrap -->
</div><!-- /#site-content -->   