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
    <nav class="navbar navbar-dark navbar-expand-sm color4">
      <div class="container-fluid">

        <div class="justify-content-start">
          <a class="navbar-brand ft-color1">InvenTrack</a>
        </div>

        <button class="navbar-toggler ft-color1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <div class="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php //if (request()->session()->exists('login')) { ?>  
                <li class="nav-item my-1">        
                  <a class="btn c-btn btn-sm ms-2 d-flex justify-content-center align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#modalTambahBarang">
                    <i class="fa-solid fa-plus me-1"></i> Tambah
                  </a>
                </li>
                <li class="nav-item my-1">
                  <a class="btn c-btn btn-sm ms-2 d-flex justify-content-center align-items-center" type="button">
                    <i class="fa-solid fa-table-list me-1"></i> Rekap
                  </a>
                </li>
              <?php //} else { ?>
                <li class="nav-item my-1">
                  <a class="btn c-btn btn-sm ms-2 d-flex justify-content-center align-items-center" type="button" data-bs-toggle="modal" data-bs-target="#modalLoginAdmin">
                    <i class="fa-solid fa-circle-user me-1"></i> Admin
                  </a>
                </li>
              <?php //} ?>
            </ul>
          </div>

          <div class="ms-2">
            <form class="d-flex input-group input-group-sm" action="#">
              <input class="form-control" type="search" placeholder="Cari" aria-label="Search">
              <button class="btn c-btn btn-sm" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
                Cari
              </button>
            </form>
          </div>
        </div>

      </div>
    </nav>
    {{-- End Navbar --}}

    <div>
        {{-- Start Content --}}
        @yield('content')
        {{-- End  Content --}}
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="modalLoginAdmin" tabindex="-1" aria-labelledby="modalLoginAdmin" aria-hidden="true">
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
                <input type="password" class="form-control form-control-sm" id="password" placeholder="Masukkan Password">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn c-btn btn-sm">
              <i class="fa-solid fa-circle-user me-1"></i>Masuk
            </button>
          </div>
            </form> 
            {{-- form --}}
        </div>
      </div>
    </div>

    <div class="modal fade" id="modalTambahBarang" tabindex="-1" aria-labelledby="modalLoginTambahBarang" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Tambah Barang Baru</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            {{-- form --}}
            <form action="#"> 
              <div class="mb-3">
                <select id="jenis_barang" class="form-select form-select-sm" aria-label="Jenis Barang" required>
                  <option selected disabled>Pilih Jenis Barang</option>
                  <option value="0">Barang Modal</option>
                  <option value="1">Barang Habis Pakai</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control form-control-sm" id="nama_barang" placeholder="Masukkan nama barang" required>
              </div>
              <div class="mb-3">
                <label for="merk_barang" class="form-label">Merk Barang</label>
                <input type="text" class="form-control form-control-sm" id="merk_barang" placeholder="Masukkan merk barang" required>
              </div>
              <div class="mb-3">
                <label for="stok_barang" class="form-label">Stok Barang</label>
                <input type="number" class="form-control form-control-sm" id="stok_barang" placeholder="Masukkan stok barang" min="0" required>
              </div>
              <div class="mb-3">
                <label for="satuan_stok" class="form-label">Satuan Stok</label>
                <input type="text" class="form-control form-control-sm" id="satuan_stok" placeholder="Masukkan satuan stok" required>
              </div>
              <div class="mb-3 input-group">
                <input type="file" class="form-control form-control-sm" id="path_foto" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn c-btn btn-sm">
              <i class="fa-solid fa-plus me-1"></i>Tambah
            </button>
          </div>
            </form> 
            {{-- form --}}
        </div>
      </div>
    </div>
    {{-- Modal --}}
     
    {{-- Call SweetAlert --}}
    @include('sweetalert::alert')
    {{-- Call Font Awesome --}}
    <script src="https://kit.fontawesome.com/c2b9b7aca3.js" crossorigin="anonymous"></script>
    {{-- Call Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>