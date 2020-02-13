@extends('admindash')

@section('konten')
<div class="content">
        <div class="container-fluid">
          <div class="row">

          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Daftar Pengguna</h4>
                 <!-- <p class="card-category"> Judul Sub-Indikator</p>-->
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama Pengguna
                        </th>
                        <th>
                          NIP
                        </th>
                        <th>
                          Jabatan
                        </th>
                        <th>
                          Aksi
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            0902121331029381929
                          </td>
                          <td>
                            Kepala Badan
                          </td>
                          <td>
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Edit">
  <i class="material-icons">edit</i>
</button>
<button class="btn btn-danger btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Hapus">
  <i class="material-icons">remove_circle</i>
</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                          0902121331029381929
                          </td>
                          <td>
                            Sekretaris
                          </td>
                          <td>
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Edit">
  <i class="material-icons">edit</i>
</button>
<button class="btn btn-danger btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Hapus">
  <i class="material-icons">remove_circle</i>
</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                          0902121331029381929
                          </td>
                          <td>
                            Bendahara
                          </td>
                          <td>
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Edit">
  <i class="material-icons">edit</i>
</button>
<button class="btn btn-danger btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Hapus">
  <i class="material-icons">remove_circle</i>
</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                          0902121331029381929
                          </td>
                          <td>
                            Tata Usaha
                          </td>
                          <td>
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Edit">
  <i class="material-icons">edit</i>
</button>
<button class="btn btn-danger btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Hapus">
  <i class="material-icons">remove_circle</i>
</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                          0902121331029381929
                          </td>
                          <td>
                            Hubungan Masyarakat
                          </td>
                          <td>
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Edit">
  <i class="material-icons">edit</i>
</button>
<button class="btn btn-danger btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Hapus">
  <i class="material-icons">remove_circle</i>
</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                          0902121331029381929
                          </td>
                          <td>
                            Arsip
                          </td>
                          <td>
                          <button class="btn btn-info btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Edit">
  <i class="material-icons">edit</i>
</button>
<button class="btn btn-danger btn-fab btn-fab-mini btn-round mx-2" rel="tooltip" title="Hapus">
  <i class="material-icons">remove_circle</i>
</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>

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
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear());
              tahun=new Date().getFullYear();
            </script>, Developed by
            <a href="http://www.dipointer.com/" target="_blank">DIPOINTER</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection
