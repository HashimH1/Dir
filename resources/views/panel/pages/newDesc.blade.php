





@extends('panel.layouts.panel')

@section('content')



<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ul>
            <h2>Blog Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Blog Details Start-->
<section class="blog-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__left">
                    <div class="blog-details__img">
                        <img style="height: 420px" src="{{ asset("assets/images/".$new[0]->image."") }}"alt="">
                        <div class="blog-details__date-box">
                            <p>  {{ date('j F  Y', strtotime($new[0]->created_at))}}</p>
                        </div>
                    </div>
                    <div class="blog-details__content">
                        <ul class="list-unstyled blog-details__meta">
                            <li><a href="blog-details.html"><i class="far fa-user-circle"></i> By admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="blog-details.html"><i class="far fa-comments"></i> {{  count($comments) }}  Comments</a>
                            </li>
                        </ul>
                        <h3 class="blog-details__title">{{ $new[0]->name }}</h3>
                        <p class="blog-details__text-1"><?php echo str_replace(['&lt;','&gt'],['<','>'],$new[0]->desc); ?></p>
                     </div>
<hr>
                    <div class="comment-one">
                        <h3 class="comment-one__title">{{  count($comments) }} Comments</h3>

                        @foreach ($comments as $comment )

                        <div class="comment-one__single">
                            <div class="comment-one__image">
                                <img src="assets/images/blog/comment-1-1.jpg" alt="">
                            </div>
                            <div class="comment-one__content">
                                <h3> {{ $comment->name }} </h3>
                                <p>{{ $comment->message }}</p>
                                {{--  <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>  --}}
                            </div>
                        </div>

                        @endforeach


                    </div>
                    <hr>
                    <div class="comment-form">

                        <h3 class="comment-form__title">Leave a Comment</h3>
                        <form action="{{ route('comment.store') }}" method="POST"  >
                         @csrf
                         <input name="new_id" value="{{ $new[0]->id }}" hidden>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input required type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="comment-form__input-box">
                                        <input required type="email" placeholder="Email address" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="comment-form__input-box">
                                        <textarea required name="message" placeholder="Write message"></textarea>
                                    </div>
                                    <input type="submit" class="thm-btn comment-form__btn" value="Submit a Comment">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search here">
                            <button type="submit"><i class="icon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="sidebar__single sidebar__post">
                        <h3 class="sidebar__title">Latest 3 Posts</h3>
                        <ul class="sidebar__post-list list-unstyled">

                       @foreach ($LastNews as $new )
                            <li>
                                <div class="sidebar__post-image">
                                    <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                </div>
                                <div class="sidebar__post-content">
                                    <h3>
                                    <a href="{{ route('news.details',$new->id) }}" class="sidebar__post-content-meta"><i class="far fa-comments"></i>  {{  count($new->comments) }} Comments</a>
                                        <a href="{{ route('news.details',$new->id) }}">{{ $new->name }}</a>
                                    </h3>
                                </div>
                            </li>
                       @endforeach


                        </ul>
                    </div>
                    <div class="sidebar__single sidebar__category">
                        <h3 class="sidebar__title">Categories</h3>
                        <ul class="sidebar__category-list list-unstyled">
                            <li><a href="blog-details.html">Web Development <span class="icon-arrow-right"></span></a></li>

                            <li> <a href="blog-details.html">{{ __('messages.Advertising') }} <span class="icon-arrow-right" ></span> </a></li>
                            <li><a href="blog-details.html"> {{ __('messages.Digital Marketing') }} <span class="icon-arrow-right" ></span></a></li>

                            <li> <a href="blog-details.html">{{ __('messages.Branding') }}  <span class="icon-arrow-right" ></span></a></li>
                            <li> <a href="blog-details.html"> {{ __('messages.Visual Identity') }} <span class="icon-arrow-right" ></span></a></li>
                            <li> <a href="blog-details.html">{{ __('messages.Social Media') }}<span class="icon-arrow-right"></span></a></li>
                            <li> <a href="blog-details.html">{{ __('messages.Graphic Design') }} <span class="icon-arrow-right"></span></a></li>
                            <li> <a href="blog-details.html">{{ __('messages.Marketing') }}<span class="icon-arrow-right"></span></a></li>
                            <li> <a href="blog-details.html">{{ __('messages.Mobile Application') }}<span class="icon-arrow-right"></span></a></li>
                            <li> <a href="blog-details.html">{{ __('messages.Website Development') }}<span class="icon-arrow-right"></span></a></li>
                            <li> <a href="blog-details.html">{{ __('messages.SEO') }}<span class="icon-arrow-right"></span> </a></li>

                        </ul>
                    </div>

                    @if($tags !='null' )
                    <div class="sidebar__single sidebar__tags">
                        <h3 class="sidebar__title">Tags</h3>
                        <div class="sidebar__tags-list">

                    @foreach ($tags as $tag )
                      <a href="#">{{ $tag }}</a>
                    @endforeach
                        </div>
                    </div>
                    @endif
                    <div class="sidebar__single sidebar__comments">
                        <h3 class="sidebar__title">last 4 comments</h3>
                        <ul class="sidebar__comments-list list-unstyled">
                           @foreach ($comments->reverse() as  $comment)
                           @if ($loop->index > 5)
                           @break
                           @endif
                           <li>
                            <div class="sidebar__comments-icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="sidebar__comments-text-box">
                                <p> {{ $comment->name }} <br> {{ $comment->message }}  </p>
                            </div>
                        </li>


                           @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection




