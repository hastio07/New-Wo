@extends('layouts.layouts')

@section('content')
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#smallModal" type="button"><i class="bi bi-trash"></i></button>
<button class="btn mb-2 icon-left  btn-success" data-bs-toggle="modal" data-bs-target="#largeModal" type="button "><i class="ti-check"></i>selesai</i></button>
<button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#largeModal" type="button"><i class="bi bi-pencil-square"></i></button>

<div class="d-grid gap-2">
    <button class="btn mb-2 btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal" type="button">Try me!</button>
</div>
<div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet
                consequatur
                sint libero esse assumenda provident placeat sed porro ad iusto.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn mb-2 icon-left  btn-success" type="button "><i class="ti-check"></i>selesai</i></button>
            </div>
        </div>
    </div>
</div>

@endsection