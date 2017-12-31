@extends('admin.index')

@section('content')
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Event Terbaru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            <?php foreach ($event as $brt) {?>

            <li class="item">
              <div class="product-img">
                <img src="<?=asset('images/gambar/thumb/'.$brt->gambar)?>" alt="Product Image" class="img-responsive">
              </div>
              <div class="product-info">
                <a href="<?=url('administrator/berita-promo/'.$brt->id_berita)?>" class="product-title"><?=$brt->judul?>
                <span class="label label-warning pull-right">Berita</span></a>
                <span class="product-description">
                  <?=$brt->created_at?>
                </span>
              </div>
            </li>
            <?php } ?>
            <!-- /.item -->
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="<?=url('administrator/berita-promo')?>" class="uppercase">Lihat Semua Event</a>
        </div>
        <!-- /.box-footer -->
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Promo Terbaru</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            <?php foreach ($promo as $prm) {?>

            <li class="item">
              <div class="product-img">
                <img src="<?=asset('images/gambar/thumb/'.$prm->gambar)?>" alt="Product Image" class="img-responsive">
              </div>
              <div class="product-info">
                <a href="<?=url('administrator/berita-promo/'.$prm->id_berita)?>" class="product-title"><?=$prm->judul?>
                <span class="label label-warning pull-right">Promo</span></a>
                <span class="product-description">
                  <?=$prm->created_at?>
                </span>
              </div>
            </li>
            <?php } ?>
            <!-- /.item -->
          </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href="<?=url('administrator/berita-promo')?>" class="uppercase">Lihat Semua Promo</a>
        </div>
        <!-- /.box-footer -->
      </div>
    </div>
  </div>
<!-- Main content -->
</section>
@endsection
