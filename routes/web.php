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
Route::put("updateofisitem/{id}",[Admincontroller::class,"updateofisitem"])->name('updateofisitem');
Route::get("deleteofisitem/{id}",[Admincontroller::class,"deleteofisitem"]);

//ofisnov

Route::get("ofisnov",[Admincontroller::class,"ofisnov"])->name('ofisnov');
Route::post("sofisnov",[Admincontroller::class,"Storeofisnov"])->name('Sofisnov');
Route::get("Editofisnov/{id}",[Admincontroller::class,"editofisnov"]);
Route::post("updateofisnov",[Admincontroller::class,"updateofisnov"])->name('updateofisnov');
Route::get("deleteofisnov/{id}",[Admincontroller::class,"deleteofisnov"]);


//qidaitem

Route::get("qidaitem",[Admincontroller::class,"qidaitem"])->name('qidaitem');
Route::post("sqidaitem",[Admincontroller::class,"Storeqidaitem"])->name('Sqidaitem');
Route::get("Editqidaitem/{id}",[Admincontroller::class,"editqidaitem"]);
Route::post("updateqidaitem",[Admincontroller::class,"updateqidaitem"])->name('updateqidaitem');
Route::get("deleteqidaitem/{id}",[Admincontroller::class,"deleteqidaitem"]);

//qidanov

Route::get("qidanov",[Admincontroller::class,"qidanov"])->name('qidanov');
Route::post("sqidanov",[Admincontroller::class,"Storeqidanov"])->name('Sqidanov');
Route::get("Editqidanov/{id}",[Admincontroller::class,"editqidanov"]);
Route::post("updateqidanov",[Admincontroller::class,"updateqidanov"])->name('updateqidanov');
Route::get("deleteqidanov/{id}",[Admincontroller::class,"deleteqidanov"]);

//teserrufatitem

Route::get("teserrufatitem",[Admincontroller::class,"teserrufatitem"])->name('teserrufatitem');
Route::post("steserrufatitem",[Admincontroller::class,"Storeteserrufatitem"])->name('Steserrufatitem');
Route::get("Editteserrufatitem/{id}",[Admincontroller::class,"editteserrufatitem"]);
Route::post("updateteserrufatitem",[Admincontroller::class,"updateteserrufatitem"])->name('updateteserrufatitem');
Route::get("deleteteserrufatitem/{id}",[Admincontroller::class,"deleteteserrufatitem"]);

//teserrufatnov

Route::get("teserrufatnov",[Admincontroller::class,"teserrufatnov"])->name('teserrufatnov');
Route::post("steserrufatnov",[Admincontroller::class,"Storeteserrufatnov"])->name('Steserrufatnov');
Route::get("Editteserrufatnov/{id}",[Admincontroller::class,"editteserrufatnov"]);
Route::post("updateteserrufatnov",[Admincontroller::class,"updateteserrufatnov"])->name('updateteserrufatnov');
Route::get("deleteteserrufatnov/{id}",[Admincontroller::class,"deleteteserrufatnov"]);

//elektronitem

Route::get("elektronitem",[Admincontroller::class,"elektronitem"])->name('elektronitem');
Route::post("selektronitem",[Admincontroller::class,"Storeelektronitem"])->name('Selektronitem');
Route::get("Editelektronitem/{id}",[Admincontroller::class,"editelektronitem"]);
Route::post("updateelektronitem",[Admincontroller::class,"updateelektronitem"])->name('updateelektronitem');
Route::get("deleteelektronitem/{id}",[Admincontroller::class,"deleteelektronitem"]);

//elektronnov

Route::get("elektronnov",[Admincontroller::class,"elektronnov"])->name('elektronnov');
Route::post("selektronnov",[Admincontroller::class,"Storeelektronnov"])->name('Selektronnov');
Route::get("Editelektronnov/{id}",[Admincontroller::class,"editelektronnov"]);
Route::post("updateelektronnov",[Admincontroller::class,"updateelektronnov"])->name('updateelektronnov');
Route::get("deleteelektronnov/{id}",[Admincontroller::class,"deleteelektronnov"]);

//dibcekitem

Route::get("dibcekitem",[Admincontroller::class,"dibcekitem"])->name('dibcekitem');
Route::post("sdibcekitem",[Admincontroller::class,"Storedibcekitem"])->name('Sdibcekitem');
Route::get("Editdibcekitem/{id}",[Admincontroller::class,"editdibcekitem"]);
Route::post("updatedibcekitem",[Admincontroller::class,"updatedibcekitem"])->name('updatedibcekitem');
Route::get("deletedibcekitem/{id}",[Admincontroller::class,"deletedibcekitem"]);


//dibceknov

