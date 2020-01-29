@extends('nav')

@section('konten')

<div class="container-fluid">
<h4 class="font-weight-bold text-primary my-3"><u>Profile Anda</u></h4>
<div class="row no-gutters pb-5">

    <div class="col-4">
<img src="storage/image/ozils.jpg" alt="..." class="img-thumbnail img-fluid">
</div>

<div class="col-4 px-3">

<div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="Ujang Mahmud">
  </div>


<div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">NIP</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="20201701">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Jabatan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="20201701">
  </div>

  </div>

  <div class="col-4 px-3">

  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Email</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="20201701">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Kontak</label>
    <input type="text" class="form-control" id="exampleInputEmail1" value="20201701">
  </div>

</div>

</div>
</div>

@endsection
