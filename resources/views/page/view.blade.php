<!doctype html>
<html class="no-js" lang="fr">
    <title> {{ $event->titre }} | PassElec</title>

    @include('page.head')







<body class="home" style="background-color:#fafafa;">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->


@include('page.menu')

<style>

    .img-event img{
        height: 220px;


    }

    .date-prix{
        display: flex;
    }
    .date-prix span:hover{
       color: #fff !important
    }


    .card-im{
    text-align: center
    }
    .date h4{


        font-size: 1.5em
    }

    .infos-pay{
        border-bottom: 2px dashed #00774a ;
        border-left: 2px dashed #00774a;
        border-right: 2px dashed #00774a;
        margin: 20px;
        padding-bottom: ;

    }
    .infos-pay .titre{
        background: #00774a;
        padding: 1px ;
        text-align: center;

    }
    .infos-pay h3{
        font-size: 3em;
        color: #fff !important;
        text-justify: auto;
    }
    .date{
        padding: 10px;
        margin-top: 1.5em
    }
    .date-space{
        font-size: 1em;
        margin-bottom: 15px
    }

    .date-space span{
      font-weight: bold
    }
    .date h4{
        font-size: 1em
    }
    .buy{
        background:rgb(3, 124, 54);
        color:#fff;
        padding:11px 25px;
        font-weight:bold;
        border:1px dotted;
        text-align: center;
        transition: all 0.3s ease-in;
        position: relative;


    }
    .buy:hover{
        background:rgb(4, 48, 22);
        color:#fff;
        font-weight:bold;
        border:1px dotted;
        text-align: center;
        border-radius: 0



    }

    .card-input input{

       border: 2px solid #271764;
       font-size: 1.4em;
       color: #241d80;
       font-weight: 700

    }
    .card-input{
        margin: 0 auto
    }
    .description h3{
      font-size: 16px

    }
    .description p{
      font-size: 13px
    }