Route::get("dibceknov",[Admincontroller::class,"dibceknov"])->name('dibceknov');
Route::post("sdibceknov",[Admincontroller::class,"Storedibceknov"])->name('Sdibceknov');
Route::get("Editdibceknov/{id}",[Admincontroller::class,"editdibceknov"]);
Route::post("updatedibceknov",[Admincontroller::class,"updatedibceknov"])->name('updatedibceknov');
Route::get("deletedibceknov/{id}",[Admincontroller::class,"deletedibceknov"]);

//hediyyeitem

Route::get("hediyyeitem",[Admincontroller::class,"hediyyeitem"])->name('hediyyeitem');
Route::post("shediyyeitem",[Admincontroller::class,"Storehediyyeitem"])->name('Shediyyeitem');
Route::get("Edithediyyeitem/{id}",[Admincontroller::class,"edithediyyeitem"]);
Route::post("updatehediyyeitem",[Admincontroller::class,"updatehediyyeitem"])->name('updatehediyyeitem');
Route::get("deletehediyyeitem/{id}",[Admincontroller::class,"deletehediyyeitem"]);


//hediyyenov

Route::get("hediyyenov",[Admincontroller::class,"hediyyenov"])->name('hediyyenov');
Route::post("shediyyenov",[Admincontroller::class,"Storehediyyenov"])->name('Shediyyenov');
Route::get("Edithediyyenov/{id}",[Admincontroller::class,"edithediyyenov"]);
Route::post("updatehediyyenov",[Admincontroller::class,"updatehediyyenov"])->name('updatehediyyenov');
Route::get("deletehediyyenov/{id}",[Admincontroller::class,"deletehediyyenov"]);

//coffeitem

Route::get("coffeitem",[Admincontroller::class,"coffeitem"])->name('coffeitem');
Route::post("scoffeitem",[Admincontroller::class,"Storecoffeitem"])->name('Scoffeitem');
Route::get("Editcoffeitem/{id}",[Admincontroller::class,"editcoffeitem"]);
Route::post("updatecoffeitem",[Admincontroller::class,"updatecoffeitem"])->name('updatecoffeitem');
Route::get("deletecoffeitem/{id}",[Admincontroller::class,"deletecoffeitem"]);

//coffenov

Route::get("coffenov",[Admincontroller::class,"coffenov"])->name('coffenov');
Route::post("scoffenov",[Admincontroller::class,"Storecoffenov"])->name('Scoffenov');
Route::get("Editcoffenov/{id}",[Admincontroller::class,"editcoffenov"]);
Route::post("updatecoffenov",[Admincontroller::class,"updatecoffenov"])->name('updatecoffenov');
Route::get("deletecoffenov/{id}",[Admincontroller::class,"deletecoffenov"]);

//haqqimizda

Route::get("haqqimizda",[Admincontroller::class,"haqqimizda"])->name('haqqimizda');
Route::post("shaqqimizda",[Admincontroller::class,"Storehaqqimizda"])->name('Shaqqimizda');
Route::get("Edithaqqimizda/{id}",[Admincontroller::class,"edithaqqimizda"]);
Route::post("updatehaqqimizda",[Admincontroller::class,"updatehaqqimizda"])->name('updatehaqqimizda');
Route::get("deletehaqqimizda/{id}",[Admincontroller::class,"deletehaqqimizda"]);

//elaqe

Route::get("elaqe",[Admincontroller::class,"elaqe"])->name('elaqe');
Route::post("selaqe",[Admincontroller::class,"Storeelaqe"])->name('Selaqe');
Route::get("Editelaqe/{id}",[Admincontroller::class,"editelaqe"]);
Route::post("updateelaqe",[Admincontroller::class,"updateelaqe"])->name('updateelaqe');
Route::get("deleteelaqe/{id}",[Admincontroller::class,"deleteelaqe"]);


//catdirilma

Route::get("catdirilma",[Admincontroller::class,"catdirilma"])->name('catdirilma');
Route::post("scatdirilma",[Admincontroller::class,"Storecatdirilma"])->name('Scatdirilma');
Route::get("Editcatdirilma/{id}",[Admincontroller::class,"editcatdirilma"]);
Route::post("updatecatdirilma",[Admincontroller::class,"updatecatdirilma"])->name('updatecatdirilma');
Route::get("deletecatdirilma/{id}",[Admincontroller::class,"deletecatdirilma"]);


//qaytarma

Route::get("geri_qaytarma",[Admincontroller::class,"geri_qaytarma"])->name('geri_qaytarma');
Route::post("sgeri_qaytarma",[Admincontroller::class,"Storegeri_qaytarma"])->name('Sgeri_qaytarma');
Route::get("Editgeri_qaytarma/{id}",[Admincontroller::class,"editgeri_qaytarma"]);
Route::post("updategeri_qaytarma",[Admincontroller::class,"updategeri_qaytarma"])->name('updategeri_qaytarma');
Route::get("deletegeri_qaytarma/{id}",[Admincontroller::class,"deletegeri_qaytarma"]);
