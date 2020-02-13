@extends('nav')

@section('konten')

<div class="container-fluid mt-4">
<div class="row border-bottom border-primary">
    <div class="col-3">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard" class="font-weight-bold">Beranda</a></li>
    <li class="breadcrumb-item active font-weight-bold" aria-current="page">Anggaran</li>
  </ol>
</nav>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/pelaksanaananggaran" class="main-nav">
    <i class="material-icons md-72">bar_chart</i>
      <h4 class="d-flex align-items-end font-weight-bold">Pelaksanaan<br>Anggaran</h4>
</a>
</div>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/renjaanggaran" class="main-nav">
    <i class="material-icons md-72">assignment</i>
      <h4 class="d-flex align-items-end font-weight-bold">Renja Anggaran<br>Kementrian Lembaga</h4>
    </a>
</div>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/petunjukoperasional" class="main-nav">
    <i class="material-icons md-72">info</i>
      <h4 class="d-flex align-items-end font-weight-bold">Petunjuk<br>Operasional Kegiatan</h4>
</a>
</div>
    </div>
    <div class="col-3 offset-3 mt-3">
    <div class="dash-nav">
    <a href="/datadukungdipa" class="main-nav">
    <i class="material-icons md-72">description</i>
      <h4 class="d-flex align-items-end font-weight-bold">Data Dukung<br>DIPA/RKAL</h4>
</a>
</div>
    </div>
    <div class="col-3 mt-3">
    <div class="dash-nav">
    <a href="/pagudana" class="main-nav">
    <i class="material-icons md-72">account_balance</i>
      <h4 class="d-flex align-items-end font-weight-bold">PAGU Dana</h4>
</a>
</div>
    </div>
  </div>
</div>

@endsection
