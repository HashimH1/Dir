<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header" style="background-color: #0A2553">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item" >
                    <a  class="navbar-brand" href="index.html">
                        <img class="brand-log" alt="HSGC"
                             src="{{asset("images/".$setting[0]['logo'] ." ")}}" style="width: 73px">


                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                            <span class="avatar avatar-online">
                                 {{LaravelLocalization::getSupportedLocales()[App::getLocale()]['name']}}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                    <a class="dropdown-item"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><i
                                            class="ft-user"></i> {{ $properties['native'] }} </a>

                            @endforeach

                        </div>
                    </li>
                </ul>
                  <li a style=" margin-left:15px"  class="dropdown dropdown-user nav-item">
                        <a style="color: white; "  href="{{route('admin.logout')}}" >
                          Logout
                        </a>
                  </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
