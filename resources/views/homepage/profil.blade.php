@extends('index')

@section('content')
<div class="row" style="padding-bottom: 0px;">      
    <div class="col s12" style="padding: 0px;">
        <div class="row" style="padding-bottom: 0px;">                  
            <div class="col s12" style="padding-bottom: 0px;">
                <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">equalizer</i>PROFILE</div>
                <div class="card-panel">
                    <div class="row">
                        <div class="col l4">
                          <img src="{{asset('images/profil/'.$profil->gambar)}}" class="responsive-img" alt="">
                        </div>
                        <div class="col l8">
                            <div class="row">
                                <div class="col s12">
                                    <div class="">
                                        <h5 class="blue-text">{{ucwords($profil->nama)}}</h5><hr>
                                        <span style="font-size: 17px;">{{ucfirst($profil->teks)}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                             
                </div>   
            </div>
        </div>
    </div>
</div>
@endsection