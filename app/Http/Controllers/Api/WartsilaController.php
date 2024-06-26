<?php

namespace App\Http\Controllers\Api;

use App\Models\Wartsila;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WartsilaResource;
use Illuminate\Support\Facades\Validator;

class WartsilaController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'turbo' => 'required',
            'cAirBar' => 'required',
            'cAirTemp' => 'required',
            'speed' => 'required',
            'speedRef' => 'required',
            'load' => 'required',
            'fOilBar' => 'required',
            'fOilTemp' => 'required',
            'ltWaterBar' => 'required',
            'ltWaterTemp' => 'required',
            'htWaterBar' => 'required',
            'htWaterTemp' => 'required',
            'crankcase' => 'required',
            'startAir' => 'required',
            'lOilBar' => 'required',
            'lOilTemp' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('Error: Periksa Data Anda', 422);
        }

        $data = Wartsila::create($request->all());
        return new WartsilaResource(true,'data add success',$data);
    }
}
