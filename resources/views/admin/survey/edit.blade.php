@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
      <div class="col-lg-12">
          <ol class="breadcrumb">
              <li >
                  <i class="fa fa-dashboard"></i> Beranda
              </li>
              <li>Survey</li>
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
          <h3 class="box-title">Edit Survey</h3>
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
        <form role="form" method="post" action="<?=url('administrator/survey/edit')?>" enctype="multipart/form-data">
          <?=csrf_field()?>
          <input type="hidden" name="id_survey" value="<?=$detail->id_survey?>">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Survey</label>
              <input type="text" class="form-control" name="nama_survey" value="<?=$detail->nama_survey?>" placeholder="Masukkan Survey..">
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