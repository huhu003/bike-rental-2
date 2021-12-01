

<header>
    <div class="default-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-2">
                    <div class="logo"> <a href="#"><img src="../assets/images/logg.png" alt="image" /></a> </div>
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="header_info">
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">For Support Mail us : </p>
                            <a href="mailto:info@example.com">kikert03@gmail.com</a>
                        </div>
                        <div class="header_widgets">
                            <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                            <p class="uppercase_text">Service Helpline Call Us: </p>
                            <a href="tel:61-1234-5678-09">+639560963490</a>
                        </div>
                        <div class="social-follow">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user() ? Auth::user()->fname : $user->fname}}
                                    </a>
                                </li>
                                
                            </ul>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse"
                    class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="header_wrap">



            <div class="user_login">
                    <ul>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> <span class="badge badge-danger" style="background-color: red">{{ auth()->user()->unreadNotifications->count() }}</span><i class="fa fa-bell-o" aria-hidden="true"></i>
                                <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">

                            <!-- NOTIFCTION -->
                                @forelse (auth()->user()->unreadNotifications as $notifications)
                                <li><a class="dropdow-item">Returned Bike Issue: {{$notifications->data['issues']}}</a></li>
                                @empty
                                <li><a class="dropdow-item">No Notifications</a></li>
                                @endforelse
                                
                            </ul>
                        </li>
                    </ul>
                </div>



                <div class="user_login">
                    <ul>
                        <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
<<<<<<< HEAD
                                <li><a href="../account/{{Auth::user()->id}}">Account</a>
                                </li>
=======

                <!-- <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li> -->

                                <li><a href="../account/{{Auth::user() ? Auth::user()->id : $user->id}}">Account</a>
                                </li>

                             
>>>>>>> 865a1c0904332533bbc1b8a9f808ba870324f8e5
                                <li><a onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" href="{{ route('logout') }}" data-toggle="modal"
                                        data-dismiss="modal">Sign Out</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                <div class="header_search">
                    <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <form action="#" method="get" id="header-search-form">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="../home">Home</a> </li>
                    <li><a href="../about-us">About Us</a></li>
                    <li><a href="../bike-listing">Bike Listing</a>
                    <li><a href="../contact">Contact Us</a></li>
                    <li><a href="#">Ads</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation end -->

</header>
