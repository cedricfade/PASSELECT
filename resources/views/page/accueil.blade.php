<!doctype html>
<html class="no-js" lang="fr">
<head>
    <title>Gestion d'événements et vente de billets | PassElec</title>

    @include('page.head')
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.css') }}">
<script src="{{ asset('assets/sweetalert2/sweetalert2.js') }}"></script>
</head>





<body class="hidden-bar-wrapper">


    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

       @include('page.menu')




        <!-- Slider Three -->
        <section class="slider-three">
            <div class="main-slider-carousel owl-carousel owl-theme" style="height: ">

                <!-- Slide 01 -->
                <div class="slider-three_slide">
                    <div class="slider-three_pattern-one" style="background-image:url(assets/images/main-slider/pattern-6.png)"></div>
                    <div class="slider-three_image-layer" style="background-image:url(assets/images/main-slider/image-4.jpg)"></div>
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="slider-three_content col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-three_content-inner">
                                    <div class="slider-three_title">Worldwide conference on</div>
                                    <h2 class="slider-three_heading">Late Crazes in <br> Teaching Learning</h2>
                                    <div class="slider-three_location">Hilton Nashville Airport Hotel, Nashville, TN</div>
                                    <!-- Time Countdown -->
                                    <div class="slider-three_timer">
                                        <div class="time-countdown clearfix" data-countdown="2025/12/1"></div>
                                    </div>
                                    <div class="slider-three_button">
                                        <a href="register.html" class="theme-btn btn-style-three">
                                            <span class="btn-wrap">
                                                <span class="text-one">Registration now</span>
                                                <span class="text-two">Registration now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-three_image-column col-lg-5 col-md-12 col-sm-12">
                                <div class="slider-three_image">
                                    <img src="assets/images/main-slider/image-3.png" alt="" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Slide 01 -->

                <!-- Slide 02 -->
                <div class="slider-three_slide" style="height:">
                    <div class="slider-three_pattern-one" style="background-image:url(assets/images/main-slider/pattern-6.png)"></div>
                    <div class="slider-three_image-layer" style="background-image:url(assets/images/main-slider/image-4.jpg)"></div>
                    <div class="auto-container">
                        <div class="row clearfix">

                            <!-- Content Column -->
                            <div class="slider-three_content col-lg-7 col-md-12 col-sm-12">
                                <div class="slider-three_content-inner">
                                    <div class="slider-three_title">Worldwide conference on</div>
                                    <h2 class="slider-three_heading">Late Crazes in <br> Teaching Learning</h2>
                                    <div class="slider-three_location">Hilton Nashville Airport Hotel, Nashville, TN</div>
                                    <!-- Time Countdown -->
                                    <div class="slider-three_timer">
                                        <div class="time-countdown clearfix" data-countdown="2025/12/1"></div>
                                    </div>
                                    <div class="slider-three_button">
                                        <a href="register.html" class="theme-btn btn-style-three">
                                            <span class="btn-wrap">
                                                <span class="text-one">Registration now</span>
                                                <span class="text-two">Registration now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="slider-three_image-column col-lg-5 col-md-12 col-sm-12" style="height: ">
                                <div class="slider-three_image">
                                    <img src="assets/images/main-slider/image-3.png" alt="" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Slide 02 -->



            </div>
        </section>
        <!-- End Slider Three Section -->
     <br><br>
      <div class="container">
        <div class="content-side">
            <div class="our-blog">
                <div class="row clearfix">

              		<!-- Leadership One Ship / Style Two -->
                      @foreach ($events as $event)
                      <div class="news-block_one col-lg-4 col-md-4 col-sm-6 col-xl-4 col-6">
                          <div class="news-block_one-inner">
                              <!-- Post Info -->
                              <div class="news-block_one-tag" style="background: #6e0972;color:#f7f2f2; box-shadow:2px 2px 1px rgb(54, 13, 92)">{{ $event->categorie->libelle }}</div>
                              <div class="news-block_one-image">
                                  <a href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}"><img src="{{ Storage::url($event->image) }}" alt="" /></a>
                                  <img src="{{ asset('') }}" alt="" />
                              </div>
                              <div class="news-block_one-content">
                                  <div class="news-block_one-date" style="color: #f3f3f3; font-weight: bold"> <span style="">{{ $event->heure_event }}</span></div>
                                  <ul class="news-block_one-meta">
                                      <li style="color: #470303; font-weight: bold"><span class="icon fa-regular fa-calendar fa-fw"></span>{{ $event->date_event->format('d/m/y') }}</li>
                                      {{-- <li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li> --}}
                                  </ul>
                                  
                                  <h5 class="news-block_one-title text-xl-1" style="font-size: 14px; font-weight: bold; margin-bottom: 5px"><a href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}">{{ Str::limit($event->titre, 50) }}</a></h5>
                                  <a class="" href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}"></a>

                                      @if (($event->prix_vip == null & $event->prix_vvip == null & $event->prix_public == null))

                                      <span style="background-color: #34723e; color:#fff; padding: 5px 15px">Gratuit</span>

                                      @endif



                                      @if ($event->prix_vip == null)




                                      @else
                                      <span style="color:black;font-weight:700; font-size:12px">VIP: </span><span style="color: #3c1cb3;font-weight:800;font-size:12px">{{ $event->prix_vip }} FCFA</span>


                                      @endif

                                      @if ($event->prix_vvip == null)


                                      @else
                                      | <span style="color:black;font-weight:700; font-size:12px">VVIP: </span><span style="color: #3c1cb3;font-weight:800;font-size:12px">{{ $event->prix_vvip }} FCFA</span>

                                      @endif

                                      @if ($event->prix_public == null)


                                      @else
                                      | <span style="color:black;font-weight:700; font-size:12px">Grand public: </span><span style="color: #3c1cb3;font-weight:800;font-size:12px">{{ $event->prix_public }} FCFA</span> </a>

                                      @endif
                              </div>
                          </div>
                      </div>

                      @endforeach


                </div>

            </div>
        </div>
      </div>
    </div>

        <!-- End Gallery Two -->

      @include('page.footer')


    </div>
    <!-- End PageWrapper -->



    <!-- Back To Top Start -->
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>
    <!-- back to top end -->

    @include('page.script')








<script>
    @if (session('connexion'))

Swal.fire({
title: '{{ session('connexion') }}',
//   text: 'Do you want to continue',
icon: 'success',
//   confirmButtonText: 'Cool',
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 4500
})
Toast.fire({

// title: 'Signed in successfully'
})
@endif
</script>

</body>

<!-- Mirrored from themearth.com/demo/html/emeet/view/index14.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 12:36:17 GMT -->
</html>
