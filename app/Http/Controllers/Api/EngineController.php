<?php

namespace App\Http\Controllers\Api;

use App\Models\Engine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MonitoringResource;


class EngineController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'data.*._dbTime' => 'required',
            'data.*._terminalTime' => 'required',
            'data.*._groupName' => 'required',
            'data.*.ea1' => 'required',
            'data.*.ea2' => 'required',
            'data.*.ea3' => 'required',
            'data.*.ea4' => 'required',
            'data.*.ea5' => 'required',
            'data.*.ea6' => 'required',

            'data.*.la1' => 'required',
            'data.*.la2' => 'required',
            'data.*.la3' => 'required',
            'data.*.la4' => 'required',
            'data.*.la5' => 'required',
            'data.*.la6' => 'required',

            'data.*.ba1' => 'required',
            'data.*.ba2' => 'required',
            'data.*.ba3' => 'required',
            'data.*.ba4' => 'required',
            'data.*.ba5' => 'required',
            'data.*.ba6' => 'required',

            'data.*.engineSpeed' => 'required',
            'data.*.crankcase' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Error: Periksa Data Anda', 'details' => $validator->errors()], 422);
        }

        $data = $request->input('data');
        foreach ($data as $item) {
            Engine::create($item);
        }
        return new MonitoringResource(true,'data add success',$data);
    }
}
