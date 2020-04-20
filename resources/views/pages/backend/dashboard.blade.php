@extends('layout.master')

@section('title','dashboard')
@include('includes.header')
@include('includes.sidebar')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
            <div class="col-md-12">
                <h1 class="mt-5 font-weight-bold text-blue">Daftar Pendaftar siswa Smk Angkasa</h1>
            </div>
        </div>
    </div>
</div>
@endsection