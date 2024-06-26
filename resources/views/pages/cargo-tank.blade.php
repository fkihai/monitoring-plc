@extends('base')

@section('custom-css')
<link rel="stylesheet" href="{{asset("css/cargo.css")}}">
@endsection

@section('content')
<div class="container wrapper">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper pb-1">
                <div class="boxtop">
                    <span>SLOP TK (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelOne" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                         <div class="textbox text-center">
                            <div class="value name">Ulage</div>
                            <div class="value number" id="ullageTkP">{{$data->ullageTkP}}</div>
                         </div>
                         <div class="textbox text-center mt-2">
                            <div class="value name">Avg Temp</div>
                            <div class="value number" id="avgTmpTkP">{{$data->avgTmpTkP}}° C</div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.6 COT (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelTwo" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot6P">{{$data->ullageCot6P}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot6P" >{{$data->avgTmpCot6P}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.5 COT (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelThree" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot5P">{{$data->ullageCot5P}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot5P" >{{$data->avgTmpCot5P}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.4 COT (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelFour" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot4P">{{$data->ullageCot4P}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot4P" >{{$data->avgTmpCot4P}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.3 COT (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelFive" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot3P">{{$data->ullageCot3P}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot3P" >{{$data->avgTmpCot3P}}° C</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.2 COT (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelSix" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot2P">{{$data->ullageCot2P}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot2P" >{{$data->avgTmpCot2P}}° C</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.1 COT (P)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelSeven" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot1P">{{$data->ullageCot1P}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot1P" >{{$data->avgTmpCot1P}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>SLOP TK (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelEight" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageTkS">{{$data->ullageTkS}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpTkS">{{$data->avgTmpTkS}}° C</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.6 COT (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelNine" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                    <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot6S">{{$data->ullageCot6S}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot6S">{{$data->avgTmpCot6S}}° C</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.5 COT (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelTen" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot5S">{{$data->ullageCot5S}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot5S">{{$data->avgTmpCot5S}}° C</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.4 COT (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelEleven" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot4S">{{$data->ullageCot4S}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot4S">{{$data->avgTmpCot4S}}° C</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.3 COT (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelTwelve" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot3S">{{$data->ullageCot3S}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot3S">{{$data->avgTmpCot3S}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.2 COT (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelThirteen" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot2S">{{$data->ullageCot2S}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot2S">{{$data->avgTmpCot2S}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 p-0" id="responsiveDivCol">
            <div class="box-wrapper">
                <div class="boxtop">
                    <span>NO.1 COT (S)</span>
                </div>
                <div class="body-box">
                    <div class="water-level-container">
                        <div class="water-bar">
                            <div class="water" id="waterLevelFourteen" style="height: 0%;"></div>
                        </div>
                        <div class="ruler-labels">
                            <div>15.00</div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div>0.00</div>
                        </div>
                     </div>
                     <div class="textbox">
                        <div class="textbox text-center">
                           <div class="value name">Ulage</div>
                           <div class="value number" id="ullageCot1S">{{$data->ullageCot1S}}</div>
                        </div>
                        <div class="textbox text-center mt-2">
                           <div class="value name">Avg Temp</div>
                           <div class="value number" id="avgTmpCot1S">{{$data->avgTmpCot1S}}° C</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset("js/cargo.js")}}"></script>
<script>
    setWaterLevel({{$data->ullageTkP}},'waterLevelOne');
    setWaterLevel({{$data->ullageCot6P}},'waterLevelTwo');
    setWaterLevel({{$data->ullageCot5P}},'waterLevelThree');
    setWaterLevel({{$data->ullageCot4P}},'waterLevelFour');
    setWaterLevel({{$data->ullageCot3P}},'waterLevelFive');
    setWaterLevel({{$data->ullageCot2P}},'waterLevelSix');
    setWaterLevel({{$data->ullageCot1P}},'waterLevelSeven');
    setWaterLevel({{$data->ullageTkS}},'waterLevelEight');
    setWaterLevel({{$data->ullageCot6S}},'waterLevelNine');
    setWaterLevel({{$data->ullageCot5S}},'waterLevelTen');
    setWaterLevel({{$data->ullageCot4S}},'waterLevelEleven');
    setWaterLevel({{$data->ullageCot3S}},'waterLevelTwelve');
    setWaterLevel({{$data->ullageCot2S}},'waterLevelThirteen');
    setWaterLevel({{$data->ullageCot1S}},'waterLevelFourteen');
</script>
@endsection
