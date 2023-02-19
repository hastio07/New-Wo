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

<footer>
    Copyright © 2023 &nbsp <a href="https://www.instagram.com/moeliadesign/" target="_blank" class="ml-1">Moelia Design</a> <span> . All rights Reserved</span>
</footer>
<div class="overlay action-toggle">
</div>
</div>
<script src="template/vendor/bootstrap/dist/js/bootstrap.bundle.js"></script>
<script src="template/vendor/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>

<!-- js for this page only -->
<script src="template/vendor/chart.js/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="template/assets/js/page/index.js"></script>
<!-- ======= -->
<script src="template/assets/js/main.js"></script>
<script>
    Main.init()
</script>
<script src="template/vendor/jquery/dist/jquery.min.js"></script>
<script src="template/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd-mm-yyyy'
    }).on('changeDate', function(e) {
        console.log(e.target.value);
    });
</script>

@endsection