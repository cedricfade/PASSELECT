<!doctype html>
<html class="no-js" lang="fr">
<head>
    <title>Inscription | Organisateur</title>

    @include('page.head')

</head>

<style>
  .back-inscription{
    padding: 18px 15px;
    background-size: cover;
    background-position: center;
    background-image: linear-gradient(50deg, rgb(33, 10, 99),rgb(34, 7, 70));
    
    
  }
  @import url("https://fonts.googleapis.com/css?family=Raleway:900&display=swap");

#container {


filter: url(#threshold) blur(0.6px);
}



#text1,
#text2 {

position: absolute;
width: 100%;
display: inline-block;
text-align: right;
font-family: "Amaranth", sans-serif;
font-size: 45px;
padding-top: 40PX;

user-select: none;
} 

</style>





<body class="hidden-bar-wrapper">
 
  <div class="back">

    @include('page.menu')


  </div>


  <br><br>
  <div class="container">

    
    <div class="row g-3 back-inscription">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="z-index: 1">
        <div class="form col-xl-9 col-lg-12 col-md-12 col-12" style="background: #fff;">
         @if (session('id_erreur'))
         <div style="background-color: rgb(160, 63, 63); color:#fff" class="col-12 text-center p-1 animate__animated animate__shakeX">{{ session('id_erreur') }}</div>
             
         @endif
         <h5 class="text-center"><span style="border-top:1px dashed; padding:4px 15px; border-bottom:1px dashed; padding:4px 15px; border-left:1px dashed; padding:4px 15px; ">Inscription</span><span style="background-color: rgb(73, 15, 85); color:#fff; padding:5px 15px">Participant</span></h5>
       
          <br>

          <form action="{{ route('participant-new') }}" method="POST" style="">
            @csrf

            <div class="row">
              <div class="form-group col-6">
                <label for="" style="">Nom</label>
                <input type="text"  name="nom" class="form-control" value="{{ old('nom') }}">
                @error('nom')
                <span class="text-danger" style="font-size:12px;">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group col-6">
                <label for="" style="">Prénom</label>
                <input type="text"  name="prenom" class="form-control" value="{{ old('prenom') }}">
                @error('prenom')
                <span class="text-danger" style="font-size:12px;">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group col-12">
                <label for="" style="">Email</label>
                <input type="email"  name="email" class="form-control" placeholder="Ex:jean@gmail.com" value="{{ old('email') }}">
                @error('email')
                <span class="text-danger" style="font-size:12px;">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group col-12">
                <label for="" style="">Contact</label>
                <input type="text"  name="contact" class="form-control" value="{{ old('contact') }}">
                @error('contact')
                <span class="text-danger" style="font-size:12px;">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group col-6">
                <label for="" style="">Mot de passe</label>
                <input type="password"  name="password" class="form-control  @error('password')
                is-invalid
                @enderror" placeholder="********">
                @error('password')
                    <span class="text-danger" style="font-size:12px">{{ $message }}</span>
                    @enderror
              </div>
              <div class="form-group col-6">
                <label for="" style="">Mot de passe</label>
                <input type="password"  name="password_confirmation" class="form-control  @error('password_confirmation') is-invalid  @enderror">
                @error('password_confirmation')
                <span class="text-danger" style="font-size:12px">{{ $message }}</span>
                @enderror
              </div>
              <br>
              <div class="form-group col-12">
                <button class=" btn-connexion col-12 mb-1" type="submit">Inscription</button>
                <p style="font-weight: 500;font-size:15px;text-align: center; color:#161515">Déjà Participant? <a class="ms-2" href="{{ route('participant-login') }}" style="color: rgb(46, 12, 139);font-weight: bold; text-decoration: underline">Connexion   </a></p>
              </div>
            </div>
    
           
          
          
          </form>
        </div>
      </div>
  
      
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-left col-lg-6" style="color:#fff;">
        {{-- <h3 style="font-size: 4.4em;font-family: 'Amaranth', sans-serif; line-height: 0.8em; 
        background: -webkit-linear-gradient(#ffffff, #4a7fb1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">Deviens Organisateur</h3> --}}
      
 
             <div class="col-12" style="">
              <div id="container" style="margin-bottom:; position: relative; left; ">
         
                <div style="background: red !important">
                <span id="text1" style="color:#"></span>
              
                </div>
                <span id="text2" style="color:#"></span>
                <svg id="filters" style="">
                  <defs>
                      <filter id="threshold">
                          <feColorMatrix in="SourceGraphic" type="matrix" values="1 0 0 0 0
                                0 1 0 0 0
                                0 0 1 0 0
                                0 0 0 255 -140" />
                      </filter>
                  </defs>
              </svg>
            </div>
            <div class="img-event" style=" box-shadow: 18px 20px 1px rgba(146, 7, 238, 0.979);height: 27em;border:15px solid #fff; border-radius: 5px; margin-top: -20px; margin-left: -90px; background-repeat: no-repeat; position: relative;;    background-image: url({{ asset('assets/7482.png') }});">
       
            </div>
              
      </div>
      



   
        


      </div>
  
    </div>
  </div>

    @include('page.script')





<script src="{{ asset('assets/mon-js.js') }}"></script>


<script>
    @if (session('connexion'))

Swal.fire({
title: '{{ session('connexion') }}',
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

<!-- Mirrored from themearth.com/demo/html/emeet/view/index14.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 12:36:17 GMT -->
</html>
 