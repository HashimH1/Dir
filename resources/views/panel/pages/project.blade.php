

@extends('panel.layouts.panel')

@section('content')


<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>projects</li>
            </ul>
            <h2>projects</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Project One Start-->
<section class="project-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">

                    <li data-filter=".filter-item" class="active"><span class="filter-text">{{ __('messages.all') }}</span></li>
                    <li data-filter=".Advertising"><span class="filter-text">{{ __('messages.Advertising') }}</span></li>
                    <li data-filter=".Digital"><span class="filter-text">{{ __('messages.Digital Marketing') }}</span></li>

                    <li data-filter=".Branding"><span class="filter-text">{{ __('messages.Branding') }}</span></li>
                    <li data-filter=".Visual"><span class="filter-text last-pd-none">{{ __('messages.Visual Identity') }}</span></li>
                    <li data-filter=".Social"><span class="filter-text">{{ __('messages.Social Media') }}</span></li>
                    <li data-filter=".Graphic"><span class="filter-text">{{ __('messages.Graphic Design') }}</span></li>
                    <li data-filter=".Marketing"><span class="filter-text">{{ __('messages.Marketing') }}</span></li>
                    <li data-filter=".Mobile"><span class="filter-text">{{ __('messages.Mobile Application') }}</span></li>
                    <li data-filter=".Website"><span class="filter-text">{{ __('messages.Website Development') }}</span></li>
                    <li data-filter=".SEO"><span class="filter-text">{{ __('messages.SEO') }}</span></li>



                </ul>
            </div>
        </div>
        <div class="row filter-layout masonary-layout">
            @foreach ( $allProjects as $project )

            <div class="col-xl-4 col-lg-6 col-md-6 filter-item {{ $project->category }}">
             <!--Portfolio One Single-->
             <div class="project-one__single">
                 <div class="project-one__img">
                     <img style="min-height: 350px; max-height:350px" src="{{ asset("assets/images/".$project->image[0]."") }}" alt="">
                     <div class="project-one__hover">
                         <p class="project-one__tagline">  {{ $project->category }}   </p>
                         <h3 class="project-one__title"><a href="{{ route('projects.desc',$project->id) }}">{{ $project->title }}</a>
                         </h3>
                     </div>
                 </div>
              </div>
             </div>

         @endforeach
        </div>
    </div>
</section>

@endsection
