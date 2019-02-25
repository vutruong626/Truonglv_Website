@extends('front.master')



@section('content')
<div class="top_panel_title top_panel_style_4  title_present breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_4  title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap" style="font-size: 9px;">
			<h1 class="page_title">GIA ĐÌNH CORDY</h1>
		</div>
	</div>
</div>
<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap">
		<div class="content">
			<article class="post_item post_item_single post_item_product">
				<div class="woocommerce-notices-wrapper"></div>
				<div id="product-1346" class="post-1346 product type-product status-publish has-post-thumbnail product_cat-organic-dairy product_cat-fresh-meal product_tag-best-selling-products product_tag-featured-products product_tag-new-products first instock sale featured shipping-taxable purchasable product-type-simple">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<style>
							* {
								box-sizing: border-box;
							}

							img {
								vertical-align: middle;
							}

							/* Position the image container (needed to position the left and right arrows) */
							.container {
								position: relative;
								padding-top: 30px;
							}

							/* Hide the images by default */
							.mySlides {
								display: none;
							}

							/* Add a pointer when hovering over the thumbnail images */
							.cursor {
								cursor: pointer;
							}

							/* Next & previous buttons */
							.prev,
							.next {
								cursor: pointer;
								position: absolute;
								top: 50%;
								width: auto;
								padding: 16px;
								margin-top: -50px;
								color: white;
								font-weight: bold;
								font-size: 20px;
								border-radius: 0 3px 3px 0;
								user-select: none;
								-webkit-user-select: none;
							}

							/* Position the "next button" to the right */
							.next {
								right: 13px;
								border-radius: 3px 0 0 3px;
							}

							/* On hover, add a black background color with a little bit see-through */
							.prev:hover,
							.next:hover {
								background-color: rgba(0, 0, 0, 0.8);
							}

							/* Number text (1/3 etc) */
							.numbertext {
								color: #f2f2f2;
								font-size: 12px;
								padding: 8px 12px;
								position: absolute;
								top: 0;
							}

							/* Container for image text */
							.caption-container {
								text-align: center;
								background-color: #fff;
								padding: 1px 16px;
								color: white;
							}

							.row:after {
								content: "";
								display: table;
								clear: both;
							}

							/* Six columns side by side */
							.column {
								float: left;
								width: 16.66%;
								margin: 2px 2px
							}

							/* Add a transparency effect for thumnbail images */
							.demo {
								opacity: 0.6;
							}

							.active,
							.demo:hover {
								opacity: 1;
							}
						</style>
						<div class="container">
							<div class="mySlides">
								<div class="numbertext">1 / 6</div>
								<img id="myimage" src="{{asset('storage/'.$cordies->images)}}" style="width:100%">
							</div>
							<div class="mySlides">
								<div class="numbertext">2 / 6</div>
								<img id="myimage1" src="{{asset('storage/'.$cordies->images)}}" style="width:100%">
							</div>

							<div class="mySlides">
								<div class="numbertext">3 / 6</div>
								<img id="myimage2" src="{{asset('storage/'.$cordies->images)}}" style="width:100%">
							</div>
							<div class="mySlides">
								<div class="numbertext">5 / 6</div>
								<img id="myimage3" src="{{asset('storage/'.$cordies->images)}}" style="width:100%">
							</div>
							<div class="mySlides">
								<div class="numbertext">6 / 6</div>
								<img id="myimage" src="{{asset('storage/'.$cordies->images)}}" style="width:100%">
							</div>
							<a class="prev" onclick="plusSlides(-1)">❮</a>
							<a class="next" onclick="plusSlides(1)">❯</a>
							<div class="caption-container">
							</div>
							<div class="row" style="margin-right:-7em">
								<div class="column">
									<img class="demo cursor" src="{{asset('storage/'.$cordies->images)}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
								</div>
								<div class="column">
									<img class="demo cursor" src="{{asset('storage/'.$cordies->images)}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
								</div>
								<div class="column">
									<img class="demo cursor" src="{{asset('storage/'.$cordies->images)}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
								</div>
								<div class="column">
									<img class="demo cursor" src="{{asset('storage/'.$cordies->images)}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
								</div>
								<div class="column">
									<img class="demo cursor" src="{{asset('storage/'.$cordies->images)}}" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
								</div>
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
								var dots = document.getElementsByClassName("demo");
								var captionText = document.getElementById("caption");
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
										captionText.innerHTML = dots[slideIndex-1].alt;
									}
								</script>
								<!-- sdfds -->
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="float: right;s">
								<div class="summary entry-summary" style="    margin-top: -20px;">
									<h4 class="product_title entry-title" >{{$cordies->name}}</h4>
									<p>{{$cordies->title}},</p>
									
										<div class="quantity">
											<label class="screen-reader-text" for="quantity_5c46db0c44824">Quantity</label>
											
											<input type="number" id="quantity_5c46db0c44824" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" aria-labelledby="Fresh Meal Kit quantity" style="width: 20%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<span class="q_inc"></span>
											<span class="q_dec"></span><a href="{{asset('/cart/add/'.$cordies->id)}}">Thêm Vào Giỏ Hàng </a>
										</div>
									</br>
									<p class="price" style="    margin-bottom: 15px;">
										<span class="woocommerce-Price-amount amount" style="color:red;font-size: 28px;"><span class="">{{number_format($cordies->price)}} VND</span></span>
									</p>
									<button type="submit" name="add-to-cart" value="1346" class="single_add_to_cart_button button alt"><a href="{{asset('/cart/add/'.$cordies->id)}}" style="color:white;">MUA NGAY </a></button>
							</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="woocommerce-tabs wc-tabs-wrapper trx-stretch-width scheme_light">
							<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">
								<h4>{{$cordies->name}}</h4>
								<p>{!! $cordies->content !!}.
									<span id="more-1346"></span>
								</p>
								
							</div>
							
						</div>
					</div>
				</div>
			</article>
		</div> 
	</div>
