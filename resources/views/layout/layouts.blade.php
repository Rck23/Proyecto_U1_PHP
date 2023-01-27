<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página juntos</title>


    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/estiloYo.css')}}">



    <script src="{{asset('js/mdb.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" style="background-color: #000;">
          <div class="d-flex justify-content-center align-items-center">
            <button
              class="navbar-toggler bg-light m-3"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            ><i class="bi bi-list"></i></button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link text-white" aria-current="page" href="http://127.0.0.1:8000/"><strong>Inicio</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="http://127.0.0.1:8000/login">Inicio de sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="http://127.0.0.1:8000/formulario">Crear cuenta</a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('https://i.natgeofe.com/n/6c02ad5a-977b-4f12-b9c0-02ffb0736e07/metropolitan-cathedral-zocalo-mexico-city_16x9.JPG');
            height: 400px;
          "
        >
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Esta es una</h1>
                <h4 class="mb-3">página</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                >Super chafa</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <div class="container mt-5 mb-5">
        <h1>@yield('titulo')</h1>
        <hr class="hr">
        @yield('contenido')
      </div>


      <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #000;">

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Holi:
            <a class="text-white" href="https://github.com/Rck23">Ulises.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>

</body>
</html>
