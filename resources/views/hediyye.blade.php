@extends("master")
@section("content")  
<div class="office__page">
    <div class="title"><h3>Hədiyyəlik</h3></div>
    <div class="container office__page__container"> 
        <button class="office__filter__button" onclick="filterFunctions()"><i class="fa fa-filter"></i> Filterlə</button>
        <div id="filter__category" class="office__filter col-md-12 col-lg-4">
            <div class="office__filter__title">Qiymət filteri</div>
            <div class="slider">
                <input type="range" min="0" max="500" value="100" oninput="rangeValue.innerText = this.value">
                </div> 
                
                <div class="office__filter__number d-flex">
                    <div><span>0</span><img src="./public/images/icon/manat.svg" alt="manat"></div>
                    <div><span id="rangeValue">100</span><img src="./public/images/icon/manat.svg" alt="manat"></div>
                </div>
            <hr>
            <div>
            <div class="office__filter__title">Alt kateqoriya</div>
            
            <div class="office__filter__category">
            <input type="checkbox">Cüzdan <br>
            <input type="checkbox">Masaüstü dəstləri<br>
            </div>
            <div class="filter__category__bottom">
            <hr>
            <input type="checkbox"> Yeni <br>
            <input type="checkbox"> Tövsiyyə edilir <br>
            <button>Filtrlə</button>
            </div>
        </div>
    </div>
    <div class="office__page__right col-lg-8 col-12">
    <div class="filter2">
        <div class="filter2__number">
            <span>Saya görə: </span>
            <select name="" id="">
                <option value="">12</option>
                <option value="">18</option>
                <option value="">24</option>
                <option value="">30</option>
            </select>
        </div>
        <div class="filter2__price">
            <span>Qiymətə görə: </span>
            <select name="" id="">
                <option value="" disabled>Seç</option>
                <option value="">Ucuzdan Bahaya</option>
                <option value="">Bahadan Ucuza</option>
            </select>
        </div>
    </div>
    <div class="office__page__wrapper wrapper d-flex">
        <div class="office__page__item item col-12 col-md-6 col-xl-4">
                <div class="item__header">
                    <div class="item__header__left"></div>
                    <div class="item__header__right">
                        <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                      </div>
                </div>
                <div class="item__img"><a href="./mehsul-detalli.html"><img src="./public/Products/1616154785bx80-3802_2.Wz70i.jpg" alt=""></a></div>
                <div class="item__name">Pozan "Eraser" BX80-3802 </div>
                <div class="item__price">0.10 Azn</div>
                <div class="item__button"><button>Səbətə at</button></div>
        </div>
        <div class="office__page__item item col-12 col-md-6 col-xl-4">
            <div class="item__header">
                <div class="item__header__left"></div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
            </div>
            <div class="item__img"><a href="#"><img src="./public/Products/1617868605ol-2280.zWM3j.jpg" alt=""></a></div>
            <div class="item__name">Karandaş "Ozokul" OL-2280</div>
            <div class="item__price">0.11 Azn</div>
            <div class="item__button"><button>Səbətə at</button></div>
    </div>
    <div class="office__page__item item col-12 col-md-6 col-xl-4">
        <div class="item__header">
            <div class="item__header__left"></div>
            <div class="item__header__right">
                <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
              </div>
        </div>
        <div class="item__img"><a href="#"><img src="./public/Products/1634130433a011626_1_qelem_a_1775_06mm_mavi-1000x1000.jpg" alt=""></a></div>
        <div class="item__name">Qələm 0.7 mm "Assis" A-1775</div>
        <div class="item__price">0.12 Azn</div>
        <div class="item__button"><button>Səbətə at</button></div>
    </div>
    <div class="office__page__item item col-12 col-md-6 col-xl-4">
       <div class="item__header">
        <div class="item__header__left"></div>
        <div class="item__header__right">
            <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
          </div>
       </div>
       <div class="item__img"><a href="#"><img src="./public/Products/1616154772ol-6060_2.wltS7.jpg"" alt=""></a></div>
       <div class="item__name">Pozan "Ozokul" OL-6060</div>
       <div class="item__price">0.15 Azn</div>
       <div class="item__button"><button>Səbətə at</button></div>
   </div>
   <div class="office__page__item item col-12 col-md-6 col-xl-4">
    <div class="item__header">
        <div class="item__header__left"></div>
        <div class="item__header__right">
            <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
          </div>
    </div>
    <div class="item__img"><a href="#"><img src="./public/Products/163609850781wkKQ31iPS._AC_SL1500_2048x2048.jpg" alt=""></a></div>
    <div class="item__name">Rəngli qələm 1.0mm "Cello" </div>
    <div class="item__price">0.20 Azn <del>0.25 Azn</del></div>
    <div class="item__button"><button>Səbətə at</button></div>
    </div>
    <div class="office__page__item item col-12 col-md-6 col-xl-4">
        <div class="item__header">
            <div class="item__header__left"></div>
            <div class="item__header__right">
                <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
              </div>
        </div>
        <div class="item__img"><a href="#"><img src="./public/Products/1617868230i-250.lMyx8.jpg" alt=""></a></div>
        <div class="item__name">Karandaş "Oyal" İ-250  </div>
        <div class="item__price">0.30 Azn</div>
        <div class="item__button"><button>Səbətə at</button></div>
        </div>
        <div class="office__page__item item col-12 col-md-6 col-xl-4">
            <div class="item__header">
                <div class="item__header__left"></div>
                <div class="item__header__right">
                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                  </div>
            </div>
            <div class="item__img"><a href="#"><img src="./public/Products/16474187233609721_4_karandash_chernografitovyj_maped_black_peps_hb_trekhgrannyj_s_lastikom_zatochen.jpg" alt=""></a></div>
            <div class="item__name">Karandaş "Maped" M-8218 </div>
            <div class="item__price">0.20 Azn</div>
            <div class="item__button"><button>Səbətə at</button></div>
            </div>
            <div class="office__page__item item col-12 col-md-6 col-xl-4">
                <div class="item__header">
                    <div class="item__header__left"></div>
                    <div class="item__header__right">
                        <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                      </div>
                </div>
                <div class="item__img"><a href="#"><img src="./public/Products/1617867353a-2500.p5YtW.jpg" alt=""></a></div>
                <div class="item__name">Karandaş "Assis" A-2500 </div>
                <div class="item__price">0.20 Azn</div>
                <div class="item__button"><button>Səbətə at</button></div>
                </div>
                <div class="office__page__item item col-12 col-md-6 col-xl-4">
                    <div class="item__header">
                        <div class="item__header__left"></div>
                        <div class="item__header__right">
                            <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                          </div>
                    </div>
                    <div class="item__img"><a href="#"><img src="./public/Products/1625730024tri-gold.jpg" alt=""></a></div>
                    <div class="item__name">Qələm 1.0mm "Cello" 1064 </div>
                    <div class="item__price">2.40 Azn <del>2.82 Azn</del></div>
                    <div class="item__button"><button>Səbətə at</button></div>
                    </div>
                    <div class="office__page__item item col-12 col-md-6 col-xl-4">
                        <div class="item__header">
                            <div class="item__header__left"></div>
                            <div class="item__header__right">
                                <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                              </div>
                        </div>
                        <div class="item__img"><a href="#"><img src="./public/Products/1625730812buro-2.jpg" alt=""></a></div>
                        <div class="item__name">Qələm 1.0mm "Pensan" 2270 </div>
                        <div class="item__price">0.23 Azn</div>
                        <div class="item__button"><button>Səbətə at</button></div>
                        </div>
                        <div class="office__page__item item col-12 col-md-6 col-xl-4">
                            <div class="item__header">
                                <div class="item__header__left"></div>
                                <div class="item__header__right">
                                    <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                                  </div>
                            </div>
                            <div class="item__img"><a href="#"><img src="./public/Products/1616154749a-066.IM9PV.jpg" alt=""></a></div>
                            <div class="item__name">Pozan "Assis" A-066 </div>
                            <div class="item__price">0.25 Azn</div>
                            <div class="item__button"><button>Səbətə at</button></div>
                            </div>
                            <div class="office__page__item item col-12 col-md-6 col-xl-4">
                                <div class="item__header">
                                    <div class="item__header__left"></div>
                                    <div class="item__header__right">
                                        <span class = like><i class="fa fa-heart" aria-hidden="true" ></i></span>
                                      </div>
                                </div>
                                <div class="item__img"><a href="#"><img src="./public/Products/16502674839972931592242.jpg" alt=""></a></div>
                                <div class="item__name">Telli Dosya "Qlobox"</div>
                                <div class="item__price">0.25 Azn</div>
                                <div class="item__button"><button>Səbətə at</button></div>
                                </div>
    </div>
    <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href="#">...</a>
        <a href="#">18</a>
        <a href="#">19</a>
        <a href="#">&raquo;</a>
      </div>
      
    </div>
    </div>
    </div>
        <!-- Top button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
        <!-- End of Top button -->
 @endsection