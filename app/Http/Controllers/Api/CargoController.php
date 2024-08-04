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
            '_dbTime' => 'required',
            '_terminalTime' => 'required',
            '_groupName' => 'required',
            'ullageTkP' => 'required',
            'avgTmpTkP' => 'required',
            'ullageCot6P' => 'required',
            'avgTmpCot6P' => 'required',
            'ullageCot5P' => 'required',
            'avgTmpCot5P' => 'required',
            'ullageCot4P' => 'required',
            'avgTmpCot4P' => 'required',
            'ullageCot3P' => 'required',
            'avgTmpCot3P' => 'required',
            'ullageCot2P' => 'required',
            'avgTmpCot2P' => 'required',
            'ullageCot1P' => 'required',
            'avgTmpCot1P' => 'required',
            'ullageTkS' => 'required',
            'avgTmpTkS' => 'required',
            'ullageCot6S' => 'required',
            'avgTmpCot6S' => 'required',
            'ullageCot5S' => 'required',
            'avgTmpCot5S' => 'required',
            'ullageCot4S' => 'required',
            'avgTmpCot4S' => 'required',
            'ullageCot3S' => 'required',
            'avgTmpCot3S' => 'required',
            'ullageCot2S' => 'required',
            'avgTmpCot2S' => 'required',
            'ullageCot1S' => 'required',
            'avgTmpCot1S' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('Error: Periksa Data Anda', 422);
        }

        $data = Cargo::create($request->all());
        return new MonitoringResource(true,'data add success',$data);
    }
}
