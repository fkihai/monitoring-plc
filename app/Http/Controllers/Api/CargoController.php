<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MonitoringResource;


class CargoController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'data.*._dbTime' => 'required',
            'data.*._terminalTime' => 'required',
            'data.*._groupName' => 'required',
            'data.*.ullageTkP' => 'required',
            'data.*.avgTmpTkP' => 'required',
            'data.*.ullageCot6P' => 'required',
            'data.*.avgTmpCot6P' => 'required',
            'data.*.ullageCot5P' => 'required',
            'data.*.avgTmpCot5P' => 'required',
            'data.*.ullageCot4P' => 'required',
            'data.*.avgTmpCot4P' => 'required',
            'data.*.ullageCot3P' => 'required',
            'data.*.avgTmpCot3P' => 'required',
            'data.*.ullageCot2P' => 'required',
            'data.*.avgTmpCot2P' => 'required',
            'data.*.ullageCot1P' => 'required',
            'data.*.avgTmpCot1P' => 'required',
            'data.*.ullageTkS' => 'required',
            'data.*.avgTmpTkS' => 'required',
            'data.*.ullageCot6S' => 'required',
            'data.*.avgTmpCot6S' => 'required',
            'data.*.ullageCot5S' => 'required',
            'data.*.avgTmpCot5S' => 'required',
            'data.*.ullageCot4S' => 'required',
            'data.*.avgTmpCot4S' => 'required',
            'data.*.ullageCot3S' => 'required',
            'data.*.avgTmpCot3S' => 'required',
            'data.*.ullageCot2S' => 'required',
            'data.*.avgTmpCot2S' => 'required',
            'data.*.ullageCot1S' => 'required',
            'data.*.avgTmpCot1S' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Error: Periksa Data Anda', 'details' => $validator->errors()], 422);
        }

        $data = $request->input('data');

        foreach ($data as $item) {
            Cargo::create($item);
        }

        return new MonitoringResource(true,'data add success',$data);
    }
}
