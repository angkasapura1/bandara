@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li >
                  <i class="fa fa-dashboard"></i> Beranda
              </li>
              <li>Tenant</li>
              <li class="active">
                  Tambah
              </li>
          </ol>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Tenant</h3>
        </div>
        <!-- /.box-header -->
        @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        <!-- form start -->
        <form role="form" method="post" action="<?=url('administrator/tenan/tambah')?>" enctype="multipart/form-data">
        <?=csrf_field()?>
          <div class="box-body">
            <div class="form-group">
              <label>Nama Tenant</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Tenant.." required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status" required>
                <option value="show">Show</option>
                <option value="hide">Hide</option>
              </select>
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <select class="form-control" name="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="rnb">F & B</option>
                <option value="retails">Retails</option>
                <option value="services">Services</option>
                <option value="support">Support</option>
              </select>
            </div>
            <div class="form-group">
              <label>Gambar Logo</label>
              <input type="file" name="logo" class="form-control">

              <p class="help-block">Max. 1 MB File Image</p>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar Map</label>
              <input type="file" name="map" class="form-control" required>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary pull-right">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection