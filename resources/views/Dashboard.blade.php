@extends('layouts.layouts')

@section('content')

<div class="title">
    Dashboard
</div>
<div class="content-wrapper">
    <div class="same-height">
        <div class="cards">
            <div class="card">
                <div class="card-body">
                    <h1>Totoal Akun</h1>
                    <p class="fw-bolder">10 <span><i class="bi bi-people-fill "></i></span></p>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <h1>Jadwal</h1>
                    <p class="fw-bolder">10 <span><i class="bi bi-people-fill "></i></span></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h1>Totoal Produk</h1>
                    <p class="fw-bolder">10 <span><i class="bi bi-people-fill "></i></span></p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h1>Totoal Pesanan</h1>
                    <p class="fw-bolder">10 <span><i class="bi bi-people-fill "></i></span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-wrapper">
    <div class="row same-height">
        <div class="col-md-8">
            <div class="card">
                <div class="header-statistics">
                    <h5>Jadwal Kegiatan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="date"></div>
                            </div>
                            <div class="col-xl-6">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Agenda</th>
                                            <th scope="col">Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nikahan</td>
                                            <td>Metro</td>
                                        </tr>
                                        <tr>
                                            <td>Nikahan</td>
                                            <td>Metro</td>
                                        </tr>
                                        <tr>
                                            <td>Nikahan</td>
                                            <td>Metro</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Interest</h4>
                </div>
                <div class="card-body">
                    <div class="isi">isi</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="settings">
    <div class="settings-icon-wrapper">
        <div class="settings-icon">
            <i class="ti ti-settings"></i>
        </div>
    </div>
</div>
</div>
@endsection