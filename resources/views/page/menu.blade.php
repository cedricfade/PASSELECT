<!--HEADER-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
<link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.css') }}">
<script src="{{ asset('assets/sweetalert2/sweetalert2.js') }}"></script>

<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<script src="https://kit.fontawesome.com/8c33a414c0.js" crossorigin="anonymous"></script>
<style>
    .mon-banner{
padding: 15px;

      border: none !important;
      background: red;
      height: 30vh;
      background-position: center;
      background-size: contain;
      background-repeat: no-repeat;

        background:url({{asset('assets/images/background/12.jpg')}});


        background-attachment: fixed;



    }
  .search-box-btn{

    background-color: #0a0101 !important

  }
  .search-box-btn a{
    color: #fff
  }
  .main-menu a {
    font-weight: 600 !important;
    font-size: 14px !important;


  }

  .search-box-btn {
    margin: 2px !important
  }
</style>

 <!-- Header Style One / Two -->
 <header class="main-header header-two">

    <!-- Header Top -->
    {{-- <div class="header-top">
        <div class="auto-container">
            <div class="d-flex justify-content-end">
                <div class="header-top_socials">
                    <a href="https://facebook.com/" class="facebook fa-brands fa-facebook-f"></a>
                    <a href="https://twitter.com/" class="twitter fa-brands fa-twitter"></a>
                    <a href="https://instagram.com/" class="twitter fa-brands fa-instagram"></a>
                    <a href="https://youtube.com/" class="youtube fa-brands fa-youtube"></a>
                </div>
            </div>
        </div>
    </div> --}}


<?php
use App\Models\ticket;
$participant = Auth()->guard('participant')->user() ? Auth()->guard('participant')->user()->id : " ";

$tickets = ticket::where('participant_id',$participant)->get();




?>

    <!-- Header Upper -->
    <div class="header-upper" >
        <div class="auto-container">
            <div class="inner-container" style="box-shadow: 2px 2px 5px 3px rgba(0, 0, 0, 0.322)">
                <div class="d-flex justify-content-between align-items-center flex-wrap" >

                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="{{ asset('assets/logofond.jpeg') }}" alt="" title="" style="height: ; width: 120px;"></a></div>
                    </div>

                    <div class="nav-outer" >

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md" >
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ route('accueil') }}">Accueil </a></li>
                                    <li><a href="{{ route('event-organisateur') }}">Evènements</a></li></li>
                                    <li><a href="{{ route('aide') }}">Bésoin d'aide?</a></li>


                                    @if (Auth()->guard('participant')->user()  OR Auth()->guard('organisateur')->user())


                                    <li class="dropdown" style="cursor: pointer"><span class="fa fa-user"> </span> <span style="font-size:16px">{{Auth()->guard('participant')->user() ? Auth()->guard('participant')->user()->nom : Auth()->guard('organisateur')->user()->nom }}  {{Auth()->guard('participant')->user() ? Auth()->guard('participant')->user()->prenom : Auth()->guard('organisateur')->user()->prenom }} <i class="fa fa-arrow-down"></i></span>
                                        <ul>
                                             {{-- Si il est organisateur --}}

                                @if (Auth()->guard('organisateur')->user())
                                <li><a href="{{ route('dashboard') }}" style="color: #000000 !important">Tableau de bord</a></li>

                                @else

                                {{-- SINON --}}
                                <li><a href="{{ route('participant-dashboard') }}" style="color: #000000 !important">Tableau de bord</a></li>

                                @endif
                                <li><a href="{{ route('logout') }}" style="color: #000000 !important">Déconnexion</a></li>

                                        </ul>
                                    </li>






                                    @else
                                    <li class="dropdown"><a href="#">Se connecter</a>
                                        <ul>
                                            <li><a href="{{ route('participant-login') }}">Participant</a></li>
                                            <li><a href="{{ route('organisateur_login') }}">Organisateur</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Inscription</a>
                                        <ul>
                                            <li><a href="{{ route('participant-inscription') }}">Participant</a></li>
                                            <li><a href="{{ route('organisateur_inscription') }}">Organisateur</a></li>

                                        </ul>
                                    </li>

                                    @endif

                                </ul>
                            </li>
                                </ul>
                            </div>
                        </nav>
                    </div>



                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">






                        <!-- Nav Btn -->
                        @if (Auth()->guard('participant')->user())
                        <a class="nav-btn fa-regular fa-cart-shopping fa-fw  " style="font-size: 13px; color:#000000;" href="{{ route('participant-panier') }}"><span style="position: relative; top:-0.8em; ">{{ $tickets->count() }}</span></a>
                            @endif




                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">

            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('accueil') }}" title="passlect"><img src="{{ asset('assets/logofond.jpeg') }}" alt="" title="" style="width: 150px;"></a>
            </div>

            <!-- Right Box -->
            <div class="right-box">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->
            </div>

            <!-- Main Menu End-->
            <div class="outer-box d-flex align-items-center flex-wrap">

                <style>
                    .reseau-social a{

                        font-size: 1.3em;
                        margin: 0 6px
                    }
                    .reseau-social{
                        padding-right: 10px
                    }
                </style>

                <!-- Search Btn -->
                <div class="reseau-social"><i class=""></i>
                    <a href=""><span class="icon fa-brands fa-facebook-f"></span></a>
                    <a href=""><span class="icon fa fa-instagram"></span></a>
                    <a href=""><span class="icon fa-brands fa-twitter"></span></a>
                </div>


                <!-- Nav Btn -->

                {{-- classe SIDEBAR CART
                navSidebar-button --}}
                @if (Auth()->guard('participant')->user())
                <a class="nav-btn  fa-regular fa-cart-shopping fa-fw" href="{{ route('participant-panier') }}"><sup style="padding: 3px 8px; border-radius: 50%; font-size: 11px;position: relative;top:-1.5em;right:1em">{{ $tickets->count() }}</sup></a>
                @endif


                    {{-- AFFICHAGE DE UTILISATEUR CONNECTE --}}
                    {{-- <div>{{Auth()->guard('participant')->user() ? Auth()->guard('participant')->user()->nom : Auth()->guard('organisateur')->user()->nom }}  {{Auth()->guard('participant')->user() ? Auth()->guard('participant')->user()->prenom : Auth()->guard('organisateur')->user()->prenom }}</div> --}}


                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
            </div>

        </div>
    </div><!-- End Sticky Menu -->
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="route('accueil')"><img src="{{ asset('assets/logoremovebg.png') }}" alt="" title="" style="height: 70px"></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->




<!--HEADER END-->
