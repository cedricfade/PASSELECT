<div class="page-body-wrapper sidebar-icon">
    <!-- Page Sidebar Start-->
    <header class="main-nav">
      <div class="logo-wrapper"><a href="{{ route('accueil') }}"><img class="img-fluid" src="{{ asset('assets1/logoremovebg.png') }}" alt="" style=""></a></div>
      <div class="logo-icon-wrapper"><a href="{{ route('accueil') }}"><img class="img-fluid" src="{{ asset('assets1/logoremovebg.png') }}" alt=""></a></div>
      <div class="morden-logo"><a href="{{ route('accueil') }}"><img class="img-fluid" src="{{ asset('assets1/logoremovebg.png') }}" alt=""></a></div>
      <nav>
        <div class="main-navbar">
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div id="mainnav">
            <ul class="nav-menu custom-scrollbar">
              <li class="back-btn">
                <div class="mobile-back text-end"><span>Retour</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
              </li>
              <li class="dropdown"><a class="nav-link menu-title link-nav" href="{{ route('dashboard') }}"><i data-feather="git-pull-request"> </i><span>Tableau de bord  </span></a></li>
              <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Evènement</span></a>
                <ul class="nav-submenu menu-content">
                  <li><a href="{{ route('event.all') }}">Mes évènements</a></li>
                  <li><a href="{{ route('event.ajout') }}">Ajouter évènement</a></li>
                </ul>
              </li>
              {{-- <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Tickets</span></a>
                <ul class="nav-submenu menu-content">
                  <li><a href="box-layout.html">Participants</a></li>

                </ul>
              </li> --}}

             @if (Auth()->guard('organisateur')->user()->formule->libelle = "basic")

             <li class="dropdown" style=""><a class="nav-link menu-title link-nav btn-premium text-light" href="{{ route('premium.all') }}"><i data-feather="award" style=""> </i><span>Passer à Premium  </span></a></li>
             @else



             @endif
       </span></a></li>
            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
      </nav>
    </header>
