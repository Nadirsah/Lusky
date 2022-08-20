@extends("master")
@section("content")  
<div class="contact">
        <div class="container">
            <div class="about__title title">
                <h4>Əlaqə</h4>
                <a href="./index.html">Ana səhifə </a> / Əlaqə
            </div>
            <div class="contact__wrapper">
                <div class="contact__item col-12 col-lg-4">
                    <div class="contact__item__img">
                        <img src="./public/images/icon/contact-tel.svg" alt="">
                    </div>
                    <div class="contact__item__text">+(994) 99 832 07 77</div>
                </div>
                <div class="contact__item col-12 col-lg-4">
                    <div class="contact__item__img">
                        <img src="./public/images/icon/contact-email.svg" alt="">
                    </div>
                    <div class="contact__item__text">info@los.az</div>
                </div>
                <div class="contact__item col-12 col-lg-4">
                    <div class="contact__item__img">
                        <img src="./public/images/icon/contact-location.svg" alt="">
                    </div>
                    <div class="contact__item__text">
                        Ziya Bünyadov pr, 1965. Çinar Park Biznes Mərkəzi
                    </div>
                </div>
            </div>
            <div class="location">
                <div class="mapouter col-12 col-lg-6"><div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Ziya Bünyadov pr, 1965. Çinar Park Biznes Mərkəzi&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a>
                </div>
                </div>
                <div class="location__right col-12 col-lg-6">
                    <div class="location__title"><h4>Müraciət Formu</h4></div>
                    <div class="location__input"><input type="text" placeholder="Ad, soyad *" required></div>
                    <div class="location__input"><input type="text" placeholder="Başlıq *" required></div>
                    <div class="location__input"><input type="text" placeholder="E-mail *" required></div>
                    <div class="location__input"><input style="padding-bottom: 80px;" type="text" placeholder="Mesajınız *" required></div>
                    <button>Göndər</button>
                </div>
            </div>
        </div>
    </div>
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->

 @endsection