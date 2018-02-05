<!DOCTYPE html>
<html lang="en">
<head>
<!-- -keyboard -->

    <!-- -keyboard -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Angkasa Pura</title>
  <link rel="shortcut icon" href="{{asset('home/assets/images/icon.ico')}}" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('home/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('home/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
  

<!-- background -->
<style type="text/css" media="screen">
    body:before {
        content: "";
        position: fixed;
        z-index: -1;
        /*background-size:cover;*/
        /*background-position:center top;*/
        display: block;
        /*background-image: url(assets/images/bg.jpg); */
        background-color: #ffffff;
        width: 100%;
        height: 1200px;
        filter: blur(1px) ;
        -webkit-filter: blur(2px) ;
      }
</style>
<!-- animasi css -->
    <!-- <link rel="stylesheet" type="text/css" href="css/animasi.css"> -->
<!-- enddddd animasi -->

<!-- scroll recent -->
    <style type="text/css">
        .hidden-scrollbar {
          color:#26a69a;  
          overflow:hidden;
          text-align:justify;    
        }

        .hidden-scrollbar .inner {
          height:150px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }
        .hidden-scrollbar .inner-search {
          height:200px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }

    </style>
<!-- scroll recent -->
<!-- autocomplete -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css'> -->
<!-- autocomplete End -->
<link rel="stylesheet" type="text/css" href="{{asset('home/css/search.css')}}">

</head>
  <script type="text/javascript">
    $(document).ready(function()
{ 
       $(document).bind("contextmenu",function(e){
              return false;
       }); 
})
</script>
<body style="overflow-x: hidden;">
<!-- slider -->
<!-- <script src="{{asset('home/js/jssor.slider-26.7.0.min.js')}}" type="text/javascript"></script> -->

  
    <div class="responsive-img initialized">
      <img src="{{asset('home/assets/images/header2.png')}}" class="responsive-img">
    </div>
  
            <div class="row" style="padding-bottom: 0px;">      
              <div class="col s9" style="padding: 0px;">
                  <div class="row" style="padding-bottom: 0px;">                  
                      <div class="col s12" style="padding-bottom: 0px;">
                        <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">map</i>MAPS</div>
                            <div style=" height: 700px; background-color: #EBEBEBFF"; margin-left: "30px"; >
                                <video autoplay loop muted width="100%" height="700px;">
                                    <source src="{{asset('images/gambar/map3d.mp4')}}" type="video/mp4">
                                </video>                                
                            </div>
                      </div>
                  </div>
            </div>
  <!-- slider end -->

    <div class="col s3 ">          
            <div class="row">
                <div class="row">
                <div class="col m12"> 
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                              <div class="collapsible-header white-text" style="background-color: #16A2E7FF;"><i class="material-icons white-text">search</i>Search</div>
                                  <div class="">
                                       <div class="card-content">                                                                                                              
                                            <ul class="collection">                                                                                                 
                                                <li class="collection-item" style="border: 5px;"> 
                                                      <a class='dropdown-button btn' href='#' data-activates='dropdown1' style="width: 101%; background-color: #9CCE6C; color: black;">Select Category  <i class="material-icons">arrow_drop_down</i></a> <hr> <!-- Dropdown Structure -->
                                                          <ul id='dropdown1' class='dropdown-content'>
                                                            <li><a href="{{url('tenan/all')}}"><i class="material-icons">home</i>Semua Kategori</a></li>
                                                            <li><a href="{{url('tenan/rnb')}}"><i class="material-icons">view_module</i>F & B</a></li>
                                                            <li><a href="{{url('tenan/retails')}}"><i class="material-icons">airplay</i>Retails</a></li>
                                                            <li><a href="{{url('tenan/services')}}"><i class="material-icons">apps</i>Services</a></li>
                                                            <li><a href="{{url('tenan/supports')}}"><i class="material-icons">beenhere</i>Supports</a></li>
                                                          </ul>                                                   
                                                     <input type="text" id="myInput" onkeyup="myFunction()" placeholder="  Type Text..." class="white" style="font-size: 24px;"> 
                                                     <!-- keyboard<a href="{{asset('images/gambar/keyboard.lnk')}}">Show Keyboard</a> -->
                                                   <!-- <button onclick="<?php //exec('C:\Windows\System32\osk.exe') ?>">aassssssss </button> -->


                                                    
                                                <div class='hidden-scrollbar'>
                                                    <div class='inner-search'>
                                                        <ul id="myUL" class="collection" style="margin-top: 0px; margin-bottom: 0px;">
                                                          @foreach($data as $video)  
                                                            <li><a href="{{url('tenan/'.$kategori.'/'.$video->id_tenan)}}">{{$video->nama}}</a></li>
                                                          @endforeach
                                                        </ul>                                                                                   
                                                    </div>
                                                </div>
                                                                                          
                                            </ul>
                                        </div>                      
                                  </div>
                            </li>
                        </ul>

                 <script>
                function myFunction() {
                    var input, filter, ul, li, a, img;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName("li");
                    for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("a")[0];
                        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";

                        }
                    }
                }
                </script>                      


                        <div class="" style="padding: 0px; padding-top: 0px;">
                               <div class="card-content">                                                                    
                                    <ul class="collection">
                                        <li class="collection-item" style="background-color: #16a2e7;">
                                            <a href="javascript:;"><h6 class="white-text" cstyle="margin-left: 24px; margin-right: 24px;"><b>POPULAR</b></h6></a>
                                        </li>
                                            
                                        <div class='hidden-scrollbar'>
                                            <div class='inner'>
                                            @foreach($populer as $pop)
                                            <a href="{{url('tenan/'.$kategori.'/'.$pop->id_tenan)}}"><li class="collection-item dismissable">
                                                <div>{{ucwords($pop->nama)}}<span class="secondary-content">
                                                    <i class="material-icons">grade</i></span>
                                                </div>
                                            </li>
                                            </a>
                                            @endforeach
                                            
                                            </div>
                                        </div>
                                                                                  
                                    </ul>
                                </div>                      
                        </div>

                </div>                
            </div>
        </div>         
