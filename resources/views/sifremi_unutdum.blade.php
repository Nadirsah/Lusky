@extends("master")
@section("content")  
<div class="login d-flex">
    <!-- <div class="container d-flex"> -->
        <div class="login__left col-12 col-lg-3 xs-lg-hidden">
            <div class="login__left__img">
                <img src="./public/images/logo/logo-header.svg" alt="">
            </div>
            <div class="login__left__button">
                <a href="./daxil-ol.html"><button>Geri dön</button></a>
            </div>
        </div>
        <div class="login__right col-12 col-lg-9">
            <div class="login__right__title title"><h3>Şifrə yeniləmə</h3></div>
            <div class="login__right__input">
                <div class="login__right__input__login">
                    <input type="email" required placeholder="E-poçt ünvanı *">
                </div>
            </div>
                <div class="login__right__bottom__button">
                    <button>Göndər</button>
                </div>
        </div>
    <!-- </div> -->
    </div> 
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->

 @endsection