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
                  Survey
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
          <h3 class="box-title">Data Survey</h3>
          <div class="box-tools pull-right">
            <div class="has-feedback">
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <a class="btn btn-default btn-sm" href="<?=url('administrator/survey/tambah')?>"><i class="fa fa-plus"></i> Tambah Survey</a>

          <table class="table table-bordered table-striped" style="margin: 5px 0">
            <thead>
            <tr>
              <th width="10%">No</th>
              <th width="35%">Nama Survey</th>
              <th width="20%">Suka</th>
              <th width="20%">Tidak Suka</th>
              <th width="15%">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach ($survey as $srv) {?>
            <tr>
              <td><?=$i++?></td>
              <td>{{$srv->nama_survey}}</td>
              <td><?=$srv->suka?></td>
              <td><?=$srv->tdk_suka?></td>
              <td>
                <a href="<?=url('administrator/survey/'.$srv->id_survey)?>" class="btn btn-info"> <i class="fa fa-pencil"></i></a>
                <a href="<?=url('administrator/survey/hapus/'.$srv->id_survey)?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
              </td>
            </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
@endsection