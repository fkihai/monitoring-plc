@extends('base')

@section('header')
    <header class="app-header fixed-top bg-success">
        @include('components.header')
        @include('components.sidebar')
    </header>
@endsection

@section('content')

<div class="row">
    <div class="col">
        <a href="{{route('certificate.create')}}">
            <button type="button" class="btn btn-warning mb-2">+ Tambah Sertifikat</button>
          </a>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">No Sertifikat</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Dikeluarkan</th>
                    <th scope="col">Tanggal Berakhir</th>
                    <th scope="col">Expiry</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $count = 0;
                @endphp
                @foreach ($data as $data)
                    @php
                        $count+=1;
                    @endphp
                    <tr>
                        <th class="pt-3  " scope="row">{{$count}}</th>
                        <td class="pt-3  ">{{$data->no}}</td>
                        <td class="pt-3  ">{{$data->title}}</td>
                        <td class="pt-3  ">{{$data->start_date}}</td>
                        <td class="pt-3  ">{{$data->end_date}}</td>
                        <td class="pt-3  ">
                            {{$data->days_until_expiry}}</td>
                        <td>
                            <a href="{{route('certificate.detail',$data->id)}}">
                            <button type="button" class="btn btn-info">Detail</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
