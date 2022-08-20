@extends("master")
@section("content")  
<!-- Sebet Section -->
<div class="container">
        <div class="sifaris">
        <div class="product col-md-12 col-lg-8">
            <table class="table">
                <thead align="center">
                    <tr>
                        <th> </th>
                        <th>Məhsul adı</th>
                        <th>Qiymət</th>
                        <th>Say</th>
                        <th>Rəng</th>
                        <th>Cəmi</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr id="cart">
                        <td><img src="./public/Products/1616154785bx80-3802_2.Wz70i.jpg" alt=""></td>
                        <td><div class="hidden__info">Məhsul adı: <br></div> Pozan "Eraser" BX80-3802</td>
                        <td><div class="hidden__info">Qiymət: <br></div>0.10 Azn</td>
                        <td>
                            <div class="hidden__info">Say: <br></div>
                            <div class="product__buy">
                            <button onclick="decrement()">-</button>
                            <input id=demoInput type=number value="1" min=1 max=100>
                            <button onclick="increment()">+</button>
                        </div>
                    </td>
                    <td><div class="hidden__info">Rəng: <br></div>-</td>
                    <td><div class="hidden__info">Cəmi: <br></div><div> 0.10 Azn</div> <button onclick="removeFunction()" class="large__confirm__button" style="background-color: rgb(200, 35, 51); color: #FFFF; border: none;">X</button>
                    <button onclick="removeFunction()" class="hidden__info small__confirm__button">Sil</button></td> 
                    </tr>
               </tbody>     
              </table>
        </div>
        <div class="confirm col-md-12 col-lg-4">
            <h5>Səbət</h5> <hr>
            <div class="d-flex justify-content-between">
                <div>Cəmi</div>
                <div><strong>0.10 Azn</strong></div>
                </div>
                <div class="confirm__btn"><button class="confirm__button"><a href="{{route('sifaris')}}">Sifarişi təsdiqlə</a></button></div>
        
        </div>
    </div>
    </div>
    <!-- End of Sebet Section -->
    <div class="sebet__product pt-4">
        <div class="container">
          <div class="title"><h2>Endirimli məhsullar</h2></div>
          <div class="wrapper d-flex">
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                 <div class="item__header__left new__header">Yeni</div>
                 <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                </div>
              </div>
              <div class="item__img"><a href="#"><img src="./public/Products/1619691118324.jpg" alt=""></a></div>
              <div class="item__name">Çay "Berqa" earl grey 900qr</div>
              <div class="item__price">18.20 Azn <del>19.60 Azn</del></div>
              <div class="item__button"><button>Səbətə at</button></div>
          </div>
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                  <div class="item__header__left new__header">Yeni</div>
                  <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                </div>            
                  </div>
                  <div class="item__img"><a href="#"><img src="./public/Products/16358557446E60RAD-700x700.jpg" alt=""></a></div>
                  <div class="item__name">Şüşə silən "Camsil" 1000ML</div>
                  <div class="item__price">2.40 Azn <del>2.73 Azn</del></div>
                  <div class="item__button"><button>Səbətə at</button></div>
          </div>
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                  <div class="item__header__left new__header">Yeni</div>
                  <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                </div>
                    </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/16303164681042714.jpg" alt=""></a></div>
                    <div class="item__name">Tualet Təravətləndirici "Bref" 55qr</div>
                    <div class="item__price">2.95 Azn <del>3.95 Azn</del> </div>
                    <div class="item__button"><button>Səbətə at</button></div>
          </div>
          <div class="item col-12 col-sm-6 col-lg-4 col-xl-3 justify-content-center">
              <div class="item__header">
                  <div class="item__header__left new__header">Yeni</div>
                  <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                </div>
                    </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/16237638032488343195.jpg" alt=""></a></div>
                    <div class="item__name">Tibbi üz maskası 50əd (qutu)</div>
                    <div class="item__price">6.10 Azn <del> 7.30 Azn</del></div>
                    <div class="item__button"><button>Səbətə at</button></div>
          </div>
         </div>
        </div>
      </div>
          <!-- Top button -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
    <!-- End of Top button -->
 @endsection