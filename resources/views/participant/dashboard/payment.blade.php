<!doctype html>
<html class="no-js" lang="fr">
    <title>Panier | PassElec</title>

    @include('page.head')


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

<body class="home" style="background-color:#fafafa;">

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
