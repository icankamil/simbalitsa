@extends('nav')

@section('konten')
<div class="container-fluid">
<h4 class="font-weight-bold text-primary my-3"><u>Pesan</u></h4>
<div class="row pt-3">

    <div class="col-md-3">
        <ul class="nav nav-pills nav-pills-primary flex-column">
          <li class="nav-item"><a class="nav-link active " href="#tab1" data-toggle="tab"><i class="material-icons d-inline md-18 mx-3">markunread_mailbox</i>Pesan Masuk</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab"><i class="material-icons d-inline md-18 mx-3">call_made</i>Pesan Keluar</a></li>
          <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab"><i class="material-icons d-inline md-18 mx-3">send</i>Buat Pesan</a></li>
        </ul>
    </div>
    <div class="col-md-9">
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">

            <table class="table table-bordered table-light">
  <thead class="bg-primary">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Judul Pesan</th>
      <th scope="col">Pengirim</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Senin, 12/01/2020</th>
      <td>registrasi</td>
      <td>Otto</td>
      <td><button class="btn btn-info btn-fab btn-fab-mini btn-round float-right"><i class="material-icons">visibility</i></button><button class="btn btn-danger btn-fab btn-fab-mini btn-round float-right mr-2"><i class="material-icons">delete</i></button></td>
    </tr>
    <tr>
      <th scope="row">Selasa, 13/01/2020</th>
      <td>Gawe bro</td>
      <td>Mamen</td>
      <td><button class="btn btn-info btn-fab btn-fab-mini btn-round float-right"><i class="material-icons">visibility</i></button><button class="btn btn-danger btn-fab btn-fab-mini btn-round float-right mr-2"><i class="material-icons">delete</i></button></td>
    </tr>
    <tr>
      <th scope="row">Rabu, 17/01/2020</th>
      <td>Hayuk ah futsalkeun</td>
      <td>Bedebah FC</td>
      <td><button class="btn btn-info btn-fab btn-fab-mini btn-round float-right"><i class="material-icons">visibility</i></button><button class="btn btn-danger btn-fab btn-fab-mini btn-round float-right mr-2"><i class="material-icons">delete</i></button></td>
    </tr>
  </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
            </div>

            <div class="tab-pane" id="tab2">

            <table class="table table-bordered table-light">
  <thead class="bg-primary">
    <tr>
      <th scope="col">Tanggal</th>
      <th scope="col">Judul Pesan</th>
      <th scope="col">Pengirim</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Senin, 12/01/2020</th>
      <td>Registrasi Sukses</td>
      <td>Otto</td>
      <td><button class="btn btn-info btn-fab btn-fab-mini btn-round float-right"><i class="material-icons">visibility</i></button><button class="btn btn-danger btn-fab btn-fab-mini btn-round float-right mr-2"><i class="material-icons">delete</i></button></td>
    </tr>
    <tr>
      <th scope="row">Selasa, 13/01/2020</th>
      <td>Gawe bro Re:</td>
      <td>Mamen</td>
      <td><button class="btn btn-info btn-fab btn-fab-mini btn-round float-right"><i class="material-icons">visibility</i></button><button class="btn btn-danger btn-fab btn-fab-mini btn-round float-right mr-2"><i class="material-icons">delete</i></button></td>
    </tr>
    <tr>
      <th scope="row">Rabu, 17/01/2020</th>
      <td>Gaaaskeeunn...!!!!</td>
      <td>Bedebah FC</td>
      <td><button class="btn btn-info btn-fab btn-fab-mini btn-round float-right"><i class="material-icons">visibility</i></button><button class="btn btn-danger btn-fab btn-fab-mini btn-round float-right mr-2"><i class="material-icons">delete</i></button></td>
    </tr>
  </tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
            </div>

            <div class="tab-pane" id="tab3">

            <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Judul Pesan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="bmd-label-floating">Isi Pesan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary float-right mt-3">Kirim</button>
            </div>
        </div>
    </div>

</div>
</div>

@endsection
