@extends('panel.layouts.panel')

@section('content')



<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
            <h2>blog posts</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Page Start-->
<section class="blog-page">
    <div class="container">
        <div class="row">

            @foreach ($news as $new)
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Blog One Single-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img style="height:336px ; width: 370px" src="{{ asset("assets/images/".$new->image."") }}" alt="">
                        <a href="{{ route('news.details',$new->id) }}">
                            <span class="blog-one__plus"></span>
                        </a>
                        <div class="blog-one__date">
                            <p>{{ date('j F  Y', strtotime($new->created_at))}}</p>
                        </div>
                    </div>
                    <div class="blog-content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> {{ count($new->comments) }} Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="blog-details.html">{{ $new->name }}</a>
                        </h3>
                        <div class="blog-one__read-btn">
                            <a href="blog-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        {{--  <div class="blog-sidebar__load-more text-center">
            <a href="blog-details.html" class="thm-btn blog-sidebar__load-more-btn">Load more
                posts</a>
        </div>  --}}
    </div>
</section>



 @endsection





