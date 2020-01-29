@extends('nav')

@section('konten')


<div class="container-fluid">
<h4 class="font-weight-bold text-primary my-3"><u>Research and Development Capacity</u></h4>
<div class="row no-gutters">
<div class="col-6 border-right border-primary pr-3">
<h4 class="font-weight-bold text-primary">Pilih Indikator</h4>

<div class="form-group">
    <select class="form-control selectpicker" data-style="btn btn-link" id="indikator">
      <option value="/kegiatanriset" >1. Jumlah Kegiatan riset yang sesuai dengan roadmap riset lembaga</option>
      <option value="/kegiatanhki" selected="selected">2. Jumlah kegiatan yang mendukung peningkatan perolehan HKI</option>
      <option value="/kegiatanrisetlembaga">3. Jumlah kegiatan yang mendukung pengembangan produk riset lembaga</option>
      <option value="/publikasijurnalnasional">4. Publikasi dalam jurnal nasional terakreditasi (Min:20)</option>
      <option value="/publikasijurnalinternasional">5. Publikasi dalam Jurnal Internasional (Min:5)</option>
      <option value="/perolehanpaten">6. Perolehan paten atau rezim HKI lainnya</option>
      <option value="/kerjasamarisetnasional">7. Kerjasama riset pada tingkat nasional (Min:3)</option>
      <option value="/kerjasamarisetinternasional">8. Kerjasama riset pada tingkat internasional (Min:1)</option>
    </select>
  </div>

  <div class="form-group">
    <select class="form-control selectpicker" data-style="btn btn-link" id="subindikator">
      <option value="/kegiatanhki" selected="selected">1. Matriks Kegiatan yang mendukung peningkatan perolehan HKI</option></select>
  </div>

<div class="mt-5">
<p class="font-weight-bold text-justify">Some Text Here</p>
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
    <label for="exampleInputEmail1" class="bmd-label-floating">Nama Kegiatan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


 <div class="form-group">
    <label for="exampleFormControlTextarea1" class="bmd-label-floating">Deskripsi Kegiatan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
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
      <th scope="col">Nama Kegiatan</th>
      <th scope="col">Deskripsi Kegiatan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Pengelolaan Simber daya genetik sayuran</td>
      <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vestibulum ex. Maecenas iaculis ornare libero, commodo mattis orci suscipit a. Aenean laoreet, eros at accumsan porta, tortor ligula placerat elit, sit amet congue tellus est eu ex. Vivamus vulputate tortor a lacus eleifend, ut fringilla libero aliquet. Morbi ut magna id nibh viverra laoreet non ut massa. Vivamus tempus, sapien nec accumsan tempus, erat massa tempor sapien, vel sodales ipsum ligula ac ligula. Praesent dignissim dictum risus, in semper elit laoreet ut. Donec pulvinar purus a ipsum vehicula, et interdum erat bibendum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed ut mollis nunc.</td>
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
