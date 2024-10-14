<?php

namespace App\Http\Controllers\Api;

use App\Models\Wartsila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MonitoringResource;

class WartsilaController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data.*._dbTime' => 'required',
            'data.*._terminalTime' => 'required',
            'data.*._groupName' => 'required',
            'data.*.turboRPM' => 'required',
            'data.*.airChargePress' => 'required',
            'data.*.airChargeTemp' => 'required',
            'data.*.speedRPM' => 'required',
            'data.*.speedRefRPM' => 'required',
            'data.*.loadRPM' => 'required',
            'data.*.fuelOilPress' => 'required',
            'data.*.fuelOilTemp' => 'required',
            'data.*.ltWaterPress' => 'required',
            'data.*.ltWaterTemp' => 'required',
            'data.*.htWaterPress' => 'required',
            'data.*.htWaterTemp' => 'required',
            'data.*.crankcasePress' => 'required',
            'data.*.airStartPress' => 'required',
            'data.*.lubeOilPress' => 'required',
            'data.*.lubeOilTemp' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => 'Error: Periksa Data Anda', 'details' => $validator->errors()], 422);
        }

        $data = $request->input('data');
        foreach ($data as $item) {
            Wartsila::create($item);
        }
        return new MonitoringResource(true,'data add success',$data);
    }
}
