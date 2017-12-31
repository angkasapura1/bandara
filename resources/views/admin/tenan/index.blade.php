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
                  Tenant
              </li>
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
          <h3 class="box-title">Daftar Tenant</h3>
          <div class="box-tools pull-right">
            <div class="has-feedback">
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-default btn-sm" href="<?=url('administrator/tenan/tambah')?>"><i class="fa fa-plus"></i> Tambah Tenant</a>
          <div class="pull-right">
            <?=$tenan->firstItem().'-'.$tenan->lastItem().'/'.$tenan->total()?>
            <div class="btn-group">
              <a href="<?=$tenan->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
              <a href="<?=$tenan->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!-- /.btn-group -->
          </div>
          <table class="table table-bordered table-striped" style="margin: 5px 0">
            <thead>
            <tr>
              <th width="5%">No</th>
              <th width="8%">Logo</th>
              <th width="50%">Nama</th>
              <th width="17%">Status</th>
              <th width="20%">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach ($tenan as $tenans) {?>
            <tr>
              <td><?=$i++?></td>
              <td><img src="<?=asset('images/logo/thumb/'.$tenans->logo)?>" class="img-responsive" alt="Logo"></td>
              <td><?=$tenans->nama?></td>
              <td><label class="label label-warning"><?=ucfirst($tenans->status)?></label></td>
              <td>
                <a href="<?=url('administrator/tenan/'.$tenans->id_tenan)?>" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
                <a href="<?=url('administrator/tenan/hapus/'.$tenans->id_tenan)?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <tr>
              <th>No</th>
              <th>Logo</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            </tfoot>
          </table>
          <div class="pull-right">
            <div class="pull-right">
            <?=$tenan->firstItem().'-'.$tenan->lastItem().'/'.$tenan->total()?>
            <div class="btn-group">
              <a href="<?=$tenan->previousPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></a>
              <a href="<?=$tenan->nextPageUrl()?>" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></a>
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