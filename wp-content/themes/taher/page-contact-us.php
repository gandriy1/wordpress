<?php
/**
 * @package taher
*/

get_header();

$is_email_sent = isset($_GET['emailSent']);
if($is_email_sent){
?>
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-center margin-bottom-20">Hang Tight. We will get back to you shortly.</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
else{
?>
<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <section class="wprt-section">
                        <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-center margin-bottom-20">GET IN TOUCH WITH US</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-4">
                                    <h5>Address</h5>
                                    <p><?php echo sh_var('sh_business_address'); ?></p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>Phone number</h5>
                                    <p><?php echo sh_var('sh_business_phone'); ?></p>

                                    <div class="wprt-spacer" data-desktop="15" data-mobi="0" data-smobi="0"></div>

                                    <h5>E-mail address</h5>
                                    <p><?php echo sh_var('sh_business_email'); ?></p>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="10" data-smobi="10"></div>
                                </div><!-- /.col-md-4 -->

                                <div class="col-md-8">
                                    <form class="wprt-contact-form" method="post" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>">
                                        <div class="inner">
                                            <div class="left-side">
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="1" placeholder="Name *" name="sh_name" id="name" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="email" value="" tabindex="2" placeholder="Email *" name="sh_email" id="email" required>
                                                </div>
                                                <div class="input-wrap">
                                                    <input type="text" value="" tabindex="4" placeholder="Subject " name="sh_subject" id="subject">
                                                </div>
                                                <div class="message-wrap">
                                                    <textarea class="" tabindex="5" placeholder="Message *" name="sh_message" id="message" required></textarea>
                                                </div>
                                                <div class="send-wrap">
                                                    <input type="hidden" name="action" value="contact_us_form">
                                                    <input type="submit" value="SEND MESSAGE" id="submit" name="submit" class="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form><!-- /.wprt-contact-form -->
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
get_sidebar();
get_footer();