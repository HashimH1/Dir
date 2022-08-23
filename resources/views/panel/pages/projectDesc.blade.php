

@extends('panel.layouts.panel')

@section('content')







<section class="page-header">
    <div class="page-header-bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>projects</li>
            </ul>
            <h2>project Details</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="project-one__single">
                    <div class="project-one__img">
                        <img  src="{{ asset("assets/images/".$project->image[0]."") }}" alt="">

                    </div>
                </div>
            </div>
        </div>
        <div class="project-details__content">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="project-details__content-left">
                        <h3 class="project-details__content-title">description</h3>

                        <?php

                        echo str_replace(['&lt;','&gt'],['<','>'],$project->desc);
                        ?>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="project-details__content-right">
                        <div class="project-details__details-box">
                            <div class="project-details__details-info">
                                <div class="project-details__details-info-single">
                                    <h5 class="project-details__details-info-client">Clients:</h5>
                                    <p class="project-details__details-info-name">{{ $project->client }}</p>
                                </div>
                                <div class="project-details__details-info-single">
                                    <h5 class="project-details__details-info-client">Category:</h5>
                                    <p class="project-details__details-info-name">{{ __("messages.".$project->category."") }}</p>
                                </div>
                                <div class="project-details__details-info-single">
                                    <h5 class="project-details__details-info-client">Date:</h5>
                                    <p class="project-details__details-info-name">{{ date('j F  Y', strtotime($project->date))}}</p>
                                </div>
                            </div>
                            <div class="project-details__details-social-list">

                                @if(@isset($project->twitter))
                                <a href="{{ $project->twitter }}"><i class="fab fa-twitter"></i></a>
                                @endisset
                                @if(@isset($project->facebook))
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                @endisset
                                @if(@isset($project->pinterest))
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                @endisset
                                @if(@isset($project->instagram))
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Project Details End-->

<!--Similar Work Start-->
<section class="similar-work">
    <div class="container">
        <div class="section-title text-center">
            {{--  <span class="section-title__tagline">recent projects</span>  --}}
            <h2 class="section-title__title">Other photos</h2>
        </div>
        <div class="row">

            @foreach ($project->image as $img )
            <div class="col-xl-12 col-lg-12">
                <!--Portfolio One Single-->
                <div class="project-one__single">
                    <div class="project-one__img">
                        <img  src="{{ asset("assets/images/".$img."") }}" alt="">

                    </div>
                </div>
            </div>

            @endforeach


        </div>
    </div>
</section>



@endsection
