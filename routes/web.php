<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/dashboard', "DashboardController@index");
Route::get('/profile', "ProfileController@index");
Route::get('/message', "MessageController@index");
Route::get('/anggaran', "AnggaranController@index");
Route::get('/knapp', "KnappController@index");
Route::get('/knapp2', "Knapp2Controller@index");
Route::get('/knapp3', "Knapp3Controller@index");
Route::get('/rasiosdm', "RasioSDMController@index");
Route::get('/tingkatsarpras', "SarprasController@index");
Route::get('/sarpras2', "Sarpras2Controller@index");
Route::get('/anggaranrisetsdm', "AnggaranSDMController@index");
Route::get('/jenisbelanja', "AnggaranSDMController@index");
Route::get('/sumberpenerimaan', "AnggaranSDMController@index2");
Route::get('/anggaranakreditasi', "AkreditasiController@index");
Route::get('/kapasitaslembaga', "KapasitasLembagaController@index");
Route::get('/jumlahakses', "KapasitasLembagaController@index2");
Route::get('/jumlahlayanan', "KapasitasLembagaController@index3");
Route::get('/pengembangankapasitas', "PengembanganKapasitasController@index");
Route::get('/pembicarainternasional', "UndanganPembicaraController@index");
Route::get('/pemakalahinternasional', "UndanganPemakalahController@index");
Route::get('/kunjunganinternasional', "KunjunganInternasionalController@index");
Route::get('/lulusans3', "LulusanS3Controller@index");
Route::get('/kegiatanriset', "KegiatanRisetController@index");
Route::get('/kegiatanhki', "KegiatanHKIController@index");
Route::get('/kegiatanrisetlembaga', "KegiatanRisetLembagaController@index");
Route::get('/publikasijurnalnasional', "PublikasiJurnalNasionalController@index");
Route::get('/publikasijurnalinternasional', "PublikasiJurnalInternasionalController@index");
Route::get('/perolehanpaten', "PerolehanPatenController@index");
Route::get('/kerjasamarisetnasional', "KerjasamaRisetNasionalController@index");
Route::get('/kerjasamarisetinternasional', "KerjasamaRisetInternasionalController@index");
Route::get('/penguatanbasisdata', "PenguatanBasisDataController@index");
Route::get('/hilirisasi', "HilirisasiController@index");
Route::get('/penguatanproduk', "PenguatanProdukController@index");
Route::get('/kerjasamanonriset', "KerjasamaNonRisetController@index");
Route::get('/kontrakbisnis', "KontrakBisnisController@index");
Route::get('/nationalrecognition', "NationalRecognitionController@index");
Route::get('/nationalreference', "NationalReferenceController@index");
Route::get('/mitrabestari', "NationalReferenceController@index2");
Route::get('/sitasikumulatif', "NationalReferenceController@index3");
Route::get('/skpenugasan', "NationalReferenceController@index4");
Route::get('/jumlahundangan', "NationalReferenceController@index5");
Route::get('/penghargaanlain', "NationalReferenceController@index6");
Route::get('/economicbenefit', "EconomicBenefitController@index");
Route::get('/pelaksanaananggaran', "AnggaranController@index2");
Route::get('/renjaanggaran', "AnggaranController@index3");
Route::get('/petunjukoperasional', "AnggaranController@index4");
Route::get('/datadukungdipa', "AnggaranController@index5");
Route::get('/pagudana', "AnggaranController@index6");
Route::get('/program', "ProgramController@index");
Route::get('/rptprdhp', "ProgramController@index2");
Route::get('/rktm', "ProgramController@index3");
Route::get('/ropprdhp', "ProgramController@index4");
Route::get('/roktm', "ProgramController@index5");
Route::get('/matrik', "MatrikController@index");
Route::get('/iprogram', "IprogramController@index");
Route::get('/monev', "MonevController@index");
Route::get('/laporanfisik', "MonevController@index2");
Route::get('/progreport', "MonevController@index3");
Route::get('/laporanakhir', "MonevController@index4");
Route::get('/laporankinerja', "MonevController@index5");
Route::get('/laporantahunan', "MonevController@index6");
Route::get('/laporantengtahunan', "MonevController@index7");
Route::get('/admindash', "AdminController@index");
Route::get('/absorptivedash', "AdminController@index2");
Route::get('/pengguna', "AdminController@index3");

