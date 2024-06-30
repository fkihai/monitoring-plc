<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Engine;
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


    public function storageTank()
    {
        $title = 'STORAGE TANK';
        $data = Storage::where('tank','one')->latest('_dbtime')->first();
        $data2 = Storage::where('tank','two')->latest('_dbtime')->first();
        $data3 = Storage::where('tank','three')->latest('_dbtime')->first();
        $data4 = Storage::where('tank','four')->latest('_dbtime')->first();
        return view('pages.storage-tank',compact('data','data2','data3','data4','title'));
    }

    public function cargoTank()
    {
        $title = 'CARGO TANK';
        $data = Cargo::orderBy('_dbTime', 'desc')->first();
        return view('pages.cargo-tank',compact('data','title'));
    }

    public function mainEngine(){
        $title = 'MAIN ENGINE';
        $data = Engine::orderBy('_dbTime', 'desc')->first();
        return view('pages.main-engine', compact('data', 'title'));
    }

}
