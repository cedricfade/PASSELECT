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

   .form-pay{
    border: 1px solid #fffcfc;
    box-shadow: 2px 2px 8px 2px rgba(0, 0, 0, 0.205);
    background-color: #eeecec;
    padding: 8px
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

        @php
        $total = 0;
    @endphp

        <div class="container ms-auto col-xl-8 " style="margin-bottom: 5em;text-align: center">
          
         
                @if (session('sucessPaimement'))
                <span class="btn bg-success col-12 text-light p-2 mb-3">{{ session('sucessPaimement') }}</span>
                <a href="{{ route('accueil') }}" style="color:#161616; font-size: 1.2em;"> Retour à la page d'accueil</a>
                @endif


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
