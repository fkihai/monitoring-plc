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
            <img src="{{asset("img/main-engine.png")}}" alt="Machine Image" class="img-fluid">
        </div>

        <div class="col-sm-12 col-lg-6">
            <!-- Exhaust Temp -->
            <div class="row m-0">
                <div class="container border border-primary p-2">
                    <div class="row m-0 mb-2">
                        <div class="container text-center border border-primary p-2 mt-2">
                            <span class="fw-bold">Exhaust Gas Temperatures</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>A1</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="ea1">{{$data->ea1}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>A2</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="ea2">{{$data->ea2}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>A3</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="ea3">{{$data->ea3}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>A4</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="ea4">{{$data->ea4}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>A5</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="ea5">{{$data->ea5}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>A6</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="ea6">{{$data->ea6}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- crankcase & speed -->
            <div class="row m-0 mt-2">
                <div class="container border border-primary p-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>Engine Speed</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="engineSpeed">{{$data->engineSpeed}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center m-0 h-80 mb-2 ">
                                <div class="card-header">
                                    <label>Crankcase Pressure</label>
                                </div>
                                <div class="card-body m-1 p-2">
                                    <div class="container box">
                                        <span class="text-primary" id="crankcase">{{$data->crankcase}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Linear Temp -->
        <div class="col-lg-12 pt-1">
            <div class="container border border-primary p-2 mt-2">
                <div class="row">
                    <div class="row m-0 mb-2">
                        <div class="container text-center border border-primary p-2">
                            <span class="fw-bold">Linear Temperatures</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A1</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="la1">{{$data->la1}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A2</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="la2">{{$data->la2}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A3</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="la3">{{$data->la3}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A4</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="la4">{{$data->la4}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A5</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="la5">{{$data->la5}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A6</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="la6">{{$data->la6}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bearing Temp -->
        <div class="col-lg-12 pt-1 pb-3">
            <div class="container border border-primary p-2 mt-2">
                <div class="row">
                    <div class="row m-0 mb-2">
                        <div class="container text-center border border-primary p-2">
                            <span class="fw-bold">Bearing Temperatures</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A1</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="ba1">{{$data->ba1}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A2</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="ba2">{{$data->ba2}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A3</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="ba3">{{$data->ba3}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A4</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary " id="ba4">{{$data->ba4}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A5</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="ba5">{{$data->ba5}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-6">
                        <div class="card text-center m-0 mt-2 h-80">
                            <div class="card-header">
                                <label>A6</label>
                            </div>
                            <div class="card-body" >
                                <div class="container box">
                                    <div class="row">
                                        <span class="text-primary" id="ba6">{{$data->ba6}} ° C</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset("js/engine.js")}}"></script>
@endsection
