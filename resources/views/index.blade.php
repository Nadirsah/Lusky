@extends("master")
@section("content")  
<div class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('style_lucky/./public/slider/1649834951banner-yeni-1.jpg')}}" class="d-block w-100" alt="1">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('style_lucky/./public/slider/1651820508banner14.jpg')}}" class="d-block w-100" alt="2">
              </div>
              <div class="carousel-item">
                <img src="{{asset('style_lucky/./public/slider/1642066135banner3.jpg')}}" class="d-block w-100" alt="3">
              </div>
              <div class="carousel-item">
                <img src="{{asset('style_lucky/./public/slider/1631705963banner6-2.jpg')}}" class="d-block w-100" alt="4">
              </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div> 
      <!--  -->
      <div class="office">
      <div class="container">
        <div class="title"><h2>Ofis ləvazimatları</h2></div>
        <div class="wrapper d-flex">
        <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
            <div class="item__header">
               <div class="item__header__left tovsiyye__header">Tövsiyyə edilir</div>
               <div class="item__header__right">
                <span class="like"><i class="fa fa-heart" aria-hidden="true" ></i></span>
              </div>
            </div>
            <div class="item__info">
                <div>
                    <img src="./public/Products/1636102439dwGqfsr0N4IbHr9RYvefNoUJB5mWNiAQdKCE1aPo.png" alt="">
                   <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item__text">
                   <div class="item__name">Qələm "Gigis" 9684</div>
                   <div class="item__price">0.40 Azn</div>
                </div>
            </div>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
            <div class="item__header">
                <div class="item__header__left tovsiyye__header">Tövsiyyə edilir</div>
                <div class="item__header__right">
                    <span class = "like"><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>            
                </div>
            <div class="item__info">
                <div>
                   <img src="./public/Products/1625820269bdc38bb1842a6c677cae4a6f2a8c5deb.jpg" alt="">
                   <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item__text">
                <div class="item__name">Qayçı "Maped" E-4682</div>
                <div class="item__price">2.00  Azn</div>
                </div>
            </div>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
            <div class="item__header">
                <div class="item__header__left tovsiyye__header">Tövsiyyə edilir</div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
                  </div>
            <div class="item__info">
                <div>
                <img src="./public/Products/16257534635405405465406540654065.jpg" alt="">                    
                <div class="item__button"><button>Səbətə at</button></div>    
                </div>
                <div class="item__text">
                <div class="item__name">Stepler "Maped" 710</div>
                <div class="item__price">4.50 Azn</div>
                </div>
            </div>
        </div>
        <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
            <div class="item__header">
                <div class="item__header__left tovsiyye__header">Tövsiyyə edilir</div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
                  </div>
             <div class="item__info">
                <div>
                    <img src="./public/Products/stepler__maped.jpg" alt="">
                    <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item__text">
                <div class="item__name">Stepler "Maped" 710</div>
                <div class="item__price">4.50 Azn</div>
                </div>
            </div>
        </div>
       </div>
      </div>
    </div>
    <div class="divisions">
        <div class="container">
            <div class="title" style="color: rgb(255, 255, 255);"><h2>Bölmələr</h2></div>
            <div class="divisions__wrapper d-flex">
            <div class="divisions__item col-12 col-md-7 col-lg-6">
                <div class="divisions__item__text"><h3><a href="#">Kağız</a></h3></div>
                <div class="divisions__item__img"><img src="./public/Banner/16182023971-banner 636x376.jpg" alt=""></div>
            </div>
        <div class="divisions__small__item row space-between-1 col-12 col-md-4 col-lg-3">
            <div class="divisions__item col-12  col-sm-6 col-md-12">
                <div class="divisions__item__text"><h3><a href="#">Markerlər</a></h3></div>
                <div class="divisions__item__img"><img src="./public/Banner/16182037932-banner.jpg" alt=""></div>
            </div>
            <div class="divisions__item col-12  col-sm-6 col-md-12">
                <div class="divisions__item__text"><h3><a href="#">Qovluqlar</a></h3></div>
                <div class="divisions__item__img"><img src="./public/Banner/16182039003-banner.jpg" alt=""></div>
            </div>
        </div>
        <div class="divisions__small__item row space-between-2 col-12 col-md-12 col-lg-3">
            <div class="divisions__item col-12 col-sm-6 col-lg-12">
                <div class="divisions__item__text"><h3><a href="#">Kompyuter aksesuarları</a></h3></div>
                <div class="divisions__item__img"><img src="./public/Banner/16182048675-banner.jpg" alt=""></div>
            </div>
            <div class="divisions__item col-12 col-sm-6 col-lg-12">
                <div class="divisions__item__text"><h3><a href="#">Mebel</a></h3></div>
                <div class="divisions__item__img"><img src="./public/Banner/16182042684-banner.jpg" alt=""></div>
            </div>
        </div>
            </div>
        </div>
    </div>
    <div class="office qida__section">
        <div class="container">
          <div class="title"><h2>Qida və içkilər</h2></div>
          <div class="wrapper d-flex">
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                <div class="item__header__left"></div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
              </div>
              <div class="item__info">
                <div>
                    <img src="./public/Products/1643285629100023256686b3.jpg" alt="">
                    <div class="item__button"><button>Səbətə at</button></div>
                   </div>
                <div class="item__text">
                <div class="item__name">Çay "Tess" ginger mojito 20əd</div>
                <div class="item__price">2.40 Azn</div>
                </div>
              </div>
          </div>
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                <div class="item__header__left"></div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
              </div>
              <div class="item__info">
                <div>
                    <img src="./public/Products/1624347997F9B9E10100307817998932C441489841.png" alt="">
                     <div class="item__button"><button>Səbətə at</button></div>
                    </div>
                <div class="item__text">
                <div class="item__name">Eti Adicto İntense 140qr</div>
                <div class="item__price">3.50 Azn</div>
                </div>
              </div>
          </div>
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                <div class="item__header__left"></div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>             
                </div>
              <div class="item__info">
                <div>
                    <img src="./public/Products/161867240642.jpg" alt="">
                    <div class="item__button"><button>Səbətə at</button></div>
                   </div>
                <div class="item__text">
                <div class="item__name">Çay "Cihan" Seylon 500qr</div>
                <div class="item__price">11.70 Azn</div>
                </div>
              </div>
          </div>
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                <div class="item__header__left"></div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
              </div>
              <div class="item__info">
                <div> 
                    <img src="./public/Products/161840631615.jpg" alt="">
                     <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item__text">
                <div class="item__name">Qəhvə "Mehmet Efendi" 100qr</div>
                <div class="item__price"> 3.41 Azn</div>
                </div>
              </div>
          </div>
         </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
            <div class="section__wrapper d-flex">
            <div class="section__item col-12 col-md-6 col-lg-4">
                <div class="section__item__text"><h3><a href="./qida-ve-ickiler.html">Qida və içkilər</a></h3></div>
                <div class="section__item__img"><img src="./public/Banner/16182101582 banner.jpg" alt=""></div>
            </div>
        <div class="section__small__wrapper  space-between-1 col-12 col-md-6 col-lg-4">
            <div class="section__item section__small__item col-12  col-sm-12 col-md-12">
                <div class="section__item__text"><h3><a href="#">Tibbi ləvazimatlar</a></h3></div>
                <div class="section__item__img"><img src="./public/Banner/16182095642 banner-4.jpg" alt=""></div>
            </div>
            <div class="section__item col-12 section__small__item col-sm-12 col-md-12">
                <div class="section__item__text"><h3><a href="#">Bloknotlar</a></h3></div>
                <div class="section__item__img"><img src="./public/Banner/16182087102 banner-3.jpg" alt=""></div>
            </div>
        </div>
        <div class="section__item col-12 col-md-6 col-lg-4">
            <div class="section__item__text"><h3><a href="#">Təmziləyici maddələr</a></h3></div>
            <div class="section__item__img"><img src="./public/Banner/16182114892 banner-2.jpg" alt=""></div>
        </div>
        </div>
            </div>
        </div>
    </div>
    <!-- Sebet Section -->
    <div class="container">
        <div class="sifaris">
        <div class="product col-md-12 col-lg-8">
            <table class="table">
                <tbody align="center">                    
                    <div id="cart"></div>
               </tbody>     
              </table>
        </div>
        <div id="sebet__confirm" class="main__confirm confirm col-md-12 col-lg-4">
            <h5 class="text-center">Səbət</h5>
            <div class="confirm__btn">
                <button class="confirm__button">
                    <a href="./sebet.html">Sifarişi təsdiqlə</a>
                </button>
                <button class="remove__button" onclick="removeFunction()">Səbəti təmizlə</button>
            </div>
        </div>
    </div>
    </div>


    <!-- End of Sebet Section -->
    <div class="brands">
        <div class="title"><h2>Brendlərimiz</h2></div>
        <div class="container">
            <div class="owl-carousel owl-theme brands__wrapper">
                <div class="item brands__item"><img src="./public/partners/1626254388loqo1.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626254407logo2.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626254415logo3.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626254422loqo4.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626332007oyal-100x100.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626338640assis-100x100.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626338672cassa-100x100.png" alt=""></div>
                <div class="item brands__item"><img src="./public/partners/1626338703ozokul-100x100.png" alt=""></div>
            </div>
    </div>
    </div>
    <!-- Top button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
    <!-- End of Top button -->
   
    <!-- Owl script -->

 @endsection