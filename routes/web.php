<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\Admincontroller;


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

Route::get("index",[Indexcontroller::class,"index"])->name('index');
Route::get("llogin",[Indexcontroller::class,"login"])->name('llogin');
Route::get("lregister",[Indexcontroller::class,"register"])->name('lregister');
Route::get("ofis_lev",[Indexcontroller::class,"ofis_lev"])->name('ofis_lev');
Route::get("qida_icki",[Indexcontroller::class,"qida_icki"])->name('qida_icki');
Route::get("teserrufat_mal",[Indexcontroller::class,"teserrufat_mal"])->name('teserrufat_mal');
Route::get("elek_avadanliq",[Indexcontroller::class,"elek_avadanliq"])->name('elek_avadanliq');
Route::get("dibcek_gul",[Indexcontroller::class,"dibcek_gul"])->name('dibcek_gul');
Route::get("hediyye",[Indexcontroller::class,"hediyye"])->name('hediyye');
Route::get("cofe_shop",[Indexcontroller::class,"cofe_shop"])->name('cofe_shop');
Route::get("sexsi_kabinet",[Indexcontroller::class,"sexsi_kabinet"])->name('sexsi_kabinet');
Route::get("sebet",[Indexcontroller::class,"sebet"])->name('sebet');
Route::get("istek_siyahi",[Indexcontroller::class,"istek_siyahi"])->name('istek_siyahi');
Route::get("haqqimizda",[Indexcontroller::class,"haqqimizda"])->name('haqqimizda');
Route::get("yeni",[Indexcontroller::class,"yeni"])->name('yeni');
Route::get("endirimler",[Indexcontroller::class,"endirimler"])->name('endirimler');
Route::get("en_cox_satilan",[Indexcontroller::class,"en_cox_satilan"])->name('en_cox_satilan');
Route::get("catdirilma",[Indexcontroller::class,"catdirilma"])->name('catdirilma');
Route::get("geri_qaytarma",[Indexcontroller::class,"geri_qaytarma"])->name('geri_qaytarma');
Route::get("elaqe",[Indexcontroller::class,"elaqe"])->name('elaqe');
Route::get("sifremi_unutdum",[Indexcontroller::class,"sifremi_unutdum"])->name('sifremi_unutdum');
Route::get("sifaris",[Indexcontroller::class,"sifaris"])->name('sifaris');
Route::get("sifarislerim",[Indexcontroller::class,"sifarislerim"])->name('sifarislerim');
Route::get("meh_detal",[Indexcontroller::class,"meh_detal"])->name('meh_detal');

//Admincontroller

Route::get("/",[Admincontroller::class,"admindex"])->name('admindex');

Route::get("/redirects",[Admincontroller::class,"redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("kategory",[Admincontroller::class,"kategory"])->name('kategory');
Route::post("skategory",[Admincontroller::class,"Storekategory"])->name('Skategory');
Route::get("Editkategory/{id}",[Admincontroller::class,"editkategory"]);
Route::post("updatekategory",[Admincontroller::class,"updatekategory"])->name('updatekategory');
Route::get("deletekategory/{id}",[Admincontroller::class,"deletekategory"]);

//ofisitem

Route::get("ofisitem",[Admincontroller::class,"ofisitem"])->name('ofisitem');
Route::post("sofisitem",[Admincontroller::class,"Storeofisitem"])->name('Sofisitem');
Route::get("Editofisitem/{id}",[Admincontroller::class,"editofisitem"]);
Route::post("updateofisitem",[Admincontroller::class,"updateofisitem"])->name('updateofisitem');
Route::get("deleteofisitem/{id}",[Admincontroller::class,"deleteofisitem"]);

//qidaitem

Route::get("qidaitem",[Admincontroller::class,"qidaitem"])->name('qidaitem');
Route::post("sqidaitem",[Admincontroller::class,"Storeqidaitem"])->name('Sqidaitem');
Route::get("Editqidaitem/{id}",[Admincontroller::class,"editqidaitem"]);
Route::post("updateqidaitem",[Admincontroller::class,"updateqidaitem"])->name('updateqidaitem');
Route::get("deleteqidaitem/{id}",[Admincontroller::class,"deleteqidaitem"]);

//teserrufatitem

Route::get("teserrufatitem",[Admincontroller::class,"teserrufatitem"])->name('teserrufatitem');
Route::post("steserrufatitem",[Admincontroller::class,"Storeteserrufatitem"])->name('Steserrufatitem');
Route::get("Editteserrufatitem/{id}",[Admincontroller::class,"editteserrufatitem"]);
Route::post("updateteserrufatitem",[Admincontroller::class,"updateteserrufatitem"])->name('updateteserrufatitem');
Route::get("deleteteserrufatitem/{id}",[Admincontroller::class,"deleteteserrufatitem"]);

//elektronitem

Route::get("elektronitem",[Admincontroller::class,"elektronitem"])->name('elektronitem');
Route::post("selektronitem",[Admincontroller::class,"Storeelektronitem"])->name('Selektronitem');
Route::get("Editelektronitem/{id}",[Admincontroller::class,"editelektronitem"]);
Route::post("updateelektronitem",[Admincontroller::class,"updateelektronitem"])->name('updateelektronitem');
Route::get("deleteelektronitem/{id}",[Admincontroller::class,"deleteelektronitem"]);

//dibcekitem

Route::get("dibcekitem",[Admincontroller::class,"dibcekitem"])->name('dibcekitem');
Route::post("sdibcekitem",[Admincontroller::class,"Storedibcekitem"])->name('Sdibcekitem');
Route::get("Editdibcekitem/{id}",[Admincontroller::class,"editdibcekitem"]);
Route::post("updatedibcekitem",[Admincontroller::class,"updatedibcekitem"])->name('updatedibcekitem');
Route::get("deletedibcekitem/{id}",[Admincontroller::class,"deletedibcekitem"]);

//hediyyeitem

Route::get("hediyyeitem",[Admincontroller::class,"hediyyeitem"])->name('hediyyeitem');
Route::post("shediyyeitem",[Admincontroller::class,"Storehediyyeitem"])->name('Shediyyeitem');
Route::get("Edithediyyeitem/{id}",[Admincontroller::class,"edithediyyeitem"]);
Route::post("updatehediyyeitem",[Admincontroller::class,"updatehediyyeitem"])->name('updatehediyyeitem');
Route::get("deletehediyyeitem/{id}",[Admincontroller::class,"deletehediyyeitem"]);

//coffeitem

Route::get("coffeitem",[Admincontroller::class,"coffeitem"])->name('coffeitem');
Route::post("scoffeitem",[Admincontroller::class,"Storecoffeitem"])->name('Scoffeitem');
Route::get("Editcoffeitem/{id}",[Admincontroller::class,"editcoffeitem"]);
Route::post("updatecoffeitem",[Admincontroller::class,"updatecoffeitem"])->name('updatecoffeitem');
Route::get("deletecoffeitem/{id}",[Admincontroller::class,"deletecoffeitem"]);

