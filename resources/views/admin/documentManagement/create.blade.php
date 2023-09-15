@extends('layout.main')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Tambah Document</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <div class="forms-sample">
                <form action="#" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Judul Dokumen</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" placeholder="Masukkan Nama Produk">

                        <!-- error message untuk Nama Produk -->
                        @error('product_name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi Dokumen</label>
                        <textarea class="form-control @error('product_description') is-invalid @enderror" name="product_description" rows="5" placeholder="Masukkan Konten Post">{{ old('product_description') }}</textarea>

                        <!-- error message untuk Deskripsi Produk -->
                        @error('product_description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Signing File</label>
                        <input type="file" class="form-control" name="product_image">
                    </div>
                    <div class="mb-3" style="text-align: right;">
                        <a href="#" class="btn btn-md btn-warning" >KEMBALI</a>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    </div>

                </form>
            </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->
@include('partial.ckeditor')
@endsection
