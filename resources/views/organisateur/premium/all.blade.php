
<!DOCTYPE html>
<html lang="fr">
  <head>
   @include('partial.meta')
    <title>Passelec | Premium</title>

    @include('partial.link')
  </head>
  <body>
@include('partial.load')
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
@include('organisateur.header-menu')
      <!-- Page Body Start-->
      @include('partial.side')
      <!-- Page Sidebar Ends-->
         <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->

        <!-- Container-fluid Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-6">
                      {{-- <h3>Mes évènements</h3> --}}
                      <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li> --}}
                        {{-- <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product</li> --}}
                      </ol>
                    </div>
                    <div class="col-sm-6">

                    </div>
                  </div>
                </div>
              </div>

              <style>
                a{
                  text-decoration: none !important
                }
              </style>
              <div class="row">

                <div class="col-xl-7 col-md-7 col-lg-7 col-sm-6">
                <div class="col-xl-8 col-md-8 box-col-6 col-sm-6 col-lg-8" >
                  <div class="pricingtable" style="border:2px solid;background:#fff">
                    <div class="pricing-header" style="background: rgb(224, 224, 224) ">
                      <h3 class="title">Premium <i data-feather="award"></i></h3>
                    </div>
                    <div class="pricing-content">
                      <div class="price-value" style="padding: 5px 15px; width:15em">
                        <div>
                          <h4>5000 <sup>FCFA</sup><span></span>/Mois</h4>
                        </div>
                      </div>
                      <ul class="pricing-list">
                        <li>                                    <span></span>Un service marketing (Campagne SMS & mailing)</li>
                        <li>                                    <span></span>Promotion de vos tickets</li>
                        <li>                                    <span></span>Alerte de paiement par sms</li>
                        <li>                                    <span></span>Rapport des participants en temps réel</li>
                        <li>                                    <span></span>Bannière publicitaire</li>
                      </ul>

                    </div>
                  </div>
                </div>
             </div>

             <div class="col-xl-5 col-md-5 col-lg-5 col-sm-5">
             <div class="text">
                <h3 style="color:#056baf;font-weight:800;font-size:3em;width:50%">Je m'abonne maintenant!</h3>
                <img src="{{ asset('premium_img/20944700.jpg') }}" alt="" style="height:300px">
                <style>
                    .btn-abonne{
                        background: rgb(8, 86, 150) !important;
                        color: #fdff;
                        font-weight: 600;
                        margin-top: 10px
                    }
                    .btn-abonne:hover{
                        background: rgb(4, 48, 83) !important;
                        color: #fdff;
                        font-weight: 600
                    }
                </style>
                <div class="pricingtable-signup"><a class="btn btn-lg btn-abonne" href="">Je m'abonne</a></div>

             </div>
             </div>



              </div>









                </div>

        </div>

      </div>
      <!-- footer start-->
      @include('organisateur.footer')
      <!-- tap on top starts-->
      <div class="tap-top"><i class="icon-control-eject"></i></div>
      <!-- tap on tap ends-->
          <!-- Plugins JS start-->
          @include('organisateur.script')
    {{-- <!-- Plugins JS start-->
    <script src="../assets/js/chart/chartjs/chart.min.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/morris-chart/raphael.js"></script>
    <script src="../assets/js/chart/morris-chart/morris.js"> </script>
    <script src="../assets/js/chart/morris-chart/prettify.min.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/prism/prism.min.js"></script>
    <script src="../assets/js/clipboard/clipboard.min.js"></script>
    <script src="../assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="../assets/js/counter/jquery.counterup.min.js"></script>
    <script src="../assets/js/counter/counter-custom.js"></script>
    <script src="../assets/js/custom-card/custom-card.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/greeting.js"></script> --}}
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    {{-- <script src="../assets/js/theme-customizer/customizer.js"></script> --}}
    <script src="../assets/js/script.js"></script>
    <!-- login js-->
    <!-- Plugin used-->


    <script>
      @if (session('event'))

  Swal.fire({
  title: '{{ session('event') }}',
  //   text: 'Do you want to continue',
  icon: 'success',
  //   confirmButtonText: 'Cool',
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3500
  })
  Toast.fire({

  // title: 'Signed in successfully'
  })
  @endif
  </script>
  </body>
</html>
