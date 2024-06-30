
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
        <span class="text-black fw-bold">EDIT SERTIFIKAT</span>
    </div>
    <form action="{{route('certificate.create')}}" method="POST">
        @csrf
        <label class="form-style mb-1 fw-bold fs-6" for="no">No Certificate</label>
        <input autocomplete="off" type="number" class="form-control form-style text-capitalize mb-3" id="no" name="no" required value="{{$data->no}}">
        <label class="form-style mb-1 fw-bold fs-6" for="title">title</label>
        <input autocomplete="off" type="text" class="form-control form-style text-capitalize mb-3" id="title" name="title" required value="{{$data->title}}">

        <div class="row">
            <div class="col-6">
                <label class="form-style mb-1 fw-bold fs-6" for="start_date">Start Date</label>
                <input autocomplete="off" type="date" class="form-control form-style mb-2" id="start_date" name="start_date" value="{{$data->start_date}}">
            </div>
            <div class="col-6">
                <label class="form-style mb-1 fw-bold fs-6" for="end_date">End Date</label>
                <input autocomplete="off" type="date" class="form-control form-style mb-2" id="end_date" name="end_date" value="{{$data->end_date}}">
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
        <button type="submit" class="btn btn-warning mt-3">Tambah</button>
    </form>
</div>
@endsection





















