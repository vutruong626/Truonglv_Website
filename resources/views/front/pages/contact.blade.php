@extends('front.master')


@section('content')

	<div class="page_content_wrap page_paddings_no">
		<div class="content_wrap">
		<div class="content">
			<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-767 page type-page status-publish hentry" itemscope="" itemtype="http://schema.org/Article">
				<section class="post_content" itemprop="articleBody">
					<div class="sc_reviews alignright"></div>
					<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -160.5px; box-sizing: border-box; width: 1351px;">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div id="sc_googlemap_1301519261" class="sc_googlemap" style="width:100%;height:450px;" data-zoom="17" data-style="pleasant">
										<iframe src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=17&amp;q=10.719126,106.664384&,15+Cypress+Hills+Street%2C+HO+Chi+Minh" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" aria-label="Our Address:"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row-full-width"></div>
					<div class="vc_row wpb_row vc_row-fluid">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row wpb_row vc_row-fluid vc_custom_1439909374065">
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper">
									<div class="vc_empty_space" style="height: 7.5em">
										<span class="vc_empty_space_inner"></span>
									</div>
									<div id="sc_form_500373089_wrap" class="sc_form_wrap">
										<div id="sc_form_500373089" class=" sc_form_style_form_2 aligncenter">
											<h2 class="sc_form_title sc_item_title" style="font-size:25px;    padding-left: 90px;margin-bottom: -1.5em;    margin-top: -60px;"><b>CÔNG TY CỔ PHẦN MHD PHARMA</b></h2>
											<!-- <div class="sc_form_descr sc_item_descr">Organic Store is your source for healthy way of living. We welcome you at our facility at any time!</div>		 -->
											<div class="sc_columns columns_wrap">
												
												<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
												</div>
												
												<div class=" column-2_3">
												<form name="checkout" method="post" 
														class="checkout woocommerce-checkout" action="" enctype="multipart/form-data" novalidate="novalidate">
																	{{ csrf_field() }}
														<div class="col12-set" id="customer_details" style="padding-top: 80px;">
															<div class="col-1">
																<div class="woocommerce-billing-fields">
																	<div class="woocommerce-billing-fields__field-wrapper" style="font-size: 1rem;font-weight: 400;">
																		<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
																			<!-- <label for="billing_phone" class="" style="font-size: 20px;font-family: roboto;font-weight: 600;">ĐÁNH GIÁ CỦA BẠN &nbsp;<abbr class="required" title="required">*</abbr></label> -->
																			<span class="woocommerce-input-wrapper" style="width: 100%;">
																				<input id="sc_form_username" type="text" name="name" placeholder="   Tên của bạn" style="font-size: 1.3em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 90%;height: 60px;border: 1px solid;margin-top: -21px;">
																			</span>
																			@if ($errors->has('name'))
																				<div class="text-danger" style="margin-right: 410px;">{{ $errors->first('name') }}</div>
																			@endif
																		</p>
																		</br>
																		<p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
																			<!-- <label for="billing_phone" class="" style="font-size: 20px;font-family: roboto;font-weight: 600;">ĐÁNH GIÁ CỦA BẠN &nbsp;<abbr class="required" title="required">*</abbr></label> -->
																			<span class="woocommerce-input-wrapper" style="width: 100%;">
																				<!-- <textarea id="sc_form_message" name="email" placeholder="   Email của bạn" style="font-size: 0.857em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;   "></textarea> -->
																				<input id="sc_form_username" type="text" name="email" placeholder="   Email của bạn" style="font-size: 1.3em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 90%;height: 60px;border: 1px solid;margin-top: -21px;">
																			</span>
																			@if ($errors->has('email'))
																				<div class="text-danger" style="margin-right: 369px;">{{ $errors->first('email') }}</div>
																			@endif
																		</p>
																		</br>
																		<p class="form-row notes" id="order_comments_field" data-priority="">
																			<label for="order_comments" class=""> &nbsp;<span class="optional"></span></label>
																			<span class="woocommerce-input-wrapper">
																				<textarea id="sc_form_message" name="feedback" placeholder="Nhận xét về sản phẩm" style="font-size: 1.3em;font-weight: 400;line-height: 1.5em;line-height: 1.5em;width: 90%;height: 60px;border: 1px solid;margin-top: -21px;float: left   "></textarea>
																				<!-- <textarea id="sc_form_message" name="message" placeholder="   Nhận xét về sản phẩm" style="font-size: 0.857em;font-weight: 400;line-height: 1.5em;line-height: 0.5em;width: 60%;    border: 1px solid;;float: right;margin-top: -21px;   "></textarea> -->
																			</span>
																			@if ($errors->has('feedback'))
																				<div class="text-danger" style="margin-right: 369px;">{{ $errors->first('feedback') }}</div>
																			@endif
																		</p>
																		</br>
																			<p class="form-row form-row-wide create-account woocommerce-validated" style="color:red;font-size: 14px;">
																				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
																					<span>Cảm ơn quý khách đã liên hệ đến MHD PHARMA. Chúng tôi sẽ phản hồi đến quý khách trong thời gian sớm nhất.</span>
																				</label>
																			</p>
																		<div id="html_element" style="margin-top: 20px;margin-bottom: 10px;"></div>
																	</div>
																</div>
															</div>
														</div>
														<button type="submit" class="btn btn-success" onClick="return validateCaptcha();" value="Submit" style="float:left;height: 55px;font-weight: 600; border-color: #80b500;background-color: #80b500; ">GỬI ĐÁNH GIÁ</button>
													</form>
													
															<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
														async defer>
													</script>
													<script type="text/javascript">
														var onloadCallback = function() {
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
											</div>
										</div>
									</div>
									<div class="vc_empty_space" style="height: 7.5em">
										<span class="vc_empty_space_inner"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section> <!-- </section> class="post_content" itemprop="articleBody"> -->
			</article> <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-767 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->	<section class="related_wrap related_wrap_empty"></section>
		</div> <!-- </div> class="content"> -->
	</div> <!-- </div> class="content_wrap"> -->
</div>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">if (typeof ORGANICS_GLOBALS == 'undefined') var ORGANICS_GLOBALS = {};ORGANICS_GLOBALS['ajax_url']			 = "{{asset('website_css/themes/wp-admin/admin-ajax.html')}}";ORGANICS_GLOBALS['ajax_nonce']		 = 'e69ff56c17';ORGANICS_GLOBALS['ajax_nonce_editor'] = 'cd26980418';ORGANICS_GLOBALS['site_url']			= '../index.html';ORGANICS_GLOBALS['vc_edit_mode']		= false;ORGANICS_GLOBALS['theme_font']		= 'Cantarell';ORGANICS_GLOBALS['theme_skin']			= 'trex2_no_less';ORGANICS_GLOBALS['theme_skin_color']		= '';ORGANICS_GLOBALS['theme_skin_bg_color']	= '';ORGANICS_GLOBALS['slider_height']	= 100;ORGANICS_GLOBALS['system_message']	= {message: '',status: '',header: ''};ORGANICS_GLOBALS['user_logged_in']	= false;ORGANICS_GLOBALS['toc_menu']		= '';ORGANICS_GLOBALS['toc_menu_home']	= false;ORGANICS_GLOBALS['toc_menu_top']	= false;ORGANICS_GLOBALS['menu_fixed']		= true;ORGANICS_GLOBALS['menu_mobile']	= 1023;ORGANICS_GLOBALS['menu_slider']     = true;ORGANICS_GLOBALS['demo_time']		= 0;ORGANICS_GLOBALS['media_elements_enabled'] = true;ORGANICS_GLOBALS['ajax_search_enabled'] 	= true;ORGANICS_GLOBALS['ajax_search_min_length']	= 3;ORGANICS_GLOBALS['ajax_search_delay']		= 200;ORGANICS_GLOBALS['css_animation']      = true;ORGANICS_GLOBALS['menu_animation_in']  = 'fadeIn';ORGANICS_GLOBALS['menu_animation_out'] = 'fadeOut';ORGANICS_GLOBALS['popup_engine']	= 'magnific';ORGANICS_GLOBALS['email_mask']		= '^([a-zA-Z0-9_\-]+\.)*[a-zA-Z0-9_\-]+@[a-z0-9_\-]+(\.[a-z0-9_\-]+)*\.[a-z]{2,6}$';ORGANICS_GLOBALS['contacts_maxlength']	= 1000;ORGANICS_GLOBALS['comments_maxlength']	= 1000;ORGANICS_GLOBALS['remember_visitors_settings']	= false;ORGANICS_GLOBALS['admin_mode']			= false;ORGANICS_GLOBALS['isotope_resize_delta']	= 0.3;ORGANICS_GLOBALS['error_message_box']	= null;ORGANICS_GLOBALS['viewmore_busy']		= false;ORGANICS_GLOBALS['video_resize_inited']	= false;ORGANICS_GLOBALS['top_panel_height']		= 0;</script>	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<link rel='stylesheet' id='organics-messages-style-css'  href="{{asset('website_css/themes/organics/fw/js/core.messages/core.messages.css')}}" type='text/css' media='all' />
<link rel='stylesheet' id='organics-magnific-style-css'  href="{{asset('website_css/themes/organics/fw/js/magnific/magnific-popup.css')}}" type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_UTILS_STORAGE = {"ajax_url":"http:\/\/organics.axiomthemes.com\/wp-admin\/admin-ajax.php","ajax_nonce":"e69ff56c17","site_url":"http:\/\/organics.axiomthemes.com","user_logged_in":"0","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","msg_ajax_error":"Invalid server answer!","msg_error_global":"Invalid field's value!","msg_name_empty":"The name can't be empty","msg_email_empty":"Too short (or empty) email address","msg_email_not_valid":"E-mail address is invalid","msg_text_empty":"The message text can't be empty","msg_send_complete":"Send message complete!","msg_send_error":"Transmit failed!","login_via_ajax":"1","msg_login_empty":"The Login field can't be empty","msg_login_long":"The Login field is too long","msg_password_empty":"The password can't be empty and shorter then 4 characters","msg_password_long":"The password is too long","msg_login_success":"Login success! The page will be reloaded in 3 sec.","msg_login_error":"Login failed!","msg_not_agree":"Please, read and check 'Terms and Conditions'","msg_email_long":"E-mail address is too long","msg_password_not_equal":"The passwords in both fields are not equal","msg_registration_success":"Registration success! Please log in!","msg_registration_error":"Registration failed!"};
/* ]]> */
</script>

@endsection