<!DOCTYPE html>
<html>
  <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vilnius</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css')>
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel2/dist/assets/owl.carousel.min.css')>
    <link rel="stylesheet" href="{{ asset('vendor/owl.carousel2/dist/assets/owl.theme.default.min.css')>
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    
  </head>

  <body>
    <!-- Header-->
    <header class="orai">
      <!-- Top bar -->
      <div class="py-2 bg-dark text-white">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-lg-4">
              <ul class="list-inline mb-0 text-sm">
                <li class="list-inline-item"><a class="reset-anchor" href="/weather">Oras Vilniuje</a></li>
                
              </ul>
            </div>
            <div class="col-lg-4 d-none d-lg-block text-center">
              <ul class="list-inline mb-0 small">
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
              </ul>
            </div>
            
            <div class="col-md-0 text-end">
        <div class="dropdown">
          @if (Route::has('login'))
          <div class="hidden px-6 py-1 sm:block">
            @auth
            <x-dropdown align="right" width="48">
              <x-slot name="trigger">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                  <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </button>
                @else
                <span class="inline-flex rounded-md">
                  <button type="button" class="btn btn-outline-primary me-2 text-white dropdown-toggle focus:outline-none transition ease-in-out duration-150">
                    {{ Auth::user()->name }}
                  </button>
                </span>
                @endif
              </x-slot>

              <x-slot name="content">
                <!-- Account Management -->
<div class="block px-4 py-2 text-xs text-gray-400">
  {{ __('Manage Account') }}
</div>

<x-dropdown-link href="{{ route('profile.show') }}">
  {{ __('Profile') }}
</x-dropdown-link>

<x-dropdown-link href="{{ route('dashboard') }}">
  {{ __('Dashboard') }}
</x-dropdown-link>

@if (Laravel\Jetstream\Jetstream::hasApiFeatures())
<x-dropdown-link href="{{ route('api-tokens.index') }}">
  {{ __('API Tokens') }}
</x-dropdown-link>
@endif

<div class="border-t border-gray-200"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf

                  <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('Log Out') }}
                  </x-dropdown-link>
                </form>
              </x-slot>
            </x-dropdown>
            @else
           
            
            <ul class="mygtukas">
              <a href="{{ route('login') }}" class="btn btn-primary btn-sm mb-2">Prisijungti</a>

              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-primary btn-sm mb-2">Registruotis</a>
              @endif
              @endauth
          </div>
          @endif
        </div>

             <nav>
            
    <!-- <Navbar for signed-in user 
    @auth
    <ul>
    <div class="col-lg-4 d-none d-lg-block text-end">
        <a class="btn btn-outline-light me-2 data-toggle='dropdown' href='/'>Home</a></li>
        <a class="btn btn-outline-light me-2" href="{{ route('dashboard') }}">Dashboard</a></li>
        <a class="btn btn-outline-light me-2" href="{{ route('profile') }}">Profile</a></li>
        <a class="btn btn-outline-light me-2" href="{{ route('logout') }}">Logout</a></li>
    </ul>
    
    @else
     <!-- Navbar for non-authenticated user 
    <ul>
    <div class="col-lg-4 d-none d-lg-block text-end">
        <a class="btn btn-outline-light me-2" href="{{ route('login') }}">Login</a></li>
        <a class="btn btn-outline-light me-2" href="{{ route('register') }}">Register</a></li>
    </ul>
    @endauth 
</nav>

             <div class="col-lg-4 d-none d-lg-block text-end">
              <a class="btn btn-outline-light me-2" href="/login">Login</a>
              <a class="btn btn-outline-light me-2" href="/register">Register</a>

                
              </div>
            </div>
          </div>
        </div>
      </div>  -->
      

      <button onclick="scrollToTop()" class="scroll-to-top">Į viršų</button>


