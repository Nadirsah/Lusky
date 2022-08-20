@extends("master")
@section("content")  
<div class="istek">
    <div class="container">
        <div class="title pt-5"><h4>İstək siyahısı</h4></div>
        <div class="wrapper d-flex">
            <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                <div class="item__header">
                   <div class="item__header__left tovsiyye__header">Tövsiyyə edilir</div>
                   <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                </div>
                </div>
                <div class="item__img"><a href="#"><img src="./public/Products/1636102439dwGqfsr0N4IbHr9RYvefNoUJB5mWNiAQdKCE1aPo.png" alt=""></a></div>
                <div class="item__name">Qələm "Gigis" 9684</div>
                <div class="item__price">0.40 Azn</div>
                <div class="item__button"><button>Səbətə at</button></div>
            </div>
            <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                <div class="item__header">
                    <div class="item__header__left tovsiyye__header">Tövsiyyə edilir</div>
                    <div class="item__header__right">
                        <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                    </div>            
                    </div>
                <div class="item__img"><a href="#"><img src="./public/Products/1625820269bdc38bb1842a6c677cae4a6f2a8c5deb.jpg" alt=""></a></div>
                <div class="item__name">Qayçı "Maped" E-4682</div>
                <div class="item__price">2.00  Azn</div>
                <div class="item__button"><button>Səbətə at</button></div>
            </div>
            <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                <div class="item__header">
                    <div class="item__header__left "></div>
                    <div class="item__header__right">
                        <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                    </div>
                      </div>
                <div class="item__img"><a href="#"><img src="./public/Products/16257534635405405465406540654065.jpg" alt=""></a></div>
                <div class="item__name">Stepler "Maped" 710</div>
                <div class="item__price">4.50 Azn</div>
                <div class="item__button"><button>Səbətə at</button></div>
            </div>
            <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                <div class="item__header">
                    <div class="item__header__left "></div>
                    <div class="item__header__right">
                        <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                    </div>
                      </div>
                <div class="item__img"><a href="#"><img src="./public/Products/stepler__maped.jpg" alt=""></a></div>
                <div class="item__name">Stepler "Maped" 710</div>
                <div class="item__price">4.50 Azn</div>
                <div class="item__button"><button>Səbətə at</button></div>
            </div>
           </div>
    </div>
    </div>
            <!-- Top button -->
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
            <!-- End of Top button -->
  

 @endsection