</style>




    <!--Banner Inner-->
      <section>


        {{-- PRODUCT --}}
        {{-- @if(session()->has('cart'))
        <div class="modal1">
          <div class="modal-content center-align">
            <h5>Produit ajouté au panier avec succès</h5>
            <hr>
            <p>Il y a {{ $cartproduct }} @if($cartproduct > 1) articles @else article @endif dans votre panier pour un total de <strong>{{ number_format($cartTotal, 2, ',', ' ') }} € TTC</strong> hors frais de port.</p>
            <p><em>Vous avez la possibilité de venir chercher vos produits sur place, dans ce cas vous cocherez la case correspondante lors de la confirmation de votre commande et aucun frais de port ne vous sera facturé.</em></p>
            <div class="modal-footer">
              <button class="modal-close btn waves-effect waves-light left" id="continue">
                Continuer mes achats
              </button>
              <a href="{{ route('panier.index') }}" class="btn waves-effect waves-light">
                <i class="material-icons left">check</i>
                Commander
              </a>
            </div>
          </div>
        </div>
      @endif

      <script>
        @if(session()->has('cart'))
          document.addEventListener('DOMContentLoaded', () => {
            const instance = M.Modal.init(document.querySelector('.modal1'));
            instance.open();
          });
        @endif
      </script> --}}

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



    <main>


      @if (session('success'))
      <br>

      <div class="container">
        <div class="p animate__animated animate__fadeInDown" style="font-weight: 800;padding:5px 5px;background: #00774a;color:#fff; margin-top: 55px">{{ session('success') }}</div>
     </div>

      </div>


      @endif



      <br><br><br>


        <div class="lgx-post-wrapper">
            <!--News-->
            <section>
                <div class="container img-event">
                    <h3 style="color: rgb(255, 255, 255); margin-bottom: 5px ;padding:8px 0 ;background-color: #241d80; width:15%;text-align: center;border-radius: 7px;font-size: 15px">{{ $event->categorie->libelle }}</h3>

                    <div class="row">
                        <div class="col-md-7">

                            <div class="img">
                                <img src="{{ Storage::url($event->image) }}" alt="" style="height: 300px;border-radius:">
                            </div>


                        </div>
                        <div class="col-md-5">
                            <div class="infos-pay">
                                <div class="titre">
                                    <h3 style="">Infos</h3>

                                </div>


                                <div class="date" style="">
                                  <p class="date-space"><span>Titre:</span> {{ $event->titre }}</p>
                                <p class="date-space"><span style="">Date:</span> {{ $event->date_event->format('d/m/y') }}</p>


                                <p class="date-space"><span style="">Heure:</span> {{ $event->heure_event}}</p>


                                <p class="date-space"><span style="">Lieu:</span> {{ $event->lieu_event }}</p>



                                @if ($event->prix_public == NULL & $event->prix_vip == NULL & $event->prix_vvip == NULL)
                                <br>


                                <span style="background: rgb(3, 124, 54); color:#fff; padding:8px;margin-top:2p !important">GRATUIT</span>
                                <br>

                                @else


                                <h4 class="subtitle" style="border:1px;color:#000; font-size: 12px">

                                    @if ($event->prix_vip == null)

                                    @else

                                    <span style="color:black;font-weight:700; ">  VIP:  </span> <span style="color: #3c1cb3;font-weight:800;">{{ $event->prix_vip }} FCFA</span>

                                    @endif

                                    @if ($event->prix_vvip == null)


                                    @else

                                    | <span style="color:black;font-weight:700;"> VVIP: </span><span style="color: #3c1cb3;font-weight:800;">{{ $event->prix_vvip }} FCFA</span>

                                    @endif

                                    @if ($event->prix_public == null)


                                    @else


                                    | <span style="color:black;font-weight:700;">GRAND PUBLIC: </span><span style="color: #3c1cb3;font-weight:800;">{{ $event->prix_public }} FCFA</span>

                                    @endif
                                </h4>




                               @if (auth()->guard('participant')->user())
                               <button type="button"  data-toggle="modal" data-target="#staticBackdrop" class="buy" style="cursor: pointer">
                                Obtenir ticket
                                 </button>

                                 @elseif (auth()->guard('organisateur')->user())


                                @elseif (!auth()->guard('participant')->user() OR !auth()->guard('organisateur')->user())
                                <button type="button"  data-toggle="modal" data-target="#connection" class="buy" style="cursor: pointer">
                                    Connectez-vous
                                     </button>

                                     <div class="modal fade" id="connection" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="staticBackdropLabel" style="color: #000;text-align: center; align-items: center">Vous êtes?</h5>

                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>



                                            </div>
                                            <style>
                                                .participant{
                                                background: #083c41;
                                                padding: 20px
                                                }
                                                .participant a{

                                                }
                                                .participant:hover{
                                                    background: #072427
                                                }
                                                .organisateur{
                                                    background: #080941;
                                                    padding: 20px
                                                }

                                                .organisateur:hover{
                                                    background: #05051e
                                                }
                                            </style>

                                            <div class="modal-body p-0 m-0">
                                                <div class="connexion">
                                                    <div class="container-fluid">
                                                        <div class="row">

                                                            <div class="col-xl-6 p-0 m-0">


                                                            <a href="{{route('participant-login')}}">
                                                                <div class="participant" >
                                                                <h1 style="text-transform: uppercase; color:#fff; font-style: italic;font-family: cursive; font-size: 1.8em">Participant</h1>

                                                            </div>
                                                        </div>
                                                            </a>

                                                            <div class="col-xl-6 p-0 m-0">


                                                            <a href="{{route('organisateur_login')}}">
                                                            <div class=" organisateur" style="">
                                                                <h1 style="text-transform: uppercase; color:#fff; font-style: italic;font-family: cursive; font-size: 1.8em">Organisateur</h1>



                                                            </div>
                                                            </a>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>


                                              </div>
                                          </div>
                                        </div>
                                     </div>





                               @endif





                                @endif



                                {{-- @if (Auth::guard('participant')->user()) --}}






                                {{-- @else  --}}
                                <div class="disable">
                                    {{-- <span href="#" style="" class="buy" style="display: none !important">Vous être organisateur</span> --}}
                                </div>

                                {{-- @endif --}}
                                <!-- Button trigger modal -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="description">
                                <hr>
                                  <h3 style="font-weight: bold; color:#262726">Description</h3>
                                  <p style="text-align: justify; width:80%">{{ $event->description ? $event->description : " Description indisponible."}}</p>
                              </div>
                        </div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"style="color: #000">Ticket <span style="font-size: 12px"> {{ $event->titre }}</span></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
        <form action="{{ route('cart.add',['id'=>$event->id]) }}" method="post">
          @csrf




              <div class="form-group card-input">
                <input type="hidden" name="event_id" value="{{ $event->id }}">
                <input type="hidden" name="participant_id" value="">
                <input type="hidden" name="prix_vip" value="{{ $event->vip }}">
                <input type="hidden" name="prix_vvip" value="{{ $event->vvip }}">
                <input type="hidden" name="prix_public" value="{{ $event->public }}">

                @if ($event->prix_vip == null)

                @else

                <label for="">Ticket Vip <sup style="color: rgb(23, 33, 126);font-weight: 800">{{ $event->prix_vip }} FCFA</sup></label>
                <input type="number" class="form-control" min="1" value="" placeholder="Nombre Ticket" aria-describedby="basic-addon2" style="" name="nombre_vip">

                @endif

                @if ($event->prix_vvip == null)

                @else

                <br>
                <label for="">Ticket VVip</label>
                <sup style="color: rgb(23, 33, 126);font-weight: 800">{{ $event->prix_vvip }} FCFA</sup>

                <input type="number" class="form-control" min="1" value="" placeholder="Nombre Ticket" aria-describedby="basic-addon2" style="" name="nombre_vvip">

                @endif

                @if ($event->prix_public == null)



                @else

                <br>
                <label for="">Ticket Grand Public</label>
                <sup style="color: rgb(23, 33, 126);font-weight: 800">{{ $event->prix_public }} FCFA</sup>
                <input type="number" class="form-control" min="1" value="" placeholder="Nombre Ticket" aria-describedby="basic-addon2" style="" name="nombre_public">

                @endif






              </div>
              <br>

              <div class="form-group center col-md-12">
                <input type="submit" value="Ajouter au panier" class="btn" style="background: #00774a;color:#fff">
              </div>
              <br>





        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

      </div>
    </div>
  </div>
</div>






                                </div>

                            </div>





                    </div>


                  </div>



            </section>




        </div>

<!--FOOTER-->
@include('page.footer')
<!--FOOTER END-->


@include('page.script')
<!-- For Demo Purpose Only //Remove From Live-->


</body>

<!-- Mirrored from themearth.com/demo/html/emeet/view/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 12:37:28 GMT -->
</html>
