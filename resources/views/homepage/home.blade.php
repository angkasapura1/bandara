<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Angkasa Pura</title>
  <link rel="shortcut icon" href="assets/images/icon.ico" />

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


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
          height:280px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }
        .hidden-scrollbar .inner-search {
          height:300px;
          overflow:auto;
          margin:15px -300px 15px 15px;
          padding-right:300px; /* Samakan dengan besar margin negatif */
        }

    </style>
<!-- scroll recent -->
<!-- autocomplete -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css'>
<!-- autocomplete End -->
<link rel="stylesheet" type="text/css" href="css/search.css">

</head>
<body style="overflow-x: hidden;">
<!-- slider -->
<script src="js/jssor.slider-26.7.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              // $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1418;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color: rgb(255, 255, 255);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
<!-- slider END -->

  
    <div class="responsive-img initialized">
      <img src="assets/images/header2.png" class="responsive-img">
    </div>
  

  <div class="row" style="padding-bottom: 0px;">      
        <div class="col s9" style="padding: 0px;">
          <div class="row" style="padding-bottom: 0px;">                  
          <div class="col s12" style="padding-bottom: 0px;">
            <div class="collapsible-header white-text" style="background-color: #5DAC12FF; margin-top: 9px;"><i class="material-icons white-text">home</i>HOME</div>
                   <!-- slider -->
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                 <img data-u="image" src="{{asset('assets/images/index.png')}}" />
            </div>
        </div>


    </div>
                   <!-- slider end -->
          </div>
        </div>
        </div>

        <!-- slider -->
        <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

        <!-- slider -->
        <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    <script type="text/javascript">
    var vid1 = document.getElementById("video1");
    
    function enableAutoplay() { 
    vid1.autoplay = true;
    vid1.load();
  }
  </script>
        <!-- slider end -->

<div class="col s3 ">          
            <div class="row">
                <div class="row">
                <div class="col m12">                                                                                                                             
                        <div class="" style="padding: 0px; padding-top: 0px;">
                               <div class="card-content">  
                                <ul class="collection">
                                        <li class="collection-item" style="background-color: #5DAC12FF;">
                                            <a href="#"><h6 class="white-text" cstyle="margin-left: 24px; margin-right: 24px;"><b>PROMO & EVENTS</b></h6></a>
                                        </li>
                                            
                                        <div class='hidden-scrollbar'>
                                            <div class='inner'>
                                             <div class="row">
                                            <div class="col m3">
                                                <img src="assets/images/img1.jpg" class="responsive-img" alt="">
                                            </div>
                                            <div class="col m9">
                                                <h5>Promo</h5><hr>                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col m3">
                                                <img src="assets/images/img1.jpg" class="responsive-img" alt="">
                                            </div>
                                            <div class="col m9">
                                                <h5>Promo</h5><hr>                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col m3">
                                                <img src="assets/images/img1.jpg" class="responsive-img" alt="">
                                            </div>
                                            <div class="col m9">
                                                <h5>Promo</h5><hr>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col m3">
                                                <img src="assets/images/img1.jpg" class="responsive-img" alt="">
                                            </div>
                                            <div class="col m9">
                                                <h5>Promo</h5><hr>
                                            </div>
                                        </div>
                                            
                                            </div>
                                        </div>
                                                                                  
                                    </ul>




                                    <ul class="collection">
                                        <li class="collection-item" style="background-color: #5DAC12FF;">
                                            <a href="#"><h6 class="white-text" cstyle="margin-left: 24px; margin-right: 24px;"><b>POPULAR</b></h6></a>
                                        </li>
                                            
                                        <div class='hidden-scrollbar'>
                                            <div class='inner'>
                                            <li class="collection-item dismissable">
                                                <div><a href="#">Alvin</a><a href="#!" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            <li class="collection-item dismissable">
                                                <div><a href="#">Alvin</a><a href="#!" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            <li class="collection-item dismissable">
                                                <div><a href="#">Alvin</a><a href="#!" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            <li class="collection-item dismissable">
                                                <div><a href="#">Alvin</a><a href="#!" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            <li class="collection-item dismissable">
                                                <div><a href="#">Alvin</a><a href="#!" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            <li class="collection-item dismissable">
                                                <div><a href="#">Alvin</a><a href="#!" class="secondary-content">
                                                    <i class="material-icons">grade</i></a>
                                                </div>
                                            </li>
                                            
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
                          <a href="tenan.html" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">  
                                    <i class="material-icons small white-text">search</i>
                                    <p class="promo-caption white-text"><b>WAY FINDING</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Flight Shedule', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="flight.html" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                    <i class="material-icons small white-text">flight_takeoff</i>
                                    <p class="promo-caption white-text"><b>FLIGHT SCHEDULE</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="survey.html" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                    <i class="material-icons small white-text">view_list</i>
                                    <p class="promo-caption white-text"><b>SURVEY</b></p>                
                            </div>
                            </a>
                        </div>

                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Survey', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="promo-event.html" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">   
                                    <i class="material-icons small white-text">style</i>
                                    <p class="promo-caption white-text"><b>PROMO & EVENT</b></p>                
                            </div>
                            </a>
                        </div>
                        
                                                        
                        <div class="col s2 waves-effect waves-light" onclick="Materialize.toast('Airport Profile', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="profile.html" title="">
                           <div class="blue darken-4 z-depth-5" style="text-align: center; padding-top: 15px; padding-bottom: 1px; ">                         
                                    <i class="material-icons small white-text">business</i>
                                    <p class="promo-caption white-text"><b>AIRPORT PROFILE</b></p>                
                            </div>
                          </a>
                        </div>

                        <div class="col s2 waves-effect waves-light"onclick="Materialize.toast('Welcome', 4000,'',function(){alert('Your toast was dismissed')})">
                          <a href="contact.html" title="">
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='js/vpqzwe.js'></script>
<script  src="js/index.js"></script>
<!-- Autocomplete end -->


    <!-- preloading -->
      <script type="text/javascript" src="js/putar.js" ></script>

    <!-- preloading END -->
  <!--  Scripts-->
  <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/hammer.min.js"></script>

  <!-- tenan -->
     <!-- jQuery -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>


  </body>
</html>
