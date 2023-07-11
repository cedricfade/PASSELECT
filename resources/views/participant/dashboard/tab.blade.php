

  <style>
    .nav-item a{
        color: #555;
        font-weight: 400
    }
    a.active{
        background: rgb(50, 17, 94)  !important;
        color: #fff!important;
     font-weight: 500
    }

    .nav-item a{
        border-bottom: 1px solid;
        border-radius: 0 !important
    }
    .nav-item{
        border-radius: 0 !important
    }

    .flex-column{
        background-color: #fff
    }

  </style>


  <div class="nav flex-column nav-pills active" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <li class="nav-item " >
            <a class="nav-link {{request()->routeIs('participant-dashboard') ? 'active' : ""}}" href="{{ route('participant-dashboard') }}">Tableau de bord</a>
    </li>



    <li class="nav-item  " >
            <a class="nav-link {{request()->routeIs('participant-panier') ? 'active' : ""}}" href="{{ route('participant-panier') }}">Panier</a>
    </li>

    <li class="nav-item">

        <a class="nav-link" href="#">Compte</a>
    </li>



</div>

