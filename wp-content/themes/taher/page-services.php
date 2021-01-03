<?php
/**
 * @package taher
*/

require get_template_directory() . '/inc/template-services-static-info.php';

get_header('', array('body_classes_override' => 'page sidebar-left header-style-1'));

?>

<div id="main-content" class="site-main clearfix">
<div id="content-wrap" class="container">
<?php
    if(isset($services[get_query_var('service')])){
        get_template_part( 'template-parts/service-detail','', array('service' => $services[get_query_var('service')]));

        get_template_part( 'template-parts/service-menu','', array(
            'selected_service_key' => get_query_var('service'),
            'services' => $services
        ));
    }
    else{
        get_template_part( 'template-parts/services-all');
    }
?>
</div><!-- /#content-wrap -->
</div><!-- /#main-content -->

<?php
get_sidebar();
get_footer();