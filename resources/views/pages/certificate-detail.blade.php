
@extends('base')

@section('header')
    <header class="app-header fixed-top bg-success">
        @include('components.header')
        @include('components.sidebar')
    </header>
@endsection

@section('content')
<div class="container wrapper">
    <div class="container bg-warning p-2 mb-4">
        <span class="text-black fw-bold">DETAIL SERTIFIKAT</span>
    </div>

    <label class="form-style mb-1 fw-bold fs-6" for="no">No Certificate</label>
    <input autocomplete="off" type="number" class="form-control form-style text-capitalize mb-3" id="no" name="no" disabled value="{{$data->no}}">
    <label class="form-style mb-1 fw-bold fs-6" for="title">title</label>
    <input autocomplete="off" type="text" class="form-control form-style text-capitalize mb-3" id="title" name="title" disabled value="{{$data->title}}">


    <div class="row">
        <div class="col-md-6">
            <label class="form-style mb-1 fw-bold fs-6" for="start_date">Start Date</label>
            <input autocomplete="off" type="date" class="form-control form-style mb-2" id="start_date" name="start_date" disabled value="{{$data->start_date}}">
        </div>
        <div class="col-md-6">
            <label class="form-style mb-1 fw-bold fs-6" for="end_date">End Date</label>
            <input autocomplete="off" type="date" class="form-control form-style mb-2" id="end_date" name="end_date" disabled value="{{$data->end_date}}">
        </div>
    </div>

    <div class="row">
        <di class="col">
            <label class="form-style mb-1 fw-bold fs-6" for="document">Document</label>
            <a class="d-flex" target="blank" href="{{ Storage::url('document/'. $data->document) }}">
                <img src="{{asset('img/doc-logo.png')}}" width="70" height="70" alt="">
            </a>
        </di>
    </div>


    <a href="{{route('certificate.detail',$data->id)}}">

    <form action="{{ route('certificate.delete', $data->id) }}" method="post">
        @csrf
        <a href="{{ route('certificate.index') }}" class="btn btn-info mt-3">Home</a>
        <a href="{{route('certificate.edit',$data->id)}}" class="btn btn-success mt-3">Edit Data</a>
        <button type="submit" class="btn btn-danger mt-3">Delete</button>
     </form>
</div>
@endsection












