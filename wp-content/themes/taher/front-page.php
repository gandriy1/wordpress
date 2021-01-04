<?php
/**
 * @package taher
*/

get_header();

function get_service_link($service_key){
    return add_query_arg('service', $service_key, get_permalink( get_page_by_title( 'Services' ) ) );
}
?>


<!-- Slider -->
<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider2" class="rev_slider fullwidthabanner">
        <ul>
            <!-- Slide -->
            <li data-transition="parallaxvertical">
                <!-- Main Image -->
                <img src="<?php echo sh_get_image_url('slide-6.jpg') ?>" alt="" data-bgposition="center center" data-no-retina>
                <!-- Layers -->
                <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-500"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-110','-110','-110','-110']"
                    data-fontsize="['58','54','50','46']"
                    data-lineheight="['68','64','60','56']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    Landscape Construction
                </div>
                <div class="sfb tp-caption tp-resizeme text-white text-shadow letter-spacing-2px"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-34','-34','-34','-34']"
                    data-fontsize="['20','20','20','18']"
                    data-lineheight="['30','30','30','28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-start="1800"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-lasttriggerstate="reset">
                    With over 20 years of experience, we can handle landscaping projects of any complexity 
                </div>
                <div class="sfb tp-caption"
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['63','63','63','63']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="2100"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive="on">
                    <a href="<?php echo get_permalink( get_page_by_title( 'Services' ) )?>" class="wprt-button rounded-3px">Our Services</a>
                </div>
                <div class="sfb tp-caption"
                    data-x="['left','left','left','left']" data-hoffset="['260','280','280','270']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['63','63','63','63']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="2200"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive="on">
                    <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) )?>" class="wprt-button rounded-3px">Get a Quote</a>
                </div>
            </li>
            <!-- End Slide -->

             <!-- Slide -->
             <li data-transition="parallaxvertical">
                <!-- Main Image -->
                <img src="<?php echo sh_get_image_url('slide-7.jpg') ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>
                <!-- Layers -->
                <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow text-center font-weight-500"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                    data-fontsize="['58','54','50','46']"
                    data-lineheight="['68','64','60','56']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on">
                    Landscape Design 
                </div>
                <div class="sfb tp-caption tp-resizeme text-white text-shadow text-center letter-spacing-1px"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-14','-14','-14','-14']"
                    data-fontsize="['20','20','20','18']"
                    data-lineheight="['30','30','30','28']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                    data-start="1800"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-lasttriggerstate="reset">
                    Not sure what you want? We can provide landscaping designs to refine your ideas  
                </div>
                <div class="sfb tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['83','83','83','83']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                    data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                    data-transform_idle="o:1;" 
                    data-transform_in="o:0" 
                    data-transform_out="o:0" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                    data-start="2100"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive="on">
                    <a href="<?php echo get_permalink( get_page_by_title( 'Contact Us' ) )?>" class="wprt-button rounded-3px">Contact Us</a>
                </div>
            </li>
            <!-- End Slide -->
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- Intro -->
                    <section class="wprt-section intro">
                        <div class="container">
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

                        </div><!-- /.container -->
                    </section>

                    <!-- FACTS -->
                    <section class="wprt-section about-page parallax">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="120" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type">
                                        <img src="<?php echo sh_get_image_url('homestars.jpg') ?>" alt="image">
                                    </div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type has-plus">
                                        <img src="<?php echo sh_get_image_url('google-reviews.png') ?>" alt="image">
                                    </div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type">
                                        <img src="<?php echo sh_get_image_url('2-year-warranty.png') ?>" alt="image">
                                    </div>

                                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-3">
                                    <div class="wprt-counter text-center accent-type">
                                        <img src="<?php echo sh_get_image_url('wsib.jpg') ?>" alt="image">
                                    </div>
                                </div><!-- /.col-md-3 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="120" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- WORKS -->
                    <section id="works" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="text-center margin-bottom-20">Recent Projects</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->

                        <div class="wprt-project" data-layout="grid" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="0" data-gapv="0">
                            <div id="project-filter">
                                <div data-filter="*" class="cbp-filter-item">
                                    <span>All</span>
                                </div>
                                <div data-filter=".patio" class="cbp-filter-item">
                                    <span>Patios</span>
                                </div>
                                <div data-filter=".driveway" class="cbp-filter-item">
                                    <span>Driveways</span>
                                </div>
                                <div data-filter=".fence" class="cbp-filter-item">
                                    <span>Fences</span>
                                </div>
                                <div data-filter=".garden" class="cbp-filter-item">
                                    <span>Gardens</span>
                                </div>
                            </div><!-- /#project-filter -->

                            <div id="projects" class="cbp">
                                <div class="cbp-item patio">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('decks/decks2.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('woodwork') ?>">Woodworks</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('decks/decks2.jpg') ?>" data-title="Woodworks">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item driveway">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('stonework/stonework2.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('stonework') ?>">Stonework</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('stonework/stonework2.jpg') ?>" data-title="Stonework">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item fence garden">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('fences/fences2.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('woodwork') ?>">Woodwork</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('fences/fences2.jpg') ?>" data-title="Woodwork">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item patio">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('decks/decks5.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('woodwork') ?>">Woodwork</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('decks/decks5.jpg') ?>" data-title="Woodwork">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item driveway">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('stonework/stonework5.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('stonework') ?>">Stonework</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('stonework/stonework5.jpg') ?>" data-title="Stonework">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item fence patio">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('fences/fences4.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('woodwork') ?>">Woodwork</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('fences/fences4.jpg') ?>" data-title="Woodwork">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item garden">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('sodding-planting.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('sodding') ?>">Sodding & Planting</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('sodding-planting.jpg') ?>" data-title="Sodding & Planting">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                                <div class="cbp-item patio">
                                    <div class="project-item">
                                        <div class="inner">
                                            <div class="grid">
                                            <figure class="effect-honey">
                                                <img src="<?php echo sh_get_image_url('decks/decks4.jpg') ?>" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2><a target="_blank" href="<?php echo get_service_link('woodwork') ?>">Woodwork</a></h2>
                                                    </div>
                                                </figcaption>           
                                            </figure>
                                            </div>

                                            <a class="project-zoom cbp-lightbox" href="<?php echo sh_get_image_url('decks/decks4.jpg') ?>" data-title="Woodwork">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--/.cbp-item -->

                            </div><!-- /#projects -->
                        </div><!--/.wprt-project -->
                    </section>

                    <!-- TESTIMONIALS -->
                    <section id="testimonials" class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="100" data-mobi="40" data-smobi="40"></div>
                                    <h2 class="text-center margin-bottom-20">What others say about us</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="36" data-mobi="30" data-smobi="30"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-testimonials style-1 has-bullets bullet-style-1 bullet50" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="testimonials-wrap" class="cbp">
                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="<?php echo sh_get_image_url('dahlia-thumb.png') ?>" alt="image" /></div>
                                                        <h4 class="name">Dahlia Fisher</h4>
                                                        <div class="position">Google Review</div>
                                                        <blockquote class="whisper">Daryush and his team did some beautiful work in our backyard. They are professional, reliable, honest, attentive to detail and a pleasure to work with. I highly recommend them.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="<?php echo sh_get_image_url('jordan-thumb.png') ?>" alt="image" /></div>
                                                        <h4 class="name">Jordan Bendat-Appell</h4>
                                                        <div class="position">Google Review</div>
                                                        <blockquote class="whisper">Daryush and his crew were excellent. They are caring, skilled craftsmen who truly believe in quality, beautiful work. Highly recommended.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="<?php echo sh_get_image_url('alon_photo_thumb.jpg') ?>" alt="image" /></div>
                                                        <h4 class="name">Alon</h4>
                                                        <div class="position">Homestars Review</div>
                                                        <blockquote class="whisper">Daryush and his team were amazing! They were incredibly responsive, friendly, and did a great job on everything they did for us, including building a patio, getting a sprinkler system installed, fixing issues with the slope of my backyard, and building a vegetable garden.He was so easy to work with and incredibly reliable.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->

                                            <div class="cbp-item">
                                                <div class="customer clearfix">
                                                    <div class="inner">
                                                        <div class="image"><img src="<?php echo sh_get_image_url('dahlia-thumb.png') ?>" alt="image" /></div>
                                                        <h4 class="name">Kim</h4>
                                                        <div class="position">Homestars Review</div>
                                                        <blockquote class="whisper">I asked Taher Landscaping to build a fence for my back yard and new front steps. Daryush was very efficient and professional from the time he quoted until the job was complete, always punctual and returning messages. My yard backs onto a ravine and I wanted the fence to flow with the environment without obstructing the view. Daryush was very patient offering suggestions and ideas while consulting with me throughout the job.</blockquote>
                                                    </div>
                                                </div>
                                            </div><!-- /.cbp-item -->
                                        </div><!-- /#service-wrap -->
                                    </div><!-- /.wprt-testimonials -->

                                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->
                           </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div><!-- /.page-content -->
            </div>
        </div>
    </div>
</div>


<?php
get_sidebar();
get_footer();