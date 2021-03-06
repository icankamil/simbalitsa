@extends('nav')

@section('konten')


<div class="container-fluid">
<h4 class="font-weight-bold text-primary my-3"><u>Research and Development Capacity</u></h4>
<div class="row no-gutters">
<div class="col-6 border-right border-primary pr-3">
<h4 class="font-weight-bold text-primary">Pilih Indikator</h4>

<div class="form-group">
    <select class="form-control selectpicker" data-style="btn btn-link" id="indikator">
      <option value="/penguatanbasisdata" >1. Jumlah Kegiatan yang mendukung basis data dan informasi</option>
      <option value="/hilirisasi">2. Jumlah kegiatan yang mendukung peningkatan kerjasama hilirisasi produk</option>
      <option value="/penguatanproduk" >3. Jumlah kegiatan yang mendukung penguatan produk riset lembaga</option>
      <option value="/kerjasamanonriset">4. Kerjasama non riset (jasa konsultasi, diklat, dll) dengan pengguna teknologi</option>
      <option value="/kontrakbisnis">5. Kontrak bisnis dengan industri dalam rangka hilirisasi produk unggulan</option>
      <option value="/nationalrecognition" >6. Perolehan apresiasi national recognition untuk produk berbasis riset</option>
      <option value="/nationalreference" selected="selected">7. Perolehan apresiasi - national references bagi kinerja pusat unggulan</option>
      <option value="/economicbenefit">8. Perolehan economic benefit atau social impact bagi masyarakat</option>
    </select>
  </div>

  <div class="form-group">
    <select class="form-control selectpicker" data-style="btn btn-link" id="subindikator">
      <option value="/nationalreference" >1. Matriks perolehan apresiasi nasional atau internasional reference atas produk unggulan</option>
      <option value="/mitrabestari" >2. Jumlah Mitra Bestari Tahun Berjalan</option>
      <option value="/sitasikumulatif" selected="selected">3. Jumlah Sitasi Kumulatif Lembaga</option>
      <option value="/skpenugasan" >4. Jumlah SK penugasan nasional tahun berjalan</option>
      <option value="/jumlahundangan" >5. Jumlah undangan narasumber</option>
      <option value="/penghargaanlain">6. Matrik penghargaan lainnya</option></select>
  </div>

<div class="mt-5">
<p class="font-weight-bold text-justify">Some title here</p>
<p class="font-weight-bold text-justify">Deskripsi Tabel :</p>
<div class="border-bottom border-primary">
    <p>some text here</p>
</div>
<p class="font-weight-bold text-justify mt-4">Catatan Sekretariat :</p>
<div class="border-bottom border-primary">
    <p>some text here</p>
</div>
</div>

</div>
<div class="col-6 pl-3">
<h4 class="font-weight-bold text-primary">Form Input Data</h4>

<div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Nama Peneliti</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Indeks Sitasi</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group form-file-upload form-file-multiple">
    <input type="file" multiple="" class="inputFileHidden">
    <div class="input-group">
        <input type="text" class="form-control inputFileVisible" placeholder="Upload Data Dukung">
        <span class="input-group-btn">
            <button type="button" class="btn btn-fab btn-round btn-primary">
                <i class="material-icons">attach_file</i>
            </button>
        </span>
    </div>
  </div>

  <div class="form-group form-file-upload form-file-multiple">
    <input type="file" multiple="" class="inputFileHidden">
    <div class="input-group">
        <input type="text" class="form-control inputFileVisible" placeholder="Upload Matriks(format .xls atau .xlsx)">
        <span class="input-group-btn">
            <button type="button" class="btn btn-fab btn-round btn-primary">
                <i class="material-icons">attach_file</i>
            </button>
        </span>
    </div>
  </div>

  <p style="font-weight:400;" class="text-justify">Upload <strong>MATRIKS</strong> hanya bisa dilakukan jika file spreadsheet yang diupload <strong>SESUAI DENGAN MATRIKS</strong> dan <strong>TANPA KOLOM NOMOR</strong>. Kosongkan isian pada form input data jika mengisi matriks secara otomatis menggunakan file spreadsheet.</p>

  <button type="submit" class="btn btn-primary d-block ml-auto mt-5">Submit</button>

</div>
</div>
<h4 class="font-weight-bold text-primary my-3"><u>Judul Matriks</u></h4>
<div class="row no-gutters">
<div class="col-6">

<div class="form-group w-25">
    <label for="exampleFormControlSelect1">Tampilkan</label>
    <select class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
</div>

</div>

<div class="col-6">
<div class="form-group w-50 ml-auto">
    <label for="exampleInputEmail1" class="bmd-label-floating">Cari</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
</div>

<div class="col-12">

<table class="table table-bordered table-light">
  <thead class="bg-primary">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Peneliti</th>
      <th scope="col">Indeks Sitasi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Lorem ipsum dolor sit ame</td>
      <td>9999</td>
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

</div>
</div>

@endsection