</div>

  <!-- tombol navigasi -->
            <div class="footer" style="position: fixed; width: 100%; bottom:0px;">
                    <div class="row"> 
                    <div class="col m12">
                        <span class="white-text" style="padding: 0px;">
                          <marquee bgcolor="#0D47A1FF">
                            <H5>WELCOME TO SULTAN HASANUDDIN INTERNATIONAL AIRPORT MAKASSAR</H5>
                          </marquee>
                        </span>
                    </div>            
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Way Finding', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('tenan/all')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">  
                                    <i class="material-icons small white-text">search</i>
                                    <p class="promo-caption white-text"><b>WAY FINDING</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Flight Shedule', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('jadwal')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                <i class="material-icons small white-text">flight_takeoff</i>
                                <p class="promo-caption white-text"><b>FLIGHT SCHEDULE</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('survey')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                    <i class="material-icons small white-text">view_list</i>
                                    <p class="promo-caption white-text"><b>SURVEY</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('promo-event')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                <i class="material-icons small white-text">style</i>
                                <p class="promo-caption white-text"><b>PROMO & EVENT</b></p>                
                            </div>
                            </a>
                        </div>
                        
                                                        
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Airport Profile', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('profil')}}" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">
                              <i class="material-icons small white-text">business</i>
                              <p class="promo-caption white-text"><b>AIRPORT PROFILE</b></p>                
                            </div>
                          </a>
                        </div>

                        <div class="col s2 waves-effect waves-light"onclick="Materialize.toast('Welcome', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="{{url('contact')}}" title="">
                            <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">                          
                                    <i class="material-icons small white-text">contact_phone</i>
                                    <p class="promo-caption white-text"><b>CONTACT US</b></p>                                            
                            </div>
                          </a>
                        </div>
                   </div>                     
            </div>

<!-- tombol navigasi end -->

<!-- Autocomplete -->
<script src="{{asset('home/js/vpqzwe.js')}}"></script>
<script  src="{{asset('home/js/index.js')}}"></script>
<!-- Autocomplete end -->
<!-- preloading -->
<script type="text/javascript" src="{{asset('home/js/putar.js')}}" ></script>

    <!-- preloading END -->
  <!--  Scripts-->
<script src="{{asset('home/js/materialize.js')}}"></script>
<script src="{{asset('home/js/init.js')}}"></script>
<script src="{{asset('home/js/hammer.min.js')}}"></script>
<script type="text/javascript">
    var waktu = 30;
    $('body').on('click dblclick mousedown mouseenter mouseleave mousemove keypress',
        function(e){
            waktu = 30;
    });

    setInterval(function(){
        waktu = waktu - 1;
        if(waktu === 0){
            window.location.href="{{url('tenan/all')}}"
        }
    },1000);
</script>
  <!-- tenan -->
  <script>window.jQuery || document.write('<script src="{{asset('home/js/libs/jquery-1.7.min.js')}}">\x3C/script>')</script>


  </body>
</html>
