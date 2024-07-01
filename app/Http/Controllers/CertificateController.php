<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'document' => 'required|mimes:pdf,doc,docx'
        ]);

        $file  = $request->file('document');
        $hashName = $file->hashName();
        $file->storeAs('document',$hashName);

        Certificate::create([
            'no' => $request->no,
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'document' => $hashName
        ]);

        return redirect()->route('certificate.index')
                         -> with('success', 'Add Successfully');

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
    public function update(Request $request, $id)
    {
        $request-> validate([
            'no' => 'required|numeric',
            'title' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'document' => 'nullable|mimes:pdf,doc,docx'
        ]);

        $data = Certificate::findOrFail($id);

        if($request -> hasFile('document')){
            $file  = $request->file('document');
            $hashName = $file->hashName();
            $file->storeAs('document',$hashName);

            if($data->document){
                Storage::delete('document/'.$data->document);
            }
            $data->document = $hashName;
        }

        $data->no = $request->no;
        $data->title = $request->title;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->save();

        return redirect()->route('certificate.index')
                         ->with('success','Update Successfully');
    }

    public function destroy($id)
    {
        $data = Certificate::find($id);
        Storage::delete('document/'.$data->document);
        $data->delete();
        return redirect()->route('certificate.index');
    }
}
