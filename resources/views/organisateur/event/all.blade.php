
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

    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->

    <!-- App css-->

        <!-- Container-fluid Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-6">
                      <h3>Mes évènements</h3>
                      <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li> --}}
                        {{-- <li class="breadcrumb-item">ECommerce</li>
                        <li class="breadcrumb-item active">Product</li> --}}
                      </ol>
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


          @forelse ($events as $event)
          <style>
            .card-hover:hover{

              position: relative;


              box-shadow: 3px 9px 8px rgba(0, 0, 0, 0.226);
              transform: scale(0.99);


            }
            .img-modif{
                padding: 15px;
                height: 220px;
              }
          </style>
          <div class="col-sm-6 col-xl-3 col-lg-4 des-xl-50 col-md-4" >
            <div class="card card-hover" style="box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.226);">
              <div class="blog-box blog-grid">
                <div class="blog-wrraper"><a href="{{ route('event.view',['id'=>$event->id]) }}"><img class="img-fluid top-radius-blog img-modif" src="{{ Storage::url($event->image) }}" alt=""></a></div>
                <br>
                <div class="blog-details-second">
              
                  <div class="blog-post-date col-12"><span class="blg-month" style="width: 40% !important">{{ $event->date_event->format('d/m/y')->translatedFormat('d/m/y') }}</span><span class="blg-date">{{ $event->heure_event }}</span></div><a href="blog-single.html">
                    <h6 class="blog-bottom-details" style="font-size: 13px">{{ $event->titre }}</h6></a>

                  <div class="detail-footer" style="margin:0px; padding:0px;font-size:12px; display:flex;list-style: none">
                    <style>
                      .prix{
                        margin-right: 5px;
                        padding: 1px 5px;
                        border-radius: 5px;
                        color: #fff
                      }
                      </style>

                     @if ($event->prix_public == NULL & $event->prix_vip == NULL & $event->prix_vvip == NULL)
                    <span style="background:#037224;padding:5px 15px;color:#fff;font-size:16px">Gratuit</span>

                    @else

                    @if ($event->prix_vip == null)


                    @else
                    <span class="prix"  style="color: rgb(95, 32, 32); font-size:10px">VIP : {{ $event->prix_vip }} FCFA</li></span>

                    @endif

                    @if ($event->prix_vvip == null)


                    @else
                    <span class="prix" style="color: rgb(95, 32, 32); font-size:10px">VVIP : {{ $event->prix_vvip }} FCFA</span>

                    @endif


                 @if ($event->prix_public == null)

                 @else
                 <span class="prix" style="color: rgb(95, 32, 32); font-size:10px">Public : {{ $event->prix_public }} FCFA</span>

                 @endif

                     @endif

                  </div>
                </div>
              </div>
            </div>
          </div>

          @empty


          <h5 class="text-center" style="position: relative; top:5em">Vous n'avez pas ajouté des évènements! <a href="{{route('event.ajout')}}" class="btn" style="background: rgb(14, 148, 97); color:#fff">Ajouter maintenant</a></h5>

          @endforelse

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
