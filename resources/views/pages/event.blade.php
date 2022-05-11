<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Immobilier</title>
</head>
<body>
    @include('layout.header');
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
          <div class="container">
            <h2>Immobilier</h2>
            <p>Nos immobiliers sont près</p>
          </div>
        </div><!-- End Breadcrumbs -->
    
        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
          <div class="container" data-aos="fade-up">
    
            <div class="row">
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="{{url('assets/assets/img/slide-1.jpg')}}" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Grande Villa</a></h5>
                    <p class="fst-italic text-center">Située à Bonamoussadi</p>
                    <p class="card-text">Une belle villa situé au coeur de Bonamoussadi. Endroit paisible, posé, espace grand et beau.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="{{url('assets/assets/img/slide-2.jpg')}}" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Appartement meublé</a></h5>
                    <p class="fst-italic text-center">Situé à Bonapriso</p>
                    <p class="card-text">Des appartements meublés dans un immeuble moderne</p>
                  </div>
                </div>
    
              </div>
    
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="{{url('assets/assets/img/slide-3.jpg')}}" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Appartement meublé</a></h5>
                    <p class="fst-italic text-center">Situé à Bonapriso</p>
                    <p class="card-text">Des appartements meublés dans un immeuble moderne</p>
                  </div>
                </div>
    
              </div>
    
              <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                  <div class="card-img">
                    <img src="{{url('assets/assets/img/post-single-1.jpg')}}" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Appartement meublé</a></h5>
                    <p class="fst-italic text-center">Situé à Bonapriso</p>
                    <p class="card-text">Des appartements meublés dans un immeuble moderne</p>
                  </div>
                </div>
    
              </div>
    
    
            </div>
    
          </div>
        </section><!-- End Events Section -->
    
      </main><!-- End #main -->
    @include('layout.footer');


</body>
</html>