
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partial.meta')
    <title>Connexion | Participant</title>
    @include('page.head')
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/sweetalert2.css') }}">
<script src="{{ asset('assets/sweetalert2/sweetalert2.js') }}"></script>

<style>
  .back{
   height: 300px;
    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)), url({{ asset('assets/images/gallery/6.jpg') }});

  }

  .form{
    margin:0 auto;

    box-shadow:  2px 2px 8px rgba(0, 0, 0, 0.459);
    padding: 15px 15px;
    border-radius: 3px
  }
  .trait{
    margin: 0 auto;
    width: 20%;
    background: rgb(91, 6, 117);
    height: 5px;
    border-radius: 10px
  }
  input[type=checkbox] {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
}
input[type=checkbox] {
    -border-radius: 4px;
    height: 15px;
    width: 15px;
    background: #fff;
    border: 1px solid #880f74;
}
input[type="checkbox"]:checked {
  background: rgb(255, 255, 253);

  &:before {
    font-family: FontAwesome;
    content: '\f00c';
    display: block;
    color: ;
    font-size: 13px;
    position: absolute;
  }
}
label{
  font-weight: bold
}
.btn-connexion{
  background: rgb(113, 21, 199);
  color:#fff;
  padding: 10px 15px;
  font-weight: bold;
  cursor: pointer;
  transition: 0.3s all ease-in


}
.btn-connexion:hover{
  background: rgb(49, 7, 88);
}

</style>
  </head>
  <body>
    <div class="mon-banner">

      @include('page.menu')


    </div>

    {{-- <div class="titre text-center" style="position: relative; margin: 0 auto; width: 50%">
      <h1>Connexion Participant</h1>
      <span style="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint atque recusandae saepe officiis possimus tenetur mollitia aut amet cupiditate iste nesciunt ex fuga, maxime, id magnam, cumque sit eos rem!</span>
    </div> --}}
<div class="container-fluid">
  @if (session('inscription'))
  <div style="background-color: rgb(29, 133, 72); color:#fff; z-index: -1;font-size: 1.3em; padding: 8px 0;" class="col-12 text-center mb-2 animate__animated animate__fadeInDown">{{ session('inscription') }}</div>

  @endif

</div>
   <br><br>
    <div class="container">

      <div class="row">
        <div class="col-xl-12 col-12">
          <div class="form col-xl-4 col-lg-6 col-md-6 col-12 col-sm-10">
           @if (session('id_erreur'))
           <div style="background-color: rgb(160, 63, 63); color:#fff;" class="col-12 text-center mb-2 animate__animated animate__shakeX">{{ session('id_erreur') }}</div>

           @endif



            <h5 class="text-center d-md-block d-sm-block d-lg-block d-xl-block d-none" ><span style="border-top:1px dashed; padding:4px 15px; border-bottom:1px dashed; padding:4px 15px; border-left:1px dashed; padding:4px 15px; ">Connexion</span><span style="background-color: rgb(73, 15, 85); color:#fff; padding:5px 15px">Participant</span></h5>
            <h5 class="text-center  d-md-none d-sm-none d-lg-none d-xl-none d-block col-1" style="font-size: 12px"><span style="border-top:1px dashed; padding:4px 15px; border-bottom:1px dashed; padding:4px 15px; border-left:1px dashed; padding:4px 15px; ">Connexion</span><span style="background-color: rgb(73, 15, 85); color:#fff; padding:5px 15px">Participant</span></h5>



            {{-- <div class="trait"></div> --}}

            <br>

            <form action="{{ route('participant-login_action') }}" method="POST">
              @csrf

              <div class="form-group col-12">
                <label for="" style="">Email</label>
                <input type="text"  name="email" class="form-control" required>
              </div>
              <div class="form-group col-12">
                <label for="">Mot de passe</label>
                <input type="password" name="password" class="form-control" required>
              </div>
              <div class="col-12">
                <div class="form-check">
                  {{-- <input class="form-check-input" type="checkbox" value="" id="invalidCheck2
                  ">
                  <label class="form-check-label" for="invalidCheck2">
                    Se souvenir de moi
                  </label> --}}


                </div>


              </div>
              <div class="form-group col-6">
                <button class=" btn-connexion" type="submit">Connexion</button>
              </div>
              <div class="form-group col-12">
                <a href="" class="" style="color:#490549; font-weight: bold">Mot de passe oublié?</a>
              </div>
              <div class="form-group col-12">
               <i style="font-weight: bold"> Pas de compte?</i>  &nbsp;<a href="{{ route('participant-inscription') }}">Créer maintenant</a>
              </div>





            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- Loader starts-->

    <!-- Loader ends-->
    <!-- page-wrapper Start-->

    @include('page.script')
    <script>
        @if (session('id_erreur'))

Swal.fire({
title: '{{ session('id_erreur') }}',
//   text: 'Do you want to continue',
icon: 'error',
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
<script>
    @if (session('inscription'))

Swal.fire({
title: '{{ session('inscription') }}',
//   text: 'Do you want to continue',
icon: 'success',
//   confirmButtonText: 'Cool',
toast: true,
position: 'top-end',
showConfirmButton: false,
timer: 4500
})
Toast.fire({

// title: 'Signed in successfully'
})
@endif
</script>
  </body>
</html>
