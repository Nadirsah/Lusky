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
                    <li class="ofis subnav"><a href="{{route('ofis_lev')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617785889ofis-levezimatlari.svg')}}" alt="Ofis levazimatlari">Ofis ləvazimatları</a>
                        <div class="subnav-content">
                               <a href="">Ağardıcı</a>
                               <a href="">Bıçaq</a>
                               <a href="">Bloknot</a>
                               <a href="">Çek və qaimə</a>
                               <a href="">Çərçivə</a>
                               <a href="">Delgəc</a>
                               <a href="">Dəftər</a>
                               <a href="">Fayl</a>
                               <a href="">Kağız</a>
                               <a href="">Kalkulyator</a>
                               <a href="">Karandaş</a>
                               <a href="">Karandaş yonan</a>
                               <a href="">Marker</a>
                               <a href="">Masaüstü dəstləri</a>
                               <a href="">Pozan</a>
                               <a href="">Pul Rezini</a>
                               <a href="">Qayçı</a>
                               <a href="">Qeyd Kağızı</a>
                               <a href="">Qələm</a>
                               <a href="">Qısqac</a>
                               <a href="">Qovluq</a>
                               <a href="">Sənəd Dolabı</a>
                               <a href="">Sənəd Rəfi</a>
                               <a href="">Skoç</a>
                               <a href="">Skrepka</a>
                               <a href="">Stepler və ehtiyatları</a>
                               <a href="">Xətkeş</a>
                               <a href="">Yapışqan</a>
                               <a href="">Yazı Lövhəsi</a>
                               <a href="">Zərf</a>
                               <a href="">Zibil Qabı</a>
                          </div>
                        </li>
                    <li class="qida subnav"><a href="{{route('qida_icki')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617786311qida.png')}}" alt="Qida">Qida və İçkilər</a>
                        <div class="subnav-content">
                            <a href="#">Çay</a>
                            <a href="#">Ədviyyat</a>
                            <a href="#">Qəhvə</a>
                            <a href="#">Qənd</a>
                            <a href="#">Quru meyvə</a>
                            <a href="#">Şirniyyat</a>
                            <a href="#">Soyuq İçkilər</a>
                            <a href="#">Süd</a>
                            <a href="#">Un məhsulları</a>                             
                          </div>
                        </li>
                    <li class="teserrufat subnav"><a href="{{route('teserrufat_mal')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617786118xirdavat.png')}}" alt="Xirdavat"> Təsərrüfat malları</a>
                        <div class="subnav-content">
                            <a href="#"> Birdəfəlik qablar</a>
                            <a href="#"> Əlcək</a>
                            <a href="#"> Hava təravətləndirici</a>
                            <a href="#"> Mətbəx Dəsmalı</a>
                            <a href="#"> Mətbəx levazimatlari</a>
                            <a href="#"> Sabun</a>
                            <a href="#"> Salfetlər</a>
                            <a href="#"> Təmizləyici maddələr</a>
                            <a href="#"> Təmizlik Vasitələri</a>
                            <a href="#"> Tibbi ləvazimatlar</a>
                            <a href="#"> Tualet kağızı</a>
                            <a href="#"> Xırdavat</a>
                            <a href="#"> Zibil Paketi</a>
                        
                          </div>
                        </li>
                    <li class="elektron subnav"><a href="{{route('elek_avadanliq')}}"><img src="{{asset('style_lucky/./public/CatImgs/1617786259computer-accessories-512.webp')}}" alt=""> Elektron avadanlıq</a>
                        <div class="subnav-content">
                            <a href="#"> Batareyalar</a>
                            <a href="#"> Kartric</a>
                            <a href="#"> Klaviatura</a>
                            <a href="#"> Kompyuter üçün çanta</a>
                            <a href="#"> Modem</a>
                            <a href="#"> Mouse</a>
                            <a href="#"> Power Bank</a>
                            <a href="#"> Printer</a>
                            <a href="#"> Telefon</a>
                            <a href="#"> Təmizləyicilər</a>
                            <a href="#"> Uzadıcı</a>
                            <a href="#"> Yaddaş kart</a>
                          </div>
                    </li>
                    <li class="dibcek subnav"><a href="{{route('dibcek_gul')}}"><img src="{{asset('style_lucky/./public/CatImgs/16468163995165161.png')}}" alt="Dibcek">Dibçək gülləri</a>
                        <div class="subnav-content">
                            <a href="#">
                                Aksesuarlar
                            </a>
                            <a href="#">Otaq gülləri
                            </a>
                            </div>
                        </li>
                    <li class="hediyye subnav"><a href="{{route('hediyye')}}"><img src="{{asset('style_lucky/./public/CatImgs/1618572764fbdfbdf.jpg')}}" alt="Hediyye">Hədiyyəlik</a>
                        <div class="subnav-content">
                            <a href="#"> Cüzdan</a>
                            <a href="#"> Masaüstü dəstləri</a>                        
                          </div>
                        </li>
                    <li class="coffee subnav"><a href="{{route('cofe_shop')}}"><img src="{{asset('style_lucky/./public/CatImgs/162151268599956.png')}}" alt="Koffee">Coffee shop</a>
                        <div class="subnav-content">
                            <a href="#">Mondo</a>
                            <a href="#">Qəhvə bişirənlər</a>
                            <a href="#">Qəhvə kapsullar</a>
                          </div>
                        </li>
                </ul>   
           </div>
        </div>
        <div class="nav__menu d-flex col-md-8">
            <div class="nav__item"><a href="{{route('haqqimizda')}}">Haqqımızda</a></div>
            <div class="nav__item"><a href="{{route('yeni')}}">Yeni</a></div>
            <div class="nav__item"><a href="{{route('endirimler')}}">Endirimlər</a></div>
            <div class="nav__item"><a href="{{route('en_cox_satilan')}}">Ən çox satılanlar</a></div>
            <div class="nav__item dropdown"><button>Şərtlər<img src="{{asset('style_lucky/./public/images/icon/arrow-right.svg')}}" alt=""></button>
            <div class="dropdown-content">
                <a href="{{route('catdirilma')}}">Çatdırılma</a>
                <a href="{{route('geri_qaytarma')}}">Geri qaytarılma</a>
            </div>
        </div>
            <div class="nav__item"><a href="{{route('elaqe')}}">Əlaqə</a></div>
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
              <li><a href="{{route('haqqimizda')}}">Haqqımızda</a></li>
              <li><a href="./yeni.html">Yeni</a></li>
              <li><a href="./endirimler.html">Endirimlər</a></li>
              <li><a href="./en-cox-satilanlar.html">Ən çox satılanlar</a></li>
              <li><a href="./catdirilma.html">Çatdırılma</a></li>
              <li><a href="./geri-qaytarilma.html">Geri qaytarılma</a></li>
              <li><a href="./elaqe.html">Əlaqə</a></li>
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
            <li class="ofis"><a href="./ofis-levazimatlari.html">Ofis ləvazimatları<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="qida"><a href="./qida-ve-ickiler.html">Qida və İçkilər<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="teserrufat"><a href="./teserrufat-mallari.html">Təsərrüfat malları<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="elektron"><a href="./elektron-avadanliq.html">Elektron avadanlıq<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="dibcek"><a href="./dibcek-guller.html">Dibçək gülləri<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="hediyye"><a href="./hediyyelik.html">Hədiyyəlik<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
            <li class="coffee"><a href="./coffeeshop.html">Coffee shop<img src="./public/images/icon/arrow-right.svg" alt=""></a></li>
        </ul>
    </div>
    </div>
    