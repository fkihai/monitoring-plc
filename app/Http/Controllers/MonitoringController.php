<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Storage;
use App\Models\Wartsila;
use App\Http\Controllers\Controller;;




class MonitoringController extends Controller
{
    public function wartsila()
    {
        $title = 'WARTSILA';
        $data = Wartsila::orderBy('_dbTime', 'desc')->first();
        $dataLength = 10;


        $rpmData = [
            'turboRPM' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('turboRPM'),
            'speedRPM' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('speedRPM'),
            'speedRefRPM' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('speedRefRPM'),
            'loadRPM' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('loadRPM'),
        ];

        $pressureData = [
            'airChargePress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('airChargePress'),
            'fuelOilPress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('fuelOilPress'),
            'ltWaterPress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('ltWaterPress'),
            'htWaterPress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('htWaterPress'),
            'crankcasePress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('crankcasePress'),
            'airStartPress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('airStartPress'),
            'lubeOilPress' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('lubeOilPress'),
        ];

        $tempData = [
            'airChargeTemp' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('airChargeTemp'),
            'fuelOilTemp' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('fuelOilTemp'),
            'ltWaterTemp' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('ltWaterTemp'),
            'htWaterTemp' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('htWaterTemp'),
            'lubeOilTemp' => Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck('lubeOilTemp'),
        ];

        return view('pages.wartsila', compact('data', 'title', 'rpmData', 'pressureData', 'tempData'));
    }

    public function realtimWartsila(){
        $data =  Wartsila::orderBy('_dbTime', 'desc')->first();
        $stateDataLength = Wartsila::orderBy('turboRPM', 'desc')->get();
        $dataLength = 10;

        $parameters = [
            'turboRPM', 'speedRPM', 'speedRefRPM', 'loadRPM',
            'airChargePress', 'fuelOilPress', 'ltWaterPress', 'htWaterPress',
            'crankcasePress', 'airStartPress', 'lubeOilPress',
            'airChargeTemp', 'fuelOilTemp', 'ltWaterTemp', 'htWaterTemp', 'lubeOilTemp'
        ];

        $responseData = ['data' => $data];
        $responseData['stateDataLength'] = $stateDataLength;

        foreach ($parameters as $parameter) {
            $responseData[$parameter] = Wartsila::orderBy('_dbTime', 'desc')->take($dataLength)->pluck($parameter);
        }

        return response()->json($responseData);
    }

    public function mainEngine(){
        $title = 'MAIN ENGINE';
        $data = Wartsila::orderBy('_dbTime', 'desc')->first();
        return view('pages.main-engine', compact('data', 'title'));
    }

    public function storageTankGauge()
    {
        $title = 'STORAGE TANK';
        $data = Storage::where('tank','one')->latest('_dbtime')->first();
        $data2 = Storage::where('tank','two')->latest('_dbtime')->first();
        $data3 = Storage::where('tank','three')->latest('_dbtime')->first();
        $data4 = Storage::where('tank','four')->latest('_dbtime')->first();
        return view('pages.storage-tank-gauge',compact('data','data2','data3','data4','title'));
    }

    public function realtimeStorage(){
        $data = Storage::where('tank','one')->latest('_dbtime')->first();
        $data2 = Storage::where('tank','two')->latest('_dbtime')->first();
        $data3 = Storage::where('tank','three')->latest('_dbtime')->first();
        $data4 = Storage::where('tank','four')->latest('_dbtime')->first();
        return response()->json([
            'data1' => $data,
            'data2' => $data2,
            'data3' => $data3,
            'data4' => $data4,
        ]);
    }

    public function cargoTank()
    {
        $title = 'CARGO TANK';
        $data = Cargo::orderBy('_dbTime', 'desc')->first();
        return view('pages.cargo-tank',compact('data','title'));
    }

    public function realtimeCargo(){
        $data = Cargo::orderBy('_dbTime', 'desc')->first();
        return response()->json($data);
    }
}
