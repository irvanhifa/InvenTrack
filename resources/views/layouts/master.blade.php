<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InvenTrack</title>
    {{-- Call Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Custom Style CSS --}}
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
  </head>
  <body>
    
    {{-- Navbar --}}
    <nav class="navbar navbar-light color4">
      <div class="container-fluid">
        <div class="justify-content-start">
          <a class="navbar-brand ft-color1">InvenTrack</a>
        </div>
        <div class="justify-content-end d-flex">
          <form class="d-flex" action="#">
            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn c-btn" type="submit">Cari</button>
          </form>
          <button class="btn c-btn ms-2" type="button" data-bs-toggle="modal" data-bs-target="#modalLoginAdmin">
            Admin
          </button>
        </div>
      </div>
    </nav>
    {{-- End Navbar --}}

    <div>
        {{-- Start Content --}}
        @yield('content')
        {{-- End  Content --}}
    </div>

    {{-- Login Modal --}}
    <div class="modal fade" id="modalLoginAdmin" tabindex="-1" aria-labelledby="modalLoginAdminLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Masuk sebagai Admin</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- form --}}
            <form action="#"> 
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn c-btn">Masuk</button>
          </div>
            </form> 
            {{-- form --}}
        </div>
      </div>
    </div>
    {{-- End Login Modal --}}
     
    {{-- Call SweetAlert --}}
    @include('sweetalert::alert')
    {{-- Call Font Awesome --}}
    <script src="https://kit.fontawesome.com/c2b9b7aca3.js" crossorigin="anonymous"></script>
    {{-- Call Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    {{-- End Call Bootstrap JS --}}
  </body>
</html>