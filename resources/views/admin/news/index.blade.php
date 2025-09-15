@extends('layouts.admin.admin')

@section('title', 'News')

@section('content')
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-12 col-lg-8">
                <h3 class="p-3 border border-black bg-warning">Tabel Berita</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-lg-4">
                <h5 class="p-3 border border-black bg-warning">Berita Display</h5>
            </div>
        </div>
    </div>
@endsection
