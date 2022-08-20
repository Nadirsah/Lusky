@extends("master")
@section("content")  
<div class="login d-flex">
<div class="login__left col-12 col-lg-3 xs-lg-hidden">
            <div class="login__left__img">
                <img src="{{asset('style_lucky/./public/images/logo/logo-header.svg')}}" alt="">
            </div>
            <div class="login__left__button">
                <a href="./daxil-ol.html"><button>Daxil ol</button></a>
            </div>
        </div>
        <div class="login__right col-12 col-lg-9">
            <div class="login__right__title title"><h3>Qeydiyyat</h3></div>
            <div class="login__right__input register__right__input d-flex">
                   <input type="text" required placeholder="Şirkət adı *">
                   <input type="text" required placeholder="Əlaqəli şəxs *">
            </div>
            <div class="login__right__input register__right__input d-flex">
                    <input type="text" required placeholder="Ünvan *">
                    <input type="email" required placeholder="E-poçt ünvanı *">
            </div>
            <div class="login__right__input register__right__input d-flex"> 
                    <input type="password" required placeholder="Şifrə *">
                    <input type="text" required placeholder="Telefon *">
            </div>
            <div class="login__right__input register__right__input">
                    <input type="password" required placeholder="Şifrə təsdiqlə *">
            </div>
                <div class="login__right__bottom__button">
                    <button type="submit">Qeydiyyat</button>
                </div>
        </div>
    <!-- </div> -->
    </div> 
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->

 @endsection