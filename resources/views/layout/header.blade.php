@include('layout.link');


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html" class="logo me-auto"><img src="{{url('assets/assets/img/logo.png')}}" alt="" class="img-fluid"> <br> db transit</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"> db transit</a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="{{route('GETPAGEAPROPOS')}}">Accueil</a></li>
          <li class="dropdown"><a href="#"><span>Société</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              </li>
              <li><a href="{{route('GETPAGEAPROPOS')}}">A propos</a></li>
              <li><a href="{{route('GETPAGEEQUIPE')}}">Notre équipe</a></li>

            </ul>
          </li>
          <li><a href="{{route('GETPAGEDEVIS')}}">Devis</a></li>
          
          <li class="dropdown"><a href="#"><span>Boutique</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              </li>
              <li><a href="{{route('GETPAGEBOUTIQUE')}}">Véhicule</a></li>
              <li><a href="{{route('GETPAGEMOBILIER')}}">Immobilier</a></li>
            </ul>
          </li>
          
          
          <li class="dropdown"><a href="#"><span>Langue</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              </li>
              <li><a href="#">Francais</a></li>
              <li><a href="#">Anglais</a></li>
            </ul>
          </li>


         
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="contact.html" class="get-started-btn">Contactez-nous</a>

    </div>
  </header><!-- End Header -->
