@extends("master")
@section("content")  
  <!-- Melumatlar section -->
  <div class="container">
       <div class="melumat__title text-center pt-5"><h3>Məlumatlar</h3></div>
       <div class="melumat">
       <div class="melumatlar__input col-12 col-lg-7">
        <form action="">
            <label for="sirket">
            <div>Şirkət adı *</div></label>
            <input id="sirket" required type="text" placeholder="Şirkət adı">
        </form>
        <form action="">
            <label for="ad">
            <div>Ad, soyad *</div></label>
            <input id="ad" required type="text" placeholder="Ad, soyad">
        </form>
        <form action="">
            <label for="unvan">
            <div>Ünvan *</div></label>
            <input id="unvan" required type="text" placeholder="Ünvan">
        </form>
        <form action="">
            <div>Şəhər *</div>
            <input required type="text" disabled placeholder="Bakı">
        </form>
        <form action="">
            <label for="tel">
            <div>Telefon *</div></label>
            <input id="tel" required type="number" placeholder="Telefon">
        </form>
        <form action="">
            <label for="email">
            <div>E-mail *</div></label>
            <input required type="email" placeholder="E-mail">
        </form>
       </div>
       <div class="col-12 col-lg-5">
       <div class="complete__section">
           <div class="text-center">Sifariş</div> <hr>
           <div class="d-flex justify-content-between"><div>Cəmi</div> <div>0.10 Azn</div></div> <hr>
           <div class="d-flex justify-content-between"><div>Çatdırılma</div> <div>5.00 Azn</div></div> <hr>
           <div class="d-flex justify-content-between"><div>Ümumi</div> <div>5.10 Azn</div></div>
       </div>
       <div class="odeme d-flex justify-content-between">
        <div>Nağd <input  type="radio" name="man" id=""></div> <div>Köçürmə yolu ilə <input type="radio" name="man" id=""></div>
       </div>
       <div class="info"><i class="fa-solid fa-circle-info"></i>  Qeyd: Qiymətlərə ƏDV daxildir.</div>
       <div class="complete__button"><a href="{{route('sifarislerim')}}"><button type="submit">Sifarişi təsdiqlə</button></a></div>
       </div>
    </div>
    </div>
    <!-- End of Melumatlar section -->
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->

 @endsection