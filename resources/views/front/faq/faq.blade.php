@extends('front.master')


@section('content')
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap" style="font-size: 9px;">
            <h1 class="" style="    color: white; font-family: roboto;">CÁC CÂU HỎI THƯỜNG GẶP</h1>
        </div>
    </div>
    <div class="page_content_wrap page_paddings_yes">
		<div class="content_wrap">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="container">
                    <div class="container">
                           
                    <!-- <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        This section contains a wealth of information, related to <strong>PrepBootstrap</strong> and its store. If you cannot find an answer to your question,
                        make sure to contact us.
                    </div> -->
                        <br />
                    <div class="panel-group" id="accordion">
                        <div class="faqHeader">Câu hỏi chung</div>
                        @foreach($faq as $item_faq)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">{{$item_faq->title}}?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    {{$item_faq->comment}}
                                </div>
                            </div>
                        </div>
                       @endforeach
                    </div>
                </div>

                        <style>
                        .faqHeader {
                            font-size: 27px;
                            margin  : 20px;
                        }

                        .panel-heading [data-toggle="collapse"]:after {
                            font-family: 'Glyphicons Halflings';
                            content: "\e072"; /* "play" icon */
                            float: right;
                            color: #F58723;
                            font-size: 18px;
                            line-height: 22px;
                            /* rotate "play" icon from > (right arrow) to down arrow */
                            -webkit-transform: rotate(-90deg);
                            -moz-transform: rotate(-90deg);
                            -ms-transform: rotate(-90deg);
                            -o-transform: rotate(-90deg);
                            transform: rotate(-90deg);
                        }

                        .panel-heading [data-toggle="collapse"].collapsed:after {
                            /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
                            -webkit-transform: rotate(90deg);
                            -moz-transform: rotate(90deg);
                            -ms-transform: rotate(90deg);
                            -o-transform: rotate(90deg);
                            transform: rotate(90deg);
                            color: #454444;
                        }
                        </style>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="sidebar widget_area scheme_original" role="complementary">
					<div class="sidebar_inner widget_area_inner">
						<aside id="search-4" class="widget_number_4 widget widget_search">
							<form role="search" method="get" class="search_form" action="{{asset('/search.html')}}">
								<input type="text" class="search_field" placeholder="Tìm Kiếm " value="" name="name"  title="Search for:">
								<button type="submit" class="search_button icon-search"  href="#" style="font-size: 10px;"></button>
							</form>
						</aside>
                        <!-- <aside id="woocommerce_product_tag_cloud-2" class="widget_number_6 widget woocommerce widget_product_tag_cloud">
                            <h5 class="widget_title">DANH MỤC CÂU HỎI</h5>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link tag-link-192 tag-link-position-1" style="font-size: 22pt;" aria-label="best selling products (10 products)">best selling products</a>
                                <a href="#" class="tag-cloud-link tag-link-185 tag-link-position-2" style="font-size: 8pt;" aria-label="bread (1 product)">bread</a>
                                <a href="#" class="tag-cloud-link tag-link-184 tag-link-position-3" style="font-size: 8pt;" aria-label="cereal (1 product)">cereal</a>
                                <a href="#" class="tag-cloud-link tag-link-190 tag-link-position-4" style="font-size: 22pt;" aria-label="featured products (10 products)">featured products</a>
                                <a href="#" class="tag-cloud-link tag-link-101 tag-link-position-5" style="font-size: 8pt;" aria-label="food (1 product)">food</a>
                                <a href="#" class="tag-cloud-link tag-link-186 tag-link-position-6" style="font-size: 8pt;" aria-label="fresh (1 product)">fresh</a>
                                <a href="#" class="tag-cloud-link tag-link-100 tag-link-position-7" style="font-size: 8pt;" aria-label="meat (1 product)">meat</a>
                                <a href="#" class="tag-cloud-link tag-link-191 tag-link-position-8" style="font-size: 22pt;" aria-label="new products (10 products)">new products</a>
                                <a href="#" class="tag-cloud-link tag-link-102 tag-link-position-9" style="font-size: 8pt;" aria-label="organic (1 product)">organic</a>
                                <a href="#" class="tag-cloud-link tag-link-103 tag-link-position-10" style="font-size: 8pt;" aria-label="raw (1 product)">raw</a>
                            </div>
                        </aside>		 -->
						<aside id="organics_widget_recent_posts-7" class="widget_number_6 widget widget_recent_posts">
								<h3 class="post_title" style="margin-top: 1px;font-weight: 800;">
									<a href="#" >TIÊU ĐIỂM</a>
                                </h3>	
                            @foreach($product as $item_product)
							<article class="post_item with_thumb first">
								<div class="post_thumb">
									<img class="wp-post-image" width="75" height="75" alt="GMOs: Your Right To Know" src="{{asset('storage/'.$item_product->images)}}">
								</div>
								<div class="post_content">
									<h6 class="post_title">
										<a href="{{route('details_news',[$item_product->id,$item_product->name])}}">{{ $item_product->name}}</a>
									</h6>
									<div class="post_info" style="font-size: 12px;margin-top: 10px;">
										<span class="post_info_item post_info_posted">
											<a href="#" class="post_info_date">{{$item_product->created_at}}</a>
										</span>
									</div>
								</div>
                            </article>
                            @endforeach
                        </aside>
					</div> <!-- /.sidebar -->
				</div>
       	 	</div>
        </div>
    </div>
