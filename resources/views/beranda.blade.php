@extends('layouts.master')

@section('content')
	<div class="container-fluid mt-2 mb-2">
		<div class="row g-0 d-flex justify-content-center">

			{{-- Display Card --}}
			@foreach ($daftar_barang as $barang)
				<div class="col-auto mx-2 mb-2">
					<div class="card" style="width: 16rem;">
						<img src="{{$barang->path_foto}}" class="card-img-top" alt="{{$barang->nama}}">
						<div class="card-body">
							<h5 class="card-title">{{$barang->nama}} - {{$barang->merk}}</h5>
							<p class="card-text">
								<div class="row">
									<div class="col-6">
										<span class="badge fw-normal c-bdg text-wrap mb-1">
											{{$barang->merk}}
										</span>
										<span class="badge fw-normal c-bdg text-wrap">
											{{($barang->jenis==0)?"Barang Modal":"Barang Habis Pakai"}}
										</span><br>
									</div>
									<div class="col-6">
										<p class="text-end">
											Stok <br> 
											<b class="fs-5">{{$barang->stok}}</b> {{$barang->satuan_stok}}
										</p>
									</div>
								</div>
							</p>
							<div class="row g-0 d-flex justify-content-center">
								<div class="col-auto me-1">
									<button href="#" class="btn c-btn btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{($barang->jenis==0)?"Peminjaman":"Penggunaan"}}{{$barang->id}}">
										<i class="fa-solid fa-right-from-bracket"></i>
										{{($barang->jenis==0)?"Peminjaman":"Penggunaan"}}
									</button>
								</div>
								<div class="col-auto">
									<button href="#" class="btn c-btn btn-sm"  data-bs-toggle="modal" data-bs-target="#modalUbahStok{{$barang->id}}">
										<i class="fa-solid fa-pen-to-square"></i> Ubah Stok
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- Modal --}}
				<div class="modal fade" id="modal{{($barang->jenis==0)?"Peminjaman":"Penggunaan"}}{{$barang->id}}" tabindex="-1" aria-labelledby="modal{{($barang->jenis==0)?"Peminjaman":"Penggunaan"}}" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5 text-center" id="exampleModalLabel">{{($barang->jenis==0)?"Peminjaman Barang Modal":"Penggunaan Barang Habis Pakai"}}</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								{{-- form --}}
								<form action="#"> 
									<div class="mb-3">
										<input type="number" class="form-control form-control-sm" id="id_barang" value="{{$barang->id}}" hidden>
									</div>
									<div class="input-group input-group-sm mb-3">
										<span class="input-group-text" id="nama-barang">Nama</span>
										<input type="text" class="form-control form-control-sm" id="nama_barang" value="{{$barang->nama}}" disabled>
									</div>
									<div class="input-group input-group-sm mb-3">
										<span class="input-group-text" id="merk-barang">Merk</span>
										<input type="text" class="form-control form-control-sm" id="merk_barang" value="{{$barang->merk}}" disabled>
									</div>
									<div class="input-group input-group-sm mb-3">
										<span class="input-group-text" id="stok-barang">Stok</span>
										<input type="text" class="form-control form-control-sm" id="stok_barang" value="{{$barang->stok}}" disabled>
										<span class="input-group-text" id="satuan-stok"> /{{$barang->satuan_stok}}</span>
									</div>
									<div class="mb-3">
										<label for="nama_peminjam" class="form-label">Nama Peminjam</label>
										<input type="text" class="form-control form-control-sm" id="nama_peminjam" placeholder="Masukkan nama peminjam" required>
									</div>
									<label for="jumlah_pinjam" class="form-label">Jumlah Peminjaman</label>
									<div class="input-group input-group-sm mb-3">
										<input type="number" class="form-control form-control-sm" id="jumlah_pinjam" placeholder="Masukkan jumlah peminjaman" min="0" required>
										<span class="input-group-text" id="satuan-stok"> /{{$barang->satuan_stok}}</span>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn c-btn btn-sm">
										<i class="fa-solid fa-floppy-disk"></i> Simpan
									</button>
								</div>
							</form> 
							{{-- form --}}
						</div>
					</div>
				</div>

				<div class="modal fade" id="modalUbahStok{{$barang->id}}" tabindex="-1" aria-labelledby="modalUbahStok" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Ubah Stok Barang</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								{{-- form --}}
								<form action="#"> 
									<div class="mb-3">
										<input type="number" class="form-control form-control-sm" id="id_barang" value="{{$barang->id}}" hidden>
									</div>
									<div class="input-group input-group-sm mb-3">
										<span class="input-group-text" id="nama-barang">Nama</span>
										<input type="text" class="form-control form-control-sm" id="nama_barang" value="{{$barang->nama}}" disabled>
									</div>
									<div class="input-group input-group-sm mb-3">
										<span class="input-group-text" id="merk-barang">Merk</span>
										<input type="text" class="form-control form-control-sm" id="merk_barang" value="{{$barang->merk}}" disabled>
									</div>
									<div class="input-group input-group-sm mb-3">
										<span class="input-group-text" id="stok-barang">Stok</span>
										<input type="text" class="form-control form-control-sm" id="stok_barang" value="{{$barang->stok}}" disabled>
										<span class="input-group-text" id="satuan-stok"> /{{$barang->satuan_stok}}</span>
									</div>
									<label for="jumlah_stok" class="form-label">Jumlah stok terbaru</label>
									<div class="input-group input-group-sm mb-3">
										<input type="number" class="form-control form-control-sm" id="jumlah_stok" placeholder="Masukkan jumlah stok baru" min="{{$barang->stok}}" value="{{$barang->stok}}" required>
										<span class="input-group-text" id="satuan-stok"> /{{$barang->satuan_stok}}</span>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn c-btn btn-sm">
										<i class="fa-solid fa-floppy-disk"></i> Simpan
									</button>
								</div>
							</form> 
							{{-- form --}}
						</div>
					</div>
				</div>
				{{-- End Modal --}}
			@endforeach
			{{-- End Display Card --}}

		</div>

		{{-- Pagination --}}
		<div class="row d-flex justify-content-center">
			<div class="col-auto m-2">
				{{ $daftar_barang->onEachSide(5)->links() }}
			</div>
		</div>
		{{-- End Pagination --}}

	</div>
@endsection