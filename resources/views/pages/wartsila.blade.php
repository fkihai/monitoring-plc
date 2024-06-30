@extends('base')

@section('header')
    <header class="app-header fixed-top bg-success">
        @include('components.header')
        @include('components.sidebar')
    </header>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 pb-4 col-lg-6 d-flex justify-content-center align-items-center">
            <img src="{{asset("img/wartsila.png")}}" alt="Machine Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="row">
                <!-- Turbo -->
                <div class="col-xl-4 col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Turbo</label>
                        </div>
                        <div class="card-body" >
                            <div class="container box">
                                <div class="row">
                                    <div class="col">
                                        <span class="textdata" id="turboRPM">{{$data->turboRPM}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="textdata">rpm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cranckcase -->
                <div class="col-xl-4 col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Crankcase</label>
                        </div>
                        <div class="card-body" >
                            <div class="container box">
                                <div class="row">
                                    <div class="col">
                                        <span class="textdata" id="crankcasePress">{{$data->crankcasePress}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="textdata">bar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Air -->
                <div class="col-xl-4 col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Start Air</label>
                        </div>
                        <div class="card-body" >
                            <div class="container box">
                                <div class="row">
                                    <div class="col">
                                        <span class="textdata" id="airStartPress">{{$data->airStartPress}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="textdata">bar</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Speed -->
                <div class="col-xl-4 col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Speed</label>
                        </div>
                        <div class="card-body" >
                            <div class="container box">
                                <div class="row">
                                    <div class="col">
                                        <span class="textdata" id="speedRPM">{{$data->speedRPM}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="textdata">rpm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Speed Ref -->
                <div class="col-xl-4 col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Speed Ref</label>
                        </div>
                        <div class="card-body" >
                            <div class="container box">
                                <div class="row">
                                    <div class="col">
                                        <span class="textdata" id="speedRefRPM">{{$data->speedRefRPM}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="textdata">rpm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Load -->
                <div class="col-xl-4 col-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Load</label>
                        </div>
                        <div class="card-body" >
                            <div class="container box">
                                <div class="row">
                                    <div class="col">
                                        <span class="textdata" id="loadRPM">{{$data->loadRPM}}</span>
                                    </div>
                                    <div class="col">
                                        <span class="textdata">rpm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Air Charge -->
                <div class="col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Air Charge</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="airChargePress">{{$data->airChargePress}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">bar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="airChargeTemp">{{$data->airChargeTemp}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">c</span>
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
        <div class="col-sm-12">
            <div class="row">
                <!-- LT Water -->
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">LT Water</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="ltWaterPress">{{$data->ltWaterPress}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">bar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="ltWaterTemp">{{$data->ltWaterTemp}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">c</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HT WATER -->
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">HT Water</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="htWaterPress">{{$data->htWaterPress}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">bar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="htWaterTemp">{{$data->htWaterTemp}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">c</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lube Oil -->
                <div class="col-lg-4">
                    <div class="card text-center">
                        <div class="card-header">
                            <label for="engineSpeed">Lube Oil</label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="lubeOilPress">{{$data->lubeOilPress}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">bar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container box">
                                        <div class="row">
                                            <div class="col">
                                                <span class="textdata" id="lubeOilTemp">{{$data->lubeOilTemp}}</span>
                                            </div>
                                            <div class="col">
                                                <span class="textdata">c</span>
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
        <div class="col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">RPM</h4>
                </div>
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-line-rpm" ></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">Pressure</h4>
                </div>
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-line-pressure" ></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="app-card app-card-chart h-100 shadow-sm">
                <div class="app-card-header p-3 border-0">
                    <h4 class="app-card-title">Temp</h4>
                </div>
                <div class="app-card-body p-4">
                    <div class="chart-container">
                        <canvas id="chart-line-temp" ></canvas>
                    </div>
                </div>
            </div>
        </tiv>
    </div>

    <script>
        // RPM
        window.turboRPM = @json($rpmData['turboRPM']);
        window.speedRPM = @json($rpmData['speedRPM']);
        window.speedRefRPM = @json($rpmData['speedRefRPM']);
        window.loadRPM = @json($rpmData['loadRPM']);
        // Pressure
        window.airChargePress = @json($pressureData['airChargePress']);
        window.fuelOilPress = @json($pressureData['fuelOilPress']);
        window.ltWaterPress = @json($pressureData['ltWaterPress']);
        window.htWaterPress = @json($pressureData['htWaterPress']);
        window.crankcasePress = @json($pressureData['crankcasePress']);
        window.airStartPress = @json($pressureData['airStartPress']);
        window.lubeOilPress = @json($pressureData['lubeOilPress']);
        // Temperature
        window.airChargeTemp = @json($tempData['airChargeTemp']);
        window.fuelOilTemp = @json($tempData['fuelOilTemp']);
        window.ltWaterTemp = @json($tempData['ltWaterTemp']);
        window.htWaterTemp = @json($tempData['htWaterTemp']);
        window.lubeOilTemp = @json($tempData['lubeOilTemp']);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('plugins/chart.js/chart.min.js')}}"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    <script src="{{asset("js/wartsila.js")}}"></script>
@endsection
