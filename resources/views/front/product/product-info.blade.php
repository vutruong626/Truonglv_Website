@extends('front.master')


@section('content')
<!-- sjds -->

<div class="top_panel_title top_panel_style_4  title_present breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_4  title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap" style="font-size: 9px;">
			<h1 class="page_title">ĐẶT MUA SẢN PHẨM </h1>
			<!-- <div class="breadcrumbs">
				<a class="breadcrumbs_item home" href="https://organics.axiomthemes.com">Home</a>
				<span class="breadcrumbs_delimiter"></span>
				<a class="breadcrumbs_item all" href="https://organics.axiomthemes.com/shop/">Shop</a>
				<span class="breadcrumbs_delimiter"></span>
				<span class="breadcrumbs_item current">Checkout</span>					
			</div> -->
		</div>
	</div>
</div>
<div class="row">
			<div class="col-lg-12 col-md-12">
			@if ($message = Session::get('err'))
				<div class="panel-body">
				<div class="alert alert-warning" role="alert">
					{{$message}}
				</div>
				</div>
			@endif
			</div>
		</div>
<div class="page_content_wrap page_paddings_yes">
<!-- <form name="checkout" method="post"  -->
	<div class="content_wrap">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<div class="content">
				<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-6 page type-page status-publish hentry" itemscope="" itemtype="http://schema.org/Article">
					<section class="post_content" itemprop="articleBody">
						<div class="woocommerce">
							<div class="woocommerce-form-coupon-toggle">
								<div class="woocommerce-info" ></div>
							</div>
							<div class="woocommerce-notices-wrapper"></div>
							<form name="" method="post" 
									class="checkout woocommerce-checkout" action="" enctype="multipart/form-data" novalidate="novalidate">
									{{csrf_field()}}
								<div class="col12-set" id="customer_details">
									<div class="col-1">
										<div class="woocommerce-billing-fields">
										<h3 style="font-size: 1.5rem;color: #80b500;font-weight: bold;">THÔNG TIN NGƯỜI NHẬN	</h3>
											<div class="woocommerce-billing-fields__field-wrapper" style="font-size: 1rem;font-weight: 400;">
												<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label for="billing_phone" class="">Họ & Tên&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<input type="tel" class="input-text " name="name" id="billing_phone" placeholder="Họ & Tên" value="" autocomplete="tel">
													</span>
													@if ($errors->has('name'))
                                                          <div class="text-danger">{{ $errors->first('name') }}</div>
                                                      @endif
												</p>
												<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
													<label for="billing_phone" class="">Số Điện Thoại&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<input type="tel" class="input-text " name="phone" id="billing_phone" placeholder="Số Điện Thoại" value="" autocomplete="tel">
													</span>
													@if ($errors->has('name'))
                                                          <div class="text-danger">{{ $errors->first('phone') }}</div>
                                                      @endif
												</p>
												<p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
													<label for="billing_email" class="">Email&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<input type="email" class="input-text " name="email" id="billing_email" placeholder="email của bạn " value="" autocomplete="email username">
													</span>
													@if ($errors->has('email'))
                                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                                    @endif
												</p>
												<p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field" data-priority="50">
													<label for="billing_address_1" class="">Địa Chỉ&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Địa Chỉ" value="" autocomplete="address-line1"></span>
														@if ($errors->has('name'))
                                                          <div class="text-danger">{{ $errors->first('address') }}</div>
                                                      @endif
												</p>
												<p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
													<label for="billing_country" class="">Tình / Thành Phố&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<span class="woocommerce-input-wrapper">
															<input type="tel" class="input-text " name="city" id="billing_phone" placeholder="Tình / Thành Phố" value="" autocomplete="tel">
														</span>
														<span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
															<span class="selection">
																<span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container" role="combobox">
																	<span class="select2-selection__arrow" role="presentation">
																		<b role="presentation"></b>
																	</span>
																	</span>
																</span>
																<span class="dropdown-wrapper" aria-hidden="true"></span>
															</span>
															<noscript>
																<button type="submit" name="woocommerce_checkout_update_totals" value="Update country">Update country</button>
															</noscript>
														</span>
												</p>
												<p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
													<label for="billing_country" class="">Quận / Huyện&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<span class="woocommerce-input-wrapper">
															<input type="tel" class="input-text " name="district" id="billing_phone" placeholder="Quận / Huyện" value="" autocomplete="tel">
														</span>
														@if ($errors->has('name'))
                                                          <div class="text-danger">{{ $errors->first('district') }}</div>
                                                      @endif	
														<span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
															<span class="selection">
																<span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container" role="combobox">
																	<span class="select2-selection__arrow" role="presentation">
																		<b role="presentation"></b>
																	</span>
																	</span>
																</span>
																<span class="dropdown-wrapper" aria-hidden="true"></span>
															</span>
															<noscript>
																<button type="submit" name="woocommerce_checkout_update_totals" value="Update country">Update country</button>
															</noscript>
														</span>
												</p>
												<p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field" data-priority="40">
													<label for="billing_country" class="">Phường Xã&nbsp;<abbr class="required" title="required">*</abbr></label>
													<span class="woocommerce-input-wrapper">
														<span class="woocommerce-input-wrapper">
															<input type="tel" class="input-text " name="area" id="area" placeholder="Phường Xã" value="" autocomplete="tel">
														</span>
														<span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;">
															<span class="selection">
																<span class="select2-selection select2-selection--single" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-billing_country-container" role="combobox">
																	<span class="select2-selection__arrow" role="presentation">
																		<b role="presentation"></b>
																	</span>
																	</span>
																</span>
																<span class="dropdown-wrapper" aria-hidden="true"></span>
															</span>
															<noscript>
																<button type="submit" name="woocommerce_checkout_update_totals" value="Update country">Update country</button>
															</noscript>
														</span>
												</p>
												<p class="form-row notes" id="order_comments_field" data-priority="">
													<label for="order_comments" class="">Ghi  Chú &nbsp;<span class="optional"></span></label>
													<span class="woocommerce-input-wrapper">
														<textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi  Chú" rows="2" cols="5">
														</textarea>
													</span>
												</p>
												
											</div>
										</div>
										<div class="woocommerce-account-fields">
											<p class="form-row form-row-wide create-account woocommerce-validated" style="color:red;font-size: 20px;">
												<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
													<span>Vui lòng kiểm tra lại thông tin trước khi thanh toán?</span>
												</label>
											</p>
											<div class="create-account" style="display: none;">
												<p class="form-row validate-required" id="account_password_field" data-priority="">
													<label for="account_password" class="">Create account password&nbsp;<abbr class="required" title="required">*</abbr></label><span class="woocommerce-input-wrapper"><input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value=""></span>
												</p>								
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-success" style="font-family: roboto;font-weight: bold;float: right;background-color: #80B500;">XÁC NHẬN</button>
							</form>
						</div>
					</section> 
					<section class="related_wrap related_wrap_empty"></section>
				</article>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<div class="sidebar widget_area scheme_original" role="complementary" >
			<div class="woocommerce-form-login-toggle">
				<div class="woocommerce-info" style="border-top-color:#80b500;"></div>
				<div class="sidebar_inner widget_area_inner">
					<aside id="woocommerce_product_categories-3" class="widget_number_3 widget woocommerce widget_product_categories">
						<h3 style="font-size: 1.5rem;color: #80b500;font-weight: bold;     margin-top: 10px;">HÓA ĐƠN	</h3>
						<ul class="product-categories">
							<li class="cat-item cat-item-96">
								<a href="#">Số Lượng:</a> 
								<span class="count" style="float:right;">{{$total}}</span>
							</li>
							<li class="cat-item cat-item-96">
								<a href="#">Tạm  Tính :</a> 
								<span class="count" style="float:right;">{{number_format($cart_detail['weight'],0)}} VND</span>
							</li>
							<!-- <li class="cat-item cat-item-96">
								<a href="https://organics.axiomthemes.com/product-category/cereals/">Phí Vận Chuyển :</a> 
								<span class="count" style="float:right;">10.000$</span>
							</li> -->
						</ul>
					</aside>
					<aside id="woocommerce_product_search-2" class="widget_number_4 widget woocommerce widget_product_search" style="padding-top: 60px;">
						<p>Mã  khuyến mãi </p>
						<h6 class="form-row form-row-first" style="width: 100%;margin-top: -8px;font-family: roboto;font-size: 1.3em;text-align: center;">
							<input type="text" name="coupon_code" class="input-text" placeholder="Nhập Mã khuyến mãi" id="coupon_code" value="">
						</h6>
					</aside>
					<aside id="woocommerce_recently_viewed_products-2" class="widget_number_5 widget woocommerce widget_recently_viewed_products">
						<!-- <table class="table table-hover " style="border: red; border-style: dashed; color: red;">
							<thead>
								<tr>
									<th style="text-align: left;">Xin chúc mừng bạn được giảm </th>&nbsp;<td style="text-align: center;font-size: 2rem;font-weight: bold;">10%</td>
								</tr>
							</thead>
						</table> -->
						<ul id="woocommerce_product_search-2">
							<li class="cat-item cat-item-96" style="text-align: center;font-size: 1.5rem;font-weight: bold;">
								<span class="count" style="font-size: 1rem;">TỔNG CỘNG</span></br>
								<span class="count" style="    color: red;"> {{number_format($cart_detail['weight'])}} VND</span>
							</li>
						</ul>
					</aside>
					

					<!-- <aside id="woocommerce_product_tag_cloud-2" class="widget_number_6 widget woocommerce widget_product_tag_cloud">
						<h5 class="widget_title">Product Tags</h5>
						<div class="tagcloud">
							<a href="https://organics.axiomthemes.com/product-tag/best-selling-products/" class="tag-cloud-link tag-link-192 tag-link-position-1" style="font-size: 22pt;" aria-label="best selling products (10 products)">best selling products</a>
							<a href="https://organics.axiomthemes.com/product-tag/bread/" class="tag-cloud-link tag-link-185 tag-link-position-2" style="font-size: 8pt;" aria-label="bread (1 product)">bread</a>
							<a href="https://organics.axiomthemes.com/product-tag/cereal/" class="tag-cloud-link tag-link-184 tag-link-position-3" style="font-size: 8pt;" aria-label="cereal (1 product)">cereal</a>
							<a href="https://organics.axiomthemes.com/product-tag/featured-products/" class="tag-cloud-link tag-link-190 tag-link-position-4" style="font-size: 22pt;" aria-label="featured products (10 products)">featured products</a>
							<a href="https://organics.axiomthemes.com/product-tag/food/" class="tag-cloud-link tag-link-101 tag-link-position-5" style="font-size: 8pt;" aria-label="food (1 product)">food</a>
							<a href="https://organics.axiomthemes.com/product-tag/fresh/" class="tag-cloud-link tag-link-186 tag-link-position-6" style="font-size: 8pt;" aria-label="fresh (1 product)">fresh</a>
							<a href="https://organics.axiomthemes.com/product-tag/meat/" class="tag-cloud-link tag-link-100 tag-link-position-7" style="font-size: 8pt;" aria-label="meat (1 product)">meat</a>
							<a href="https://organics.axiomthemes.com/product-tag/new-products/" class="tag-cloud-link tag-link-191 tag-link-position-8" style="font-size: 22pt;" aria-label="new products (10 products)">new products</a>
							<a href="https://organics.axiomthemes.com/product-tag/organic/" class="tag-cloud-link tag-link-102 tag-link-position-9" style="font-size: 8pt;" aria-label="organic (1 product)">organic</a>
							<a href="https://organics.axiomthemes.com/product-tag/raw/" class="tag-cloud-link tag-link-103 tag-link-position-10" style="font-size: 8pt;" aria-label="raw (1 product)">raw</a>
						</div>
					</aside>		 -->
				</div>
			</div> 
		</div>
		

	</div> 
	<!-- </form> -->
</div>
@endsection