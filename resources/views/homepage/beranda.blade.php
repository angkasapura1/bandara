@extends('index' ,['news' =>$news,'profil'=>$profil])

@section('content')
<div class="row">
  <div class="col s12">
      <div class="card-panel grey lighten-5 z-depth-1" style="padding: 2px;">
			<div class="row valign-wrapper" style="margin-bottom: 0px; align-content: center;">
			      <img src="{{asset('home/assets/images/img1.jpg')}}" class="responsive-img" style="width: 100%; height: 537px;" >
			</div>
		</div>
	</div>
</div>
@endsection