@extends('front.master')


@section('content')
<div class="top_panel_title top_panel_style_4  title_present breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_4  title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap" style="font-size: 9px;">
			<h1 class="page_title">ĐẶT MUA SẢN PHẨM </h1>
		</div>
	</div>
</div>
<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
			<div class="content">
				<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-6 page type-page status-publish hentry" itemscope="" itemtype="#">
					<section class="post_content" itemprop="articleBody">
						<div class="woocommerce">
							<form class="woocommerce-form woocommerce-form-login login" method="post" style="display:none;">
								<p>If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
								<p class="form-row form-row-first">
									<label for="username">Username or email&nbsp;<span class="required">*</span></label>
									<input type="text" class="input-text" name="username" id="username" autocomplete="username">
								</p>
								<p class="form-row form-row-last">
									<label for="password">Password&nbsp;<span class="required">*</span></label>
									<input class="input-text" type="password" name="password" id="password" autocomplete="current-password">
								</p>
								<div class="clear"></div>
								<p class="form-row">
									<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="55e1fd0c58"><input type="hidden" name="_wp_http_referer" value="/checkout/">		<button type="submit" class="button" name="login" value="Login">Login</button>
									<input type="hidden" name="redirect" value="#">
									<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
										<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
									</label>
								</p>
								<p class="lost_password">
									<a href="#">Lost your password?</a>
								</p>
								<div class="clear"></div>
							</form>
							<div class="woocommerce-form-coupon-toggle">
								<div class="woocommerce-info" ></div>
							</div>
							
							<div class="woocommerce-notices-wrapper"></div>
							<form name="checkout" method="post" 
									class="checkout woocommerce-checkout" action="" enctype="multipart/form-data" novalidate="novalidate">
								<div class="col12-set" id="customer_details">
									<div class="col-1">
										<div class="woocommerce-billing-fields">
                                            <h3 style="font-size: 1.5rem;color: #80b500;font-weight: bold;">Phương Thức Thanh Toán </h3>
                                            <div class="left-pay" class="rounded-corners" style="line-height: 3em;font-size: 1rem;padding-left: 30px;"> 
                                                <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
                                                    <input type="radio" name="gender" id="male" value="male" style="">
                                                    <label for="male"></label><br>
                                                </div>
                                                <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11">
                                                    <label for="male">Thanh toán bằng tiền mặt khi nhận hàng </label><br>
                                                </div>
                                                <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
                                                    <input type="radio" name="gender" id="female" value="female">&nbsp;
                                                    <label for="female"></label><br>
                                                </div>
                                                <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11">
                                                    <label for="female">Thanh toán bằng thẻ quốc tế visa, master </label><br>
                                                    </div>
                                                <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
                                                    <input type="radio" name="gender" id="other" value="other">&nbsp;
                                                    <label for="other"></label><br>
                                                </div>
                                                <div class="col-xs-10 col-sm-11 col-md-11 col-lg-11">
                                                    <label for="other">Thẻ ATM nội địa,InternetBanking </label><br>
                                                </div>
                                                
                                                
                                                <br>
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
								<button type="submit" class="btn btn-success" style="float:right; ">XÁC NHẬN</button>
							</form>

						</div>
					</section> 
					<section class="related_wrap related_wrap_empty"></section>
				</article>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
			<div class="sidebar widget_area scheme_original" role="complementary" >
			<div class="woocommerce-form-login-toggle">
				<div class="woocommerce-info" style="border-top-color:#80b500;"></div>
				<div class="sidebar_inner widget_area_inner">
					<aside id="woocommerce_product_categories-3" class="widget_number_3 widget woocommerce widget_product_categories">
						<h3 style="font-size: 1.5rem;color: #80b500;font-weight: bold;     margin-top: 10px;">HÓA ĐƠN	</h3>
						<ul class="product-categories">
							<li class="cat-item cat-item-96">
								<a href="#">Số Lượng:</a> 
								<span class="count" style="float:right;"> {{$total}}</span>
							</li>
							<li class="cat-item cat-item-96">
								<a href="#">Tạm  Tính :</a> 
								<span class="count" style="float:right;">{{number_format($cart_detail['weight'])}} VND</span>
							</li>
							<!-- <li class="cat-item cat-item-96">
								<a href="#">Phí Vận Chuyển :</a> 
								<span class="count" style="float:right;">10.000$</span>
							</li> -->
						</ul>
					</aside>
					<!-- <aside id="woocommerce_product_search-2" class="widget_number_4 widget woocommerce widget_product_search">
								<p>Mã  khuyến mãi </p>
								<p class="form-row form-row-first" style="width: 100%;margin-top: -68px;">
									<input type="text" name="coupon_code" class="input-text" placeholder="Nhập Mã khuyến mãi" id="coupon_code" value="">
								</p>
					</aside>
					<aside id="woocommerce_recently_viewed_products-2" class="widget_number_5 widget woocommerce widget_recently_viewed_products">
						<table class="table table-hover " style="border: red; border-style: dashed; color: red;">
							<thead>
								<tr>
									<th style="text-align: left;">Xin chúc mừng bạn được giảm </th>&nbsp;<td style="text-align: center;font-size: 2rem;font-weight: bold;">10%</td>
								</tr>
							</thead>
						</table>
						<ul id="woocommerce_product_search-2">
							<li class="cat-item cat-item-96" style="text-align: center;font-size: 1.5rem;font-weight: bold;">
								<span class="count" style="font-size: 1rem;">TỔNG CỘNG</span></br>
								<span class="count" style="    color: red;"> 99.999.999.VND </span>
							</li>
						</ul>
					</aside> -->
				</div>
			</div> 
		</div>
	</div> 
</div>
@endsection