</div>
<div class="footer_wrap_inner widget_area_inner">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="sc_section scheme_original">
			<div class="footer_shortcode_area">
				<div class="sc_testimonials_wrap sc_section" style="background-image:url({{asset('website_css/uploads/images/hinh-tu-van.png')}});">
					<div class="content">
						<div class="content_wrap" style="width: 50%;    height: 480px;">
							<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-6 page type-page status-publish hentry" itemscope="" itemtype="http://schema.org/Article">
								<section class="post_content" itemprop="articleBody">
									<div class="woocommerce">
										<form name="checkout" method="post" 
										class="checkout woocommerce-checkout" action="" enctype="multipart/form-data" novalidate="novalidate">
													{{ csrf_field() }}
										<div class="col12-set" id="customer_details" style="padding-top: 80px;">
											<div class="col-1">
												<div class="woocommerce-billing-fields">
													<div class="woocommerce-billing-fields__field-wrapper" style="font-size: 1rem;font-weight: 400;">
														<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
															<label for="billing_phone" class="" style="font-size: 20px;font-family: roboto;font-weight: 600;">ĐÁNH GIÁ CỦA BẠN &nbsp;<abbr class="required" title="required">*</abbr></label>
															<span class="woocommerce-input-wrapper" style="width: 100%;float: right;">
																<!-- <textarea id="sc_form_message" name="email" placeholder="   Email của bạn" style="font-size: 0.857em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;    -webkit-border-radius: 10px;"></textarea> -->
																<input id="sc_form_username" type="text" name="email" placeholder="   Email của bạn" style="font-size: 1.3em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;    -webkit-border-radius: 10px;">
															</span>
														</p>
														<p class="form-row notes" id="order_comments_field" data-priority="">
															<label for="order_comments" class=""> &nbsp;<span class="optional"></span></label>
															<span class="woocommerce-input-wrapper">
																<textarea id="sc_form_message" name="feedback" placeholder="Nhận xét về sản phẩm" style="font-size: 1.3em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;    -webkit-border-radius: 10px;"></textarea>
																<!-- <textarea id="sc_form_message" name="message" placeholder="   Nhận xét về sản phẩm" style="font-size: 0.857em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;    -webkit-border-radius: 10px;"></textarea> -->
															</span>
														</p>
														<div id="html_element" style="float: right;margin-top: 5px;margin-bottom: 10px;"></div>
													</div>
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-success" onClick="return validateCaptcha();" value="Submit" style="float:right;    border-color: #80b500;background-color: #80b500; ">GỬI ĐÁNH GIÁ</button>
									</form>
									<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
														async defer>
													</script>
									<script type="text/javascript">
										var onloadCallback = function validateCaptcha() {
											grecaptcha.render('html_element', {
											'sitekey' : '6Lf8WZIUAAAAAP_RQ-nCsi-UbvSHf7EDcipp1gzH'
											// "success": true|false,
											// "challenge_ts": timestamp,  // timestamp of the challenge load (ISO format yyyy-MM-dd'T'HH:mm:ssZZ)
											// "hostname": string,         // the hostname of the site where the reCAPTCHA was solved
											// "error-codes": [...]        // optional
											});
										};
									</script>
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
