<?php

namespace App\Http\Controllers;

use App\Models\Ofisnov;

class Indexcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function ofis_lev()
    {
        $data = Ofisnov::all();

        return view('ofis_lev', compact('data'));
    }

    public function qida_icki()
    {
        return view('qida_icki');
    }

    public function teserrufat_mal()
    {
        return view('teserrufat_mal');
    }

    public function elek_avadanliq()
    {
        return view('elek_avadanliq');
    }

    public function dibcek_gul()
    {
        return view('dibcek_gul');
    }

    public function hediyye()
    {
        return view('hediyye');
    }

    public function cofe_shop()
    {
        return view('cofe_shop');
    }

    public function sexsi_kabinet()
    {
        return view('sexsi_kabinet');
    }

    public function sebet()
    {
        return view('sebet');
    }

    public function istek_siyahi()
    {
        return view('istek_siyahi');
    }

    public function haqqimizda()
    {
        return view('haqqimizda');
    }

    public function yeni()
    {
        return view('yeni');
    }

    public function endirimler()
    {
        return view('endirimler');
    }

    public function en_cox_satilan()
    {
        return view('en_cox_satilan');
    }

    public function catdirilma()
    {
        return view('catdirilma');
    }

    public function geri_qaytarma()
    {
        return view('geri_qaytarma');
    }

    public function elaqe()
    {
        return view('elaqe');
    }

    public function sifremi_unutdum()
    {
        return view('sifremi_unutdum');
    }

    public function sifaris()
    {
        return view('sifaris');
    }

    public function sifarislerim()
    {
        return view('sifarislerim');
    }

    public function meh_detal()
    {
        return view('meh_detal');
    }
}
