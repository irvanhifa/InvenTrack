@extends('layouts.master')

@section('content')
	<div class="container-fluid mt-2 mb-2">
		<div class="row g-0 d-flex justify-content-center">

			{{-- Display Card --}}
			@foreach ($daftar_barang as $barang)
				<div class="col-auto mx-2 mb-2">
					<div class="card" style="width: 15.5rem;">
						<img src="{{$barang->path_foto}}" class="card-img-top" alt="{{$barang->nama}}">
						<div class="card-body">
							<h5 class="card-title">{{$barang->nama}} - {{$barang->merk}}</h5>
							<p class="card-text">
								<div class="row">
									<div class="col-6">
										<span class="badge text-bg-primary text-wrap mb-1">
											{{$barang->merk}}
										</span>
										<span class="badge text-bg-primary text-wrap">
											{{($barang->jenis==0)?"Barang Modal":"Barang Habis Pakai"}}
										</span><br>
									</div>
									<div class="col-6">
										<p class="text-end">
											Stok <br>
											<b class="fs-5">{{$barang->stok}}</b> /{{$barang->satuan_stok}}
										</p>
									</div>
								</div>
							</p>
							<div class="row d-flex justify-content-center">
								<div class="col-auto">
									<a href="#" class="btn btn-primary btn-sm">
										{{($barang->jenis==0)?"Peminjaman":"Penggunaan"}}
									</a>
								</div>
								<div class="col-auto">
									<a href="#" class="btn btn-primary btn-sm">Ubah Stok</a>
								</div>
							</div>
						</div>
					</div>
				</div>
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