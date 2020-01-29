@extends('nav')

@section('konten')


<div class="container-fluid">
<h4 class="font-weight-bold text-primary my-3"><u>Absorptive Capacity</u></h4>
<div class="row no-gutters">
<div class="col-6 border-right border-primary pr-3">
<h4 class="font-weight-bold text-primary">Pilih Indikator</h4>

<div class="form-group">
    <select class="form-control selectpicker" data-style="btn btn-link" id="indikator">
      <option value="/knapp">1. Tingkat Kualitas Tata Kelola Organisasi dan perolehan Sertifikasi KNAPPP</option>
      <option value="/rasiosdm">2. Rasio sumber daya manusia berdasarkan tingkat pendidikan dan kompetensi</option>
      <option value="/tingkatsarpras">3. Tingkat pemanfaatan dan ketersediaan dukungan sarana dan prasarana</option>
      <option value="/anggaranrisetsdm" >4. Rasio jumlah Anggaran riset per SDM riset</option>
      <option value="/anggaranakreditasi">5. Perolehan akreditasi, standardisasi, dan Sertifikasi (Selain KNAPPP)</option>
      <option value="/kapasitaslembaga">6. Kapasitas lembaga dalam pengembangan jaringan dan akses informasi</option>
      <option value="/pengembangankapasitas" >7. Jumlah kegiatan pengembangan kapasitas riset (SDM dan Sarpras)</option>
      <option value="/pembicarainternasional">8. Undangan menjadi pembicara dalam konferensi internasional (min:3)</option>
      <option value="/pemakalahinternasional" >9. Undangan menjadi pemakalah dalam Konferensi internasional (min:5)</option>
      <option value="/kunjunganinternasional" selected="selected">10. Kunjungan lembaga internasional ke pusat unggulan IPTEK (min:3)</option>
      <option value="/lulusans3">11. Lulusan S3 sesuai tema riset unggulan lembaga (min:2)</option>
    </select>
  </div>

  <div class="form-group">
    <select class="form-control selectpicker" data-style="btn btn-link" id="subindikator">
      <option value="/kunjunganinternasional" selected="selected">1. Matriks Rekapitulasi undangan menjadi pemakalah dalam Forum Ilmiah Internasional</option>
    </select>
  </div>

<div class="mt-5">
<p class="font-weight-bold text-justify">Tata Kelola dan Akreditasi manajemen lembaga penelitian dan pengembangan</p>
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
    <label for="exampleInputEmail1" class="bmd-label-floating">Nama Lembaga Internasional</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Maksud dan Tujuan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1" class="bmd-label-floating">Rencana Tindak Lanjut</label>
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
<h4 class="font-weight-bold text-primary my-3 mt-5"><u>Judul Matriks</u></h4>
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
      <th scope="col">Nama Lembaga Internasional</th>
      <th scope="col">Maksud dan Tujuan</th>
      <th scope="col">Rencana Tindak Lanjut</th>
      <th scope="col">Data Dukung</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Catur Hermanto</td>
      <td>Bawang merah dan bawang putih</td>
      <td>On the way</td>
      <td>file.pdf</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Pion Hermanto</td>
      <td>Bawang merah dan selada</td>
      <td>Sedang berjalan lancar</td>
      <td>file.pdf</td>
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
