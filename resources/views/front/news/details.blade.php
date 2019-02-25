@extends('front.master')


@section('content')
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap" style="font-size: 9px;">
			<h1 class="page_title" style="font-family: roboto;">TIN TỨC & SỰ KIỆN </h1>
		</div>
	</div>
	<div class="page_content_wrap page_paddings_yes">
		<div class="content_wrap">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
				<div class="content">
				
					<article class="itemscope post_item post_item_single post_featured_default post_format_standard post-2002 post type-post status-publish format-standard has-post-thumbnail hentry category-home-1-news category-home-3-gallery" itemscope="" itemtype="http://schema.org/Article">			
						<h3 class="post_title" style="    font-family: roboto;padding-top: 28px;">
                            <a href="#">
                                <span class="post_icon icon-book-open">
                                </span>{{$news->name}}</a>
						</h3>
						<div class="post_info" style="    font-size: 17px;">
                            <span class="post_info_item post_info_posted">
                                <a href="#" class="post_info_date">{{$news->created_at}}</a>
                            </span>
                        </div>
						<section class="post_featured">
						<p>{{$news->title}}</p>
							<div class="post_thumb" data-image="{{asset('storage/'.$news->images)}}" data-title="‘Organic’ and ‘Natural’. What’s the Difference?" style="width: 70%;display: block;margin-left: auto;margin-right: auto;">
								<a class="hover_icon hover_icon_view inited" href="{{asset('storage/'.$news->images)}}" title="‘Organic’ and ‘Natural’. What’s the Difference?" rel="magnific">
									<img class="wp-post-image" width="800" height="660" alt="‘Organic’ and ‘Natural’. What’s the Difference?" src="{{asset('storage/'.$news->images)}}" itemprop="image">
								</a>
							</div>
						</section>
						<section class="post_featured">
							<p>{!! $news->content !!}</p>
						</section> 
					</article> 
				
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
					
						<aside id="organics_widget_recent_posts-7" class="widget_number_6 widget widget_recent_posts">
								<h3 class="post_title" style="margin-top: 1px;font-weight: 800;">
									<a href="#" >TIÊU ĐIỂM</a>
								</h3>	
							@foreach($products as $item_product)
							<article class="post_item with_thumb first">
								<div class="post_thumb">
									<img class="wp-post-image" width="75" height="75" alt="GMOs: Your Right To Know" src="{{asset('storage/'.$item_product->images)}}">
								</div>
								<div class="post_content">
									<h6 class="post_title" style="height: 63px; overflow-y: hidden;">
										<a href="{{route('details_news',[$item_product->id,$item_product->name])}}">{{$item_product->name}}</a>
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
		</div> <!-- </div> class="content_wrap"> -->
	</div>

@endsection