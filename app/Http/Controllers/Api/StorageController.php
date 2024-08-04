<?php

namespace App\Http\Controllers\Api;

use App\Models\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\MonitoringResource;

class StorageController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'tank' => 'required|in:one,two,three,four',
            'heightOfCPO' => 'required',
            'tStorageWhen0M' => 'required',
            'tStorageWhen1M' => 'required',
            'tStorageWhen2M' => 'required',
            'tStorageWhen3M' => 'required',
            'tStorageWhen4M' => 'required',
            'tStorageWhen5M' => 'required',
            'tStorageWhen6M' => 'required',
            'tStorageWhen7M' => 'required',
            'factorKoreksi' => 'required',
            'density' => 'required',
            'EstimasiStok' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json('Error: Periksa Data Anda', 422);
        }

        $data = Storage::create($request->all());
        return new MonitoringResource(true,'data add success',$data);
    }
}
