@extends('front.master')


@section('content')
	<div class="top_panel_title top_panel_style_4  title_present breadcrumbs_present scheme_original">
		<div class="top_panel_title_inner top_panel_inner_style_4  title_present_inner breadcrumbs_present_inner">
			<div class="content_wrap" style="font-size: 9px;">
				<h1 class="page_title">ĐẶT MUA SẢN PHẨM </h1>
			</div>
		</div>
	</div>
		
	<form action="" method="POST" role="form">
		{{ csrf_field() }}
		<div class="page_content_wrap page_paddings_yes">
			<div class="content_wrap">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<div class="content">
							<article class="post_item post_item_single post_item_product">
								<!-- <nav class="woocommerce-breadcrumb"><a href="../../index.html">Home</a>&nbsp;&#47;&nbsp;<a href="../../product-category/cereals/index.html">Cereals</a>&nbsp;&#47;&nbsp;Organic Protein Powder</nav> -->
								<div class="woocommerce-message" style="padding-bottom: 0px;">
									<h2 style="font-size: 20px;font-weight: 900;color: #80B500;margin-top: 1px;">GIỎ HÀNG</h2>
								</div>
								@foreach($cordies as $item_cordies)
								<div id="product-1355" class="post-1355 product type-product status-publish has-post-thumbnail product_cat-cereals product_cat-fresh-meal product_tag-best-selling-products product_tag-featured-products product_tag-new-products product_tag-organic first instock shipping-taxable purchasable product-type-simple">
									<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
										<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-5 images" data-columns="5" style="opacity: 1; transition: opacity .25s ease-in-out;margin-top: 40px;">
											<figure class="woocommerce-product-gallery__wrapper">
												<div data-thumb="#" class="woocommerce-product-gallery__image">
													<a href="{{route('product_order',[$item_cordies->id,$item_cordies->name])}}">
														<img name="images" width="400" height="auto" src="{{asset('storage/'.$item_cordies->images)}}" class="wp-post-image" alt="" title="7" data-caption="" data-src="{{asset('storage/'.$item_cordies->images)}}" data-large_image="{{asset('storage/'.$item_cordies->images)}}" data-large_image_width="628" data-large_image_height="775" srcset="" sizes="(max-width: 600px) 100vw, 600px" />
													</a>
												</div>
											</figure> 
										</div>
									</div>
									</br>
									<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
										<div class="summary entry-summary" >
											<h5 class="product_title entry-title" style="font-family: roboto;font-weight: 500;margin-top: 45px;">
												<a href="{{route('product_order',[$item_cordies->id,$item_cordies->name])}}">{{$item_cordies->name}}</a>
											</h5>
											<div class="quantity" class="row">
												<!-- <label class="screen-reader-text" for="quantity_5c24f2561018d">Quantity</label> -->
												<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">
														<input
														type="number"
														id="quantity_5c24f2561018d"
														class="input-text qty text"
														step="1"
														min="1"
														max=""
														name="quantity"
														value="{{$item_cordies['qty']}}"
														title="Qty"
														size="4"
														pattern="[0-9]*"
														inputmode="numeric"
														aria-labelledby="" style="opacity: 1;width: 50px;"
														change="updateTotalQuantity()" 
														onchange="myFunction()"/>
												</div>
											</div>
											<div class="row" class="col-xs-4 col-sm-8 col-md-10 col-lg-10">
												<p class="price" style="font-size: 20px;font-weight: bold;padding-top: 8px;padding-left: 0px;">
													<span name="price" class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol" style="padding-left: 20px;">{{number_format(($item_cordies->price),0)}} VNĐ</span> </span>
													&nbsp
													<a href="{{asset('/cart/remove/'.$item_cordies->id),0}}" style=" color: red;">Xóa
													</a>


												</p>	
											</div>
											</br></br>
										</div>
									</div>
								</div>
								@endforeach
								<script>
									function myFunction() {
									var x = document.getElementById("mySelect").value;
									document.getElementById("demo").innerHTML = "You selected: " + x;
									}
								</script>
							</article>
						</div>

						<button type="button" class="btn btn-success " style="background-color: #80B500;">
							<a href="{{asset('/page/product-list-order')}}" style="color: white;"><<< Tiếp tục mua hàng </a>
						</button>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="sidebar widget_area scheme_original" role="complementary">
						<div class="woocommerce-message" style="padding-bottom: 0px;">
							<h2 style="font-size: 20px;font-weight: 900;color: #80B500;margin-top: 1px;">HÓA  ĐƠN </h2>
						</div>
						<div class="sidebar_inner widget_area_inner">
							<div class="">
								<aside id="woocommerce_product_categories-3" class="widget_number_3 widget woocommerce widget_product_categories">
									<!-- <h5 class="widget_title">Product Categories</h5> -->
									<ul class="product-categories">
										<li class="cat-item cat-item-96">
											<a href="#">Số Lượng:</a> 
											<span id="demo" name="number_order" class="count" style="float:right;">{{$total}}</span>
										</li>

										<li class="cat-item cat-item-96">
											<a href="#">Tạm  Tính :</a> 
											<span name="number_pay" class="count" style="float:right;">{{number_format($cart_detail['weight'],0)}} VNĐ</span>
										</li>

										<!-- <li class="cat-item cat-item-96">
											<a href="https://organics.axiomthemes.com/product-category/cereals/">Phí Vận Chuyển :</a> 
											<span class="count" style="float:right;">10.000$</span>
										</li> -->
									</ul>
								</aside>
								<aside id="woocommerce_product_search-2" class="widget_number_4 widget woocommerce widget_product_search">
										<p>Mã  khuyến mãi </p>
										<p class="form-row form-row-first" style="width: 100%;margin-top: 0px;">
											<input type="text" name="coupon_code" class="input-text" placeholder="Nhập Mã khuyến mãi" id="coupon_code" value="" style="width: 100%;">
										</p>
								</aside>
								<aside id="woocommerce_recently_viewed_products-2" class="widget_number_5 widget woocommerce widget_recently_viewed_products">
									<ul id="woocommerce_product_search-2">
										<li class="cat-item cat-item-96" style="text-align: center;font-size: 1.5rem;font-weight: bold;">
											<span class="count" style="font-size: 1rem;    line-height: 50px;">TỔNG CỘNG</span></br>
											<span class="count" style="    color: red;"> {{number_format($cart_detail['weight'],0)}} VNĐ</span>
										</li>
									</ul>
								</aside>
								<button type="submit" class="btn btn-success" style="font-family: roboto;font-weight: bold;width: 100%;background-color: #80B500;">THANH TOÁN </button>
							</div>
							</div>
						</div> 
					</div>
				</div> 
			</div>	
	</form>
</div>
@endsection