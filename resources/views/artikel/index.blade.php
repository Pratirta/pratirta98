@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Artikel</div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori Artikel Id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $artikel as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_artikel_id !!}</td>
                       
                        <td>
                        <a href ="{!! route('artikel.show',[$item->id]) !!}" button class="btn btn-danger" type="button"> Hapus </button></a> 
                        <a href="{!! route('artikel.show',[$item->id]) !!}" button class="btn btn-primary" type="button"> Lihat </td></a>

            @endforeach
                        <a href ="{!! route('artikel.create',[$item->id]) !!}" button class="btn btn-success" type="button"> Tambah </button></td></a>
                        </tr>
                        
                    </tbody>
                </table>
        @endsection
                       