@extends("master")
@section("content")  
<div class="login d-flex">
    <!-- <div class="container d-flex"> -->
        <div class="login__left col-12 col-lg-3 xs-lg-hidden">
            <div class="login__left__img">
                <img src="{{asset('style_lucky/./public/images/logo/logo-header.svg')}}" alt="">
            </div>
            <div class="login__left__button">
                <a href="./qeydiyyat.html"><button>Qeydiyyat</button></a>
            </div>
        </div>
        <div class="login__right col-12 col-lg-9">
            <div class="login__right__title title"><h3>Daxil ol</h3></div>
            <div class="login__right__input">
                <div class="login__right__input__login">
                    <input type="email" required placeholder="E-poçt ünvanı *">
                </div>
                <div class="login__right__input__login">
                    <input type="password" required placeholder="Şifrə *">
                </div>
            </div>
                <div class="login__right__bottom d-flex">
                    <div>
                        <label for="meni-xatirla">
                            <input type="checkbox" name="" id="meni-xatirla">Məni xatırla</div>
                        </label>
                        <div><a href="{{route('sifremi_unutdum')}}">Şifrəmi unutdum</a></div>
                </div>
                <div class="login__right__bottom__button">
                    <button type="submit">Daxil ol</button>
                </div>
        </div>
    <!-- </div> -->
    </div> 
       

 @endsection