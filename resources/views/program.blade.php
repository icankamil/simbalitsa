@extends('nav')

@section('konten')

<div class="container-fluid mt-4">
<div class="row border-bottom border-primary">
    <div class="col-3">
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard" class="font-weight-bold">Beranda</a></li>
    <li class="breadcrumb-item active font-weight-bold" aria-current="page">Program</li>
  </ol>
</nav>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/rptprdhp" class="main-nav">
    <i class="material-icons md-72">insert_drive_file</i>
      <h4 class="d-flex align-items-end font-weight-bold">RPTP/RDHP</h4>
</a>
</div>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/rktm" class="main-nav">
    <i class="material-icons md-72">insert_drive_file</i>
      <h4 class="d-flex align-items-end font-weight-bold">RKTM</h4>
    </a>
</div>
    </div>
    <div class="col-3">
    <div class="dash-nav">
    <a href="/ropprdhp" class="main-nav">
    <i class="material-icons md-72">insert_drive_file</i>
      <h4 class="d-flex align-items-end font-weight-bold">ROPP/RODHP</h4>
</a>
</div>
    </div>
    <div class="col-3 offset-3 mt-3">
    <div class="dash-nav">
    <a href="/roktm" class="main-nav">
    <i class="material-icons md-72">insert_drive_file</i>
      <h4 class="d-flex align-items-end font-weight-bold">ROKTM</h4>
</a>
</div>
    </div>
  </div>
</div>

@endsection
