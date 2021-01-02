<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package taher
 */

?>

<!-- Footer -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-offset-3 col-md-3">
                <div class="widget widget_about margin-bottom-25">
                    <div class="margin-bottom-35">
                        <img src="<?php echo sh_get_image_url('logo.png') ?>" width="204" height="30" alt="image" />
                    </div>
                </section>

                <section class="widget widget_information">
                    <ul class="info-wrap">
                        <li class="address item"><?php echo sh_var('sh_business_address'); ?></li>
                        <li class="phone item"><?php echo sh_var('sh_business_phone'); ?></li>
                        <li class="email item"><?php echo sh_var('sh_business_email'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="widget widget_links">
                    <h2 class="widget-title">Site Map</h2>
					<?php echo sh_sitemap_menu() ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top">TOP</a>

<?php wp_footer(); ?>

</body>
</html>
