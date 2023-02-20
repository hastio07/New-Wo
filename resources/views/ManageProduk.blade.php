@extends('layouts.layouts')

@section('content')
<section class="manage-akun">
    <div class="title">
        <h5>Manage Produk</h5>
    </div>
    <div class="content-wrapper">
        <div class="row same-height">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Tambah Produk</h4>
                    </div>
                    <div class="add-jadwal">
                        <div class="form-inpt">
                            <label for="basicInput" class="form-label">Nama Produk</label>
                            <input type="text" placeholder="Masukan Nama" class="form-control" id="basicInput">
                        </div>
                        <div class="form-inpt">
                            <label for="basicInput" class="form-label">Kategori</label>
                            <select class="form-select form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="form-inpt">
                            <label for="basicInput" class="form-label">Harga Sewa</label>
                            <input type="number" placeholder="Masukan Alamat" class="form-control" id="basicInput">
                        </div>
                        <div class="form-inpt">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-inpt">
                            <label for="formFile" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="files" multiple="multiple" accept="image/jpg, image/png, image/jpeg">
                            <output id="result" class="img-result">
                        </div>
                    </div>
                    <div class="btn-add row justify-content-center align-content-center">
                        <button class="btn mb-2 icon-left  btn-success" type="button "><i class="ti-check"></i>selesai</i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>List Produk</h4>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table display">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga Sewa</th>
                                    <th>Detail Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>img1.jpg</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                            <button class="btn btn-primary" type="button"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning" type="button"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011/07/25</td>
                                    <td>img1.jpg</td>
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
                                    <th>Start date</th>
                                    <th>Aksi</th>
                                    <th>img1.jpg</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection