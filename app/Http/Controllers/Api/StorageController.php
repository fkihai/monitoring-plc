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
            'data.*._dbTime' => 'required',
            'data.*._terminalTime' => 'required',
            'data.*._groupName' => 'required',
            'data.*.tank' => 'required|in:one,two,three,four',
            'data.*.heightOfCPO' => 'required',
            'data.*.tStorageWhen0M' => 'required',
            'data.*.tStorageWhen1M' => 'required',
            'data.*.tStorageWhen2M' => 'required',
            'data.*.tStorageWhen3M' => 'required',
            'data.*.tStorageWhen4M' => 'required',
            'data.*.tStorageWhen5M' => 'required',
            'data.*.tStorageWhen6M' => 'required',
            'data.*.tStorageWhen7M' => 'required',
            'data.*.factorKoreksi' => 'required',
            'data.*.density' => 'required',
            'data.*.EstimasiStok' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Error: Periksa Data Anda', 'details' => $validator->errors()], 422);
        }

        $data = $request->input('data');
        foreach ($data as $item) {
            Storage::create($item);
        }
        return new MonitoringResource(true,'data add success',$data);
    }
}
