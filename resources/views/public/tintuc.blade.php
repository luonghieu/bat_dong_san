@extends('public.inc.index')
@section('content')
<div class="content_wrapper">

    <div class="container">

        <div class="breakdum">

            <a href="http://phoson.vn">Trang chủ</a><span> <i class="fa fa-caret-right" aria-hidden="true"></i> <h1>Tin tức</h1></span>

        </div>


        <div class="row">

            <div class="col-md-8">
                @foreach($newsByCat as $obj)

                <div class="item_news">

                    <a href="{!! route('public.chitiettintuc', ['id' => $obj->id]) !!}"><img src="{{ asset($obj->image) }}" class="img-responsive"/></a>

                    <div class="item_news_content">

                        <span class="item_news_date">{!! $obj->created_at !!}</span>

                        <h2><a class="item_news_name" href="{!! route('public.chitiettintuc', ['id' => $obj->id]) !!}">{!! $obj->name !!}</a></h2>

                        <div class="item_news_ct">{!! $obj->feature !!}</div>

                    </div>

                </div>
                @endforeach

                <div class="navigation"><span class="current_page_item">Trang <b>1</b> trên <b>16</b></span><span class="current_page_item">1</span><span class="page_item"><a href="http://phoson.vn/tin-tuc/2">2</a></span><span class="page_item"><a href="http://phoson.vn/tin-tuc/3">3</a></span><span class="page_item"><a href="http://phoson.vn/tin-tuc/4">4</a></span><span class="page_item"><a href="http://phoson.vn/tin-tuc/5">5</a></span><span class="page_item"><a href="http://phoson.vn/tin-tuc/6">6</a></span><span class="page_item"><a href="http://phoson.vn/tin-tuc/7">7</a></span><span class="page_item"><a href="http://phoson.vn/tin-tuc/2">»</a></span><span class="current_page_item">...</span><span class="page_item"><a href="http://phoson.vn/tin-tuc/16">16</a></span></div>
            </div>

            <div class="col-md-4">

                <span class="ct_left_title">Bài viết nổi bật</span>

                <ul class="ct_left_ul">
                    @foreach($featureNews as $obj)

                    <li>

                        <h3><a class="item_news_name_left" href="{!! route('public.chitiettintuc', ['id' => $obj->id]) !!}">{!! $obj->name !!}</a></h3>

                        <span class="item_news_date_left">{!! $obj->created_at !!}</span>

                    </li>

                    @endforeach

                </ul>

            </div>

        </div>

    </div>
</div>
@endsection
@section('script')
@endsection