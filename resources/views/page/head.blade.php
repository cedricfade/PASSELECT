<head>
<meta charset="utf-8" />
<meta name="robots" content="index, follow, all" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>@yield('title') - PassElec</title>
<meta property="og:site_name" content="PassElec" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.passelec.ci" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@PassElec" />
            <meta name="description" content="Gestion d'événements et vente de billets" />
    <meta name="keywords" content="organiser mon événement, billets en ligne, acheter des billets" />
    <meta property="og:title" content="PassElec" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="Gestion d'événements et vente de billets" />
    <meta name="twitter:title" content="PassElec" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:image:alt" content="Gestion d'événements et vente de billets" />
    <meta name="twitter:description" content="Gestion d'événements et vente de billets" />

    <link rel="stylesheet" href="{{ asset('mon-style.css') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets1/app_icon.png') }}"/>
<!-- this icon shows in browser toolbar -->


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
</head>


<style>
  @font-face {
	font-family: 'test';
	src: url('assets/fonts/OneMiguel.ttf')
}

    .back{
    height: 300px;
    background-size: cover;
    background-position: center;
     background: linear-gradient(rgb(100, 19, 93),rgb(0, 0, 0));
     color: #fff;

   }
   .text{
    position: relative;
    top: 10em;
    text-align: center !important;
    width: 40%;
    margin: 0 auto
   }
   .text h1{
    font-family: 'test'
   }
</style>
