
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
        <span class="text-black fw-bold">TAMBAH SERTIFIKAT</span>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p>Error</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('certificate.create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label class="form-style mb-1 fw-bold fs-6" for="no">No Certificate</label>
        <input autocomplete="off" type="number" class="form-control form-style text-capitalize mb-3" id="no" name="no" required>
        <label class="form-style mb-1 fw-bold fs-6" for="title">title</label>
        <input autocomplete="off" type="text" class="form-control form-style text-capitalize mb-3" id="title" name="title" required>


        <div class="row">
            <div class="col-md-6">
                <label class="form-style mb-1 fw-bold fs-6" for="start_date">Start Date</label>
                <input autocomplete="off" type="date" class="form-control form-style mb-2" id="start_date" name="start_date">
            </div>
            <div class="col-md-6">
                <label class="form-style mb-1 fw-bold fs-6" for="end_date">End Date</label>
                <input autocomplete="off" type="date" class="form-control form-style mb-2" id="end_date" name="end_date">
            </div>
        </div>

        <div class="row">
            <di class="col-md-6">
                <label class="form-style mb-1 fw-bold fs-6" for="document">Document</label>
                <input autocomplete="off" type="file" class="form-control form-style mb-2" id="document" name="document">
            </di>
        </div>


        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
        <button type="submit" class="btn btn-warning mt-3">Tambah</button>
    </form>
</div>
@endsection





















