@extends('layout.main')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Edit Data Produk</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
      <div class="card">
        <div class="card-body">
            <div class="forms-sample">
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('title', $product->product_name) }}" placeholder="Masukkan Nama Produk">
                            @error('product_name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Produk</label>
                        <input type="text" class="form-control @error('product_qty') is-invalid @enderror" name="product_qty" value="{{ old('title', $product->product_qty) }}" placeholder="Masukkan Jumlah Produk">
                        @error('product_qty')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control @error('product_description') is-invalid @enderror" name="product_description" rows="5" placeholder="Masukkan Deskripsi Produk">{{ old('product_description', $product->product_description) }}</textarea>                 
                        @error('product_description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3" style="text-align: right;">
                        <a href="{{route('product.index')}}" class="btn btn-md btn-warning" >KEMBALI</a>
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
