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
            'ea1' => 'required',
            'ea2' => 'required',
            'ea3' => 'required',
            'ea4' => 'required',
            'ea5' => 'required',
            'ea6' => 'required',

            'la1' => 'required',
            'la2' => 'required',
            'la3' => 'required',
            'la4' => 'required',
            'la5' => 'required',
            'la6' => 'required',

            'ba1' => 'required',
            'ba2' => 'required',
            'ba3' => 'required',
            'ba4' => 'required',
            'ba5' => 'required',
            'ba6' => 'required',

            'engineSpeed' => 'required',
            'crankcase' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('Error: Periksa Data Anda', 422);
        }

        $data = Engine::create($request->all());
        return new MonitoringResource(true,'data add success',$data);
    }
}
