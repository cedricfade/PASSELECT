<!doctype html>
<html class="no-js" lang="fr">
    <title>Checkout | PassElec</title>


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
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.css') }}">
    <script src="{{ asset('assets/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

<body class="home" style="background-color:#fcfbfb; color:#444">

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
    h1,h3,h2,h6,p,h4{
        color:black
    }

    .form-control{
        border: 1px solid #555;
        height: 40px !important;
        padding: 1px 10px !important;
        border-radius: none
    }

    td{
        border:none !important
    }

    .mode_paiement label{
        font-size: 1.3em
    }
    .ticket-detail .form-group{
        margin-bottom: 20px !important;

    }
    .ticket-detail h4{
        margin-bottom: 20px
    }
    .select .sec:selected {
        background-color: red !important
    }




</style>



    <!--Banner Inner-->
    <section>
        <div class="mon-banner" >
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
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
        <br><br>
        <div class="container" style="margin-bottom: 5em">
            <div class="row">



            <div class="col-md-5 ">
                {{-- <h3>Checkout</h3> --}}
                <br>
                @php
                $total = 0;
            @endphp


                <div class="ticket-detail card" style="border-radius: 0 0 0 0;padding: 6px 15px;">

                <h4 style="background-color: rgb(52, 9, 121); color:#fff;text-align: center; padding: 15px 2px">Information Basic</h4>

                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control"  value="{{auth()->guard('participant')->user()->nom}}" disabled>

                </div>
                <div class="form-group">
                    <label for="">Prénom</label>

                    <input type="text" class="form-control" value="{{auth()->guard('participant')->user()->prenom}}" disabled>
                </div>

                <div class="form-group">
                    <label for="">Email</label>

                    <input type="text" class="form-control"value="{{auth()->guard('participant')->user()->email}}">
                </div>
                <div class="form-group">

                    <label for="">Contact</label>

                    <input type="text" class="form-control" value="{{auth()->guard('participant')->user()->contact}}">
                </div>

                </div>
            </div>

            <div class="col-xl-2"></div>


            <div class="col-md-5">
              <br><br><br>

                <div class="ticket-detail card" style="border-radius: 0 0 0 0;padding: 10px 15px; ">

                <h4 style="background-color: #210372; color:#fff; text-align: center; padding:15px 5px">Détail paiement</h4>

                <table>

                @foreach ($tickets as $ticket)
                <tr style=" border: 1px solid #dbdbdb; border-right: none; border-left: none ">


                        <td style="font-size: 13px;font-weight: 800; padding:8px "><img src="{{ Storage::url($ticket->event->image) }}" alt="" srcset="" style="width: 50px;">


                            {{Str::limit( $ticket->event->titre, 50) }}




                        </td>


                    </tr>

                   @php
                        $total +=  $ticket->event->prix_public * $ticket->prix_public + $ticket->event->prix_vvip * $ticket->prix_vvip + $ticket->event->prix_vip * $ticket->prix_vip;
                   @endphp


                @endforeach



        </table>
        <br>

        <h3 style="font-size: 1.2em;">
        TOTAL: @php
            $total;
            echo number_format($total);
        @endphp FCFA
        </h3>




                </div>



            </div>
            <div class="col-xl-5 mt-4 mode_paiement">



                <div class="card p-3" style="border-radius: 0 0 0 0;">
                    <h3 style="background-color: #3b0646; color:#fff;text-align: center">Paiement</h3>
                    <br>

                 <div class="form-group">




                    <label for=""></label>
                    <select name="operateur" id="" class="form-control select" onchange="operateur(this.value)" required>
                        <option value="" selected hidden>Choisir</option>
                        <option value="orange" class="sec">ORANGE MONEY</option>
                        <option value="mtn">MTN MONEY</option>
                        <option value="moov">MOOV MONEY</option>
                        <option value="wave">WAVE</option>
                    </select>
                 </div>

                    {{-- <div class="form-group">
                        <label for="orange">  <input type="radio" id="orange" name="operateur" value="orange" onchange=" orange(this.value)"> &nbsp;Paiement via Orange money <img src="{{asset('image paiement/OrangeMoney.jpg')}}" alt="" style="height: 20px"></label>


                    </div>
                    <div class="form-group">
                        <label for="mtn">  <input type="radio" id="mtn" name="operateur" value="mtn" onchange="mtn(this.value)"> &nbsp;Paiement via Mtn money <img src="{{asset('image paiement/mtn.jfif')}}" alt="" style="height: 20px"></label>

                    </div>
                    <div class="form-group">
                        <label for="moov">  <input type="radio" id="moov" name="operateur" value="actif" onclick="actif(this.value)"> &nbsp;Paiement via Moov money <img src="{{asset('image paiement/moov.png')}}" alt="" style="height: 20px"></label>

                    </div>
                    <div class="form-group">
                        <label for="wave">  <input type="radio" id="wave" name="operateur" value="actif" onclick="actif(this.value)"> &nbsp;Paiement via WAVE <img src="{{asset('image paiement/wave.png')}}" alt="" style="height: 20px"></label>

                    </div> --}}





                </div>
                <div class="btn-orange">
                    <img src="{{asset('image paiement/OrangeMoney.jpg')}}" alt="" style="height: 20px;position: relative;top:-4.5em;right:1.5em; float: right;">

                     <a href="" class="btn bg-success text-light col-12" style="float: ;border-radius: 1px !important">CONTINUER ORANGE</a>
                </div>

                <div class="btn-mtn">
                    <img src="{{asset('image paiement/mtn.jfif')}}" alt="" style="height: 20px;position: relative;top:-4.5em;right:1.5em; float: right;">
                     <a href="" class="btn bg-success text-light col-12 " style="float: ;border-radius: 1px !important">CONTINUER</a>
                </div>

                <div class="btn-moov">
                    <img src="{{asset('image paiement/moov.png')}}" alt="" style="height: 20px;position: relative;top:-4.5em;right:1.5em; float: right;"
                    >
                    <a href="" class="btn bg-success text-light col-12  " style="float: ;border-radius: 1px !important">CONTINUER</a>
               </div>

               <div class="btn-wave">
                <img src="{{asset('image paiement/wave.png')}}" alt=""style="height: 20px;position: relative;top:-4.5em;right:1.5em; float: right;">
                <a href="" class="btn bg-success text-light col-12 " style="float: ;border-radius: 1px !important">CONTINUER</a>
           </div>





                <style>
                    .btn-orange{
                        display: none
                    }
                    .btn-mtn{
                        display: none
                    }
                    .btn-moov{
                        display: none
                    }
                    .btn-wave{
                        display: none
                    }
                </style>


                <script>
                   function operateur(val){

                    if (val == "orange") {

                //    document.querySelector('.btn-orange').classList.add('d-block')

                document.querySelector('.btn-orange').style="display:block";
                   }
                   else
                   document.querySelector('.btn-orange').style="display:none";


                      if (val == "mtn") {

                //    document.querySelector('.btn-orange').classList.add('d-block')

                document.querySelector('.btn-mtn').style="display:block";
                   }
                   else
                   document.querySelector('.btn-mtn').style="display:none";

                   if (val == "moov") {

                //    document.querySelector('.btn-orange').classList.add('d-block')

                document.querySelector('.btn-moov').style="display:block";
                   }
                   else
                   document.querySelector('.btn-moov').style="display:none";

                   if (val == "wave") {

                //    document.querySelector('.btn-orange').classList.add('d-block')

                document.querySelector('.btn-wave').style="display:block";
                   }
                   else
                   document.querySelector('.btn-wave').style="display:none";





                    }














                </script>


            </div>
        </div>
        </div>

    </section>







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
