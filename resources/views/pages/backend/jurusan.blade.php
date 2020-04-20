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
                    {{-- <h1 class="m-0 text-dark">Hell o Masbro</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <h2 class="mt-5 font-weight-bold text-blue">Jurusan SMK Angkasa</h2>
            </div>
        </div>

        <div class="row mt-5 text-center">
            <div class="col-md-12">
                <table class="table table-hover">
                    <caption> <h5 class="mt-2 text-blud font-weight-bold">Total Pendaftar : {{ count($daftar) }}</h5></caption>
                    <thead>
                      <tr>
                        <th scope="col">No Daftar</th>
                        <th scope="col">Nama Lengkap </th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Tahun Lulus</th>
                      </tr>
                    </thead>
                    <tbody class="">
                        @foreach ($daftar as $item)
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