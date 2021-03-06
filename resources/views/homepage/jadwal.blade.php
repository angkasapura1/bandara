@extends('index')

@section('content')
    <div class="row" style="padding-bottom: 0px;">      
        <div class="col s12 m12 l12" style="padding: 0px;">
            <div class="row" style="padding-bottom: 0px;">                  
                <div class="col l12 m12 s12" style="padding-bottom: 0px;">
                    <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">home</i>FLIGHT SCHEDULE</div>
                    <div class="col s12" style="height: 350px;">
                        <div class="card-panel grey lighten-5 z-depth-1" style="padding: 3px;">
                            <!-- <iframe  width="100%" height="625" src="https://hasanuddin-airport.co.id/id/terminal-kedatangan/index" frameborder="0" allowfullscreen></iframe> -->
                            <table> 
                                <thead>
                                    <tr class="green green lighten-4">
                                        <th style="padding-left:20px;" width="22%"> Airline</th>
                                        <th style="padding-left:15px;" width="16%">Flight</th>
                                        <th width="23%">Destination</th>
                                        <th width="11%">Time</th>
                                        <th width="15%">Gate</th>
                                        <th width="25%">Remark</th>
                                    </tr>
                                </thead>
                            </table>

                            <div class="hidden-scrollbar">
                                <div class="inner-like">
                                    <table class="bordered">
                                        <tbody id="isi">
                                          <tr>
                                            <td colspan="6" style="text-align:center">Loading..</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>        
    </div>
    <script type="text/javascript">

    setInterval(function(){
        $.ajax({ 
           type: "GET",
           url: "{{url('flight')}}",
           success: function(datas){  
           var hasil = $.parseJSON(datas); 
           $('#isi').html(' ');
                for(var i=0;i<20;i++){
                    var gambar = null;
                    if(hasil[i].banner.banner !=null){gambar = '<img src="'+hasil[i].banner.banner+'" width="200px"/>';}else{gambar = hasil[i].airline;}
                    $('#isi').append('<tr>'+
                                        '<td style="width:400px;">'+gambar+'</td>'+
                                        '<td>'+hasil[i].callsign2+'</td>'+
                                        '<td>'+hasil[i].airport_name+'</td>'+
                                        '<td>'+hasil[i].waktu+'</td>'+
                                        '<td>'+hasil[i].gate+'</td>'+
                                        '<td class="center">'+hasil[i].statuspenerbangan+'</td>'+
                                      '</tr>'
                        );
                }
           }
        });
    },5000);
    
    </script>
    
@endsection