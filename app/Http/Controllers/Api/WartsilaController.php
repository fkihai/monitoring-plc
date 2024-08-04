<?php

namespace App\Http\Controllers\Api;

use App\Models\Wartsila;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MonitoringResource;
use Illuminate\Support\Facades\Validator;

class WartsilaController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            '_dbTime' => 'required',
            '_terminalTime' => 'required',
            '_groupName' => 'required',
            'turboRPM' => 'required',
            'airChargePress' => 'required',
            'airChargeTemp' => 'required',
            'speedRPM' => 'required',
            'speedRefRPM' => 'required',
            'loadRPM' => 'required',
            'fuelOilPress' => 'required',
            'fuelOilTemp' => 'required',
            'ltWaterPress' => 'required',
            'ltWaterTemp' => 'required',
            'htWaterPress' => 'required',
            'htWaterTemp' => 'required',
            'crankcasePress' => 'required',
            'airStartPress' => 'required',
            'lubeOilPress' => 'required',
            'lubeOilTemp' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('Error: Periksa Data Anda', 422);
        }

        $data = Wartsila::create($request->all());
        return new MonitoringResource(true,'data add success',$data);
    }
}
