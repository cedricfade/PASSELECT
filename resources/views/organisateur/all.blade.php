
<!DOCTYPE html>
<html lang="fr">
  <head>
   @include('partial.meta')
    <title>Tableau de bord</title>

    @include('partial.link')
  </head>
  <body>
@include('partial.load')
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
@include('organisateur.header-menu')
      <!-- Page Body Start-->
      @include('partial.side')
      <!-- Page Sidebar Ends-->
    <div class="page-body">
        <div class="container-fluid">
          <div class="page-header dash-breadcrumb">
            <div class="row">
              <div class="col-6">
                <h3 class="f-w-600">Bienvenue, {{ Auth()->guard('organisateur')->user()->nom }} {{ Auth()->guard('organisateur')->user()->prenom }}
                  @if (Auth()->guard('organisateur')->user()->formule->libelle == "premium")
                  <img src="{{ asset('premium_img/perm.png') }}" alt="" style="width: 30px">


                @else

                @endif
                </h3>
              </div>
              <div class="col-6">
                <div class="breadcrumb-sec">
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Tableau de bord</li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
       <div class="row">
        <div class="col-xl-4 col-sm-6 p-0">
            <div class="card ecommerce-widget pro-gress p-0" style="border:1px solid #1d29cf !important">
            @if (Auth()->guard('organisateur')->user()->formule->libelle == "basic")
            <div class="card-body support-ticket-font">
              <div class="row">
                <div class="col-5">
                  <h6 class="" style="color: black">FORMULE</h6>
                  <h4 style="text-transform: uppercase; font-size:20px; color:rgb(94, 19, 180);font-weight:800">{{ Auth()->guard('organisateur')->user()->formule->libelle }}</h4>
                </div>

              </div>

              <div class="progress-showcase">


                <div class="progress active">


                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                </div>
                <span style="float: right;top:-2em;position: relative;"><i data-feather="award" style="color:rgb(170, 180, 23);"> </i></span>
              </div>
            </div>
            @else
            <div class="card-body support-ticket-font" style="background:linear-gradient(to right, rgb(255, 255, 255), rgb(255, 255, 255)); box-shadow:2px 4px 7px rgba(89, 4, 92, 0.473)">

              <div class="row">

                <div class="col-12">

                  <h6 class="" style="color: rgb(34, 10, 10)">FORMULE</h6>
                  <h4 style="text-transform: uppercase; font-size:30px; color:rgb(94, 19, 180);font-weight:800">{{ Auth()->guard('organisateur')->user()->formule->libelle }}</h4>
                </div>

              </div>

              <div class="progress-showcase">


                {{-- <div class="progress active">


                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                </div> --}}

              </div>
            </div>


            @endif
            </div>
          </div>
          <div class="col-xl-3"></div>
          <div class="col-xl-4">
                   <!-- u-step with icon-->

                   <div class="col-sm-12">
                    <div class="card">

                          <div class="col-xl-12 col-lg-6 lg-mt" style="border:2px solid">
                            <div class="u-step"><span class="u-step-number">{{ $events->count() }}</span>
                              <div class="u-step-desc"><span class="u-step-title">Mes Evènement(s)</span>
                                <p>Nombres d'évènements</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="card">

                              <div class="col-xl-12 col-lg-6 lg-mt" style="border:2px solid">
                                <div class="u-step"><span class="u-step-number">0</span>
                                  <div class="u-step-desc"><span class="u-step-title">Participant(s)</span>
                                    <p>Nombres de ventes</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>


                  <!-- u-step with icon-->
          </div>
          <div class="col-xl-3"></div>
          {{-- <div class="col-xl-5 col-md-6 box-col-6" >
            <div class="pricingtable" style="border:2px solid;background:#fff">
              <div class="pricing-header" style="background: rgb(224, 224, 224) ">
                <h3 class="title">Premium <i data-feather="award"></i></h3>
              </div>
              <div class="pricing-content">
                <div class="price-value">
                  <div>
                    <h4>5000 <sup>FCFA</sup><span></span></h4>
                  </div>
                </div>
                <ul class="pricing-list">
                  <li>                                    <span></span>Disk Space</li>
                  <li>                                    <span>60</span>Email Accounts</li>
                  <li>                                    <span>60GB</span>Bandwidth</li>
                  <li>                                    <span>20</span>Subdomains</li>
                  <li>                                    <span>20</span>Domains</li>
                </ul>
                <div class="pricingtable-signup"><a class="btn btn-primary btn-lg" href="javascript:void(0)">Je m'abonne</a></div>
              </div>
            </div>
          </div> --}}
       </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
          <div class="row">
            <div class="" style="margin: 0 auto;width:80%; border:2px solid #3c0f85;border-radius:5px">

            <div class="card-body">
              <div class="table-responsive">

                <table class="display" id="advance-2">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            </div>



          </div>



        </div>
        <!-- Container-fluid Ends-->
      </div>
    </div>
      <!-- footer start-->

      @include('organisateur.footer')
      <!-- tap on top starts-->
      <div class="tap-top"><i class="icon-control-eject"></i></div>
      <!-- tap on tap ends-->
    </div>


    </div>
    @include('organisateur.script')
  </body>
</html>
