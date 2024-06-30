<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Engine;
use App\Models\Storage;
use App\Models\Wartsila;
use App\Http\Controllers\Controller;;

class RealtimeController extends Controller{
    public function wartsila(){
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

    public function storage(){
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

    public function cargo(){
        $data = Cargo::orderBy('_dbTime', 'desc')->first();
        return response()->json($data);
    }

    public function engine(){
        $data = Engine::orderBy('_dbTime', 'desc')->first();
        return response()->json($data);
    }

}
