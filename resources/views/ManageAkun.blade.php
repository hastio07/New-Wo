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
                    <div class="card-header">
                        <h4>List Produk</h4>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th>Nama User</th>
                                    <th>E-Mail</th>
                                    <th>No. Handphone</th>
                                    <th>Role Akun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Abdulloh</td>
                                    <td>contoh@email.ac.id</td>
                                    <td>08125251515</td>
                                    <td>Super Admin</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-primary" type="button"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Sulaiman</td>
                                    <td>contoh1@email.ac.id</td>
                                    <td>081252154356</td>
                                    <td>Admin</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-primary" type="button"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
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