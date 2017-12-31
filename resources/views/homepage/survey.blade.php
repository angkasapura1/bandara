@extends('index')

@section('content')
    <div class="row" style="padding-bottom: 0px;">      
        <div class="col s12" style="padding: 0px;">
            <div class="row" style="padding-bottom: 0px;">                  
                <div class="col s12" style="padding-bottom: 0px;">
                    <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">bookmark</i>SURVEY</div>
                    <div class="card-panel">
                        <div class="hidden-scrollbar">
                            <div class="inner-like">
                                <table class="bordered">
                                <tbody>
                                    @foreach($survey as $svy)
                                    <tr>
                                        <td>
                                            <h5 style="color: black">{{ucwords($svy->nama_survey)}}</h5>
                                        </td>
                                        <td width="20px">
                                           <a class="waves-effect waves-light btn modal-trigger" href="#modal1" onclick="klikSurvey({{$svy->id_survey}},'like')"> 
                                            <i class="material-icons prefix">thumb_up</i>
                                        </a>
                                        </td>
                                        <td width="20px">
                                            <a class="waves-effect waves-light btn modal-trigger red lighten-1" href="#modal1" onclick="klikSurvey({{$svy->id_survey}},'dislike')"> 
                                            <i class="material-icons prefix">thumb_down</i>
                                        </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>                         
                    </div>

                      <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                          <h4>Thank You</h4>
                          <h6>Thank You For Your Participation</h6>
                        </div>
                      </div>  
                       <!-- Modal Structure END-->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function klikSurvey(identitas,jenis){
            $.get("{{url('survey')}}/"+identitas+"/"+jenis,function(data, status){
                console.log(data);
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
         
    </script>
@endsection