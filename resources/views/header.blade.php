<div class="nav">
    <div class="container">
        <div class="header__top d-flex justify-content-end col-xl-12">
            <ul>
                <li><a href="{{route('llogin')}}">Daxil ol</a></li>
                <li><a href="{{route('lregister')}}">Qeydiyyat</a></li>
            </ul>
        </div>
        <div class="header__middle d-flex justify-content-space-between">
            <div class="nav__logo col-12 col-md-3 col-lg-3"><a href="{{route('index')}}"><img src="{{asset('style_lucky/./public/images/logo/logo-header.svg')}}" alt=""></a></div>
            <div class="nav__search xs-sm-md-hidden col-md-6 col-lg-6 d-flex align-items-center ">
                <form action="">
                <div class="search__box d-flex justify-content-center align-items-center position-relative">
                    <input type="search" name="" id="" placeholder="Axtar">
                    <span class="search__icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                </div>
                </form>
            </div>
            <div class="nav__icon col-lg-3 col-md-3 xs-sm-md-hidden d-flex align-items-center">
                <ul class="d-flex justify-content-end">
                    <li><a href="{{route('sexsi_kabinet')}}"><i class="fa-solid fa-user"></i></a></li>
                    <li><a class="notification sebet__cart" href="{{route('sebet')}}"><img src="{{asset('style_lucky/./public/images/general/cart.svg')}}" alt=""><span class="badge">0</span></a></li>
                    <li><a class="notification" href="{{route('istek_siyahi')}}"><img src="{{asset('style_lucky/./public/images/general/heart.svg')}}" alt=""><span class="badge">0</span></a></li>
                </ul>
            </div>           
        </div>
        <div class="header__bottom d-flex">
        <div class="category dropdown col-md-4 xl-4 sm-12">
            <div class="category__list col-sm-12 col-md-12 dropbtn"><img src="{{asset('style_lucky/./public/images/icon/category.svg')}}" alt="">Kateqoriyalar</div>
            <div class="category__menu dropdown-content">
                <ul class="main__list">
                    <li class="ofis subnav"><a href="{{route('ofis_lev')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617785889ofis-levezimatlari.svg')}}" alt="Ofis levazimatlari">Ofis l??vazimatlar??</a>
                        <div class="subnav-content">
                               <a href="">A??ard??c??</a>
                               <a href="">B????aq</a>
                               <a href="">Bloknot</a>
                               <a href="">??ek v?? qaim??</a>
                               <a href="">????r??iv??</a>
                               <a href="">Delg??c</a>
                               <a href="">D??ft??r</a>
                               <a href="">Fayl</a>
                               <a href="">Ka????z</a>
                               <a href="">Kalkulyator</a>
                               <a href="">Karanda??</a>
                               <a href="">Karanda?? yonan</a>
                               <a href="">Marker</a>
                               <a href="">Masa??st?? d??stl??ri</a>
                               <a href="">Pozan</a>
                               <a href="">Pul Rezini</a>
                               <a href="">Qay????</a>
                               <a href="">Qeyd Ka????z??</a>
                               <a href="">Q??l??m</a>
                               <a href="">Q??sqac</a>
                               <a href="">Qovluq</a>
                               <a href="">S??n??d Dolab??</a>
                               <a href="">S??n??d R??fi</a>
                               <a href="">Sko??</a>
                               <a href="">Skrepka</a>
                               <a href="">Stepler v?? ehtiyatlar??</a>
                               <a href="">X??tke??</a>
                               <a href="">Yap????qan</a>
                               <a href="">Yaz?? L??vh??si</a>
                               <a href="">Z??rf</a>
                               <a href="">Zibil Qab??</a>
                          </div>
                        </li>
                    <li class="qida subnav"><a href="{{route('qida_icki')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617786311qida.png')}}" alt="Qida">Qida v?? ????kil??r</a>
                        <div class="subnav-content">
                            <a href="#">??ay</a>
                            <a href="#">??dviyyat</a>
                            <a href="#">Q??hv??</a>
                            <a href="#">Q??nd</a>
                            <a href="#">Quru meyv??</a>
                            <a href="#">??irniyyat</a>
                            <a href="#">Soyuq ????kil??r</a>
                            <a href="#">S??d</a>
                            <a href="#">Un m??hsullar??</a>                             
                          </div>
                        </li>
                    <li class="teserrufat subnav"><a href="{{route('teserrufat_mal')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617786118xirdavat.png')}}" alt="Xirdavat"> T??s??rr??fat mallar??</a>
                        <div class="subnav-content">
                            <a href="#"> Bird??f??lik qablar</a>
                            <a href="#"> ??lc??k</a>
                            <a href="#"> Hava t??rav??tl??ndirici</a>
                            <a href="#"> M??tb??x D??smal??</a>
                            <a href="#"> M??tb??x levazimatlari</a>
                            <a href="#"> Sabun</a>
                            <a href="#"> Salfetl??r</a>
                            <a href="#"> T??mizl??yici madd??l??r</a>
                            <a href="#"> T??mizlik Vasit??l??ri</a>
                            <a href="#"> Tibbi l??vazimatlar</a>
                            <a href="#"> Tualet ka????z??</a>
                            <a href="#"> X??rdavat</a>
                            <a href="#"> Zibil Paketi</a>
                        
                          </div>
                        </li>
                    <li class="elektron subnav"><a href="{{route('elek_avadanliq')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617786259computer-accessories-512.webp')}}" alt=""> Elektron avadanl??q</a>
                        <div class="subnav-content">
                            <a href="#"> Batareyalar</a>
                            <a href="#"> Kartric</a>
                            <a href="#"> Klaviatura</a>
                            <a href="#"> Kompyuter ??????n ??anta</a>
                            <a href="#"> Modem</a>
                            <a href="#"> Mouse</a>
                            <a href="#"> Power Bank</a>
                            <a href="#"> Printer</a>
                            <a href="#"> Telefon</a>
                            <a href="#"> T??mizl??yicil??r</a>
                            <a href="#"> Uzad??c??</a>
                            <a href="#"> Yadda?? kart</a>
                          </div>
                    </li>
                    <li class="dibcek subnav"><a href="{{route('dibcek_gul')}}"><img src="{{asset('style_lucky/./public/CatImgs/16468163995165161.png')}}" alt="Dibcek">Dib????k g??ll??ri</a>
                        <div class="subnav-content">
                            <a href="#">
                                Aksesuarlar
                            </a>
                            <a href="#">Otaq g??ll??ri
                            </a>
                            </div>
                        </li>
                    <li class="hediyye subnav"><a href="{{route('hediyye')}}"><img src="{{asset('style_lucky/./public/CatImgs/1618572764fbdfbdf.jpg')}}" alt="Hediyye">H??diyy??lik</a>
                        <div class="subnav-content">
                            <a href="#"> C??zdan</a>
                            <a href="#"> Masa??st?? d??stl??ri</a>                        
                          </div>
                        </li>
                    <li class="coffee subnav"><a href="{{route('cofe_shop')}}"><img src="{{asset('style_lucky/./public/CatImgs/162151268599956.png')}}" alt="Koffee">Coffee shop</a>
                        <div class="subnav-content">
                            <a href="#">Mondo</a>
                            <a href="#">Q??hv?? bi??ir??nl??r</a>
                            <a href="#">Q??hv?? kapsullar</a>
                          </div>
                        </li>
                </ul>   
           </div>
        </div>
        <div class="nav__menu d-flex col-md-8">
            <div class="nav__item"><a href="{{route('haqqimizda')}}">Haqq??m??zda</a></div>
            <div class="nav__item"><a href="{{route('yeni')}}">Yeni</a></div>
            <div class="nav__item"><a href="{{route('endirimler')}}">Endiriml??r</a></div>
            <div class="nav__item"><a href="{{route('en_cox_satilan')}}">??n ??ox sat??lanlar</a></div>
            <div class="nav__item dropdown"><button>????rtl??r<img src="{{asset('style_lucky/./public/images/icon/arrow-right.svg')}}" alt=""></button>
            <div class="dropdown-content">
                <a href="{{route('catdirilma')}}">??atd??r??lma</a>
                <a href="{{route('geri_qaytarma')}}">Geri qaytar??lma</a>
            </div>
        </div>
            <div class="nav__item"><a href="{{route('elaqe')}}">??laq??</a></div>
        </div>
        </div>
        <!-- Mobile Nav Menu -->
        <div class="mobile-container"> 
            <div class="topnav">
                <div class="mobile__nav__icons d-flex">
                <a class="active"><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <!-- <i class="fa fa-bars d-flex"></i>  -->
                <div class="mobile__nav__toggle" onclick="navFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
              </a></a>
              <div class="mobile__nav__icon">
                <ul class="d-flex">
                    <li><a href="./sexsi-kabinet.html"><i class="fa-solid fa-user"></i></a></li>
                    <li><a class="notification" href="./sebet.html"><img src="./public/images/general/cart.svg" alt=""><span class="badge">0</span></a></li>
                    <li><a class="notification" href="./istek-sayisi.html"><img src="./public/images/general/heart.svg" alt=""><span class="badge">0</span></a></li>
                </ul>
            </div>
            </div>
            <div id="myLinks">
                <hr style="color: white;">
                <div class="mobile__search"><form action="">
                    <div class="mobile__search__box d-flex justify-content-center align-items-center position-relative">
                        <input type="search" name="" id="" placeholder="Axtar">
                        <span class="mobile__search__icon"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                    </form>
                </div>
              <ul>
              <li><a href="{{route('haqqimizda')}}">Haqq??m??zda</a></li>
              <li><a href="./yeni.html">Yeni</a></li>
              <li><a href="./endirimler.html">Endiriml??r</a></li>
              <li><a href="./en-cox-satilanlar.html">??n ??ox sat??lanlar</a></li>
              <li><a href="./catdirilma.html">??atd??r??lma</a></li>
              <li><a href="./geri-qaytarilma.html">Geri qaytar??lma</a></li>
              <li><a href="./elaqe.html">??laq??</a></li>
            </ul>
            </div>
          </div>
        </div> 
    </div> 
    </div>
    <!-- Mobile Category -->
    <div class="mobile__category__menu">
        <a class="active">
            <a href="javascript:void(0);" class="icon" onclick="myCategoryFunction()">
                <img src="{{asset('style_lusky/./public/images/icon/category.svg')}}" alt="">Kateqoriyalar 
            </a>
        </a> <hr style="color: #ffff;">
    <div id="mobile__category">
        <ul>
            <li class="ofis"><a href="./ofis-levazimatlari.html">Ofis l??vazimatlar??<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="qida"><a href="./qida-ve-ickiler.html">Qida v?? ????kil??r<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="teserrufat"><a href="./teserrufat-mallari.html">T??s??rr??fat mallar??<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="elektron"><a href="./elektron-avadanliq.html">Elektron avadanl??q<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="dibcek"><a href="./dibcek-guller.html">Dib????k g??ll??ri<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="hediyye"><a href="./hediyyelik.html">H??diyy??lik<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="coffee"><a href="./coffeeshop.html">Coffee shop<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
        </ul>
    </div>
    </div>
    