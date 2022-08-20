@extends("master")
@section("content")  
<div class="container">
    <div class="about__title title">
        <h3>Şəxsi kabinet</h3>
        <a href="./index.html">Ana səhifə </a> / Şəxsi kabinet
    </div>
    <div class="kabinet__title d-flex">
        <i class="fa-solid fa-user"></i> <h3> Xoş gəldiniz, <strong>Super Admin</strong></h3>
    </div>
    <div class="kabinet__input">
        <label for="sirket">
            <p>Şirkət adı *</p>
            <input required  type="text" name="" id="sirket" placeholder="Admin Panel">
        </label>
        <label for="email">
            <p>E-poçt ünvanı *</p>
            <input required type="email" name="" id="email" placeholder="info@lucky.az">
        </label>
        <label for="soyad">
            <p>Ad, soyad *</p>
            <input required type="text" name="" id="soyad" placeholder="Super Admin">
        </label>
        <label for="seher">
            <p>Şəhər </p>
            <input type="text" name="" id="seher" placeholder="Bakı">
        </label>
        <label for="unvan">
            <p>Ünvan</p>
            <input type="text" name="" id="unvan" placeholder="Ziya Bünyadov pr">
        </label>
        <label for="sifre">
            <p>Şifrə</p>
            <input type="password" name="" id="sifre" placeholder="********">
        </label>
        <label for="telefon">
            <p>Telefon</p>
            <input type="tel" name="" id="telefon" placeholder="51613513">
        </label>
    </div>
    <div class="kabinet__button">
        <button type="submit">Yadda saxla</button>
    </div>
    </div>
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->
 @endsection