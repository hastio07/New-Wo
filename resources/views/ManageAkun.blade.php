@extends('layouts.layouts')

@section('content')
<section class="manage-akun">
    <div class="title">
        <h5>Manage Akun</h5>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-8">
                <div class="card">
                    <div class="header-statistics">
                        <h5>Daftar Akun</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table small-font table-striped table-hover table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No. Telephone</th>
                                        <th scope="col">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Super Admin</td>
                                        <td>John</td>
                                        <td>contoh@email.com</td>
                                        <td>0817123456</td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                <button class="btn btn-warning me-md-2" type="button"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Admin</td>
                                        <td>Thornton</td>
                                        <td>contoh@email.com</td>
                                        <td>0817123456</td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                <button class="btn btn-warning me-md-2" type="button"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Super User</td>
                                        <td>Akhbar</td>
                                        <td>contoh@email.com</td>
                                        <td>0817123456</td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                                <button class="btn btn-warning me-md-2" type="button"><i class="bi bi-pencil-square"></i></button>
                                                <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Tambah Akun</h4>
                    </div>
                    <div class="card-body">
                        <div class="login-form">
                            <!-- Nama Input-->
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="form-label">Nama Depan</label>
                                    <input type="text" class="form-control bg-transparent" placeholder="Nama Depan" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="Name" class="form-label">Nama Belakang</label>
                                    <input type="text" class="form-control bg-transparent" placeholder="Nama Belakang" aria-label="Last name">
                                </div>
                            </div>
                            <!-- Email Input-->
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control bg-transparent" id="email" placeholder="Masukan Email" required>
                            </div>
                            <!-- No. Hp-->
                            <label for="NomorHp" class="NomorHp">Nomor Handphone</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-transparent"><i class="bi bi-phone"></i></span>
                                <input type="NomorHp" class="form-control bg-transparent" id="NomorHp" placeholder="Masukan Nomor HP" required>
                            </div>
                            <!-- Password Input-->
                            <div class="row">
                                <div class="col">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" class="form-control bg-transparent" placeholder="Password" aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="Password" class="form-label">Ulangi Password</label>
                                    <input type="password" class="form-control bg-transparent" placeholder="Password" aria-label="Last name">
                                </div>
                            </div>
                            <div class="btn-add row justify-content-center align-content-center">
                                <button class="btn btn-primary" type="button ">Simpan</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection