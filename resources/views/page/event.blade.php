<!doctype html>
<html class="no-js" lang="fr">
    <title>Evènements | PassElec</title>

    @include('page.head')




<body class="home" style="background-color:#fafafa;">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->


@include('page.menu')



    <!--Banner Inner-->
    <section>
        <div class="mon-banner" >
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                  {{-- <h3 style=" font-size: 20px">Organisateurs, participants, ce centre d'aide est destiné à répondre rapidement à vos questions, si vous ne trouvez toujours pas de réponses, contactez-nous, nous serons heureux de recevoir votre demande</h3> --}}
                                </div>

                            </div>

                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <div class="container text-center" style="">

        <h1 style="font-family: text">Tous les évènements</h1>

       </div>

    <main>
        <div class="lgx-post-wrapper">

            	<!-- Sidebar Page Container -->
	<div class="sidebar-page-container" style="margin-top: -8em">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Content Side -->
				<div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="our-blog">
						<div class="row clearfix">

							<!-- News Block -->
							@foreach ($events as $event)
        <div class="news-block_one col-lg-6 col-md-6 col-sm-12 col-xl-6">
            <div class="news-block_one-inner">
                <!-- Post Info -->
                <div class="news-block_one-tag" style="background: #6e0972;color:#f7f2f2; box-shadow:2px 2px 1px rgb(54, 13, 92)">{{ $event->categorie->libelle }}</div>
                <div class="news-block_one-image">
                    <a href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}"><img src="{{ Storage::url($event->image) }}" alt="" /></a>
                    <img src="{{ Storage::url($event->image) }}" alt="" />
                </div>
                <div class="news-block_one-content">
                    <div class="news-block_one-date" style="color: #f3f3f3; font-weight: bold"> <span style="">{{ $event->heure_event }}</span></div>
                    <ul class="news-block_one-meta">
                        <li style="color: #470303; font-weight: bold"><span class="icon fa-regular fa-calendar fa-fw"></span>{{ $event->date_event->format('d/m/y') }}</li>
                        {{-- <li><span class="icon fa-solid fa-comments fa-fw"></span>(03) Comments</li> --}}
                    </ul>
<<<<<<< HEAD
                    <h5 class="news-block_one-title" style="font-size: 14px; font-weight: bold; margin-bottom: 5px"><a href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}"></a>{{ $event->titre }}</h5>
                    <a class="" href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}"></a>
=======
                    <h5 class="news-block_one-title" style="font-size: 14px; font-weight: bold; margin-bottom: 5px"><a href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}"></a></h5>
                    <a class="" href="{{ route('event-organisateur-view',['id'=>$event->id , 'titre'=>Str::slug($event->titre)]) }}">
>>>>>>> 13fd46a81d4618cff366a1bd6a20b33930102f13

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



							<!-- Styled Pagination -->
							<ul class="styled-pagination text-center col-12">
								<li class="next"><a href="#"><span class="fa fa-angle-double-left"></span></a></li>
								<li><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li class="next"><a href="#"><span class="fa fa-angle-double-right"></span></a></li>
							</ul>
							<!-- End Styled Pagination -->

						</div>
					</div>
				</div>

				<!-- Sidebar Side -->
				<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar sticky-top">

						<!-- Sidebar Widget -->
						<div class="sidebar-widget search-box">
							<form method="post" action="https://themerange.net/html/conat/conat/contact.html">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Recherche d'évènement..." required>
									<button type="submit"><span class="icon fa fa-search"></span></button>
								</div>
							</form>
						</div>

						<!-- Category Widget -->
						<div class="sidebar-widget category-widget">
							<div class="widget-content">
								<h4 class="sidebar-widget_title">Catégories</h4>
								<ul class="category-list">
									@foreach ($categories as $categorie)
                                    <li><a href="#" style="color: #000; font-weight: bold">{{ $categorie->libelle }}<span></span></a></li>

                                    @endforeach

								</ul>
							</div>
						</div>

						{{-- <!-- Author Widget -->
						<div class="sidebar-widget author-widget">
							<div class="widget-content">
								<div class="author-widget_image">
									<img src="assets/images/resource/author-4.jpg" alt="" />
								</div>
								<div class="author-widget_name">Thomas Josaf</div>
								<div class="author-widget_text">Hear 9 inspiring talks, meet the best product people in Europe, and party together after the event!</div>
								<!-- Social Box -->
								<ul class="author-widget_socials">
									<li><a href="https://www.twitter.com/" class="fa-brands fa-twitter fa-fw"></a></li>
									<li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
									<li><a href="https://dribbble.com/" class="fa-brands fa-dribbble fa-fw"></a></li>
									<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
								</ul>
							</div>
						</div> --}}

						<!-- Post Widget -->
						<div class="sidebar-widget post-widget">
							<div class="widget-content">
								<h4 class="sidebar-widget_title">Evènements récents</h4>

								<div class="post">
									<div class="thumb"><a href="blog-detail.html"><img src="assets/images/resource/post-thumb-4.jpg" alt=""></a></div>
									<div class="post-date">18 July, 2022</div>
									<h6><a href="blog-detail.html">Take Your Life Into Your Own Hands</a></h6>
								</div>
								<div class="post">
									<div class="thumb"><a href="blog-detail.html"><img src="assets/images/resource/post-thumb-5.jpg" alt=""></a></div>
									<div class="post-date">18 July, 2022</div>
									<h6><a href="blog-detail.html">Arnold Sports Festival set for UK </a></h6>
								</div>
								<div class="post">
									<div class="thumb"><a href="blog-detail.html"><img src="assets/images/resource/post-thumb-6.jpg" alt=""></a></div>
									<div class="post-date">18 July, 2022</div>
									<h6><a href="blog-detail.html">What Do Live Music Fan Think About it</a></h6>
								</div>

							</div>
						</div>
{{--
						<!-- Time Widget -->
						<div class="sidebar-widget popular-tags">
							<div class="widget-content">
								<h4 class="sidebar-widget_title">Tag</h4>
								<a href="#">Business</a>
								<a href="#">Conference</a>
								<a href="#">Digital</a>
								<a href="#">Development</a>
								<a href="#">Venue</a>
								<a href="#">Tech</a>
								<a href="#">Workshop</a>
								<a href="#">Speaker</a>
							</div>
						</div> --}}

					</aside>
				</div>

			</div>
		</div>
	</div>



        </div>

<!--FOOTER-->
@include('page.footer')
<!--FOOTER END-->

    </main>


    @include('page.script')




<!-- For Demo Purpose Only //Remove From Live-->


</body>

<!-- Mirrored from themearth.com/demo/html/emeet/view/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 12:37:28 GMT -->
</html>
