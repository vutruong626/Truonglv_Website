@extends('front.master')


@section('content')
<div class="top_panel_title top_panel_style_6  title_present breadcrumbs_present scheme_original">
	<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
		<div class="content_wrap" style="font-size: 9px;">
			<h1 class="page_title" style="    font-family: roboto;">TIN TỨC & SỰ KIỆN </h1>
		</div>
	</div>
</div>

<div class="page_content_wrap page_paddings_yes">
	<div class="content_wrap">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="content" >		
                    @foreach($news as $item_news) 
                    <article class="post_item post_item_excerpt post_featured_default post_format_standard odd post-1083 post type-post status-publish format-standard has-post-thumbnail hentry category-masonry-2-columns category-masonry-3-columns category-portfolio-2-columns category-portfolio-3-columns tag-farming">
                        <div class="post_featured" style="width: 68%;margin-left: auto;margin-right: auto;height: 40%;padding-top: 27px;">
                            <div class="post_thumb" data-image="{{asset('storage/'.$item_news->images)}}" data-title="GMOs: Your Right To Know">
                                <a class="hover_icon icon-eye-light" href="#">
                                    <img class="wp-post-image" width="870" height="auto" alt="GMOs: Your Right To Know" src="{{asset('storage/'.$item_news->images)}}">
                                </a>						
                            </div>
                        </div>
                        <div class="post_content clearfix">
                            <h3 class="post_title" style="font-family: roboto;">
                                <a href="{{route('details_news',[$item_news->id,$item_news->name])}}" >
                                    <span class="post_icon icon-book-open">
                                    </span>{{$item_news->name}} </a>
                                </h3>						
                                <div class="post_info">
                                    <span class="post_info_item post_info_posted">
                                        <a href="#" class="post_info_date">{{$item_news->created_at}}</a>
                                    </span>
                                </div>
                                <div class="post_descr" style="height: 88px; overflow-y: hidden;">
                                    <p>
                                        {{$item_news->title}}
                                    </p>
                                </div>
                        </div>
                    </article>
                    @endforeach
                    <nav id="pagination" class="pagination_wrap pagination_pages">
                        <span class="pager_current active ">1</span>
                        <a href="#" class="">2</a>
                        <a href="#" class="">3</a>
                        <a href="#" class="pager_next "></a>
                        <a href="#" class="pager_last "></a>
                    </nav>
                </div> 
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="sidebar widget_area scheme_original" role="complementary">
                <div class="sidebar_inner widget_area_inner">
                    <aside id="search-4" class="widget_number_4 widget widget_search">
                        <form role="search" method="get" class="search_form" action="{{asset('/search.html')}}">
                            <input type="text" class="search_field" placeholder="Tìm Kiếm " style="" value="" name="name" title="Search for:">
                            <button type="submit" class="search_button icon-search" href="#"></button>
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
    </div>
</div>


@endsection