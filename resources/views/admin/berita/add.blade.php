@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i> Beranda
              </li>
              <li>Berita dan Promo</li>
              <li class="active">Tambah</li>
          </ol>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Berita atau Promo</h3>
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
        <form role="form" method="post" action="<?=url('administrator/berita-promo/tambah')?>" enctype="multipart/form-data">
        <?=csrf_field()?>
          <div class="box-body">
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul.." required>
            </div>
            <div class="form-group">
              <label>Jenis</label>
              <select class="form-control" name="jenis" required>
                <option value="event">Event</option>
                <option value="promo">Promo</option>
              </select>
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control" required>

              <p class="help-block">Max. 1 MB File Image</p>
            </div>
            <div class="form-group">
              <label >Isi</label>
              <textarea class="form-control teks" name="teks" required placeholder="Masukkan Isi.."></textarea>
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