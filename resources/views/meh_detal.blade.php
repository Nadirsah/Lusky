@extends("master")
@section("content")  
<div class="container">
        <div class="product__title">
            <a href="./index.html">Ana səhifə</a> / <a href="./ofis-levazimatlari.html">Ofis ləvazimatları </a> / Pozan / <strong>Pozan "Eraser" BX80-3802</strong>
        </div>
        <div class="product">
            <div class="product__img col-lg-4 col-md-6 col-sm-12">
               <div class="mySlides">
                <img src="./public/Products/1616154785bx80-3802_2.Wz70i.jpg" style="width:100%" alt="">
              </div>
            
              <div class="mySlides">
                <img src="./public/Products/1616154785bx80-3802.DLzxO.jpg" style="width:100%">
              </div>
              <div class="row">
                <div class="column">
                  <img class="demo cursor" src="./public/Products/1616154785bx80-3802_2.Wz70i.jpg" style="width:20%" onclick="currentSlide(1)">
                  <img class="demo cursor" src="./public/Products/1616154785bx80-3802.DLzxO.jpg" style="width:20%" onclick="currentSlide(2)">
                </div>
              </div>
            </div>
            <div class="product__info col-lg-8 col-12">
               <strong>Pozan "Eraser" BX80-3802</strong> <br><br>
               Qiymət: <strong>0.10 Azn</strong>  <br><br>
               Marka: Eraser <br>
               Kod: BX80-3802
               <div class="product__buy">
                <span onclick="decrement()">-</span>
                <input id=demoInput type=number value="1" min=1 max=100>
                <span onclick="increment()">+</span>
                <a href="./sebet.html"><button class="buy__button">Səbətə at <img src="./public/images/general/cart.svg" alt=""></button></a>
            </div>
            </div>
        </div>
        <div class="same__product">
            <div class="title"><h1>Oxşar məhsullar</h1></div>
            <div class="container">
                <div class="wrapper d-flex">
                <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                    <div class="item__header">
                       <div class="item__header__right">
                          <button id="hide">
                             <img id="hide__icon" src="./public/images/icon/heart-outline.svg" alt="">
                          </button>
                          <button id="show">
                              <img id="show__icon" style="display: none;" src="./public/images/icon/heart-filled.svg" alt="">
                          </button>
                        </div>
                    </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/1616154772ol-6060_2.wltS7.jpg" alt=""></a></div>
                    <div class="item__name">Pozan "Ozokul" OL-6060</div>
                    <div class="item__price">0.15 Azn</div>
                    <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                    <div class="item__header">
                      <div class="item__header__right">
                          <button id="hide">
                             <img id="hide__icon" src="./public/images/icon/heart-outline.svg" alt="">
                          </button>
                          <button id="show">
                              <img id="show__icon" style="display: none;" src="./public/images/icon/heart-filled.svg" alt="">
                          </button>
                        </div>
                    </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/1616154801i-6045_2.xWoOE.jpg" alt=""></a></div>
                    <div class="item__name">Pozan "Oyal" İ-6045</div>
                    <div class="item__price"> 0.85 Azn</div>
                    <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                    <div class="item__header">
                      <div class="item__header__right">
                          <button id="hide">
                             <img id="hide__icon" src="./public/images/icon/heart-outline.svg" alt="">
                          </button>
                          <button id="show">
                              <img id="show__icon" style="display: none;" src="./public/images/icon/heart-filled.svg" alt="">
                          </button>
                        </div>              
                      </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/1616154824i-6050_2.nckil.jpg" alt=""></a></div>
                    <div class="item__name">Pozan "Oyal" İ-6050</div>
                    <div class="item__price">0.53 Azn</div>
                    <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
                    <div class="item__header">
                      <div class="item__header__right">
                          <button id="hide">
                             <img id="hide__icon" src="./public/images/icon/heart-outline.svg" alt="">
                          </button>
                          <button id="show">
                              <img id="show__icon" style="display: none;" src="./public/images/icon/heart-filled.svg" alt="">
                          </button>
                        </div>
                    </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/1616154841i-3270_2.P1M5e.jpg" alt=""></a></div>
                    <div class="item__name">Pozan "Oyal" İ-3270</div>
                    <div class="item__price">0.50 Azn</div>
                    <div class="item__button"><button>Səbətə at</button></div>
                </div>
            </div>
        </div>
    </div>
    </div>

 @endsection