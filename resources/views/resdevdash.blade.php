@extends('admindash')

@section('konten')
<div class="content">
        <div class="container-fluid">
          <div class="row">

          <div class="col-md-6">
          Pilih Indikator
          <div class="form-group pb-3">
    <select class="form-control" data-style="btn btn-link" id="indikator">
      <option value="/knapp">1. Tingkat Kualitas Tata Kelola Organisasi dan perolehan Sertifikasi KNAPPP</option>
      <option value="/rasiosdm">2. Rasio sumber daya manusia berdasarkan tingkat pendidikan dan kompetensi</option>
      <option value="/tingkatsarpras">3. Tingkat pemanfaatan dan ketersediaan dukungan sarana dan prasarana</option>
      <option value="/anggaranrisetsdm">4. Rasio jumlah Anggaran riset per SDM riset</option>
      <option value="/anggaranakreditasi">5. Perolehan akreditasi, standardisasi, dan Sertifikasi (Selain KNAPPP)</option>
      <option value="/kapasitaslembaga">6. Kapasitas lembaga dalam pengembangan jaringan dan akses informasi</option>
      <option value="/pengembangankapasitas">7. Jumlah kegiatan pengembangan kapasitas riset (SDM dan Sarpras)</option>
      <option value="/pembicarainternasional">8. Undangan menjadi pembicara dalam konferensi internasional (min:3)</option>
      <option value="/pemakalahinternasional">9. Undangan menjadi pemakalah dalam Konferensi internasional (min:5)</option>
      <option value="/kunjunganinternasional">10. Kunjungan lembaga internasional ke pusat unggulan IPTEK (min:3)</option>
      <option value="/lulusans3">11. Lulusan S3 sesuai tema riset unggulan lembaga (min:2)</option>
    </select>
  </div>
  </div>

  <div class="col-md-6">
  Pilih Subindikator
  <div class="form-group pb-3">
    <select class="form-control" data-style="btn btn-link" id="subindikator">
      <option value="/knapp">1. Matriks nama SOP dan tingkat pemanfaatannya</option>
      <option value="/knapp2">2. Matriks nama sistem informasi manajemen dan tingkat pemanfaatannya</option>
      <option value="/knapp3">3. Matriks perkembangan perolehan akreditasi KNAPP</option>
    </select>
  </div>
  </div>

          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Judul Indikator</h4>
                  <p class="card-category"> Judul Sub-Indikator</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Nama SOP
                        </th>
                        <th>
                          Deskripsi Singkat SOP
                        </th>
                        <th>
                          Perkembangan Penerapan SOP
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
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
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
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
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
                            Netherlands
                          </td>
                          <td>
                            Baileux
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
                            Korea, South
                          </td>
                          <td>
                            Overland Park
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
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
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
                            Chile
                          </td>
                          <td>
                            Gloucester
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
