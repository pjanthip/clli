<footer id="footer" class="dark" style="background: url('<?php echo base_url('assets/theme/canvas/images/footer-bg.jpg');?>') repeat fixed; background-size: 100% 100%;">
    <div id="copyrights">
        <div class="container">

            <div class="row justify-content-between col-mb-30">
                <div class="col-12 col-lg-auto text-center text-lg-start">
                    <div class="copyrights-menu copyright-links clearfix">
                        <a href="https://goo.gl/maps/wr6k1u1Ti1EKJdY1A" target="_blank">สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย &nbsp; 80 หมู่ 9 ตำบลบ้านดู่ อำเภอเมือง จังหวัดเชียงราย 57100</a>
                    </div>
                    Copyrights © 2021 All Rights Reserved by <a href="<?php echo site_url()?>">CLLI.</a>
                </div>

                <!-- <div class="col-12 col-lg-auto text-center text-lg-end">
                    <a href="https://www.facebook.com/crru.clli" target="_blank" class="social-icon inline-block si-small si-borderless mb-0 si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="https://lin.ee/619HVzk" target="_blank" class="social-icon inline-block si-small si-borderless mb-0 si-spotify">
                        <i class="icon-line"></i>
                        <i class="icon-line"></i>
                    </a>


                    <a href="https://www.youtube.com/channel/UCPsdbHsWypdM7qEOQyI3csA" target="_blank" class="social-icon inline-block si-small si-borderless mb-0 si-youtube">
                        <i class="icon-youtube"></i>
                        <i class="icon-youtube"></i>
                    </a>

                    <a href="tel:+6653776008" target="_blank" class="social-icon inline-block si-small si-borderless mb-0 si-call">
                        <i class="icon-call"></i>
                        <i class="icon-call"></i>
                    </a>

                    <a href="mailto:clli@crru.ac.th" target="_blank" class="social-icon inline-block si-small si-borderless mb-0 si-google">
                        <i class="icon-email3"></i>
                        <i class="icon-email3"></i>
                    </a>
                </div> -->
            </div>

        </div>
    </div>
</footer>

<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="<?php echo CANVAS; ?>js/plugins.min.js"></script>
<script src="<?php echo CANVAS; ?>js/plugins.infinitescroll.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="<?php echo CANVAS; ?>js/functions.js"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo CANVAS; ?>include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<!-- ADD-ONS JS FILES -->
<script>
    var tpj = jQuery;
    var revapi19;
    var $ = jQuery.noConflict();
    tpj(document).ready(function() {
        if (tpj("#rev_slider_19_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_19_1");
        } else {
            revapi19 = tpj("#rev_slider_19_1").show().revolution({
                sliderType: "carousel",
                jsFileLocation: "<?php echo CANVAS; ?>include/rs-plugin/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 7000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    onHoverStop: "on",
                    tabs: {
                        style: "hesperiden",
                        enable: true,
                        width: 260,
                        height: 80,
                        min_width: 260,
                        wrapper_padding: 25,
                        wrapper_color: "#F5F5F5",
                        wrapper_opacity: "1",
                        tmp: '<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title font-secondary">{{title}}</span> <span class="tp-tab-date tp-tab-para">{{param2}}</span></div><div class="tp-tab-image"></div>',
                        visibleAmount: 9,
                        hide_onmobile: false,
                        hide_under: 480,
                        hide_onleave: false,
                        hide_delay: 200,
                        direction: "horizontal",
                        span: true,
                        position: "outer-bottom",
                        space: 0,
                        h_align: "left",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 0
                    }
                },
                carousel: {
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "on",
                    vary_fade: "on",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: 0,
                    stretch: "off",
                    showLayersAllTime: "off",
                    easing: "Power3.easeInOut",
                    speed: "800"
                },
                responsiveLevels: [1140, 992, 768, 576],
                visibilityLevels: [1140, 992, 768, 576],
                gridwidth: [850, 700, 400, 300],
                gridheight: [580, 600, 500, 400],
                lazyType: "single",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "off",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /* Revolution Slider End */

    // Navbar on hover
    $('.nav.tab-hover a.nav-link').hover(function() {
        $(this).tab('show');
    });

    // Current Date
    var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        a = new Date();

    jQuery('.date-today').html(weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate());

    // Infinity Scroll
    jQuery(window).on('load', function() {

        var $container = $('.infinity-wrapper');

        $container.infiniteScroll({
            path: '.load-next-portfolio',
            button: '.load-next-portfolio',
            scrollThreshold: false,
            history: false,
            status: '.page-load-status'
        });

        $container.on('load.infiniteScroll', function(event, response, path) {
            var $items = $(response).find('.infinity-loader');
            // append items after images loaded
            $items.imagesLoaded(function() {
                $container.append($items);
                $container.isotope('insert', $items);
                setTimeout(function() {
                    SEMICOLON.widget.loadFlexSlider();
                }, 1000);
            });
        });

    });

    $(window).on('pluginCarouselReady', function() {
        $('#oc-news').owlCarousel({
            items: 1,
            margin: 20,
            dots: false,
            nav: true,
            navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    dots: true,
                },
                576: {
                    items: 1,
                    dots: true
                },
                768: {
                    items: 2,
                    dots: true
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
</script>

</body>

</html>