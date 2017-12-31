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
                  Edit
              </li>
          </ol>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Tenan</h3>
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
        <form role="form" method="post" action="<?=url('administrator/tenan/edit')?>" enctype="multipart/form-data">
          <?=csrf_field()?>
          <input type="hidden" name="id_tenan" value="<?=$detail->id_tenan?>">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Tenant</label>
              <input type="text" class="form-control" name="nama" value="<?=$detail->nama?>" placeholder="Masukkan Nama Tenan..">
            </div>
            <div class="form-group">
              <label>Kategori</label>
              <select class="form-control" name="status" required>
                <option value="show" <?php if ($detail->status =='show')echo 'selected';?>>Show</option>
                <option value="hide" <?php if ($detail->status =='hide')echo 'selected';?>>Hide</option>
              </select>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="rnb" <?php if ($detail->kategori =='rnb')echo 'selected';?>>R & B</option>
                <option value="retails" <?php if ($detail->kategori =='retails')echo 'selected';?>>Retails</option>
                <option value="services" <?php if ($detail->kategori =='services')echo 'selected';?>>Services</option>
                <option value="support" <?php if ($detail->kategori =='support')echo 'selected';?>>Support</option>
              </select>
            </div>
            <div class="form-group">
              <label>Gambar Logo</label>
              <input type="file" name="logo" class="form-control">
              <span>*Input untuk mengganti</span>
              <p class="help-block">Max. 1 MB File Image</p>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Gambar Map</label>
              <input type="file" name="map" class="form-control">
              <span>*Input untuk mengganti</span>
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