<script>
  // Function to scroll the page to the top
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  // Show the button when the user scrolls down 20px from the top of the document
  window.onscroll = function() {
    var scrollButton = document.querySelector('.scroll-to-top');
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollButton.classList.add('show');
    } else {
      scrollButton.classList.remove('show');
    }
  };
</script>

      <!-- Navbar 1 -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-4">
        <div class="container text-center"><a class="navbar-brand mx-auto" href="/#"><img class="mb-2" src="img/logo.svg" alt="" width="140">
            <p class="text-sm text-uppercase text-gray mb-0">Ką aplankyti Vilniuje?</p></a></div>
      </nav>

      <nav>
    

      <!-- Navbar 2 -->
      <nav class="navbar navbar-expand-lg navbar-light border-gray py-2 bg-light">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right mx-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item px-1">
                <!-- Link--><a class="nav-link active" href="#top10">Pagrindinis</a>
              </li>
              <li class="nav-item px-1">
                <!-- Link--><a class="nav-link" href="#kategorijos">Kategorijos</a>
              </li>
              <li class="nav-item px-1">
                <!-- Link--><a class="nav-link" href="#vaizdai">Vaizdai</a>
                </li>
                <li class="nav-item px-1">
                <!-- Link--><a class="nav-link" href="#daiktai">Svarbiausi daiktai</a>
              </li>
              
              
                <div class="dropdown-menu text-center text-lg-start shadow-sm" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="index.html">Pagrindinis</a><a class="dropdown-item" href="listing.html">Kategorijos</a><a class="dropdown-item" href="post">Informacija</a></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    
