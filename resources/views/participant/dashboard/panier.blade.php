<!doctype html>
<html class="no-js" lang="fr">

@extends('page.head')
@section('title','Panier')




<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&amp;display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

<body class="home" style="background-color:#f5f5f5;">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->


@include('page.menu')

<style>
    .mon-banner{
        background:linear-gradient(5deg, rgba(20, 18, 153, 0.767),rgb(6, 0, 7)),url('assets/event.jpg');
        background-attachment: fixed;
        height: 200px;
    }

    thead{
        background: #480858;

    }

    thead th{
        color: #fff;
        font-size: 18px;
        border: 1px solid #fff

    }

   tr  td{

    border: 1px solid #e4e4e4!important;
        background: #fff

    }

    .btn-pay{
        background-color: rgb(62, 16, 100);
        padding: 10px 15px !important;
        border-radius: 0 20px 20px !important;
        font-weight: bold !important;
        color:#fff !important;
        transition: all 0.3s ease-in !important;
        float: right

    }

    .btn-pay:hover{
        border-radius: 0 0px 0px !important;
    }

    .btn-sup{
       color: rgb(194, 19, 19);
       text-align: center
    }






</style>



    <!--Banner Inner-->
    <section>
        <div class="mon-banner" >
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                   <!-- <h3 style=" font-size: 20px">Organisateurs, participants, ce centre d'aide est destiné à répondre rapidement à vos questions, si vous ne trouvez toujours pas de réponses, contactez-nous, nous serons heureux de recevoir votre demande</h3>-->
                                </div>

                            </div>

                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>

    </section>




    <main>


        <div class="lgx-post-wrapper">

            <!--News-->
            <section>

                <style>
                    .containt{
                        margin:0 auto;
                        width: 80%
                    }

                </style>

                <div class="containt img-event">
                    @php
                        $total = 0;
                    @endphp
<br>


                      <div class="row">
                        <div class="col-xl-3 col-sm-4 col-md-2 col-lg-2 col-12">


                            @include('participant.dashboard.tab')

                        </div>




                        <div class="col-md-8">

                            <div class="billet">
                                <style>
                                    table td{
                                        border: none
                                    }
                                </style>
                                <table class="table" celpadding=4px style="border: 0 !important; width:">
                                   @if (session('delete_panier'))
                                <span class="bg p-2 animate__animated animate__fadeInLeft" style="background-color:rgb(15, 153, 72) ;color:#fff;padding:5px; color:rgb(252, 255, 251);font-weight: 900; font-style: italic">
                                    <i class="las la-trash" style="font-size: 1.3em;font-style: italic"></i> {{ session('delete_panier') }}
                                </span>

                                   @endif


                                     <thead>
                                        <th>Ticket</th>

                                        <th>Prix</th>
                                        <th>Action</th>
                                     </thead>
                                    </tr>
                                    @foreach ($tickets as $ticket)




                                    <tr style="border-bottom: 2px solid #000;">
                                        <td>
                                            <img src="{{ Storage::url($ticket->event->image) }}" alt="" width="40">
                                            <span title="{{$ticket->event->titre}}" style="font-size: 12px; font-weight: bold"> {{ Str::limit($ticket->event->titre,50) }}</span>
                                        </td>

                                        <td>
                                           @if ($ticket->prix_vip == null)

                                           @else
                                           <br>
                                           <span class="" disabled style="background-color: #6843ac;color:#fff; padding:5px 5px; font-size:11px"> VIP</span> <i style="font-size: 12px;color:#6733f7;font-weight: 600">x{{$ticket->prix_vip  }}</i></sub>
                                            <b>{{ $ticket->event->prix_vip * $ticket->prix_vip  }} FCFA</b>

                                           @endif
                                           @if ($ticket->prix_vvip==null)

                                           @else
                                           <br>
                                           <span class="" disabled style="background-color: #e27f0d;color:#fff; padding:5px 5px; font-size:11px"> VVIP</span>
                                           <i style="font-size: 12px;color:#6733f7;font-weight: 600">x{{$ticket->prix_vvip  }}</i></sub>
                                           <b>{{ $ticket->event->prix_vvip * $ticket->prix_vvip  }} FCFA</b>

                                           @endif


                                           @if ($ticket->prix_public==null)



                                           @else
                                           <br>


                                           <span class="text-center" disabled style=" position: relative; margin-bottom: 30px !important; background-color: #29741f;color:#fff; padding:5px 5px; font-size:11px"> Grand Public   </span> <i style="font-size: 12px;color:#6733f7;font-weight: 600">x{{$ticket->prix_public  }}</i> </sub>
                                           <b>{{ $ticket->event->prix_public * $ticket->prix_public  }} FCFA</b>


                                           @endif
                                        </td>

                                        <td style="">
                                      <a href="{{ route('panier-delete',['id'=>$ticket->id]) }}" onclick="return confirm('Voulez-vous retirer {{$ticket->event->titre  }}')  " class=" btn col-xl-12 col-sm-10 col-lg-12 col-12"><i class="las la-trash" style="font-size: 18px; font-style: italic" title="supprimer"></i></a>
                                        </td>
                                    </tr>
                                    @php
                                    $total +=  $ticket->event->prix_public * $ticket->prix_public + $ticket->event->prix_vvip * $ticket->prix_vvip + $ticket->event->prix_vip * $ticket->prix_vip;
                                @endphp







                                    @endforeach




                                </table>
                               <div>
                                <h4 style="color: #000000;border: 2px dashed;padding:8px 5px;text-align: right;font-size:1.5em;"> TOTAL : <span style="color:#ad0cad"> @php
                                    $total;
                                    echo number_format($total);
                                @endphp FCFA</span> </h4>







                                <br><br>

                                {{$tickets = null ? 'rien' : ' '}}





                                <a href="{{ route('checkout') }}" class="btn btn-pay" style="">Valider ma commande <i class="las la-angle-double-right"></i></a>





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
{{-- <script>
    @if (session('delete_panier'))
    Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: '{{ session('delete_panier') }}',
  showConfirmButton: false,
  timer: 1500,

})

Toast.fire({

// title: 'Signed in successfully'
})
@endif
</script> --}}

<!-- For Demo Purpose Only //Remove From Live-->


</body>

<!-- Mirrored from themearth.com/demo/html/emeet/view/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 12:37:28 GMT -->
</html>
