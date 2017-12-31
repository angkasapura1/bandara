@extends('index')

@section('content')
<div class="row" style="padding-bottom: 0px;">      
    <div class="col s12" style="padding: 0px;">
        <div class="row" style="padding-bottom: 0px;">                  
            <div class="col s12" style="padding-bottom: 0px;">
                <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">equalizer</i>PROMO & EVENTS</div>
                <div class="card-panel">
                    <div class="hidden-scrollbar">
                        <div class="inner-like">
                            @foreach($promo as $prm)
                            <div class="row">
                                <div class="col m3">
                                    <img src="{{asset('images/gambar/'.$prm->gambar)}}" class="responsive-img" alt="">
                                </div>
                                <div class="col m9">
                                    <h5>{{ucwords($prm->judul)}}</h5><hr>
                                    <p><?=ucfirst($prm->teks)?></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection