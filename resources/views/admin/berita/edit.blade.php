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
              <li class="active">Edit</li>
          </ol>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Berita atau Promo</h3>
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
        <form role="form" method="post" action="<?=url('administrator/berita-promo/edit')?>" enctype="multipart/form-data">
        <?=csrf_field()?>
          <input type="hidden" name="id_berita" value="<?=$berita->id_berita?>">
          <div class="box-body">
            <div class="form-group">
              <label>Judul</label>
              <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul.." value="<?=$berita->judul?>" required>
            </div>
            <div class="form-group">
              <label>Jenis</label>
              <select class="form-control" name="jenis" required>
                <option value="event" <?php if($berita->jenis=='event')echo 'selected' ?>>Event</option>
                <option value="promo" <?php if($berita->jenis=='promo')echo 'selected' ?>>Promo</option>
              </select>
            </div>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" name="gambar" class="form-control">
              <span>* Input gambar untuk mengganti</span>

              <p class="help-block">Max. 1 MB File Image</p>
            </div>
            <div class="form-group">
              <label >Isi</label>
              <textarea class="form-control teks" name="teks" required placeholder="Masukkan Isi.."><?=$berita->teks?></textarea>
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