</div>
<div class="footer_wrap_inner widget_area_inner">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="sc_section scheme_original">
					<div class="footer_shortcode_area">
						<div class="sc_testimonials_wrap sc_section" style="background-image:url({{asset('website_css/uploads/images/hinh-tu-van.png')}});">
							<div class="content">
								<div class="content_wrap" style="width: 50%;    height: 400px;">
									<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-6 page type-page status-publish hentry" itemscope="" itemtype="http://schema.org/Article">
										<section class="post_content" itemprop="articleBody">
											<div class="woocommerce">
												<form name="checkout" method="post" 
														class="checkout woocommerce-checkout" action="" enctype="multipart/form-data" novalidate="novalidate">
													<div class="col12-set" id="customer_details" style="padding-top: 80px;">
														<div class="col-1">
															<div class="woocommerce-billing-fields">
																<div class="woocommerce-billing-fields__field-wrapper" style="font-size: 1rem;font-weight: 400;">
																	<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
																			<!-- <label for="billing_phone" class="" style="font-size: 20px;font-family: roboto;font-weight: 600;">Email &nbsp;<abbr class="required" title="required">*</abbr></label> -->
																			<span class="woocommerce-input-wrapper" style="width: 100%;float: right;">
                                                                                <textarea id="sc_form_message" name="message" placeholder="   Email của bạn" style="font-size: 0.857em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: 16px;    -webkit-border-radius: 10px;"></textarea>
																			</span>
																	</p>
																	<p class="form-row notes" id="order_comments_field" data-priority="">
																		<label for="order_comments" class=""> &nbsp;<span class="optional"></span></label>
																		<span class="woocommerce-input-wrapper">
                                                                            <textarea id="sc_form_message" name="message" placeholder="   Nhập câu hỏi" style="font-size: 0.857em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;    -webkit-border-radius: 10px;"></textarea>
																		</span>
																	</p>
																</div>
															</div>
														</div>
													</div>
													<button type="submit" class="btn btn-success" style="float:right;    border-color: #80b500;background-color: #80b500; ">ĐĂNG CÂU HỎI </button>
												</form>
											</div>
										</section> 
										<section class="related_wrap related_wrap_empty"></section>
									</article>
								</div>
							</div>
						</div>
						</p>
					</div>
				</div>
			</div>
		</div>

@endsection