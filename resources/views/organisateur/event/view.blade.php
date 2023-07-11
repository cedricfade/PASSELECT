
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
      <!-- Page Body Start-->
      @include('partial.side')
      <!-- Page Sidebar Ends--> 
         <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/vendors/photoswipe.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <style>
        .back-header{
         
            height:200px;
            color: #fff;
            z-index: 0;
         
            padding:  5px;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;

             
            
            background-image: linear-gradient(93deg, rgba(20, 100, 192, 0.774),rgb(54, 6, 99)), url({{ Storage::url($event->image) }}) ;
          
            
           
        }
    </style>

        <!-- Container-fluid Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header back-header" style="">
                  <div class="row">
                    <div class="col-sm-6">
                        <br>
                      <h3>{{ $event->titre }}</h3>
                      <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li> --}}
                        {{-- <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product</li> --}}
                      </ol>
                    </div>
                   
                  </div>
                </div>
              </div>


              <div class="row">
                <br><br>

                {{-- <div class="image-event mt-5" style="text-align:center">
                    <img src="{{ Storage::url($event->image) }}" alt="" style="height: 200px;border:2px solid #483394;padding:5px">

                </div> --}}
                <style>
                    input,textarea,select{
                        border:1px solid #483394 !important
                    }
                </style>

                <div class="card-body">
                    <form class="needs-validation"  method="post"   action="{{ route('event.validate') }}" enctype="multipart/form-data" >
                      @csrf
                      <div class="row g-3">
                        <div class="col-xl-4"></div>

                        <div class="col-xl-6">
                          <div class="col-md-7">
                            <label class="col-sm-3 col-form-label">Catégorie</label>
                            <select class="custom-select form-select" name="categorie_id">
                              <option value="" selected hidden>Choisir</option>
                              @foreach ($categories as $categorie)
                              <option value="{{$categorie->id}}" style="text-transform: uppercase"> {{$categorie->libelle}} </option>
                                  
                              @endforeach
                            </select>
                          </div>
                          <br>
                              
                        <div class="col-md-7">
                          <label class="form-label" for="titre">Titre</label>
                          <input class="form-control" id="titre" type="text" placeholder="Entrez un titre " required name="titre" value="{{ $event->titre }}">
                          
                        </div>
                        <br>
                        <div class="col-md-7">
                          
                          <div class="mb-3">
                            <label class="col-sm-8 col-form-label">Photo évent</label>
                            <div class="col-sm-12">
                              <input class="form-control" type="file" name="image">
                            </div>
                        
                      </div>
                        </div>
                        <div class="col-md-7">
                          <label class="form-label" for="prix_vip">Prix ViP</label>
                          <input class="form-control" id="prix_vip" type="number" placeholder="Entrez prix VIP "  name="prix_vip"  value={{ $event->prix_vip }}>
                          
                        </div>
                        <br>
                        <div class="col-md-7">
                          <label class="form-label" for="prix_vvip">Prix VVIP</label>
                          <input class="form-control" id="prix_vvip" type="number" placeholder="Entrez prix VIP "  name="prix_vvip" value="{{ $event->prix_vvip }}">
                          
                        </div>

                        <br>
                        <div class="col-md-7">
                          <label class="form-label" for="prix_public">Prix Grand public</label>
                          <input class="form-control" id="prix_public" type="number" placeholder="Entrez prix VIP "  name="prix_public" value="{{ $event->prix_public }}">
                          
                        </div>
                        <br>

                        <div class="col-md-7">
                         
                        </div>
                        <br>

                        <div class="col-md-7">
                          <label class="form-label" for="titre">Lieu évènement</label>
                          <input class="form-control" id="titre" type="text" placeholder="Lieu Evènement "  name="lieu_event" value="{{ $event->lieu_event}}">
                          
                        </div>
                        <br>

                        <div class="col-md-7">
                          <label class="form-label" for="titre">Date & heure évènement</label>
                             <div class="row">
                              <div class="col-xl-4">

                                <div class="input-group clockpicker">
                                  <input class="form-control" type="date" value="" name="date_event" value="{{ $event->date_event }}"  required><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                               
                                <sup>{{ $event->date_event->format('d/m/y') }}</sup>

                              </div>
                              <div class="col-xl-4">
                                <div class="input-group clockpicker">
                                  <input class="form-control" type="time" value="{{ $event->heure_event }}" name="heure_event" required><span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                              </div>
                              
                            </div>
                             </div>
                             <br>
                             <div class="col-md-7">
                              <label class="form-label" for="description">Description</label><br>
                              <sup>(Facultatif)</sup>
                              <textarea class="form-control" id="description" type="number" placeholder=" " rows="5" cols="10"  name="description">{{ $event->description }}
                              </textarea>
                              
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
                        
                        

                        </div>

                        <div class="col-xl-6">
                       
                        
                       
                   
                   
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
    <script src="{{ asset('assets1/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets1/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets1/js/photoswipe/photoswipe.js') }}"></script>
    <!-- Plugins JS Ends-->

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets1/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets1/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets1/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets1/js/config.js') }}">   </script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets1/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets1/js/bootstrap/bootstrap.min.js') }}"></script>
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
    <script src="{{ asset('assets1/js/script.js') }}"></script>
    <!-- login js-->
    <!-- Plugin used-->


    <script>
      @if (session('eventModif'))
  
  Swal.fire({
  title: '{{ session('eventModif') }}',
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
<img src="{{ Storage::url('') }}" alt="">