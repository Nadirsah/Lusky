@extends("master")
@section("content")  
  <!-- Sifarislerim -->
  <div class="sifarislerim">
        <div class="container">
    <div class="about__title title">
        <h3>Sifarişlərim</h3>
        <a href="./index.html">Ana səhifə </a> / Sifarişlərim
    </div>
    <div id="myBtnContainer" class="sifaris__filter d-flex col-12">
        <div tabindex="1" onclick="filterSelection('ferdi')" class="ferdi__filter text-center col-6">Fərdi sifarişlər</div>
        <div tabindex="2" onclick="filterSelection('paket')" class="ferdi__filter text-center col-6">Paket sifarişlər</div>
    </div>
    <div class="filter2 col-12">
        <div class="filter2__number col-12 col-lg-6">
            <span>Tarixə görə: </span>
            <select name="" id="">
                <option value="">Təzədən köhnəyə</option>
                <option value="">Köhnədən Təzəyə</option>
            </select>
        </div>
        <div class="filter2__price col-12 col-lg-6">
            <span>Statusa görə: </span>
            <select name="" id="">
                <option value="">Hamısı</option>
                <option value="">Çatdırılıb</option>
                <option value="">Gözləyir</option>
            </select>
        </div>
    </div>
        <div class="all__product filterDiv active ferdi col-12">
            <table class="table">
                <thead align="center">
                    <tr>
                        <th>Şəkil</th>
                        <th>Məhsul adı</th>
                        <th>Say</th>
                        <th>Rəng</th>
                        <th>Qiymət</th>
                        <th>Tarix</th>
                        <th>Status</th>
                        <th>Təkrar sifariş</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <tr>
                        <td><img src="./public/Products/1616154785bx80-3802_2.Wz70i.jpg" alt=""></td>
                        <td><div class="hidden__info">Məhsul adı: <br></div> Pozan "Eraser" BX80-3802</td>
                        <td><div class="hidden__info">Say <br></div>1</td>
                        <td>
                            <div class="hidden__info">Rəng:<br></div>-
                        </div>
                    </td>
                    <td><div class="hidden__info">Qiymət: <br></div>0.10 Azn</td>
                    <td><div class="hidden__info">Tarix: <br></div>26 Jul 2022</td>
                    <td><div class="hidden__info">Status: <br></div><span class="status"> Gözləyir</span> </td>
                    <td><div class="hidden__info">Təkrar sifariş: <br></div><div><a href="./sebet.html"><button class="tekrar__sifaris">Təkrar sifariş</button></a></div></td> 
                    </tr>
               </tbody>     
              </table>

    </div>
    <div class="all__product filterDiv paket col-12">
        <table class="table">
            <thead align="center">
                <tr>
                    <th>Şəkil</th>
                    <th>Məhsul adı</th>
                    <th>Say</th>
                    <th>Rəng</th>
                    <th>Qiymət</th>
                    <th>Tarix</th>
                    <th>Status</th>
                    <th>Təkrar sifariş</th>
                </tr>
            </thead>
            <tbody align="center">

           </tbody>     
          </table>

</div>
    </div>
    </div>
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->

 @endsection