@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li >
                  <i class="fa fa-dashboard"></i> Beranda
              </li>
              <li class="active">
                  Profil Angkasa Pura
              </li>
          </ol>
      </div>
  </div>

  @if (session('pesan'))
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p>{{ session('pesan') }}</p>
      </div>
    </div>
  </div>
  @endif
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Profil Angkasa Pura</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
          <!-- form start -->
          <form class="form-horizontal" action="<?=url('administrator/profil')?>" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama" value="<?=$data->nama?>" placeholder="Masukkan Nama.." required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Teks</label>

              <div class="col-sm-9">
                <textarea class="form-control" name="teks"><?=$data->teks?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Gambar</label>

              <div class="col-sm-9">
                <input type="file" name="gambar" class="form-control" required>
                * Input untuk mengganti gambar
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger" style="margin-bottom: 50px ">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!-- end. col6 -->
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Kontak Angkasa Pura</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
          <!-- form start -->
          <form class="form-horizontal" action="<?=url('administrator/kontak')?>" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Nama Kontak</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="nama_kontak" value="<?=$data->nama_kontak?>" placeholder="Masukkan Nama Kontak.." required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Posisi Kontak</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="posisi_kontak" value="<?=$data->posisi_kontak?>" placeholder="Masukkan Posisi Kontak.." required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">E-mail</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" name="email" maxlength="50" value="<?=$data->email?>" placeholder="Masukkan Email.." required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Nomor Telpon</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" name="telpon" maxlength="50" value="<?=$data->telpon?>" placeholder="Masukkan Nomor Telpon.." required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Link Facebook</label>

              <div class="col-sm-9">
                <input type="url" name="fb" class="form-control" value="<?=$data->fb?>">
                *boleh dikosongkan
              </div>
            </div>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Link Youtube</label>

              <div class="col-sm-9">
                <input type="url" name="youtube" class="form-control"  value="<?=$data->youtube?>">
                *boleh dikosongkan
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger" style="margin-bottom: 50px ">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div><!-- end col6 -->
  </div>
</section>
@endsection