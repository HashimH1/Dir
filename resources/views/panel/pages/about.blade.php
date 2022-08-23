

@extends('panel.layouts.panel')

@section('content')

    <section class="position-relative">

        <main>
            <!-- visual/banner of the page -->
            <section class="visual">
                <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
                    <div class="centered">
                        <div class="container">
                            <div class="visual-text visual-center">
                                {{-- <h1 class="visual-title visual-sub-title">About Business</h1> --}}
                                <div class="breadcrumb-block">
                                    <ol class="breadcrumb">
                                        {{-- <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                                        <li class="breadcrumb-item active"> About Company </li> --}}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/visual/banner of the page -->
            <!-- main content wrapper -->
            <div class="content-wrapper">
                <section class="content-block">
                    <div class="container text-center">
                        <div class="heading bottom-space">
                            <h2> {{__('messages.A Different look towards the world')}}</h2>
                        </div>
                        <div class="description">
                            <h3>{{__('messages.Our Vision')}}</h3>
                            <p>{{__('messages.our vision to be the best advertising')}} </p>
                        </div>
                        <div style="margin:0 auto" class="divider">

                            </div>

                        <div class="description">
                            <p>{{__('messages.our goals to give the client the best')}} </p>
                        </div>
                    </div>
                </section>
                <section class="content-block p-0">
                    <div class="container-fluid">
                        <div class="content-slot alternate-block">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bg-stretch img-wrap wow slideInLeft">
                                        <img src="{{asset('assets/img/img-09.jpg')}}" alt="images">
                                    </div>
                                </div>
                                <div class="col col-lg-6">
                                    <div class="text-wrap">
                                        <h3>{{__('messages.Social media marketing')}}</h3>
                                        <p>{{__('messages.we make a plan for your product')}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bg-stretch img-wrap wow slideInRight">
                                        <img src="{{asset('assets/img/img-10.jpg')}}" alt="images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-wrap">
                                        <h3>{{__('messages.Printing')}}</h3>
                                        <p>{{__('messages.We professionally craft your printed')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bg-stretch img-wrap wow slideInLeft">
                                        <img src="{{asset('assets/img/img-11.jpg')}}" alt="images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-wrap">
                                        <h3>{{__('messages.Photography')}}</h3>
                                        <p>{{__('messages.Professional product photography')}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bg-stretch img-wrap wow slideInRight">
                                        <img src="{{asset('assets/img/img-10.jpg')}}" alt="images">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="text-wrap">
                                        <h3>{{__('messages.Event and media organization')}}</h3>
                                        <p>{{__('messages.we provide/introduce an organization plan')}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="bg-stretch img-wrap wow slideInLeft">
                                        <img src="{{asset('assets/img/img-09.jpg')}}" alt="images">
                                    </div>
                                </div>
                                <div class="col col-lg-6">
                                    <div class="text-wrap">
                                        <h3>{{__('messages.branding')}}</h3>
                                        <p>{{__('messages.we create your interface due to your brand ')}} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
                    <div class="container">
                           <div class="inner-wrapper">
                            <h2 class="block-top-heading text-white">{{__('messages.BEST EVER DESIGN')}}</h2>
                            <h2 class="text-white">{{__('messages.In todays world of marketing')}}</h2>

                        </div>
                    </div>
                </section>
                <aside class="content-block">
                    <div class="container">
                        <div class="logo-container">
                            <div class="owl-carousel logo-slide" id="waituk-owl-slide-4">
                                @foreach ($trustedClients as $k=> $client  )

                                <div class="slide-item">

                                   <img src="{{asset("assets/images/".$client->image."")}}" alt="images description">

                               </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </aside>
            </div>
            <!--/main content wrapper -->
        </main>

    </section>



@endsection
