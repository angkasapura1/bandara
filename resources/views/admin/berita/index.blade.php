@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li class="active">
                  <i class="fa fa-dashboard"></i> Beranda
              </li>
              <li>Berita dan Promo</li>
          </ol>
      </div>
  </div>
  @if (session('pesan'))
  <div class="row">
      <div class="col-md-12">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5 style="margin: 0"> <strong> {{ session('pesan') }} </strong></h5>
          </div>
      </div>
  </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Daftar Berita dan Promo</h3>
          <div class="box-tools pull-right">
            <div class="has-feedback">
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-default btn-sm" href="<?=url('administrator/berita-promo/tambah')?>"><i class="fa fa-plus"></i> Tambah Berita atau Promo</a>
          <div class="pull-right">
            <?=$berita->firstItem().'-'.$berita->lastItem().'/'.$berita->total()?>
            <div class="btn-group">
              <a href="<?=$berita->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
              <a href="<?=$berita->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!-- /.btn-group -->
          </div>
          <table class="table table-bordered table-striped" style="margin: 5px 0">
            <thead>
            <tr>
              <th width="5%">No</th>
              <th width="10%">Gambar</th>
              <th width="50%">Judul</th>
              <th width="15%">Jenis</th>
              <th width="20%">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach ($berita as $beritas) {?>
            <tr>
              <td><?=$i++?></td>
              <td><img src="<?=asset('images/gambar/thumb/'.$beritas->gambar)?>" class="img-responsive" alt="Logo"></td>
              <td><?=$beritas->judul?></td>
              <td><label class="label label-warning"><?=ucfirst($beritas->jenis)?></label></td>
              <td>
                <a href="<?=url('administrator/berita-promo/'.$beritas->id_berita)?>" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
                <a href="<?=url('administrator/berita-promo/hapus/'.$beritas->id_berita)?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
              <th width="5%">No</th>
              <th width="10%">Gambar</th>
              <th width="50%">Judul</th>
              <th width="15%">Status</th>
              <th width="20%">Aksi</th>
            </tr>
            </tfoot>
          </table>
          <div class="pull-right">
            <div class="pull-right">
            <?=$berita->firstItem().'-'.$berita->lastItem().'/'.$berita->total()?>
            <div class="btn-group">
              <a href="<?=$berita->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
              <a href="<?=$berita->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
            </div>
          </div>
            <!-- /.btn-group -->
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection