@extends('layout.master')

@section('title','Jurusan')
@include('includes.header')
@section('jurusan','active')
@include('includes.sidebar')
@section('konten')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-blue font-weight-bold">Jurusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5 mx-5">
            <div class="col-md-8">
                <h5 class="font-weight-bold">Teknik Penerbang</h5>
            </div>
        </div>
        <div class="row mt-3 mx-5 text-center">
            <div class="col-md-8">
                <table class="table table-hover table-bordered">
                    <caption> <h5 class="mt-2 text-blud font-weight-bold">Total Teknik Penerbang : {{ count($teknikPenerbang) }}</h5></caption>
                    <thead>
                      <tr>
                        <th scope="col">No Daftar</th>
                        <th scope="col">Nama Lengkap </th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Lulus</th>
                      </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($teknikPenerbang as $item)
                            <tr>
                                @for($i=0;$i < count($item);$i++)
                                <td>{{ $item[$i] }}</td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>                    
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row mt-5 mx-5">
            <div class="col-md-8">
                <h5 class="font-weight-bold">Teknik mesin</h5>
            </div>
        </div>
        <div class="row mt-3 mx-5 text-center">
            <div class="col-md-8">
                <table class="table table-hover table-bordered">
                    <caption> <h5 class="mt-2 text-blud font-weight-bold">Total Teknik Mesin : {{ count($teknikMesin) }}</h5></caption>
                    <thead>
                      <tr>
                        <th scope="col">No Daftar</th>
                        <th scope="col">Nama Lengkap </th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Lulus</th>
                      </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($teknikMesin as $item)
                            <tr>
                                @for($i=0;$i < count($item);$i++)
                                <td>{{ $item[$i] }}</td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>                    
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="row mt-5 mx-5">
            <div class="col-md-8">
                <h5 class="font-weight-bold">Teknik Pilot</h5>
            </div>
        </div>
        <div class="row mt-3 mx-5 text-center">
            <div class="col-md-8">
                <table class="table table-hover table-bordered">
                    <caption> <h5 class="mt-2 text-blud font-weight-bold">Total Jurusan Pilot : {{ count($pilot) }}</h5></caption>
                    <thead>
                      <tr>
                        <th scope="col">No Daftar</th>
                        <th scope="col">Nama Lengkap </th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Lulus</th>
                      </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($pilot as $item)
                            <tr>
                                @for($i=0;$i < count($item);$i++)
                                <td>{{ $item[$i] }}</td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>                    
            </div>
        </div>

    </div>

</div>
@endsection