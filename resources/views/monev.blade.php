@extends('nav')

@section('konten')

<div class="container-fluid mt-4">
<div class="row border-bottom border-primary">
    <div class="col-3">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard" class="font-weight-bold">Beranda</a></li>
    <li class="breadcrumb-item active font-weight-bold" aria-current="page">Monev</li>
  </ol>
</nav>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/laporanfisik" class="main-nav">
    <i class="material-icons md-72">assignment</i>
      <h4 class="d-flex align-items-end font-weight-bold">Laporan Fisik</h4>
</a>
</div>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/progreport" class="main-nav">
    <i class="material-icons md-72">assessment</i>
      <h4 class="d-flex align-items-end font-weight-bold">Progress Report</h4>
    </a>
</div>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/laporanakhir" class="main-nav">
    <i class="material-icons md-72">description</i>
      <h4 class="d-flex align-items-end font-weight-bold">Laporan Akhir</h4>
</a>
</div>
    </div>
    <div class="col-3 offset-3 mt-3">
    <div class="dash-nav">
    <a href="/laporankinerja" class="main-nav">
    <i class="material-icons md-72">assignment_ind</i>
      <h4 class="d-flex align-items-end font-weight-bold">Laporan Kinerja</h4>
</a>
</div>
    </div>
    <div class="col-3 mt-3">
    <div class="dash-nav">
    <a href="/laporantahunan" class="main-nav">
    <i class="material-icons md-72">class</i>
      <h4 class="d-flex align-items-end font-weight-bold">Laporan Tahunan</h4>
</a>
</div>
    </div>
    <div class="col-3 mt-3">
    <div class="dash-nav">
    <a href="/laporantengtahunan" class="main-nav">
    <i class="material-icons md-72">chrome_reader_mode</i>
      <h4 class="d-flex align-items-end font-weight-bold">Laporan Tengah Tahunan</h4>
</a>
</div>
    </div>
  </div>
</div>

@endsection
