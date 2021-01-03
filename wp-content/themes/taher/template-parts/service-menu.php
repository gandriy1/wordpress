<?php
/**
 * Template part for displaying service detail
 */

 $selected_service_key = $args['selected_service_key'];
 $services = $args['services'];

 function get_class_when_current_service($service_key, $selected_service_key){
	return $service_key == $selected_service_key ? 'current_page_item' : '';
 }

 function get_service_href($service_key){
	return add_query_arg('service', $service_key, get_permalink( get_page_by_title( 'Services' ) ) );
 }

?>
<div id="sidebar">
	<div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>

	<div id="inner-sidebar" class="inner-content-wrap">
		<div class="widget widget_nav_menu">
			<div class="menu-service-menu-container">
				<ul id="menu-service-menu" class="menu">
					<?php 
						foreach($services as $service_key => $service){
							echo '
								<li class="menu-item ' 
								.get_class_when_current_service($service_key, $selected_service_key)
								.'"><a href="' .get_service_href($service_key) .'">' 
								 .$service->name
								.'</a></li>
							';
						}
					?>
				</ul>
			</div>
		</div><!-- /.widget_nav_menu -->
	</div><!-- /#inner-sidebar -->
</div><!-- /#sidebar -->