</nav>
    <!-- Destinations -->
    <section class="pt-5">
      <div class="container"id="top10">
        <h1>Top 10 lankytinų vietų Vilniuje</h1>
      </div>
      <div class="swiper destinations-slider swiper-padding">
        <div class="swiper-wrapper"  >
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="post" style="background: url(img/tvbokstas.jpg)  ">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0"></p>
                <h2 class="h3 mb-4">Televizijos bokstas</h2>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="posts" style="background: url(img/gedimino.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Gedimino pilies bokštas</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="katedra" style="background: url(img/katedras.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Vilniaus arkikatedra</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="uzupis" style="background: url(img/uzupis.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Užupio respublika</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="stiklo" style="background: url(img/stiklas.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Stiklo kvartalas</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="mo" style="background: url(img/mo.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Mo muziejus</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="okupaciju" style="background: url(img/okupaciju.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Okupacijų muziejus</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="literatu" style="background: url(img/literatu.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Literatų gatvė</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="lukiskes" style="background: url(img/lukiskes.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Lukiškių kalėjimas</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="valdovu" style="background: url(img/valdovu.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Valdovų rūmai</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
          <div class="swiper-slide h-auto"><a class="destination d-flex align-items-end bg-center bg-cover" href="onos" style="background: url(img/onos.jpg)">
              <div class="destination-inner w-100 text-center text-white index-forward has-transition">
                <p class="small text-uppercase mb-0">Šv. Onos bažnyčia</p>
                <h2 class="h3 mb-4">Vilnius</h2>
                <div class="btn btn-primary w-100 destination-btn text-white">Plačiau</div>
              </div></a></div>
        </div>
        
          </svg>
        </div>
      </div>
    </section>
    <!-- Divider Section -->
    <section class="py-5">
      <div class="container py-4">
        <!-- Home listing -->
        <div class="row align-items-stretch gx-lg-0">
          <div class="col-lg-6 order-2 order-lg-1 bg-full-left">
            <div class="h-100 bg-light d-flex align-items-center">
              <div class="py-5 px-4">
                
                <p class="text-primary font-weight-bold small text-uppercase mb-2">Kelionių gidas</p>
                <h3 class="h4"> <a class="text-reset" href="/#">Knyga apie Vilnių - "Vilniaus atminties punktyrai"</a></h3>
                <div class="text-muted">
                  <p>Birutė Verkelytė-Fedaravičienė, tuomet moksleivė, į paskutinio poilsio vietą su minia lydėjo tautos patriarchą Joną Basanavičių. Jekaterina Špilevskaja visą gyvenimą liko ištikima Žvėrynui, kuriame ir išvydo pasaulį. Dainorai Juchnevičiūtei-Vaivadienei į atmintį įsirėžė laimingos vaikystės dienos senelių viloje Valakampiuose. Gražinos Mareckaitės prisiminimai – odė Rasų priemiesčiui... Dvylikos knygos herojų pasakojimuose atsiveria Vilnius, koks buvo anuomet, prieš šešiasdešimt ar devyniasdešimt metų.</p>
                  <p> Knyga kviečia pasivaikščioti senųjų vilniečių pėdomis – kiekvieną pasakojimą papildo gausiai archyvinėmis ir dabartinėmis nuotraukomis iliustruota informacija apie minimus pastatus, vietas, įvykius bei to laikmečio žemėlapiai.

</p>
                </div>
                <ul class="list-inline small text-uppercase mb-0">
                  <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="img/person-2.jpg" alt="" width="30"/></li>
                  <li class="list-inline-item me-0 text-gray align-middle">Parašė </li>
                  <li class="list-inline-item align-middle me-0"><a class="fw-bold reset-anchor" href="#!">Gabija Lunevičiūtė</a></li>
                  <li class="list-inline-item text-gray align-middle me-0">|</li>
                  <li class="list-inline-item text-gray align-middle">Išleista 2020metais</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><a class="d-block h-100 bg-center bg-cover" href="/#" style="background: url(img/knyga.jpg)"></a></div>
        </div>
      </div>
    </section>
    <!-- Instagram section-->
    <section class="pb-5">
      <div class="container pb-4"id="vaizdai">
        <header class="text-center mb-5">
          <h2>Vilniaus miesto vaizdai</h2>
          <p>Vieta Jūsų Instagram nuotraukoms.</p>
        </header>
        <div class="row">
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai1.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai2.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai3.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai4.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai5.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai6.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai7.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
          <div class="col-lg-3 col-md-6 px-md-1 py-1"><a class="instagram-item d-block w-100 reset-anchor text-white" href="#!"><img class="img-fluid" src="img/turistai8.jpg" alt="">
              <div class="instagram-item-overlay p-5">
                <h6>Keliavimas maitina mūsų dvasią, atveria akis į įvairovę ir leidžia atrasti save naujame kontekste.</h6>
              </div></a></div>
        </div>
      </div>
    </section>
    <!-- Travel essentials section -->
    <section class="py-5 bg-light">
      <div class="container py-4" id='daiktai'>
        <header class="text-center mb-5">
          <h2>Svarbiausi daiktai kelionėje</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </header>
        <div class="row text-center">
          <div class="col-lg-3 col-md-6"><a class="text-reset" href="/#"><img class="mb-4" src="img/bag.png" alt="" height="150">
              <h3 class="h5">Kuprinė</h3>
              <p class="text-sm text-muted">Daiktams susidėti.</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="text-reset" href="/#"><img class="mb-4" src="img/camera.png" alt="" height="150">
              <h3 class="h5">Kamera</h3>
              <p class="text-sm text-muted">Įspūdžiams ir vaizdams įamžinti.</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="text-reset" href="/#"><img class="mb-4" src="img/glasses.png" alt="" height="150">
              <h3 class="h5">Akiniai</h3>
              <p class="text-sm text-muted">Apsisaugoti nuo saulės spindulių.</p></a></div>
          <div class="col-lg-3 col-md-6"><a class="text-reset" href="/#"><img class="mb-4" src="img/headphone.png" alt="" height="150">
              <h3 class="h5">Ausinės</h3>
              <p class="text-sm text-muted">Klausyti muzikos vaikštant pro gražiausias vietas.</p></a></div>
        </div>
      </div>
    </section>
    <!-- Subscribe section -->
    <section class="py-5">
      <div class="container py-4">
        <div class="row align-items-center">
          <div class="col-lg-6 position-relative py-4"><img class="subscribe-img" src="img/subscribe-img-1.jpg" alt=""><img class="subscribe-img" src="img/subscribe-img-2.jpg" alt=""></div>
          <div class="col-lg-6">
            <h2>Naujienlaiškis</h2>
            <p class="text-muted mb-5">Įrašykite savo elektroninį paštą ir iš mūsų gaukite naujienas apie Vilniuje vykstančius renginius, koncertus ar atvirų durų dienas muziejuose.</p>
            <form action="#">
              <div class="row gy-3 gy-lg-0">
                <div class="col-lg-8">
                  <input class="form-control" type="email" name="email" placeholder="Įveskite el. pašto adresą">
                </div>
                <div class="col-lg-4">
                  <button class="btn btn-dark btn-block" type="submit">Prenumeruoti</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Top categories section -->
    <section class="py-5 bg-light">
      <div class="container py-4" id="kategorijos">
        <header class="mb-5 text-center">
          <h2>Kategorijos</h2>
          <p>Čia galite rasti  lankytinų vietų Vilniuje kategorijas.</p>
        </header>
        <div class="row text-center gy-4">
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#camping-1"> </use>
              </svg>
              <h3 class="h5">Muziejai</h3>
              <p class="text-muted text-sm"></p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#paper-bag-1"> </use>
              </svg>
              <h3 class="h5">Kultūrinės ir istorinės vietos</h3>
              <p class="text-muted text-sm"></p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#special-price-1"> </use>
              </svg>
              <h3 class="h5">Galerijos</h3>
              <p class="text-muted text-sm"></p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#movie-camera-1"> </use>
              </svg>
              <h3 class="h5">Kino teatrai</h3>
              <p class="text-muted text-sm"></p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#beach-1"> </use>
              </svg>
              <h3 class="h5">Bažnyčios</h3>
              <p class="text-muted text-sm"></p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#camping-1"> </use>
              </svg>
              <h3 class="h5">Panorama</h3>
              <p class="text-muted text-sm"></p></a></div>
          <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#beach-1"> </use>
              </svg>
              <h3 class="h5">Parkai</h3>
              <p class="text-muted text-sm"></p></a></div>
              <div class="col-lg-2 col-md-4 col-sm-6"><a class="reset-anchor d-block" href="listing.html">
              <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                <use xlink:href="#camping-1"> </use>
              </svg>
              <h3 class="h5">Gatvės menas ir architektūra</h3>
              <p class="text-muted text-sm"></p></a></div>
        </div>
      </div>
    </section>
    <!-- Sponsors section-->
    <section class="py-5">
      <div class="container py-4">
        <header class="text-center mb-4">
          <h2>Mūsų rėmėjai</h2>
        </header>
        <!-- Brands -->
        <div class="swiper sponsors-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-1.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-2.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-3.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-4.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-5.svg" alt=""></a></div>
            <div class="swiper-slide h-auto"><a href="#!"><img class="d-block mx-auto my-3 sponsor" src="img/brand-6.svg" alt=""></a></div>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark py-4">
      <div class="container">
        <div class="row py-2 gy-2">
          <div class="col-lg-4 text-center text-lg-start">
            <p class="small text-muted text-uppercase mb-0">&copy; copyright 2021 - all rights reserved</p>
          </div>
          <div class="col-lg-4 text-center">
            <ul class="list-inline text-white small mb-0">
              <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-vimeo-v"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-4 text-center text-lg-end">
            <p class="small text-muted text-uppercase mb-0">Template designed by <a href="https://bootstrapious.com/p/bootstrap-travel-blog-template">Bootstrapious</a>. </p>
            <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="js/bootstrap-input-spinner.js"></script>
    <script src="js/front.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
