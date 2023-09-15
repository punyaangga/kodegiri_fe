@extends('layout.main')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Document Management</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{ route('documentManagement.create') }}">
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="plus"></i>
            Tambah Data Dokumen
            </button>
        </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Daftar Dokumen</h6>
            <div class="dropdown mb-2">
              <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th class="pt-0" style="color:black;"><center><b>No</b></center></th>
                  <th class="pt-0" style="color:black;"><center><b>Judul</b></th>
                  <th class="pt-0" style="color:black;"><center><b>Konten</b></th>
                  <th class="pt-0" style="color:black;"><center><b>Aksi</b></th>
                </tr>
              </thead>
              <tbody>


                <tr>
                    <td>1</td>
                    <td>tes</td>
                    <td>coba</td>
                    <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                            <a href="#" class="btn btn-sm btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                    </td>
                </tr>

              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

@endsection
