<?php


use App\Models\UserMuda;
use App\Models\PeriodePendaftaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SyiarController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UserMudaController;
use App\Http\Controllers\KaderisasiController;
use App\Http\Controllers\NarahubungController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\HasilScreeningController;
use App\Http\Controllers\PendaftaranMudaController;
use App\Http\Controllers\PeriodePendaftaranController;
use App\Http\Controllers\PendaftaranAnggotaMudaController;
use App\Http\Controllers\PendaftaranAnggotaBiasaController;
use App\Models\Anggota;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home' , [
//         "title" => "Beranda"
//     ]);
// });


// Route::get('/tentang', function () {
    //     return view('tentang' , [
        //         "title" => "Tentang"
        //     ]);
        // });
        
Route::get('/', [BerandaController::class, 'index'])->name('/');
Route::get('/syiarr', [TentangController::class, 'index'])->name('syiarr');
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');
Route::get('/tentangmisi', [MisiController::class, 'tentangmisi'])->name('tentangmisi');
Route::get('/tentangvisi', [VisiController::class, 'tentangvisi'])->name('tentangvisi');
Route::get('/shownara', [NarahubungController::class, 'shownara'])->name('shownara');
Route::get('/pengurus', [StrukturController::class, 'pengurus'])->name('pengurus');
Route::get('/showagenda', [AgendaController::class, 'showagenda'])->name('showagenda');
Route::get('/kaderisasi', [PendaftaranAnggotaMudaController::class, 'kaderisasi'])->name('kaderisasi');
Route::get('/tambahdata', [PendaftaranAnggotaBiasaController::class, 'tambahdata'])->name('tambahdata');
Route::get('/loginmuda', [UserMudaController::class, 'loginmuda'])->name('loginmuda');
Route::get('/tambahdata', [PendaftaranAnggotaBiasaController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertpmuda', [PendaftaranMudaController::class, 'insertpmuda'])->name('insertpmuda');
Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');

// Route::get('/showsyiar', [SyiarController::class,'index'])->name('showsyiar');

Route::get('/kaderisasi_v', [KaderisasiController::class, 'kaderisasi_v'])->name('kaderisasi_v');

Route::get('/kontak', [MainController::class, 'indexnya'])->name('kontak');


// Route::get('/roles', [UserController::class, 'index'])->name('roles');










// Route::get('/login', [LoginController::class, 'index']);

// Route::get('/administrator', [AdminController::class, 'administrator'])->name('administrator');
// Route::get('/user', [UserAccountController::class, 'user'])->name('user');


// user profile


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//hak akses untuk administrator
// Route::group(['middleware' => 'anggota muda'], function() {
//     Route::get('/tambahdata', [PendaftaranAnggotaBiasaController::class, 'tambahdata'])->name('tambahdata');
// });


Route::group(['middleware' => 'administrator'], function() {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/ubahpassword', [UserController::class, 'ubahpassword'])->name('ubahpassword');

    Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
    Route::get('/tambahsejarah', [SejarahController::class, 'tambahsejarah'])->name('tambahsejarah');
    Route::post('/insertdatasejarah', [SejarahController::class, 'insertdatasejarah'])->name('insertdatasejarah');
    Route::get('/tampilkandatasejarah/{id}', [SejarahController::class, 'tampilkandatasejarah'])->name('tampilkandatasejarah');
    Route::post('/updatedatasejarah/{id}', [SejarahController::class, 'updatedatasejarah'])->name('updatedatasejarah');
    Route::get('/deletedatasejarah/{id}', [SejarahController::class, 'deletedatasejarah'])->name('deletedatasejarah');
    Route::get('/deletedatasejarah/{id}/konfirm', [SejarahController::class, 'konfirmasi']);
    

    Route::get('/visi', [VisiController::class, 'index'])->name('visi');
    Route::get('/tambahvisi', [VisiController::class, 'tambahvisi'])->name('tambahvisi');
    Route::post('/insertdatavisi', [VisiController::class, 'insertdatavisi'])->name('insertdatavisi');
    Route::get('/tampilkandatavisi/{id}', [VisiController::class, 'tampilkandatavisi'])->name('tampilkandatavisi');
    Route::post('/updatedatavisi/{id}', [VisiController::class, 'updatedatavisi'])->name('updatedatavisi');
    Route::get('/deletedatavisi/{id}', [VisiController::class, 'deletedatavisi'])->name('deletedatavisi');
    Route::get('deletedatavisi/{id}/konfirm', [VisiController::class, 'konfirmasi']);
    


    Route::get('/misi', [MisiController::class, 'index'])->name('misi');
    Route::get('/tambahmisi', [MisiController::class, 'tambahmisi'])->name('tambahmisi');
    Route::post('/insertdatamisi', [MisiController::class, 'insertdatamisi'])->name('insertdatamisi');
    Route::get('/tampilkandatamisi/{id}', [MisiController::class, 'tampilkandatamisi'])->name('tampilkandatamisi');
    Route::post('/updatedatamisi/{id}', [MisiController::class, 'updatedatamisi'])->name('updatedatamisi');
    Route::get('/deletedatamisi/{id}', [MisiController::class, 'deletedatamisi'])->name('deletedatamisi');
    Route::get('/deletedatamisi/{id}/konfirm', [MisiController::class, 'konfirmasi']);
    

    Route::get('/struktur', [StrukturController::class, 'index'])->name('struktur');
    Route::get('/tambahstruktur', [StrukturController::class, 'tambahstruktur'])->name('tambahstruktur');
    Route::post('/insertdatastruktur', [StrukturController::class, 'insertdatastruktur'])->name('insertdatastruktur');
    Route::get('/tampilkandatastruktur/{id}', [StrukturController::class, 'tampilkandatastruktur'])->name('tampilkandatastruktur');
    Route::post('/updatedatastruktur/{id}', [StrukturController::class, 'updatedatastruktur'])->name('updatedatastruktur');
    Route::get('/deletedatastruktur/{id}', [StrukturController::class, 'deletedatastruktur'])->name('deletedatastruktur');
    Route::get('/deletedatastruktur/{id}/konfirm', [StrukturController::class, 'konfirmasi']);
    


    Route::get('/narahubung', [NarahubungController::class, 'index'])->name('narahubung');
    Route::get('/tambahnarahubung', [NarahubungController::class, 'tambahnarahubung'])->name('tambahnarahubung');
    Route::post('/insertdatanarahubung', [NarahubungController::class, 'insertdatanarahubung'])->name('insertdatanarahubung');
    Route::get('/tampilkandatanarahubung/{id}', [NarahubungController::class, 'tampilkandatanarahubung'])->name('tampilkandatanarahubung');
    Route::post('/updatedatanarahubung/{id}', [NarahubungController::class, 'updatedatanarahubung'])->name('updatedatanarahubung');
    Route::get('/deletedatanarahubung/{id}', [NarahubungController::class, 'deletedatanarahubung'])->name('deletedatanarahubung');
    Route::get('/deletedatanarahubung/{id}/konfirm', [NarahubungController::class, 'konfirmasi']);
    

    Route::get('/create_user', [UserAccountController::class, 'index'])->name('create_user');
    Route::get('/tampilkandatauser/{id}', [UserAccountController::class, 'tampilkandatauser'])->name('tampilkandatauser');
    Route::post('/updatedatauser/{id}', [UserAccountController::class, 'updatedatauser'])->name('updatedatauser');
    Route::get('/deleteuser/{id}', [UserAccountController::class, 'deleteuser'])->name('deleteuser');
    Route::get('/deleteuser/{id}/konfirm', [UserAccountController::class, 'konfirmasi']);
});


Route::group(['middleware' => 'syiar'], function(){
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
    Route::get('/tambahagenda', [AgendaController::class, 'tambahagenda'])->name('tambahagenda');
    Route::post('/insertdataagenda', [AgendaController::class, 'insertdataagenda'])->name('insertdataagenda');
    Route::get('/tampilkandataagenda/{id}', [AgendaController::class, 'tampilkandataagenda'])->name('tampilkandataagenda');
    Route::post('/updatedataagenda/{id}', [AgendaController::class, 'updatedataagenda'])->name('updatedataagenda');
    Route::get('/deletedataagenda/{id}', [AgendaController::class, 'deletedataagenda'])->name('deletedataagenda');
    Route::get('/deletedataagenda/{id}/konfirm', [AgendaController::class, 'konfirmasi']);
    
});

Route::group(['middleware' => 'kaderisasi'], function(){
    Route::get('/dataanggota', [AnggotaController::class, 'dataanggota'])->name('dataanggota');
    Route::get('/tambahanggota', [AnggotaController::class, 'tambahanggota'])->name('tambahanggota');
    Route::post('/insertanggota', [AnggotaController::class], 'insertanggota')->name('insertanggota');

    Route::get('/muda', [PendaftaranAnggotaMudaController::class, 'index'])->name('muda');
    
    // Route::post('/insertpmuda', [PendaftaranAnggotaMudaController::class, 'insertpmuda'])->name('insertpmuda');
    Route::get('/tampilkandatamuda/{id}', [PendaftaranAnggotaMudaController::class, 'tampilkandatamuda'])->name('tampilkandatamuda');
    Route::post('/updatepmuda', [PendaftaranAnggotaMudaController::class, 'updatepmuda'])->name('updatepmuda');
    Route::get('/deletedatamuda/{id}', [PendaftaranAnggotaMudaController::class, 'deletedatamuda'])->name('deletedatamuda');
    Route::get('/deletedatamuda/{id}/konfirm', [PendaftaranAnggotaMudaController::class, 'konfirmasi']);

    Route::get('/biasa', [PendaftaranAnggotaBiasaController::class, 'index'])->name('biasa');
    
    Route::post('/insertdatabiasa', [PendaftaranAnggotaBiasaController::class, 'insertdatabiasa'])->name('insertdatabiasa');
    Route::get('/tampilkanpbiasa/{id}', [PendaftaranAnggotaBiasaController::class, 'tampilkanpbiasa'])->name('tampilkanpbiasa');
    Route::post('/updatepbiasa', [PendaftaranAnggotaBiasaController::class, 'updatepbiasa'])->name('updatepbiasa');
    Route::get('/deletedatabiasa/{id}', [PendaftaranAnggotaBiasaController::class, 'deletedatabiasa'])->name('deletedatabiasa');
    Route::get('/deletedatabiasa/{id}/konfirm', [PendaftaranAnggotaBiasaController::class, 'konfirmasi']);

    Route::get('/screening', [HasilScreeningController::class, 'index'])->name('screening');
    Route::get('/tambahscreening', [HasilScreeningController::class, 'tambahscreening'])->name('tambahscreening');
    Route::post('/insertdatascreening', [HasilScreeningController::class, 'insertdatascreening'])->name('insertdatascreening');
    Route::get('/tampilkanscreening/{id}', [HasilScreeningController::class, 'tampilkanscreening'])->name('tampilkanscreening');
    Route::post('/updatescreening/{id}', [HasilScreeningController::class, 'updatescreening'])->name('updatescreening');
    Route::get('/deletescreening/{id}', [HasilScreeningController::class, 'deletescreening'])->name('deletescreening');
    Route::get('/deletescreening/{id}/konfirm', [HasilScreeningController::class, 'konfirmasi']);

    Route::get('/creates', [PeriodePendaftaranController::class, 'index'])->name('creates');
    Route::get('/store', [PeriodePendaftaranController::class, 'store'])->name('store');
    Route::post('/insertperiode', [PeriodePendaftaranController::class, 'insertperiode'])->name('insertperiode');
    Route::get('/deleteperiode/{id}', [PeriodePendaftaranController::class, 'deleteperiode'])->name('deleteperiode');
    Route::get('/deleteperiode/{id}/konfirm', [PeriodePendaftaranController::class, 'konfirmasi']);
    Route::get('/showperiode/{id}', [PeriodePendaftaranController::class, 'showperiode'])->name('showperiode');
    Route::post('/updateperiode/{id}', [PeriodePendaftaranController::class, 'updateperiode'])->name('updateperiode');

    Route::get('/buatakun', [UserMudaController::class, 'index'])->name('buatakun');
    Route::get('/storeakun', [UserMudaController::class, 'storeakun'])->name('storeakun');
    Route::post('/logindatamuda', [UserMudaController::class, 'logindatamuda'])->name('logindatamuda');
    Route::post('/insertmuda', [UserMudaController::class, 'insertmuda'])->name('insertmuda');
    Route::get('/delete_user/{id}/konfirm', [UserMudaController::class, 'konfirmasi']);
    Route::get('/deleteusermuda/{id}', [UserMudaController::class], 'deleteusermuda')->name('deleteusermuda');
});