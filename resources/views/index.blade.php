<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Angkasa Pura</title>
  <link rel="shortcut icon" href="{{asset('home/assets/images/icon.ico')}}" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{asset('home/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{asset('home/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

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
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/animasi.css')}}">
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
        .hidden-scrollbar .inner-like {
          height:500px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
      }
      .hidden-scrollbar .inner-search {
          height:370px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }
    </style>

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
  
    <div class="responsive-img initialized">
      <img src="{{asset('home/assets/images/header2.png')}}" class="responsive-img">
    </div>
  
    @yield('content')
    


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


    <!-- preloading -->
      <script type="text/javascript" src="{{asset('home/js/putar.js')}}" ></script>

    <!-- preloading END -->
  <!--  Scripts-->
  
  <script src="{{asset('home/js/materialize.js')}}"></script>
  <script src="{{asset('home/js/init.js')}}"></script>
  <script src="{{asset('home/js/hammer.min.js')}}"></script>

  <?php  shell_exec('run.cmd');?>

  </body>
</html>
