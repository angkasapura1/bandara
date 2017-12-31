@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
      <div class="col-md-12">
          <div class="alert alert-warning alert-dismissible">
            <h4><i class="icon fa fa-warning"></i> Hapus Data ?</h4>
            <p>Data tidak dapat dikembalikan setelah terhapus.</p>
            <p>
            <a href="{{url('administrator/berita-promo')}}" class="btn btn-primary">Batal</a>
            <a href="{{url('administrator/berita-promo/delete/'.$id)}}" class="btn btn-danger" style="margin-left: 10px;">Hapus</a>
            </p>
          </div>
      </div>
  </div>
</section>
@endsection