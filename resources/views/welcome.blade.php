<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    a, a:hover, a:focus {
      text-decoration:none;
    }
  </style>
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <img src="/resources/img/logo.svg" alt="No logo">
        </a>

        <ul class="nav col-12 col-md-auto">
          <li><a href="index-sito.html" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="chi-siamo.html" class="nav-link px-2 link-dark">Chi siamo</a></li>
          <li><a href="Contatti.html" class="nav-link px-2 link-dark">Contatti</a></li>
          <li><a href="servizi.html" class="nav-link px-2 link-dark">Servizi</a></li>
        </ul>

        <div class="col-md-3 text-end">
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a> -->
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
          </div>
          @endif
        </div>
      </header>
    </div>
    <br>

    <!-- Heading -->
    <h1 class=" text-center mb-xl-5">
      Benevenuto a <span class="text-primary">TECNOBUSINESS</span>.
      <br>
      Il tuo software per il tuo business
    </h1>

    <!-- Text -->
    <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">

    </p>

    <!-- Buttons -->
    <div class="text-center text-md-left pb-2 border-bottom ">
      <a href="overview.html" class="btn btn-primary shadow lift mr-1">
        View all pages <i class="fe fe-arrow-right d-none d-md-inline ml-3"></i>
      </a>
      <a href="docs/index.html" class="btn btn-primary-soft lift">
        Documentation
      </a>
      <br>
      <br>
    </div>
  </div>
  <br>




  <!-- START THE FEATURETTES -->


  <!-- START THE FEATURETTES -->
  <div class="container marketing" style="background-color: white;">

    <div class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading" style="color: royalblue;"> Tecnobusiness. <span class="text-muted">Ti lascierà
              a bocca aperta.</span></h2>
          <p class="lead">Tecnobusiness ultilizza programmi di contabilità e di economia
            per la tua azienda e per semplificare l'aspetto contabile.
            Potrai creare libri giornali, bilanci d'esercizio,Bilanci di fiscali, break even analisis, business plan, il
            budget e analisi degli spostamenti.
          </p>

        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
          </svg>

        </div>
      </div>
    </div>
  </div>



  <div class="container px-6 py-6 pb-2 border-bottom" id="icon-grid">
    <h2 class="pb-2 border-bottom">Ti spiego le mie funzionalità </h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#bootstrap" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Libri giornali</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#cpu-fill" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Bilancio d'esercizio</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#calendar3" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Bilancio fiscale </h4>
          <p>Paraof graph text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#home" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Break even analisis</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#speedometer2" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Budget</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#toggles2" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Analisi degli spostamenti</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#geo-fill" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Business plan</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em">
          <use xlink:href="#tools" />
        </svg>
        <div>
          <h4 class="fw-bold mb-0">Archivio fatture</h4>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
          <a href="#" class="btn btn-primary">
            continua
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="container py-3">

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Guarda i nostri piani mensili</h1>
      <p class="fs-5 text-muted">Scegli il piano più addatto alla tua attività </p>
    </div>
    </header>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">€0<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">€29<small class="text-muted fw-light">/mese</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">Enterprise</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">€49<small class="text-muted fw-light">/mese</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>30 users included</li>
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
            </div>
          </div>
        </div>
      </div>
  </div>
  <footer class="mt-6 mb-6" style="background-color: royalblue;">
    <div class="container text-center">
      <p style="color: white;">@ Copyright 2021</p>
      <p>fdfdsfds</p>
    </div>
  </footer>

</body>

</html>