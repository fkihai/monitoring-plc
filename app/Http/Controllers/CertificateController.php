<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'CERTIFICATE';
        $data = Certificate::all();
        return view('pages.certificate',compact('data','title'));
    }

    public function create()
    {
        $title = 'CERTIFICATE';
        return view('pages.certificate-create',compact('title'));
    }

    public function store(Request $request)
    {
        $request-> validate([
            'no' => 'required|numeric',
            'title' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Certificate::create($request->all());
        return redirect()->route('certificate.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'CERTIFICATE';
        $data = Certificate::find($id);
        return view('pages.certificate-detail',compact('data','title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = 'EDIT CERTIFICATE';
        $data = Certificate::find($id);
        return view('pages.certificate-edit',compact('data','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    public function destroy($id)
    {
        Certificate::find($id)->delete();
        return redirect('certificate');
    }
}
