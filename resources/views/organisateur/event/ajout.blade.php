
<!DOCTYPE html>
<html lang="fr">
  <head>
   @include('partial.meta')
    <title>Passelec | Events</title>

    @include('partial.link')
  </head>
  <body>
@include('partial.load')
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
@include('organisateur.header-menu')
<link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/vendors/summernote.css') }}">
      <!-- Page Body Start-->
      @include('partial.side')
      <!-- Page Sidebar Ends-->


      <style>
        input , select,textarea{
          border:1px solid #6f10a7 !important;
          border-radius: 0px !important
        }

      </style>

        <!-- Container-fluid Ends-->
        <div class="page-body" style="background-color: rgb(255, 255, 255)">
            <div class="container-fluid">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Ajouter un évènement</h3>
                      <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li> --}}
                        {{-- <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product</li> --}}
                      </ol>
                    </div>

                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="card">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <br>
                  <span style="background: rgb(218, 12, 12); color:#fff; padding:5px">  {{ $error }}</span>

                    @endforeach

                    @endif

                  <div class="card-body">
                    <form class="needs-validation"  method="post"   action="{{ route('event.validate') }}" enctype="multipart/form-data" >
                      @csrf
                      <div class="row g-3">

                        <div class="col-xl-8 col-md-10 col-lg-10 col-sm-10 col-12">
                          <div class="col-md-7">
                            <label class="col-sm-3 col-form-label">Catégorie</label>
                            <select class="custom-select form-select" name="categorie_id" required>
                              <option value="" selected hidden>Choisir</option>
                              @foreach ($categories as $categorie)
                              <option value="{{$categorie->id}}" style="text-transform: uppercase"> {{$categorie->libelle}} </option>

                              @endforeach
                            </select>
                          </div>
                          <br>

                        <div class="col-md-7">
                          <label class="form-label" for="titre">Titre</label>
                          <input class="form-control" id="titre" type="text" placeholder="Entrez un titre " required name="titre">

                        </div>
                        <br>
                        <div class="col-md-7">

                          <div class="mb-3">
                            <label class="col-sm-8 col-form-label">Photo évent</label>
                            <div class="col-sm-12">
                              <input class="form-control" type="file" name="image" required>
                            </div>

                      </div>
                        </div>
                        <div class="col-md-7">

                          <label class="form-label vip" for="prix_vip">Prix ViP</label>
                          <input class="form-control vip" id="prix_vip" type="number" placeholder="Entrez prix VIP "  name="prix_vip">
                          <span></span>

                        </div>

                        <style>

                        </style>

                        <br>
                        <div class="col-md-7">
                          <label class="form-label" for="prix_vvip">Prix VVIP</label>
                          <input class="form-control" id="prix_vvip" type="number" placeholder="Entrez prix VIP "  name="prix_vvip">

                        </div>

                        <br>
                        <div class="col-md-7">
                          <label class="form-label" for="prix_public">Prix Grand public</label>
                          <input class="form-control" id="prix_public" type="number" placeholder="Entrez prix VIP "  name="prix_public">

                        </div>
                        <br>

                        <div class="col-md-7">

                        </div>
                        <br>

                        <div class="col-md-7">
                          <label class="form-label" for="titre">Lieu évènement</label>
                          <input class="form-control" id="titre" type="text" placeholder="Lieu Evènement "  name="lieu_event" required>

                        </div>
                        <br>

                        <div class="col-md-7">
                          <label class="form-label" for="titre">Date & heure évènement</label>
                             <div class="row">
                              <div class="col-xl-4">
                                <div class="input-group clockpicker">
                                  <input class="form-control" type="date" value="" name="date_event"  required><span class="input-group-addon"><span class="glyphicon glyphicon-time" required></span></span>
                                </div>
                              </div>
                              <div class="col-xl-4">
                                <div class="input-group clockpicker">
                                  <input class="form-control" type="time" value="" name="heure_event" required><span class="input-group-addon"><span class="glyphicon glyphicon-time" required></span></span>
                                </div>
                              </div>

                            </div>
                             </div>
                             <br>
                             <div class="col-md-12">
                              <label class="form-label" for="description">Description</label><br>
                              <sup>(Facultatif)</sup>
                              <textarea class="form-control" id="description" type="number" placeholder=" " rows="5" cols="30"  name="description"></textarea>

                            </div>
                            <br>
                             <div class="col-xl-7">
                              <style>
                                .btn-pu{
                                  background: rgb(21, 89, 121);
                                  color: #fff;
                                transition:all 0.3s  ease-in
                                }
                                .btn-pu:hover{
                                  background: rgb(21, 89, 121);
                                  color: #fff;
                                   position: relative;
                                   top: -3px;
                                   box-shadow: 2px 4px 3px rgba(0, 0, 0, 0.288);
                                   transition:all 0.3s  ease-in
                                }
                              </style>
                              <button class="btn btn-pu" style="">Publier</button>

                             </div>

                        </div>



                        <div class="col-xl-4">

                            {{-- ICONE ANIMATE SUCCESS --}}



                        </div>


                        </div>


                      </div>
                </div>
                  </div>
              </div>
              </div>

      </div>
      <!-- footer start-->
      @include('organisateur.footer')
      @include('organisateur.script')
    <!-- Plugins JS start-->
    {{-- <script src="../assets/js/chart/chartjs/chart.min.js"></script>
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
  </body>
</html>
