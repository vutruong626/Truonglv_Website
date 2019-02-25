@extends('front.master')


@section('content')

<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <div class="content">
            <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-788 page type-page status-publish hentry"
                itemscope itemtype="http://schema.org/Article">
                <section class="post_content" itemprop="articleBody">
                    <div class="sc_reviews alignright">
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="wpb_revslider_element wpb_content_element">
                                        <link href="http://fonts.googleapis.com/css?family=Cantarell:400%7CLove+Ya+Like+A+Sister:700%2C400"
                                            rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                        <div id="rev_slider_12_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                                            data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
                                            <div id="rev_slider_12_1" class="rev_slider fullwidthabanner" style="display:none;height: 450px;margin-top: 0px;margin-bottom: 0px;height: 450px;max-height: 612px;"
                                                data-version="5.4.8">
                                                <ul>
                                                    @foreach($slider as $item_slider)
                                                    <!-- SLIDE  -->
                                                    <li  data-transition="fade" data-slotamount="default"
                                                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                                        data-easeout="default" data-masterspeed="default" 
                                                        data-thumb="{{asset('storage/'.$item_slider->images)}}"
                                                        data-rotate="0" data-saveperformance="off" data-title="Slide"
                                                        data-param1="" data-param2="" data-param3="" data-param4=""
                                                        data-param5="" data-param6="" data-param7="" data-param8=""
                                                        data-param9="" data-param10="" data-description="" >
                                                        <!-- MAIN IMAGE -->
                                                        <img src="{{asset('storage/'.$item_slider->images)}}"
                                                            alt="" title="slider1_home1" width="1920" height="450"
                                                            data-bgposition="center center" data-bgfit="cover"
                                                            data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                                            data-no-retina >
                                                        <!-- LAYERS -->
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                                <script>
                                                    var htmlDiv = document.getElementById(
                                                        "rs-plugin-settings-inline-css");
                                                    var htmlDivCss = "";
                                                    if (htmlDiv) {
                                                        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                    } else {
                                                        var htmlDiv = document.createElement("div");
                                                        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[
                                                            0]);
                                                    }
                                                </script>
                                                <div class="tp-bannertimer" style="height: 5px; background: rgba(0,0,0,0.15);"></div>
                                            </div>
                                            <script>
                                                var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                var htmlDivCss =
                                                    ".tp-caption.very_large_http://greenliving.vip/cart/?remove_item=af4732711661056eadbf798ba191272a&amp;_wpnonce=60a10af529" class="remove remove_from_cart_button" aria-label="Remove this item" data-product_id="1354" data-cart_item_key="af4732711661056eadbf798ba191272a" data-product_sku=""text,.very_large_text{color:rgba(255,255,255,1.00);font-size:60px;line-height:70px;font-weight:700;font-style:normal;font-family:Love Ya Like A Sister;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0px 0px 0px 0px}";
                                                if (htmlDiv) {
                                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                } else {
                                                    var htmlDiv = document.createElement("div");
                                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[
                                                        0]);
                                                }
                                            </script>
                                            <script type="text/javascript">
                                                if (setREVStartSize !== undefined) setREVStartSize({
                                                    c: '#rev_slider_12_1',
                                                    responsiveLevels: [1240, 1024, 778, 480],
                                                    gridwidth: [1170, 1024, 778, 680],
                                                    gridheight: [612, 600, 600, 600],
                                                    sliderLayout: 'fullwidth'
                                                });

                                                var revapi12,
                                                    tpj;
                                                (function() {
                                                    if (!/loaded|interactive|complete/.test(document.readyState))
                                                        document.addEventListener("DOMContentLoaded", onLoad);
                                                    else onLoad();

                                                    function onLoad() {
                                                        if (tpj === undefined) {
                                                            tpj = jQuery;
                                                            if ("off" == "on") tpj.noConflict();
                                                        }
                                                        if (tpj("#rev_slider_12_1").revolution == undefined) {
                                                            revslider_showDoubleJqueryError("#rev_slider_12_1");
                                                        } else {
                                                            revapi12 = tpj("#rev_slider_12_1").show().revolution({
                                                                sliderType: "standard",
                                                                jsFileLocation: "//organics.axiomthemes.com/wp-content/plugins/revslider/public/assets/js/",
                                                                sliderLayout: "fullwidth",
                                                                dottedOverlay: "none",
                                                                delay: 900000,
                                                                navigation: {
                                                                    keyboardNavigation: "off",
                                                                    keyboard_direction: "horizontal",
                                                                    mouseScrollNavigation: "off",
                                                                    mouseScrollReverse: "default",
                                                                    onHoverStop: "off",
                                                                    touch: {
                                                                        touchenabled: "on",
                                                                        touchOnDesktop: "off",
                                                                        swipe_threshold: 75,
                                                                        swipe_min_touches: 50,
                                                                        swipe_direction: "horizontal",
                                                                        drag_block_vertical: false
                                                                    },
                                                                    bullets: {
                                                                        enable: true,
                                                                        hide_onmobile: true,
                                                                        hide_under: 600,
                                                                        style: "hermes",
                                                                        hide_onleave: false,
                                                                        direction: "horizontal",
                                                                        h_align: "center",
                                                                        v_align: "bottom",
                                                                        h_offset: 0,
                                                                        v_offset: 40,
                                                                        space: 12,
                                                                        tmp: ''
                                                                    }
                                                                },
                                                                responsiveLevels: [1240, 1024, 778, 480],
                                                                visibilityLevels: [1240, 1024, 778, 480],
                                                                gridwidth: [1170, 1024, 778, 680],
                                                                gridheight: [612, 600, 600, 600],
                                                                lazyType: "none",
                                                                parallax: {
                                                                    type: "mouse",
                                                                    origo: "slidercenter",
                                                                    speed: 2000,
                                                                    speedbg: 0,
                                                                    speedls: 0,
                                                                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10,
                                                                        50, 46, 47, 48, 49, 50, 55
                                                                    ],
                                                                },
                                                                shadow: 0,
                                                                spinner: "off",
                                                                stopLoop: "off",
                                                                stopAfterLoops: -1,
                                                                stopAtSlide: -1,
                                                                shuffle: "off",
                                                                autoHeight: "off",
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
                                                        }; /* END OF revapi call */

                                                    }; /* END OF ON LOAD FUNCTION */
                                                }()); /* END OF WRAPPING FUNCTION */
                                            </script>
                                            <script>
                                                var htmlDivCss = unescape(".hermes.tp-bullets%20%7B%0A%7D%0A%0A.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%280%2C0%2C0%2C0.21%29%3B%0A%7D%0A.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20box-shadow%3A%200%200%201px%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
																var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
																if(htmlDiv) {
																	htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
																}
																else{
																	var htmlDiv = document.createElement('div');
																	htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
																	document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
																}
															</script>
                                        </div><!-- END REVOLUTION SLIDER -->
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">

                        <!-- the moi produc -->
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">

                                    <div class="wpb_wrapper">
                                        <div class="sc_call_to_action_info">
                                            <h3 class="sc_title sc_title_regular sc_align_left" 
                                                style="text-decoration: underline;margin-top:1.5em;text-align:center;font-size: 1.5em;font-weight: 900;font-family: Roboto; "
                                                data-animation="animated fadeIn normal"><a href="{{route('news')}}">Tin Tức & Sự Kiện</a>
                                            </h3>
                                        </div>
                                        <!-- <h3 class="sc_title sc_title_regular sc_align_left animated fadeInUp normal" style="margin-top:3.5em;margin-bottom:1.3em;text-align:left;" data-animation="animated fadeInUp normal">Blog News</h3> -->
                                        <style type="text/css">
                                            .blog-organics .esg-media-poster {
                                                width: auto !important;
                                                min-height: 180px;
                                                max-width: 100% !important
                                            }

                                            .blog-organics .esg-entry-media {
                                                max-height: 180px
                                            }

                                            .blog-organics .eg-organics-blog-element-27 {
                                                display: inline-block
                                            }

                                            .shop-organics .added_to_cart {
                                                font-size: 10px !important;
                                                line-height: 13px !important;
                                                color: #ffffff !important;
                                                font-weight: 400 !important;
                                                padding: 11px 11px 11px 13px !important;
                                                border-radius: 4px 4px 4px 4px !important;
                                                background-color: rgba(128, 181, 0, 1.00) !important;
                                                z-index: 2 !important;
                                                display: block;
                                                font-family: "Cantarell" !important;
                                                text-transform: uppercase !important
                                            }

                                            .shop-organics .added_to_cart:hover {
                                                background-color: rgba(63, 40, 3, 1.00) !important
                                            }

                                            .shop-organics .add_to_cart_button.added {
                                                display: none !important
                                            }

                                            .esg-content.eg-twitterstream-element-33-a {
                                                display: inline-block
                                            }

                                            .eg-twitterstream-element-35 {
                                                word-break: break-all
                                            }

                                            .esg-overlay.eg-twitterstream-container {
                                                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
                                                background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
                                            }

                                            .esg-content.eg-facebookstream-element-33-a {
                                                display: inline-block
                                            }

                                            .eg-facebookstream-element-0 {
                                                word-break: break-all
                                            }

                                            .esg-overlay.eg-flickrstream-container {
                                                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
                                                background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
                                            }
                                        </style>
                                        <!-- CACHE CREATED FOR: 21 -->
                                        <style type="text/css">
                                            .blogger2 .navigationbuttons,
                                            .blogger2 .esg-pagination,
                                            .blogger2 .esg-filters {
                                                text-transform: uppercase;
                                                text-align: center
                                            }

                                            .blogger2 .esg-filterbutton,
                                            .blogger2 .esg-navigationbutton,
                                            .blogger2 .esg-sortbutton,
                                            .blogger2 .esg-cartbutton {
                                                color: #000;
                                                margin-right: 5px;
                                                cursor: pointer;
                                                position: relative;
                                                z-index: 2;
                                                padding: 1px 30px;
                                                border: none;
                                                line-height: 38px;
                                                border-radius: 5px;
                                                -moz-border-radius: 5px;
                                                -webkit-border-radius: 5px;
                                                font-size: 12px;
                                                font-weight: 700;
                                                font-family: "Open Sans", sans-serif;
                                                display: inline-block;
                                                background: #fff;
                                                margin-bottom: 5px
                                            }

                                            .blogger2 .esg-navigationbutton {
                                                padding: 0
                                            }

                                            .blogger2 .esg-navigationbutton * {
                                                color: #000
                                            }

                                            .blogger2 .esg-navigationbutton {
                                                color: #80b500
                                            }

                                            .blogger2 .esg-pagination-button:last-child {
                                                margin-right: 0
                                            }

                                            .blogger2 .esg-navigationbutton.esg-left {
                                                left: 7px;
                                            }

                                            .blogger2 .esg-navigationbutton.esg-right {
                                                left: -13px;
                                            }

                                            .blogger2 .esg-navigationbutton.esg-left,
                                            .blogger2 .esg-navigationbutton.esg-right {
                                                bottom: 67px;
                                                background-color: transparent
                                            }

                                            .blogger2 .esg-filters.esg-singlefilters {
                                                height: 0px
                                            }

                                            .blogger2 .esg-navigationbutton .eg-icon-left-open,
                                            .blogger2 .esg-navigationbutton .eg-icon-right-open {
                                                width: 0.45em;
                                                font-size: 17px;
                                                color: #80b500
                                            }

                                            .blogger2 .esg-sortbutton-wrapper,
                                            .blogger2 .esg-cartbutton-wrapper {
                                                display: inline-block
                                            }

                                            .blogger2 .esg-sortbutton-order,
                                            .blogger2 .esg-cartbutton-order {
                                                display: inline-block;
                                                vertical-align: top;
                                                border: none;
                                                width: 40px;
                                                line-height: 40px;
                                                border-radius: 5px;
                                                -moz-border-radius: 5px;
                                                -webkit-border-radius: 5px;
                                                font-size: 12px;
                                                font-weight: 700;
                                                color: #999;
                                                cursor: pointer;
                                                background: #eee;
                                                background: #fff;
                                                margin-left: 5px
                                            }

                                            .blogger2 .esg-cartbutton {
                                                color: #fff;
                                                cursor: default !important
                                            }

                                            .blogger2 .esg-cartbutton .esgicon-basket {
                                                color: #fff;
                                                font-size: 15px;
                                                line-height: 15px;
                                                margin-right: 10px
                                            }

                                            .blogger2 .esg-cartbutton-wrapper {
                                                cursor: default !important
                                            }

                                            .blogger2 .esg-sortbutton,
                                            .blogger2 .esg-cartbutton {
                                                display: inline-block;
                                                position: relative;
                                                cursor: pointer;
                                                margin-right: 0px;
                                                border-radius: 5px;
                                                -moz-border-radius: 5px;
                                                -webkit-border-radius: 5px
                                            }

                                            .blogger2 .esg-navigationbutton:hover,
                                            .blogger2 .esg-filterbutton:hover,
                                            .blogger2 .esg-sortbutton:hover,
                                            .blogger2 .esg-sortbutton-order:hover,
                                            .blogger2 .esg-cartbutton-order:hover,
                                            .blogger2 .esg-filterbutton.selected {
                                                border-color: none;
                                                color: #000;
                                                background: transparent
                                            }

                                            .blogger2 .esg-navigationbutton:hover * {
                                                color: #333
                                            }

                                            .blogger2 .esg-sortbutton-order.tp-desc:hover {
                                                color: #333
                                            }

                                            .blogger2 .esg-filter-checked {
                                                padding: 1px 3px;
                                                color: #cbcbcb;
                                                background: #cbcbcb;
                                                margin-left: 7px;
                                                font-size: 9px;
                                                font-weight: 300;
                                                line-height: 9px;
                                                vertical-align: middle
                                            }

                                            .blogger2 .esg-filterbutton.selected .esg-filter-checked,
                                            .blogger2 .esg-filterbutton:hover .esg-filter-checked {
                                                padding: 1px 3px 1px 3px;
                                                color: #fff;
                                                background: #000;
                                                margin-left: 7px;
                                                font-size: 9px;
                                                font-weight: 300;
                                                line-height: 9px;
                                                vertical-align: middle
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-element-0 {
                                                font-size: 16px;
                                                line-height: 22px;
                                                color: #3f2803;
                                                font-weight: 500;
                                                padding: 0px 0px 0px 0px;
                                                border-radius: 0px 0px 0px 0px;
                                                background: #ffffff;
                                                z-index: 2 !important;
                                                display: block;
                                                font-family: "Raleway";
                                                text-transform: capitalize
                                            }

                                            .eg-blogger-element-1 {
                                                font-size: 36px;
                                                line-height: 36px;
                                                color: #ffffff;
                                                font-weight: 400;
                                                padding: 0px 0px 0px 0px;
                                                border-radius: 0px 0px 0px 0px;
                                                background: transparent;
                                                z-index: 2 !important;
                                                display: block
                                            }

                                            .eg-blogger-element-3 {
                                                font-size: 14px !important;
                                                line-height: 18px !important;
                                                color: #8a8a8a !important;
                                                font-weight: 400 !important;
                                                display: inline-block !important;
                                                float: none !important;
                                                clear: none !important;
                                                margin: 0px 0px 0px 0px !important;
                                                padding: 0px 10px 0px 0px !important;
                                                border-radius: 0px 0px 0px 0px !important;
                                                background: #ffffff !important;
                                                position: relative !important;
                                                z-index: 2 !important;
                                                font-family: "Cantarell" !important;
                                                text-transform: capitalize !important;
                                                border-top-width: 0px !important;
                                                border-right-width: 0px !important;
                                                border-bottom-width: 0px !important;
                                                border-left-width: 0px !important;
                                                border-color: #ffffff !important;
                                                border-style: solid !important
                                            }

                                            .eg-blogger-element-29 {
                                                font-size: 14px;
                                                line-height: 18px;
                                                color: #555555;
                                                font-weight: 400;
                                                display: inline-block;
                                                float: none;
                                                clear: none;
                                                margin: 0px 0px 0px 0px;
                                                padding: 0px 0px 0px 0px;
                                                border-radius: 0px 0px 0px 0px;
                                                background: transparent;
                                                position: relative;
                                                z-index: 2 !important;
                                                border-top-width: 0px;
                                                border-right-width: 0px;
                                                border-bottom-width: 0px;
                                                border-left-width: 0px;
                                                border-color: #ffffff;
                                                border-style: solid
                                            }

                                            .eg-blogger-element-27 {
                                                font-size: 14px;
                                                line-height: 17px;
                                                color: #81d742;
                                                font-weight: 400;
                                                padding: 0px 0px 0px 0px;
                                                border-radius: 0px 0px 0px 0px;
                                                background: transparent;
                                                z-index: 2 !important;
                                                display: block;
                                                border-top-width: 0px;
                                                border-right-width: 0px;
                                                border-bottom-width: 0px;
                                                border-left-width: 0px;
                                                border-color: #ffffff;
                                                border-style: solid
                                            }

                                            .eg-blogger-element-23 {
                                                font-size: 14px !important;
                                                line-height: 16px !important;
                                                color: #aaaaaa !important;
                                                font-weight: 300 !important;
                                                padding: 0px 10px 0px 0px !important;
                                                border-radius: 0px 0px 0px 0px !important;
                                                background: transparent !important;
                                                z-index: 2 !important;
                                                display: block;
                                                font-family: "Cantarell" !important;
                                                text-transform: capitalize !important;
                                                border-top-width: 0px !important;
                                                border-right-width: 0px !important;
                                                border-bottom-width: 0px !important;
                                                border-left-width: 0px !important;
                                                border-color: #aaaaaa !important;
                                                border-style: solid !important
                                            }

                                            .eg-blogger-element-6 {
                                                font-size: 14px !important;
                                                line-height: 22px !important;
                                                color: #555555 !important;
                                                font-weight: 400 !important;
                                                display: block !important;
                                                text-align: left !important;
                                                clear: none !important;
                                                margin: 24px 0px 0px 0px !important;
                                                padding: 0px 0px 0px 0px !important;
                                                border-radius: 0px 0px 0px 0px !important;
                                                background: #ffffff !important;
                                                position: relative !important;
                                                z-index: 2 !important;
                                                font-family: "Cantarell" !important;
                                                text-transform: capitalize !important
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-element-1:hover {
                                                font-size: 36px;
                                                line-height: 36px;
                                                color: #ffffff;
                                                font-weight: 400;
                                                border-radius: 0px 0px 0px 0px;
                                                border-top-width: 0px;
                                                border-right-width: 0px;
                                                border-bottom-width: 0px;
                                                border-left-width: 0px;
                                                border-color: #ffffff;
                                                border-style: solid
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-element-0-a {
                                                display: block;
                                                text-align: left;
                                                clear: both;
                                                margin: 0px 0px 5px 0px;
                                                position: relative
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-element-1-a {
                                                display: inline-block;
                                                float: none;
                                                clear: none;
                                                margin: 0px 0px 0px 0px;
                                                position: relative
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-element-27-a {
                                                display: inline-block;
                                                float: none;
                                                clear: none;
                                                margin: 0px 0px 0px 0px;
                                                position: relative
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-element-23-a {
                                                display: inline-block !important;
                                                float: none !important;
                                                clear: none !important;
                                                margin: 0px 0px 0px 10px !important;
                                                position: relative !important
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-container {
                                                background: rgba(128, 181, 0, 0.25)
                                            }
                                        </style>
                                        <style type="text/css">
                                            .eg-blogger-content {
                                                background: #ffffff;
                                                padding: 26px 0px 30px 0px;
                                                border-width: 0px 0px 0px 0px;
                                                border-radius: 0px 0px 0px 0px;
                                                border-color: transparent;
                                                border-style: none;
                                                text-align: left
                                            }
                                        </style>
                                        <style type="text/css">
                                            .esg-grid .mainul li.eg-blogger-wrapper {
                                                background: #ffffff;
                                                padding: 0px 0px 0px 0px;
                                                border-width: 0px 0px 0px 0px;
                                                border-radius: 0px 0px 0px 0px;
                                                border-color: transparent;
                                                border-style: none
                                            }
                                        </style>
                                        <style type="text/css">
                                            .esg-grid .mainul li.eg-blogger-wrapper .esg-media-poster {
                                                background-size: cover;
                                                background-position: center center;
                                                background-repeat: no-repeat
                                            }
                                        </style>
                                        <style>
                                                * {box-sizing: border-box}
                                                body {font-family: Verdana, sans-serif; margin:0}

                                                /* Slideshow container */
                                                .slideshow-container {
                                                position: relative;
                                                background: #f1f1f1f1;
                                                }

                                                /* Slides */
                                                .mySlides {
                                                display: none;
                                                padding: 80px;
                                                text-align: center;
                                                }

                                                /* Next & previous buttons */
                                                .prev, .next {
                                                cursor: pointer;
                                                position: absolute;
                                                top: 50%;
                                                width: auto;
                                                margin-top: -30px;
                                                padding: 16px;
                                                color: #888;
                                                font-weight: bold;
                                                font-size: 20px;
                                                border-radius: 0 3px 3px 0;
                                                user-select: none;
                                                }

                                                /* Position the "next button" to the right */
                                                .next {
                                                position: absolute;
                                                right: 0;
                                                border-radius: 3px 0 0 3px;
                                                }

                                                /* On hover, add a black background color with a little bit see-through */
                                                .prev:hover, .next:hover {
                                                background-color: rgba(0,0,0,0.8);
                                                color: white;
                                                }

                                                /* The dot/bullet/indicator container */
                                                .dot-container {
                                                    text-align: center;
                                                    padding: 20px;
                                                    background: #ddd;
                                                }

                                                /* The dots/bullets/indicators */
                                                .dot {
                                                cursor: pointer;
                                                height: 15px;
                                                width: 15px;
                                                margin: 0 2px;
                                                background-color: #bbb;
                                                border-radius: 50%;
                                                display: inline-block;
                                                transition: background-color 0.6s ease;
                                                }

                                                /* Add a background color to the active dot/circle */
                                                .active, .dot:hover {
                                                background-color: #717171;
                                                }

                                                /* Add an italic font style to all quotes */
                                                q {font-style: italic;}

                                                /* Add a blue color to the author */
                                                .author {color: cornflowerblue;}
                                                </style>
                                        <article class="myportfolio-container blogger2 source_type_post" id="esg-grid-21-2-wrap"
                                            style="position: relative; z-index: 0; min-height: 100px; height: auto;">
                                            <div class="esg-container-fullscreen-forcer" style="position: relative; left: 0px; top: 0px; width: auto; height: auto;">
                                                <div id="esg-grid-21-2" class="esg-grid esg-layout-masonry esg-container"
                                                    style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
                                                    <div class="esg-clear-no-height"></div>
                                                    <div class="esg-overflowtrick" style="width: 100%; height: 401px;">
                                                        <div class="" style="position: absolute; width: 100%;bottom: 58%;">
                                                            <div class="col-xs-4 text-left esg-navigationbutton esg-left  esg-fgc-21" >
                                                            <a class="prev" onclick="plusSlides(-1)" style="">❮</a>
                                                            </div>
                                                            <div class="col-xs-4">&nbsp;</div>
                                                            <div class="col-xs-4 text-right esg-navigationbutton esg-right  esg-fgc-21" >
                                                                <a class="next" onclick="plusSlides(1)">❯</a>
                                                            </div>
                                                        </div>
                                                        <script>
                                                            var slideIndex = 1;
                                                            showSlides(slideIndex);

                                                            function plusSlides(n) {
                                                            showSlides(slideIndex += n);
                                                            }

                                                            function currentSlide(n) {
                                                            showSlides(slideIndex = n);
                                                            }

                                                            function showSlides(n) {
                                                            var i;
                                                            var slides = document.getElementsByClassName("mySlides");
                                                            var dots = document.getElementsByClassName("dot");
                                                            if (n > slides.length) {slideIndex = 1}    
                                                            if (n < 1) {slideIndex = slides.length}
                                                            for (i = 0; i < slides.length; i++) {
                                                                slides[i].style.display = "none";  
                                                            }
                                                            for (i = 0; i < dots.length; i++) {
                                                                dots[i].className = dots[i].className.replace(" active", "");
                                                            }
                                                            slides[slideIndex-1].style.display = "block";  
                                                            dots[slideIndex-1].className += " active";
                                                            }
                                                            </script>
                                                        <ul class="mainul" style="height: 401px;">
                                                            @foreach($news as $item_product)
                                                            <li id="eg-21-post-id-2001" class="filterall filter-home-1-news filter-home-3-gallery eg-blogger-wrapper eg-post-id-2001 tp-esg-item itemtoshow isvisiblenow esg-hovered"
                                                                data-date="1438431578" style="opacity: 1; visibility: inherit; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0.1, 0.999917); height: auto; width: 228px; display: block; top: 0px; left: 0px; transform-origin: center center 0px;">
                                                                <div class="esg-media-cover-wrapper" >
                                                                    <div class="esg-entry-media-wrapper" style="overflow:hidden;position:relative;">
                                                                        <div class="esg-entry-media" style="padding-bottom: 56.3218%;">
                                                                            <img src="{{asset('storage/'.$item_product->images)}}"
                                                                                alt="" width="870" height="490" style="display: none;">
                                                                            <div class="esg-media-poster" src="{{asset('storage/'.$item_product->images)}}"
                                                                                data-src="{{asset('storage/'.$item_product->images)}}"
                                                                                data-lazythumb="undefined" style="background-image: url(&quot;{{asset('storage/'.$item_product->images)}}&quot;); visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0"
                                                                        data-clickable="on" style="visibility: visible; cursor: pointer; height: 128px; transform-style: flat; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);">
                                                                        <a class="eg-invisiblebutton" href="{{route('details_news',[$item_product->id,$item_product->name])}}"
                                                                            target="_self"></a>
                                                                        <div class="esg-overlay esg-fade eg-blogger-container"
                                                                            data-delay="0" style="visibility: hidden; opacity: 0; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, -0.002, 1);"></div>
                                                                        <div class="esg-cc eec" style="top: 46px;">
                                                                            <div class="esg-center eg-post-2001 eg-blogger-element-1-a">
                                                                                <a
                                                                                    class="eg-blogger-element-1 eg-post-2001"
                                                                                    href="vc_column-inner "
                                                                                    target="_self">
                                                                                    <i class="eg-icon-eye">
                                                                                    </i>
                                                                                </a>
                                                                            </div>
                                                                            <div>
 
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="esg-entry-content eg-blogger-content esg-notalone"
                                                                        style="min-height: 0px;">
                                                                        <div class="esg-content eg-post-2001 eg-blogger-element-0-a" style="height: 45px; overflow-y: hidden;">
                                                                            
                                                                            <a class="eg-blogger-element-0 eg-post-2001"
                                                                                href="{{route('details_news',[$item_product->id,$item_product->name])}}"
                                                                                target="_self" style="font-family: Roboto;font-weight: 600;">{{$item_product->name}}</a>
                                                                        </div>
                                                                        
                                                                        <div class="esg-content eg-blogger-element-22 esg-none esg-clear" 
                                                                            style="height: 5px; visibility: inherit; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);"></div>
                                                                        <div class="esg-content eg-post-2001 eg-blogger-element-6" style="height: 90px; overflow-y: hidden;">
                                                                            <p style="text-align: -webkit-auto;overflow-y: hidden;height: 87px;">{{$item_product->title}}</p>...
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </li>
                                                            @endforeach

                                                        </ul>
                                                        <!-- </marquee> -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="esg-loader spinner0" style="visibility: hidden; opacity: 0;">
                                                <div class="dot1"></div>
                                                <div class="dot2"></div>
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                            <div class="esg-relative-placeholder" style="width:100%;height:auto"></div>
                                        </article>
                                        <div class="clear"></div>
                                        <script type="text/javascript">
                                            function eggbfc(winw, resultoption) {
                                                var lasttop = winw,
                                                    lastbottom = 0,
                                                    smallest = 9999,
                                                    largest = 0,
                                                    samount = 0,
                                                    lamount = 0,
                                                    lastamount = 0,
                                                    resultid = 0,
                                                    resultidb = 0,
                                                    responsiveEntries = [{
                                                            width: 1400,
                                                            amount: 4,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 1170,
                                                            amount: 4,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 1024,
                                                            amount: 4,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 960,
                                                            amount: 3,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 778,
                                                            amount: 3,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 640,
                                                            amount: 3,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 480,
                                                            amount: 1,
                                                            mmheight: 0
                                                        }
                                                    ];
                                                if (responsiveEntries != undefined && responsiveEntries.length > 0)
                                                    jQuery.each(responsiveEntries, function(index, obj) {
                                                        var curw = obj.width != undefined ? obj.width : 0,
                                                            cura = obj.amount != undefined ? obj.amount : 0;
                                                        if (smallest > curw) {
                                                            smallest = curw;
                                                            samount = cura;
                                                            resultidb = index;
                                                        }
                                                        if (largest < curw) {
                                                            largest = curw;
                                                            lamount = cura;
                                                        }
                                                        if (curw > lastbottom && curw <= lasttop) {
                                                            lastbottom = curw;
                                                            lastamount = cura;
                                                            resultid = index;
                                                        }
                                                    });
                                                if (smallest > winw) {
                                                    lastamount = samount;
                                                    resultid = resultidb;
                                                }
                                                var obj = new Object;
                                                obj.index = resultid;
                                                obj.column = lastamount;
                                                if (resultoption == "id")
                                                    return obj;
                                                else
                                                    return lastamount;
                                            }
                                            if ("masonry" == "even") {
                                                var coh = 0,
                                                    container = jQuery("#esg-grid-21-2");
                                                var cwidth = container.width(),
                                                    ar = "3:2",
                                                    gbfc = eggbfc(jQuery(window).width(), "id"),
                                                    row = 1;
                                                ar = ar.split(":");
                                                var aratio = parseInt(ar[0], 0) / parseInt(ar[1], 0);
                                                coh = cwidth / aratio;
                                                coh = coh / gbfc.column * row;
                                                var ul = container.find("ul").first();
                                                ul.css({
                                                    display: "block",
                                                    height: coh + "px"
                                                });
                                            }
                                            var essapi_21;
                                            jQuery(document).ready(function() {
                                                essapi_21 = jQuery("#esg-grid-21-2").tpessential({
                                                    gridID: 21,
                                                    layout: "masonry",
                                                    forceFullWidth: "off",
                                                    lazyLoad: "off",
                                                    row: 1,
                                                    apiName: "essapi_21",
                                                    loadMoreAjaxToken: "12561bf45f",
                                                    loadMoreAjaxUrl: "http://organics.axiomthemes.com/wp-admin/admin-ajax.php",
                                                    loadMoreAjaxAction: "Essential_Grid_Front_request_ajax",
                                                    ajaxContentTarget: "ess-grid-ajax-container-",
                                                    ajaxScrollToOffset: "0",
                                                    ajaxCloseButton: "off",
                                                    ajaxContentSliding: "on",
                                                    ajaxScrollToOnLoad: "on",
                                                    ajaxCallbackArgument: "off",
                                                    ajaxNavButton: "off",
                                                    ajaxCloseType: "type1",
                                                    ajaxCloseInner: "false",
                                                    ajaxCloseStyle: "light",
                                                    ajaxClosePosition: "tr",
                                                    space: 30,
                                                    pageAnimation: "horizontal-slide",
                                                    paginationScrollToTop: "off",
                                                    paginationAutoplay: "off",
                                                    spinner: "spinner0",
                                                    lightBoxMode: "single",
                                                    lightboxHash: "group",
                                                    lightboxPostMinWid: "75%",
                                                    lightboxPostMaxWid: "75%",
                                                    lightboxSpinner: "off",
                                                    lightBoxFeaturedImg: "off",
                                                    lightBoxPostTitle: "off",
                                                    lightBoxPostTitleTag: "h2",
                                                    lightboxMargin: "0|0|0|0",
                                                    lbContentPadding: "0|0|0|0",
                                                    lbContentOverflow: "auto",
                                                    animSpeed: 1200,
                                                    delayBasic: 1,
                                                    mainhoverdelay: 2,
                                                    filterType: "single",
                                                    showDropFilter: "hover",
                                                    filterGroupClass: "esg-fgc-21",
                                                    filterNoMatch: "No Items for the Selected Filter",
                                                    filterDeepLink: "off",
                                                    googleFonts: ['Open+Sans:300,400,600,700,800',
                                                        'Raleway:100,200,300,400,500,600,700,800,900',
                                                        'Droid+Serif:400,700'
                                                    ],
                                                    responsiveEntries: [{
                                                            width: 1400,
                                                            amount: 4,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 1170,
                                                            amount: 4,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 1024,
                                                            amount: 4,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 960,
                                                            amount: 3,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 778,
                                                            amount: 3,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 640,
                                                            amount: 3,
                                                            mmheight: 0
                                                        },
                                                        {
                                                            width: 480,
                                                            amount: 1,
                                                            mmheight: 0
                                                        }
                                                    ]
                                                });

                                                var arrows = true,
                                                    lightboxOptions = {
                                                        margin: [0, 0, 0, 0],
                                                        buttons: ["share", "thumbs", "close"],
                                                        infobar: true,
                                                        loop: true,
                                                        slideShow: {
                                                            "autoStart": false,
                                                            "speed": 3000
                                                        },
                                                        animationEffect: "fade",
                                                        animationDuration: 500,
                                                        beforeShow: function(a, c) {
                                                            if (!arrows) {
                                                                jQuery("body").addClass("esgbox-hidearrows");
                                                            }
                                                            var i = 0,
                                                                multiple = false;
                                                            a = a.slides;
                                                            for (var b in a) {
                                                                i++;
                                                                if (i > 1) {
                                                                    multiple = true;
                                                                    break;
                                                                }
                                                            }
                                                            if (!multiple) jQuery("body").addClass(
                                                                "esgbox-single");
                                                            if (c.type === "image") jQuery(
                                                                ".esgbox-button--zoom").show();
                                                        },
                                                        beforeLoad: function(a, b) {
                                                            jQuery("body").removeClass("esg-four-by-three");
                                                            if (b.opts.$orig.data("ratio") === "4:3") jQuery(
                                                                "body").addClass("esg-four-by-three");
                                                        },
                                                        afterLoad: function() {
                                                            jQuery(window).trigger("resize.esglb");
                                                        },
                                                        afterClose: function() {
                                                            jQuery("body").removeClass(
                                                                "esgbox-hidearrows esgbox-single");
                                                        },
                                                        transitionEffect: "fade",
                                                        transitionDuration: 500,
                                                        hash: "group",
                                                        arrows: true,
                                                        wheel: false,
                                                    };

                                                jQuery("#esg-grid-21-2").data("lightboxsettings",
                                                    lightboxOptions);


                                            });
                                        </script>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                   
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs" style="margin-left: -260px; width: 143%;">
                            <div class="vc_column-inner ">
                                @foreach($background as $item_background)
                                <div class="wpb_wrapper">
                                    <div class="sc_section imgc" class="responsive" style="height: 823px; background-image:url({{asset('storage/'.$item_background->images)}});background-repeat:no-repeat;background-size:contain;">
                                        <div class="sc_section_inner">
                                            <div class="sc_section_overlay" style="">
                                                <div class="sc_section_content" style="">
                                                    
                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                        </div>
                                                        <div class="column-1_2 sc_column_item sc_column_item_2 even">

                                                            <h3 class="sc_title sc_title_regular sc_align_left" style="margin-top:1.5em;margin-right:3.15em;font-family: roboto;3.25em;text-align:left;color:#000000;font-size: 1.5em;font-weight: 900;"
                                                                data-animation="animated fadeIn normal">{{ $item_background->title }}</h3>        
                                                            <div class="esg-content eg-post-2001 " style="height: 88px;width: 400px; overflow-y: hidden;">
                                                                <p style="text-align: -webkit-left;">{{ $item_background->content }}</p></div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- <div class="vc_empty_space" style="height: 18.5em"><span class="vc_empty_space_inner"></span></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 1.5em">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                            <div class="vc_column-inner ">

                                                           </div>
                        </div>
                    </div>
        </div>
        <div class="vc_row wpb_row vc_row-fluid">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                   
                        <h3 class="sc_title sc_title_regular sc_align_left" style="text-decoration: underline;margin-top:1.5em;text-align:center;font-size: 1.5em;font-weight: 900;font-family: Roboto; "
                            data-animation="animated fadeIn normal"><a href="{{route('product_list_order')}}"> Gia đình  CORDY</a></h3>
                        <style type="text/css">
                            .blog-organics .esg-media-poster {
                                width: auto !important;
                                min-height: 180px;
                                max-width: 100% !important
                            }

                            .blog-organics .esg-entry-media {
                                max-height: 180px
                            }

                            .blog-organics .eg-organics-blog-element-27 {
                                display: inline-block
                            }

                            .shop-organics .added_to_cart {
                                font-size: 10px !important;
                                line-height: 13px !important;
                                color: #ffffff !important;
                                font-weight: 400 !important;
                                padding: 11px 11px 11px 13px !important;
                                border-radius: 4px 4px 4px 4px !important;
                                background-color: rgba(128, 181, 0, 1.00) !important;
                                z-index: 2 !important;
                                display: block;
                                font-family: "Cantarell" !important;
                                text-transform: uppercase !important
                            }

                            .shop-organics .added_to_cart:hover {
                                background-color: rgba(63, 40, 3, 1.00) !important
                            }

                            .shop-organics .add_to_cart_button.added {
                                display: none !important
                            }

                            .esg-content.eg-twitterstream-element-33-a {
                                display: inline-block
                            }

                            .eg-twitterstream-element-35 {
                                word-break: break-all
                            }

                            .esg-overlay.eg-twitterstream-container {
                                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
                                background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
                            }

                            .esg-content.eg-facebookstream-element-33-a {
                                display: inline-block
                            }

                            .eg-facebookstream-element-0 {
                                word-break: break-all
                            }

                            .esg-overlay.eg-flickrstream-container {
                                background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: -webkit-gradient(linear, left top, left bottom, color-stop(50%, rgba(0, 0, 0, 0)), color-stop(99%, rgba(0, 0, 0, 0.83)), color-stop(100%, rgba(0, 0, 0, 0.85)));
                                background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.83) 99%, rgba(0, 0, 0, 0.85) 100%);
                                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#d9000000', GradientType=0)
                            }
                        </style>
                        <!-- CACHE CREATED FOR: 18 -->
                        <style type="text/css">
                            .shop-organics .navigationbuttons,
                            .shop-organics .esg-pagination,
                            .shop-organics .esg-filters {
                                text-transform: uppercase;
                                text-align: center
                            }

                            .shop-organics .esg-filterbutton,
                            .shop-organics .esg-navigationbutton,
                            .shop-organics .esg-sortbutton,
                            .shop-organics .esg-cartbutton {
                                color: #000;
                                margin-right: 5px;
                                cursor: pointer;
                                position: relative;
                                z-index: 2;
                                padding: 1px 30px;
                                border: none;
                                line-height: 38px;
                                border-radius: 5px;
                                -moz-border-radius: 5px;
                                -webkit-border-radius: 5px;
                                font-size: 12px;
                                font-weight: 700;
                                font-family: "Open Sans", sans-serif;
                                display: inline-block;
                                background: #fff;
                                margin-bottom: 5px
                            }

                            .shop-organics .esg-navigationbutton {
                                padding: -1px
                            }

                            .shop-organics .esg-navigationbutton * {
                                color: #000
                            }

                            .shop-organics .esg-navigationbutton {
                                color: #80b500
                            }

                            .shop-organics .esg-pagination-button:last-child {
                                margin-right: 0
                            }

                            .shop-organics .esg-navigationbutton.esg-left {
                                left: -20px
                            }

                            .shop-organics .esg-navigationbutton.esg-right {
                                left: 20px
                            }

                            .shop-organics .esg-navigationbutton.esg-left,
                            .shop-organics .esg-navigationbutton.esg-right {
                                bottom: -70px;
                                background-color: transparent
                            }

                            .shop-organics .esg-filters.esg-singlefilters {
                                height: 0px
                            }

                            .shop-organics .esg-sortbutton-wrapper,
                            .shop-organics .esg-cartbutton-wrapper {
                                display: inline-block
                            }

                            .shop-organics .esg-sortbutton-order,
                            .shop-organics .esg-cartbutton-order {
                                display: inline-block;
                                vertical-align: top;
                                border: none;
                                width: 40px;
                                line-height: 40px;
                                border-radius: 5px;
                                -moz-border-radius: 5px;
                                -webkit-border-radius: 5px;
                                font-size: 12px;
                                font-weight: 700;
                                color: #999;
                                cursor: pointer;
                                background: #eee;
                                background: #fff;
                                margin-left: 5px
                            }

                            .shop-organics .esg-cartbutton {
                                color: #fff;
                                cursor: default !important
                            }

                            .shop-organics .esg-cartbutton .esgicon-basket {
                                color: #fff;
                                font-size: 15px;
                                line-height: 15px;
                                margin-right: 10px
                            }

                            .shop-organics .esg-cartbutton-wrapper {
                                cursor: default !important
                            }

                            .shop-organics .esg-sortbutton,
                            .shop-organics .esg-cartbutton {
                                display: inline-block;
                                position: relative;
                                cursor: pointer;
                                margin-right: 0px;
                                border-radius: 5px;
                                -moz-border-radius: 5px;
                                -webkit-border-radius: 5px
                            }

                            .shop-organics .esg-navigationbutton:hover,
                            .shop-organics .esg-filterbutton:hover,
                            .shop-organics .esg-sortbutton:hover,
                            .shop-organics .esg-sortbutton-order:hover,
                            .shop-organics .esg-cartbutton-order:hover,
                            .shop-organics .esg-filterbutton.selected {
                                border-color: none;
                                color: #000;
                                background: transparent
                            }

                            .shop-organics .esg-navigationbutton:hover * {
                                color: #333
                            }

                            .shop-organics .esg-sortbutton-order.tp-desc:hover {
                                color: #333
                            }

                            .shop-organics .esg-filter-checked {
                                padding: 1px 3px;
                                color: #cbcbcb;
                                background: #cbcbcb;
                                margin-left: 7px;
                                font-size: 9px;
                                font-weight: 300;
                                line-height: 9px;
                                vertical-align: middle
                            }

                            .shop-organics .esg-filterbutton.selected .esg-filter-checked,
                            .shop-organics .esg-filterbutton:hover .esg-filter-checked {
                                padding: 1px 3px 1px 3px;
                                color: #fff;
                                background: #000;
                                margin-left: 7px;
                                font-size: 9px;
                                font-weight: 300;
                                line-height: 9px;
                                vertical-align: middle
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-element-36 {
                                font-size: 13px !important;
                                line-height: 20px !important;
                                color: #3f2803 !important;
                                font-weight: 700 !important;
                                padding: 0px 0px 0px 0px !important;
                                border-radius: 0px 0px 0px 0px !important;
                                background: transparent !important;
                                z-index: 2 !important;
                                display: block;
                                font-family: "Raleway" !important;
                                text-transform: capitalize !important
                            }

                            .eg-arthur-organic-element-32 {
                                font-size: 10px !important;
                                line-height: 13px !important;
                                color: #ffffff !important;
                                font-weight: 400 !important;
                                padding: 11px 11px 11px 13px !important;
                                border-radius: 4px 4px 4px 4px !important;
                                background: #80b500 !important;
                                z-index: 2 !important;
                                display: block;
                                font-family: "Cantarell" !important;
                                text-transform: uppercase !important
                            }

                            .eg-arthur-organic-element-28 {
                                font-size: 10px !important;
                                line-height: 13px !important;
                                color: #ffffff !important;
                                font-weight: 400 !important;
                                padding: 11px 11px 11px 13px !important;
                                border-radius: 4px 4px 4px 4px !important;
                                background: #80b500 !important;
                                z-index: 2 !important;
                                display: block;
                                font-family: "Cantarell" !important;
                                text-transform: uppercase !important
                            }

                            .eg-arthur-organic-element-1 {
                                font-size: 16px !important;
                                line-height: 24px !important;
                                color: #80b500 !important;
                                font-weight: 600 !important;
                                padding: 0px 0px 0px 0px !important;
                                border-radius: 0px 0px 0px 0px !important;
                                background: transparent !important;
                                z-index: 2 !important;
                                font-family: "roboto" !important;
                                text-transform: capitalize !important
                            }

                            .eg-arthur-organic-element-30 {
                                font-size: 12px !important;
                                line-height: 12px !important;
                                color: #80b500 !important;
                                font-weight: 400 !important;
                                display: block !important;
                                text-align: left !important;
                                clear: none !important;
                                margin: 0px 0px 7px 0px !important;
                                padding: 0px 0px 0px 0px !important;
                                border-radius: 0px 0px 0px 0px !important;
                                background: transparent !important;
                                position: relative !important;
                                z-index: 2 !important
                            }

                            .eg-arthur-organic-element-25 {
                                font-size: 12px;
                                line-height: 22px;
                                color: #b33451;
                                font-weight: 400;
                                display: block;
                                text-align: left;
                                clear: none;
                                margin: 0px 2px 21px 0px;
                                padding: 0px 0px 0px 0px;
                                border-radius: 0px 0px 0px 0px;
                                position: relative;
                                z-index: 2 !important;
                                font-family: "Cantarell";
                                text-transform: capitalize
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-element-32:hover {
                                font-size: 10px !important;
                                line-height: 13px !important;
                                color: #ffffff !important;
                                font-weight: 400 !important;
                                border-radius: 4px 4px 4px 4px !important;
                                background: #3f2803 !important;
                                font-family: "Cantarell" !important;
                                text-transform: uppercase !important
                            }

                            .eg-arthur-organic-element-28:hover {
                                font-size: 10px !important;
                                line-height: 13px !important;
                                color: #ffffff !important;
                                font-weight: 400 !important;
                                border-radius: 4px 4px 4px 4px !important;
                                background: #3f2803 !important;
                                font-family: "Cantarell" !important;
                                text-transform: uppercase !important
                            }

                            .eg-arthur-organic-element-1:hover {
                                font-size: 14px !important;
                                line-height: 22px !important;
                                color: #669100 !important;
                                font-weight: 400 !important;
                                border-radius: 0px 0px 0px 0px !important;
                                background: transparent !important;
                                font-family: "Cantarell" !important;
                                text-transform: capitalize !important
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-element-36-a {
                                display: block !important;
                                text-align: left !important;
                                clear: none !important;
                                margin: 16px 0px 4px 0px !important;
                                position: relative !important
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-element-32-a {
                                display: inline-block !important;
                                float: none !important;
                                clear: none !important;
                                margin: 0px 0px 5px 0px !important;
                                position: relative !important
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-element-28-a {
                                display: inline-block !important;
                                float: none !important;
                                clear: both !important;
                                margin: 0px 0px 5px 0px !important;
                                position: relative !important
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-element-1-a {
                                font-size: 18px !important;
                                line-height: 22px !important;
                                color: #80b500 !important;
                                font-family: "Cantarell" !important;
                                font-weight: 400 !important;
                                text-decoration: none !important;
                                text-transform: capitalize !important;
                                display: block !important;
                                text-align: left !important;
                                clear: none !important;
                                margin: -15px 0px 4px 0px !important;
                                position: relative !important
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-container {
                                background: rgba(128, 181, 0, 0.25)
                            }
                        </style>
                        <style type="text/css">
                            .eg-arthur-organic-content {
                                background: transparent;
                                padding: 0px 0px 0px 0px;
                                border-width: 0px 0px 0px 0px;
                                border-radius: 0px 0px 0px 0px;
                                border-color: #e5e5e5;
                                border-style: none;
                                text-align: center
                            }
                        </style>
                        <style type="text/css">
                            .esg-grid .mainul li.eg-arthur-organic-wrapper {
                                background: #ffffff;
                                padding: 0px 0px 0px 0px;
                                border-width: 0px 0px 0px 0px;
                                border-radius: 0px 0px 0px 0px;
                                border-color: ;
                                border-style: none
                            }
                        </style>
                        <style type="text/css">
                            .esg-grid .mainul li.eg-arthur-organic-wrapper .esg-media-poster {
                                background-size: cover;
                                background-position: center center;
                                background-repeat: no-repeat
                            }
                        </style>
                        <!-- THE ESSENTIAL GRID 2.2.4.2 POST -->
                        <article class="myportfolio-container shop-organics source_type_post" id="esg-grid-18-1-wrap">
                            <div id="esg-grid-18-1" class="esg-grid" style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
                                     </br>
                            <article class="esg-filters esg-singlefilters" style="margin-bottom: 0px; text-align: right; ">
                                <div class="esg-container" style="position: absolute; width: 100%;bottom: 58%;">
                                    <div class="col-xs-4 text-left esg-navigationbutton esg-left  esg-fgc-18" >
                                        <a class="prev" onclick="plusSlides(-1)" >❮</a>
                                    </div>
                                    <div class="col-xs-4">&nbsp;</div>
                                    <div class="col-xs-4 text-right esg-navigationbutton esg-right  esg-fgc-18" >
                                        <a class="next" onclick="plusSlides(1)" style="right: 30px;">❯</a>
                                    </div>
                                </div>
                            </article>
                            <div class="esg-container-fullscreen-forcer" style="position: relative; left: 0px; top: 0px; width: auto; height: auto;">
                                <div id="esg-grid-21-2" class="esg-grid esg-layout-masonry esg-container"
                                                    style="background: transparent;padding: 0px 0px 0px 0px ; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;">
                                    <div class="" style="width: 100%; height: 401px;">
                                        <div class="esg-clear-no-height">
                                            </div>
                                            <ul>
                                                @foreach($cordies as $item_product)
                                                <li id="eg-18-post-id-1346" class="filterall filter-simple filter-featured filter-organic-dairy filter-fresh-meal filter-best-selling-products filter-featured-products filter-new-products eg-arthur-organic-wrapper eg-post-id-1346"
                                                    data-date="1441459331">
                                                    <div class="esg-media-cover-wrapper">
                                                        <div class="esg-entry-media">
                                                            <img src="{{asset('storage/'.$item_product->images)}}" alt="" width="628"
                                                                height="775">
                                                        </div>
                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                            <div class="esg-overlay esg-fade eg-arthur-organic-container"
                                                                data-delay="0"></div>
                                                            <div class="esg-center eg-post-1346 eg-arthur-organic-element-32-a esg-slideup"
                                                                data-delay="0.1">   
                                                                <a class="eg-arthur-organic-element-32 eg-post-1346 esgbox" href="{{asset('storage/'.$item_product->images)}}"
                                                                    data-width="628" data-height="775">Xem lướt qua</a>
                                                            </div>
                                                            <div class="esg-center eg-arthur-organic-element-34 esg-none esg-clear"
                                                                style="height: 5px; visibility: hidden;"></div>
                                                            <div class="esg-center eg-post-1346 eg-arthur-organic-element-28-a esg-slideup"
                                                                data-delay="0.25">
                                                                <a href="{{asset('/cart/add/'.$item_product->id)}}" rel=""
                                                                    data-product_id="1346" data-product_sku="" class="eg-arthur-organic-element-28 eg-post-1346 button add_to_cart_button ">
                                                                    Thêm vào giỏ hàng</a>
                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="esg-entry-content eg-arthur-organic-content">
                                                            <div class="esg-content eg-post-1346 eg-arthur-organic-element-36-a" style="height: 50px; overflow-y: hidden;">
                                                                <a class="eg-arthur-organic-element-1 eg-post-1346" href="{{route('product_order',[$item_product->id,$item_product->name])}}"
                                                                    rel="tag">{{$item_product->name}}</a>
                                                            </div>
                                                            <div class="esg-content eg-post-1346 eg-arthur-organic-element-1-a">
                                                                <div class="esg-content eg-post-2001 eg-blogger-element-6" style="height: 90px; overflow-y: hidden;">
                                                                    <p style="text-align: -webkit-auto;overflow-y: hidden;height: 87px;">{{$item_product->title}}</p>...
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div class="clear"></div>
                        <script type="text/javascript">
                            function eggbfc(winw, resultoption) {
                                var lasttop = winw,
                                    lastbottom = 0,
                                    smallest = 9999,
                                    largest = 0,
                                    samount = 0,
                                    lamount = 0,
                                    lastamount = 0,
                                    resultid = 0,
                                    resultidb = 0,
                                    responsiveEntries = [{
                                            width: 1400,
                                            amount: 5,
                                            mmheight: 0
                                        },
                                        {
                                            width: 1170,
                                            amount: 4,
                                            mmheight: 0
                                        },
                                        {
                                            width: 1024,
                                            amount: 4,
                                            mmheight: 0
                                        },
                                        {
                                            width: 960,
                                            amount: 3,
                                            mmheight: 0
                                        },
                                        {
                                            width: 778,
                                            amount: 3,
                                            mmheight: 0
                                        },
                                        {
                                            width: 640,
                                            amount: 3,
                                            mmheight: 0
                                        },
                                        {
                                            width: 480,
                                            amount: 2,
                                            mmheight: 0
                                        }
                                    ];
                                if (responsiveEntries != undefined && responsiveEntries.length > 0)
                                    jQuery.each(responsiveEntries, function(index, obj) {
                                        var curw = obj.width != undefined ? obj.width : 0,
                                            cura = obj.amount != undefined ? obj.amount : 0;
                                        if (smallest > curw) {
                                            smallest = curw;
                                            samount = cura;
                                            resultidb = index;
                                        }
                                        if (largest < curw) {
                                            largest = curw;
                                            lamount = cura;
                                        }
                                        if (curw > lastbottom && curw <= lasttop) {
                                            lastbottom = curw;
                                            lastamount = cura;
                                            resultid = index;
                                        }
                                    });
                                if (smallest > winw) {
                                    lastamount = samount;
                                    resultid = resultidb;
                                }
                                var obj = new Object;
                                obj.index = resultid;
                                obj.column = lastamount;
                                if (resultoption == "id")
                                    return obj;
                                else
                                    return lastamount;
                            }
                            if ("masonry" == "even") {
                                var coh = 0,
                                    container = jQuery("#esg-grid-18-1");
                                var cwidth = container.width(),
                                    ar = "4:5",
                                    gbfc = eggbfc(jQuery(window).width(), "id"),
                                    row = 1;
                                ar = ar.split(":");
                                var aratio = parseInt(ar[0], 0) / parseInt(ar[1], 0);
                                coh = cwidth / aratio;
                                coh = coh / gbfc.column * row;
                                var ul = container.find("ul").first();
                                ul.css({
                                    display: "block",
                                    height: coh + "px"
                                });
                            }
                            var essapi_18;
                            jQuery(document).ready(function() {
                                essapi_18 = jQuery("#esg-grid-18-1").tpessential({
                                    gridID: 18,
                                    layout: "masonry",
                                    forceFullWidth: "off",
                                    lazyLoad: "off",
                                    row: 1,
                                    apiName: "essapi_18",
                                    loadMoreAjaxToken: "12561bf45f",
                                    loadMoreAjaxUrl: "http://organics.axiomthemes.com/wp-admin/admin-ajax.php",
                                    loadMoreAjaxAction: "Essential_Grid_Front_request_ajax",
                                    ajaxContentTarget: "ess-grid-ajax-container-",
                                    ajaxScrollToOffset: "0",
                                    ajaxCloseButton: "off",
                                    ajaxContentSliding: "on",
                                    ajaxScrollToOnLoad: "on",
                                    ajaxCallbackArgument: "off",
                                    ajaxNavButton: "off",
                                    ajaxCloseType: "type1",
                                    ajaxCloseInner: "false",
                                    ajaxCloseStyle: "light",
                                    ajaxClosePosition: "tr",
                                    space: 30,
                                    pageAnimation: "horizontal-slide",
                                    paginationScrollToTop: "off",
                                    paginationAutoplay: "off",
                                    spinner: "spinner0",
                                    lightBoxMode: "single",
                                    lightboxHash: "group",
                                    lightboxPostMinWid: "75%",
                                    lightboxPostMaxWid: "75%",
                                    lightboxSpinner: "off",
                                    lightBoxFeaturedImg: "off",
                                    lightBoxPostTitle: "off",
                                    lightBoxPostTitleTag: "h2",
                                    lightboxMargin: "0|0|0|0",
                                    lbContentPadding: "0|0|0|0",
                                    lbContentOverflow: "auto",
                                    animSpeed: 1200,
                                    delayBasic: 1,
                                    mainhoverdelay: 1,
                                    filterType: "single",
                                    showDropFilter: "hover",
                                    filterGroupClass: "esg-fgc-18",
                                    filterNoMatch: "No Items for the Selected Filter",
                                    filterDeepLink: "off",
                                    googleFonts: ['Open+Sans:300,400,600,700,800',
                                        'Raleway:100,200,300,400,500,600,700,800,900',
                                        'Droid+Serif:400,700'
                                    ],
                                    responsiveEntries: [{
                                            width: 1400,
                                            amount: 5,
                                            mmheight: 0
                                        },
                                        {
                                            width: 1170,
                                            amount: 4,
                                            mmheight: 0
                                        },
                                        {
                                            width: 1024,
                                            amount: 4,
                                            mmheight: 0
                                        },
                                        {
                                            width: 960,
                                            amount: 3,
                                            mmheight: 0
                                        },
                                        {
                                            width: 778,
                                            amount: 3,
                                            mmheight: 0
                                        },
                                        {
                                            width: 640,
                                            amount: 3,
                                            mmheight: 0
                                        },
                                        {
                                            width: 480,
                                            amount: 2,
                                            mmheight: 0
                                        }
                                    ]
                                });

                                var arrows = true,
                                    lightboxOptions = {
                                        margin: [0, 0, 0, 0],
                                        buttons: ["share", "thumbs", "close"],
                                        infobar: true,
                                        loop: true,
                                        slideShow: {
                                            "autoStart": false,
                                            "speed": 3000
                                        },
                                        animationEffect: "fade",
                                        animationDuration: 500,
                                        beforeShow: function(a, c) {
                                            if (!arrows) {
                                                jQuery("body").addClass("esgbox-hidearrows");
                                            }
                                            var i = 0,
                                                multiple = false;
                                            a = a.slides;
                                            for (var b in a) {
                                                i++;
                                                if (i > 1) {
                                                    multiple = true;
                                                    break;
                                                }
                                            }
                                            if (!multiple) jQuery("body").addClass("esgbox-single");
                                            if (c.type === "image") jQuery(".esgbox-button--zoom").show();
                                        },
                                        beforeLoad: function(a, b) {
                                            jQuery("body").removeClass("esg-four-by-three");
                                            if (b.opts.$orig.data("ratio") === "4:3") jQuery("body").addClass(
                                                "esg-four-by-three");
                                        },
                                        afterLoad: function() {
                                            jQuery(window).trigger("resize.esglb");
                                        },
                                        afterClose: function() {
                                            jQuery("body").removeClass("esgbox-hidearrows esgbox-single");
                                        },
                                        transitionEffect: "fade",
                                        transitionDuration: 366,
                                        hash: "group",
                                        arrows: true,
                                        wheel: false,
                                    };

                                jQuery("#esg-grid-18-1").data("lightboxsettings", lightboxOptions);


                                try {
                                    jQuery("#esg-grid-18-1 .esgbox").esgbox(lightboxOptions);
                                } catch (e) {}

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="sc_section scheme_original">
            <div class="footer_shortcode_area">
                <div class="sc_call_to_action_info">
                <h3 class="sc_title sc_title_regular sc_align_left" 
                    style="text-decoration: underline;margin-top:-1.5em;text-align:center;font-size: 1.5em;font-family: Roboto;"
                            data-animation="animated fadeIn normal">
                            <a href="">Đánh Giá Của Khách Hàng</a></h3>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="sc_testimonials_wrap sc_section" style="background-image:url({{asset('website_css/uploads/images/tp-02.png')}});">
                        <div class="sc_section_overlay" style="">
                            <div id="sc_testimonials_132390921" class="sc_testimonials sc_testimonials_style_testimonials-4 sc_slider_swiper swiper-slider-container sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom sc_slider_height_auto aligncenter inited sc_testimonials_132390921 swiper-container-horizontal"
                                data-interval="7000" data-slides-per-view="3" data-slides-min-width="250" style="width: 100%; cursor: grab;">
                                <div class="slides swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1333.33px, 0px, 0px);">
                                    @foreach($customer as $item_customer)
                                        <div class="swiper-slide swiper-slide-prev" data-style="width:100%;" style="width: 333.333px; position: relative;"
                                            data-swiper-slide-index="0">
                                            <div id="sc_testimonials_132390921_1" class="sc_testimonial_item">
                                                <div class="sc_testimonial_content" style="height: 150px;width: 100%; overflow-y: hidden;">
                                                    <p style="overflow-y: hidden;height: 87px;">{{$item_customer->content}}</p>
                                                </div>
                                                <div class="sc_testimonial_avatar">
                                                    <img class="wp-post-image" width="75" height="75" alt="High speed and quality"
                                                        src="{{asset('storage/'.$item_customer->images)}}">
                                                </div>
                                                <div class="sc_testimonial_author">
                                                    <span class="sc_testimonial_author_name">{{$item_customer->name}}</span>
                                                    <span class="sc_testimonial_author_position">{{$item_customer->email}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- <div class="sc_slider_controls_wrap">
                                    <a class="sc_slider_prev" href="#"></a>
                                    <a class="sc_slider_next" href="#"></a>
                                </div> -->
                                <div class="sc_slider_pagination_wrap swiper-pagination-clickable">
                                    <span class="swiper-pagination-bullet"></span>
                                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span>
                                    <span class="swiper-pagination-bullet"></span>
                                    <span class="swiper-pagination-bullet"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_wrap_inner widget_area_inner">
                    <div class="sc_call_to_action_info">
                        <h3 class="sc_title sc_title_regular sc_align_left" style="text-decoration: underline;margin-top:3em;text-align:center;font-size: 1.5em;font-family: Roboto;"
                            data-animation="animated fadeIn normal">Câu Hỏi Thường Gặp</h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="sc_section scheme_original">
                            <div class="footer_shortcode_area">
                                <div class="sc_testimonials_wrap sc_section" style="background-image:url({{asset('website_css/uploads/images/hinh-tu-van.png')}});">
                                    <div class="sc_section_overlay" style="">
                                        <div id="sc_testimonials_132390921" class="sc_testimonials sc_testimonials_style_testimonials-4  sc_slider_swiper swiper-slider-container sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom sc_slider_height_auto aligncenter"
                                            data-interval="7000" data-slides-per-view="3" data-slides-min-width="250"
                                            style="width:100%;">
                                            <div class="slides swiper-wrapper">
                                                @foreach($faq as $item_faq)
                                                <div class="swiper-slide" data-style="width:100%;" style="width:100%;">
                                                    <div id="sc_testimonials_132390921_1" class="sc_testimonial_item">
                                                        <div class="sc_testimonial_avatar">
                                                            <img class="wp-post-image" width="75" height="75" alt="High speed and quality"
                                                                src="{{asset('storage/'.$item_faq->images)}}">
                                                        </div>
                                                        <div class="sc_testimonial_author">
                                                            <div class="esg-content eg-post-2001 eg-blogger-element-6" style="margin: -52px 0px 0px 70px !important;">
                                                                <span class="sc_testimonial_author_name">{{$item_faq->name}}</span>
                                                                <span class="sc_testimonial_author_position">{{$item_faq->title}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="sc_testimonial_content" style="    height: 160px; overflow-y: hidden;margin-left: -30px;">
                                                            <p class="sc_testimonial_author_position" style="color: black;">{{$item_faq->comment}}</p>

                                                            <!-- <p>{{$item_faq->content}}.</p> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- <div class="sc_slider_controls_wrap">
                                                <a class="sc_slider_prev" href="#"></a>
                                                <a class="sc_slider_next" href="#"></a>
                                            </div> -->
                                            <!-- <div class="sc_slider_pagination_wrap">

                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
</div> <!-- </div> class="content_wrap"> -->
</div> <!-- </.page_content_wrap> -->
@endsection
