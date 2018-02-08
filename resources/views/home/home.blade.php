@extends('../layout')
@section('body')
<div id="wrapper">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img src="{{STATIC_BASE_URL.'img/preloaders/1.gif'}}" alt="">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-transparent bg-transparent-1 navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord orange no-bg"> <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img src="{{STATIC_BASE_URL.'img/logo-wide.png'}}" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="index-gym-mp-layout3.html#home">Home</a>
                <ul class="dropdown">
                  <li><a href="index-gym-mp-layout3.html#">Boxing</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-boxing-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-boxing-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-boxing-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-boxing-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-boxing-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-boxing-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-boxing-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-boxing-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-boxing-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-boxing-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-boxing-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-boxing-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-boxing-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-boxing-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-boxing-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-boxing-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-boxing-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-boxing-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Gym</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-gym-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-gym-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-gym-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-gym-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-gym-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-gym-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-gym-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-gym-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-gym-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-gym-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-gym-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-gym-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-gym-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-gym-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-gym-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-gym-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-gym-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-gym-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Martial Arts</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-martialart-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-martialart-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-martialart-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-martialart-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-martialart-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-martialart-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-martialart-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-martialart-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-martialart-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-martialart-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-martialart-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-martialart-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-martialart-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-martialart-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-martialart-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-martialart-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-martialart-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-martialart-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Sports</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-sports-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-sports-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-sports-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-sports-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-sports-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-sports-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-sports-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-sports-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-sports-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-sports-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-sports-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-sports-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-sports-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-sports-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-sports-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-sports-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-sports-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-sports-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Dental</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-dental-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-dental-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-dental-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-dental-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-dental-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-dental-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-dental-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-dental-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-dental-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-dental-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-dental-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-dental-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-dental-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-dental-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-dental-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-dental-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-dental-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-dental-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Medical</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-medical-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-medical-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-medical-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-medical-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-medical-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-medical-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-medical-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-medical-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-medical-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-medical-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-medical-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-medical-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-medical-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-medical-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-medical-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-medical-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-medical-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-medical-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Nursing</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nursing-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-nursing-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-nursing-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nursing-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-nursing-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-nursing-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nursing-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-nursing-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-nursing-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-nursing-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-nursing-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-nursing-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nursing-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-nursing-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-nursing-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nursing-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-nursing-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-nursing-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Nutrition</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nutrition-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-nutrition-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-nutrition-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nutrition-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-nutrition-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-nutrition-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nutrition-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-nutrition-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-nutrition-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-nutrition-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-nutrition-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-nutrition-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nutrition-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-nutrition-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-nutrition-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-nutrition-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-nutrition-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-nutrition-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Physiotherapy</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-physiotherapy-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-physiotherapy-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-physiotherapy-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-physiotherapy-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-physiotherapy-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-physiotherapy-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-physiotherapy-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-physiotherapy-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-physiotherapy-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-physiotherapy-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-physiotherapy-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-physiotherapy-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-physiotherapy-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-physiotherapy-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-physiotherapy-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-physiotherapy-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-physiotherapy-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-physiotherapy-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Psychology</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-psychology-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-psychology-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-psychology-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-psychology-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-psychology-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-psychology-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-psychology-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-psychology-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-psychology-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-psychology-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-psychology-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-psychology-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-psychology-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-psychology-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-psychology-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-psychology-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-psychology-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-psychology-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Spa</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-spa-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-spa-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-spa-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-spa-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-spa-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-spa-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-spa-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-spa-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-spa-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-spa-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-spa-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-spa-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-spa-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-spa-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-spa-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-spa-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-spa-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-spa-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Yoga</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Multipage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-yoga-mp-layout1.html">Layout1</a></li>
                          <li><a href="index-yoga-mp-layout2.html">Layout2</a></li>
                          <li><a href="index-yoga-mp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Singlepage Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-yoga-sp-layout1.html">Layout1</a></li>
                          <li><a href="index-yoga-sp-layout2.html">Layout2</a></li>
                          <li><a href="index-yoga-sp-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Boxed Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-yoga-boxed-mp-layout1.html">Multipage Layout1</a></li>
                          <li><a href="index-yoga-boxed-mp-layout2.html">Multipage Layout2</a></li>
                          <li><a href="index-yoga-boxed-mp-layout3.html">Multipage Layout3</a></li>
                          <li><a href="index-yoga-boxed-sp-layout1.html">Singlepage Layout1</a></li>
                          <li><a href="index-yoga-boxed-sp-layout2.html">Singlepage Layout2</a></li>
                          <li><a href="index-yoga-boxed-sp-layout3.html">Singlepage Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Dark Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-yoga-dark-layout1.html">Layout1</a></li>
                          <li><a href="index-yoga-dark-layout2.html">Layout2</a></li>
                          <li><a href="index-yoga-dark-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">RTL Layouts</a>
                        <ul class="dropdown">
                          <li><a href="index-yoga-rtl-layout1.html">Layout1</a></li>
                          <li><a href="index-yoga-rtl-layout2.html">Layout2</a></li>
                          <li><a href="index-yoga-rtl-layout3.html">Layout3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Home Variations</a>
                    <ul class="dropdown">
                      <li><a href="index-home-variation-layerslider.html">Layer Slider</a></li>
                      <li><a href="index-home-variation-master-slider.html">Master Slider</a></li>
                      <li><a href="index-home-variation-revslider-style1.html">Revolution Slider 1</a></li>
                      <li><a href="index-home-variation-revslider-style2.html">Revolution Slider 2</a></li>
                      <li><a href="index-home-variation-bg-image-parallax.html">Bg Image Parallax</a></li>
                      <li><a href="index-home-variation-bg-static.html">Bg Static Image</a></li>
                      <li><a href="index-home-variation-bg-html5-video.html">Bg Html5 Video</a></li>
                      <li><a href="index-home-variation-bg-youtube-video.html">Bg Youtube Video</a></li>
                      <li><a href="index-home-variation-maximageslider-style1.html">Maximage Slider 1</a></li>
                      <li><a href="index-home-variation-owl-carousel.html">Owl Slider</a></li>
                      <li><a href="index-home-variation-typed-text.html">Typed Text</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="index-gym-mp-layout3.html#">Features</a>
                <ul class="dropdown">
                  <li><a href="features-preloader.html">Preloaders</a></li>
                  <li><a href="index-gym-mp-layout3.html#">Header</a>
                    <ul class="dropdown">
                      <li><a href="features-header-style1.html">Header Style1</a></li>
                      <li><a href="features-header-style2.html">Header Style2</a></li>
                      <li><a href="features-header-style3.html">Header Style3</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Page Title</a>
                    <ul class="dropdown">
                      <li><a href="features-page-title-text-left.html">Text Left</a></li>
                      <li><a href="features-page-title-text-center.html">Text Center</a></li>
                      <li><a href="features-page-title-text-right.html">Text Right</a></li>
                      <li><a href="features-page-title-mini-version.html">Mini Version</a></li>
                      <li><a href="features-page-title-big-version.html">Big Version</a></li>
                      <li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
                      <li><a href="features-page-title-bg-white.html">Bg White</a></li>
                      <li><a href="features-page-title-bg-image.html">Bg Image</a></li>
                      <li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
                      <li><a href="features-page-title-bg-video.html">Bg Video</a></li>
                      <li><a href="features-page-title-full-transparent.html">Full Transparent</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Side Push Panel</a>
                    <ul class="dropdown">
                      <li><a href="features-side-push-panel-left-overlay.html">Left Overlay</a></li>
                      <li><a href="features-side-push-panel-left-push.html">Left Push</a></li>
                      <li><a href="features-side-push-panel-right-overlay.html">Right Overlay</a></li>
                      <li><a href="features-side-push-panel-right-push.html">Right Push</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Menu Style</a>
                    <ul class="dropdown">
                      <li><a href="features-menu-style-border-top.html">Border Top</a></li>
                      <li><a href="features-menu-style-border-bottom.html">Border Bottom</a></li>
                      <li><a href="features-menu-style-border-boxed.html">Border Boxed</a></li>
                      <li><a href="features-menu-style-border-left.html">Border Left</a></li>
                      <li><a href="features-menu-style-border-top-bottom.html">Border Top Bottom</a></li>
                      <li><a href="features-menu-style-bottom-trace.html">Bottom Trace</a></li>
                      <li><a href="features-menu-style-boxed.html">Boxed</a></li>
                      <li><a href="features-menu-style-colored.html">Colored</a></li>
                      <li><a href="features-menu-style-dark.html">Dark</a></li>
                      <li><a href="features-menu-style-gradient.html">Gradient</a></li>
                      <li><a href="features-menu-style-rounded-boxed.html">Rounded Boxed</a></li>
                      <li><a href="features-menu-style-shadow.html">Shadow</a></li>
                      <li><a href="features-menu-style-strip.html">Strip</a></li>
                      <li><a href="features-menu-style-subcolored.html">Sub-Colored</a></li>
                      <li><a href="features-menu-style-top-bottom-boxed-border.html">Top Bottom Boxed Border</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Premium Sliders</a>
                    <ul class="dropdown">
                      <li><a href="features-rev-slider-premium-templates.html">Revolution Slider</a></li>
                      <li><a href="features-layerslider-slider-premium-templates.html">Layer Slider</a></li>
                      <li><a href="http://kodesolution.com/demo/health-beauty/health-zone/v3.0/features-master-slider-premium-templates.html">Master Slider</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Form</a>
                    <ul class="dropdown">
                      <li><a href="index-gym-mp-layout3.html#">Contact Form</a>
                        <ul class="dropdown">
                          <li><a href="page-contact1.html">Form style 1</a></li>
                          <li><a href="page-contact2.html">Form style 2</a></li>
                          <li><a href="page-contact3.html">Form style 3</a></li>
                          <li><a href="page-contact4.html">Form style 4</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Subscribe Form</a>
                        <ul class="dropdown">
                          <li><a href="form-subscribe.html">Form style 1</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Appointment Form</a>
                        <ul class="dropdown">
                          <li><a href="form-appointment-style1.html">Form style 1</a></li>
                          <li><a href="form-appointment-style2.html">Form style 2</a></li>
                          <li><a href="form-appointment-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Job Apply Form</a>
                        <ul class="dropdown">
                          <li><a href="form-job-apply-style1.html">Form style 1</a></li>
                          <li><a href="form-job-apply-style2.html">Form style 2</a></li>
                          <li><a href="form-job-apply-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="index-gym-mp-layout3.html#">Quick Contact Form</a>
                        <ul class="dropdown">
                          <li><a href="form-quick-contact-style1.html">Form style 1</a></li>
                          <li><a href="form-quick-contact-style2.html">Form style 2</a></li>
                          <li><a href="form-quick-contact-style3.html">Form style 3</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Popup Promo Box</a>
                    <ul class="dropdown">
                      <li><a href="features-popup-promo-box.html">Default</a></li>
                      <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Footer</a>
                    <ul class="dropdown">
                      <li><a href="features-footer-style1.html#footer">Footer One</a></li>
                      <li><a href="features-footer-style2.html#footer">Footer Two</a></li>
                      <li><a href="features-footer-style3.html#footer">Footer Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="index-gym-mp-layout3.html#">About</a>
                <ul class="dropdown">
                  <li><a href="index-gym-mp-layout3.html#">Boxing</a>
                    <ul class="dropdown">
                      <li><a href="page-about-boxing1.html">About 1</a></li>
                      <li><a href="page-about-boxing2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Gym</a>
                    <ul class="dropdown">
                      <li><a href="page-about-gym1.html">About 1</a></li>
                      <li><a href="page-about-gym2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Sports</a>
                    <ul class="dropdown">
                      <li><a href="page-about-sports1.html">About 1</a></li>
                      <li><a href="page-about-sports2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Martial Arts</a>
                    <ul class="dropdown">
                      <li><a href="page-about-martialart1.html">About 1</a></li>
                      <li><a href="page-about-martialart2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Yoga</a>
                    <ul class="dropdown">
                      <li><a href="page-about-yoga1.html">About 1</a></li>
                      <li><a href="page-about-yoga2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Spa</a>
                    <ul class="dropdown">
                      <li><a href="page-about-spa1.html">About 1</a></li>
                      <li><a href="page-about-spa2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Medical</a>
                    <ul class="dropdown">
                      <li><a href="page-about-medical1.html">About 1</a></li>
                      <li><a href="page-about-medical2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Dental</a>
                    <ul class="dropdown">
                      <li><a href="page-about-dental1.html">About 1</a></li>
                      <li><a href="page-about-dental2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Nursing</a>
                    <ul class="dropdown">
                      <li><a href="page-about-nursing1.html">About 1</a></li>
                      <li><a href="page-about-nursing2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Physiotherapy</a>
                    <ul class="dropdown">
                      <li><a href="page-about-physiotherapy1.html">About 1</a></li>
                      <li><a href="page-about-physiotherapy2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Psychology</a>
                    <ul class="dropdown">
                      <li><a href="page-about-psychology1.html">About 1</a></li>
                      <li><a href="page-about-psychology2.html">About 2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Nutrition</a>
                    <ul class="dropdown">
                      <li><a href="page-about-nutrition1.html">About 1</a></li>
                      <li><a href="page-about-nutrition2.html">About 2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="index-gym-mp-layout3.html#">Pages</a>
                <ul class="dropdown">
                  <li><a href="index-gym-mp-layout3.html#">Services</a>
                    <ul class="dropdown">
                      <li><a href="page-services-style1.html">Services List Style 1</a></li>
                      <li><a href="page-services-style2.html">Services List Style 2</a></li>
                      <li><a href="page-services-details.html">Service Details</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Trainers</a>
                    <ul class="dropdown">
                      <li><a href="page-trainer-style1.html">Trainers List Style 1</a></li>
                      <li><a href="page-trainer-style2.html">Trainers List Style 2</a></li>
                      <li><a href="page-trainer-details.html">Trainer Details</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Doctors</a>
                    <ul class="dropdown">
                      <li><a href="page-trainer-style1.html">Doctors List Style 1</a></li>
                      <li><a href="page-trainer-style2.html">Doctors List Style 2</a></li>
                      <li><a href="page-trainer-details.html">Doctors Details</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Classes</a>
                    <ul class="dropdown">
                      <li><a href="page-classes-style1.html">Classes Style 1</a></li>
                      <li><a href="page-classes-style2.html">Classes Style 2</a></li>
                      <li><a href="page-classes-details.html">Classes Details</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Gallery</a>
                    <ul class="dropdown">
                      <li><a href="page-gallery-3col.html">3 Columns</a></li>
                      <li><a href="page-gallery-4col.html">4 Columns</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">FAQ</a>
                    <ul class="dropdown">
                      <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                      <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                      <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                      <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Contact</a>
                    <ul class="dropdown">
                      <li><a href="page-contact1.html">Contact Style1</a></li>
                      <li><a href="page-contact2.html">Contact Style2</a></li>
                      <li><a href="page-contact3.html">Contact Style3</a></li>
                      <li><a href="page-contact4.html">Contact Style4</a></li>
                      <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                      <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Shop</a>
                    <ul class="dropdown">
                      <li><a href="shop-category.html">Category</a></li>
                      <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                      <li><a href="shop-product-details.html">Product Details</a></li>
                      <li><a href="shop-cart.html">Cart</a></li>
                      <li><a href="shop-checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Calender</a>
                    <ul class="dropdown">
                      <li><a href="page-calender1.html">Calender Style1</a></li>
                      <li><a href="page-calender2.html">Calender Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Pricing</a>
                    <ul class="dropdown">
                      <li><a href="page-pricing-style1.html">Pricing Style 1</a></li>
                      <li><a href="page-pricing-style2.html">Pricing Style 2</a></li>
                      <li><a href="page-pricing-style3.html">Pricing Style 3</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Page 404</a>
                    <ul class="dropdown">
                      <li><a href="page-404-style1.html">style1</a></li>
                      <li><a href="page-404-style2.html">style2</a></li>
                      <li><a href="page-404-style3.html">style3</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Coming Soon</a>
                    <ul class="dropdown">
                      <li><a href="page-coming-soon-style1.html">style1</a></li>
                      <li><a href="page-coming-soon-style2.html">style2</a></li>
                      <li><a href="page-coming-soon-style3.html">style3</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Under Construction</a>
                    <ul class="dropdown">
                      <li><a href="page-under-construction-style1.html">style1</a></li>
                      <li><a href="page-under-construction-style2.html">style2</a></li>
                      <li><a href="page-under-construction-style3.html">style3</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="index-gym-mp-layout3.html#">Gallery</a>
                <ul class="dropdown">
                  <li><a href="page-gallery-3col.html">3 Columns</a></li>
                  <li><a href="page-gallery-4col.html">4 Columns</a></li>
                  <li><a href="page-gallery-grid.html">Grids Collection</a></li>
                  <li><a href="page-gallery-grid-animation.html">Grids with Animation</a></li>
                  <li><a href="page-gallery-3col-tiles.html">3 Columns Tiles</a></li>
                  <li><a href="page-gallery-4col-tiles.html">4 Columns Tiles</a></li>
                  <li><a href="page-gallery-masonry-tiles.html">Tiles Collection</a></li>
                  <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation</a></li>
                  <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                </ul>
              </li>
              <li><a href="index-gym-mp-layout3.html#">Blog</a>
                <ul class="dropdown">
                  <li><a href="index-gym-mp-layout3.html#">Blog Classic</a>
                    <ul class="dropdown">
                      <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                      <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                      <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                      <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Blog Grid</a>
                    <ul class="dropdown">
                      <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                      <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                      <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                    </ul>
                  </li>
                  <li><a href="index-gym-mp-layout3.html#">Blog Single</a>
                    <ul class="dropdown">
                      <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                      <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                      <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="javascript:void(0)">Shortcodes</a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> Accordion</a></li>
                        <li><a href="shortcode-alerts.html"><i class="fa fa-exclamation-circle"></i> Alerts</a></li>
                        <li><a href="shortcode-animations.html"><i class="fa fa-magic"></i> Animations</a></li>
                        <li><a href="shortcode-background-html5-video.html"><i class="fa fa-video-camera"></i> HTML5 Background Video</a></li>
                        <li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
                        <li><a href="shortcode-button-groups-and-dropdowns.html"><i class="fa fa-link"></i> Button Groups</a></li>
                        <li><a href="shortcode-button-hover-effect.html"><i class="fa fa-flag-o"></i> Button Hover Effect</a></li>
                        <li><a href="shortcode-buttons.html"><i class="fa fa-external-link"></i> Buttons</a></li>
                        <li><a href="shortcode-call-to-actions.html"><i class="fa fa-plus-square"></i> Call To Actions</a></li>
                        <li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
                        <li><a href="shortcode-columns-grids.html"><i class="fa fa-columns"></i> Columns Grids</a></li>
                        <li><a href="shortcode-divider.html"><i class="fa fa-indent"></i> Divider</a></li>
                        <li><a href="shortcode-dropcaps.html"><i class="fa fa-bold"></i> Dropcaps</a></li>
                        <li><a href="shortcode-datetime-datepicker.html"><i class="fa fa-calendar"></i> Date Picker</a></li>
                        <li><a href="shortcode-datetime-timepicker.html"><i class="fa fa-calendar"></i> Time Picker</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> Bootstrap Date-Time Picker</a></li>
                        <li><a href="shortcode-datetime-datepair.html"><i class="fa fa-calendar"></i> Date Pair</a></li>
                        <li><a href="shortcode-flickr-feed.html"><i class="fa fa-flickr"></i> Flickr Feed</a></li>
                        <li><a href="shortcode-flipbox.html"><i class="fa fa-square"></i> Flipbox</a></li>
                        <li><a href="shortcode-forms.html"><i class="fa fa-align-justify"></i> Forms</a></li>
                        <li><a href="shortcode-iconbox.html"><i class="fa fa-unsorted"></i> Icon Box</a></li>
                        <li><a href="shortcode-icon-7stroke.html"><i class="fa fa-circle-o"></i> Icons 7stroke</a></li>
                        <li><a href="shortcode-icon-elegant-icons.html"><i class="fa fa-eye-slash"></i> Icons Elegant</a></li>
                        <li><a href="shortcode-icon-flat-color-icons.html"><i class="fa fa-i-cursor"></i> Icons Flat Color</a></li>
                        <li><a href="shortcode-icon-fontawesome.html"><i class="fa fa-fort-awesome"></i> Icons FontAwesome</a></li>
                        <li><a href="shortcode-icon-fontawesome-tutorial.html"><i class="fa fa-fonticons"></i> Icons FontAwesome Tutorial</a></li>
                        <li><a href="shortcode-icon-strokegap.html"><span class="strokegap-icon strokegap-icon-WorldWide"></span> Icons Strokegap</a></li>
                        <li><a href="shortcode-image-box.html"><i class="fa fa-file-image-o"></i> Image Box</a></li>
                        <li><a href="shortcode-instagram.html"><i class="fa fa-instagram"></i> Instagram Feed</a></li>
                        <li><a href="shortcode-labels-badges.html"><i class="fa fa-check-square-o"></i> Labels Badges</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> Listgroup Panels</a></li>
                        <li><a href="shortcode-lists.html"><i class="fa fa-list"></i> Lists</a></li>
                        <li><a href="shortcode-maps.html"><i class="fa fa-map-o"></i> Maps</a></li>
                        <li><a href="shortcode-media-embed.html"><i class="fa fa-play-circle-o"></i> Media Embed</a></li>
                        <li><a href="shortcode-modal-bootstrap.html"><i class="fa fa-search-plus"></i> Modal</a></li>
                        <li><a href="shortcode-modal-lightbox.html"><i class="fa fa-expand"></i> Lightbox</a></li>
                        <li><a href="shortcode-navigation.html"><i class="fa fa-navicon"></i> Navigation</a></li>
                        <li><a href="shortcode-owl-carousel.html"><i class="fa fa-sliders"></i> Owl Carousel</a></li>
                        <li><a href="shortcode-pagination.html"><i class="fa fa-arrow-circle-o-right"></i> Pagination</a></li>
                        <li><a href="shortcode-progressbar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
                        <li><a href="shortcode-responsive.html"><i class="fa fa-tablet"></i> Responsive</a></li>
                        <li><a href="shortcode-separator.html"><i class="fa fa-minus-square-o"></i> Separator</a></li>
                        <li><a href="shortcode-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                        <li><a href="shortcode-sliders.html"><i class="fa fa-sliders"></i> Sliders</a></li>
                        <li><a href="shortcode-smoothscrolling.html"><i class="fa fa-binoculars"></i> Smoothscrolling</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
                        <li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
                        <li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        <li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
                        <li><a href="shortcode-textblock.html"><i class="fa fa-bold"></i> Textblock</a></li>
                        <li><a href="shortcode-thumbnails-carousels.html"><i class="fa fa-sliders"></i> Thumbnails/carousels</a></li>
                        <li><a href="shortcode-title.html"><i class="fa fa-text-height"></i> Title</a></li>
                        <li><a href="shortcode-timer-final-countdown.html"><i class="fa fa-text-height"></i> Timer Final Countdown</a></li>
                        <li><a href="shortcode-timer-flipclock.html"><i class="fa fa-text-height"></i> Timer Flipclock</a></li>
                        <li><a href="shortcode-timer-slick-circular.html"><i class="fa fa-text-height"></i> Timer Slick Circular</a></li>
                        <li><a href="shortcode-twitter.html"><i class="fa fa-twitter-square"></i> Twitter Feed</a></li>
                        <li><a href="shortcode-typography.html"><i class="fa fa-font"></i> Typography</a></li>
                        <li><a href="shortcode-vertical-timeline.html"><i class="fa fa-arrows-v"></i> Vertical Timeline</a></li>
                        <li><a href="shortcode-widgets.html"><i class="fa fa-gift"></i> Widgets</a></li>
                        <li><a href="shortcode-working-process.html"><i class="fa fa-exchange"></i> Working Process</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{STATIC_BASE_URL.'img/gym/bg/bg7.jpg'}}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{STATIC_BASE_URL.'img/gym/bg/bg7.jpg'}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110'']"
                  data-fontsize="['36']"
                  data-lineheight="['75']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:500;">Welcome To Our
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-30'']"
                  data-fontsize="['90','64','54','24']"
                  data-lineheight="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="2000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:700;"><span class="text-theme-colored">Health</span> Zone
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"  
                  id="rs-1-layer-3"

                  data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                  data-fontsize="['18','18','18','14']"
                  data-lineheight="['30','30','30','18']"
                  data-width="none"
                  data-height="none"
                  data-color="#fff"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                  data-start="2200" 
                  data-splitin="chars" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  data-elementdelay="0.03"
                  style="z-index: 5; white-space: nowrap; letter-spacing: 0;">We Provide Our best opportunity and qualified trainers 
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
                  id="rs-1-layer-4"

                  data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','80']" 
                  data-fontsize="['18','18','18','14']"
                  data-lineheight="['30','30','30','18']"
                  data-width="none"
                  data-height="none"
                  data-color="#fff"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                  data-start="2500" 
                  data-splitin="chars" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-elementdelay="0.03"
                  style="z-index: 5; white-space: nowrap; letter-spacing: 0;">for best workout yourself as you want
                </div>

                <!-- LAYER NR. 5 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-5"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['130']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="4500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-circled btn-theme-colored" href="index-gym-mp-layout3.html#">Become a member</a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{STATIC_BASE_URL.'img/gym/bg/bg8.jpg'}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{STATIC_BASE_URL.'img/gym/bg/bg8.jpg'}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                  id="rs-2-layer-1"

                  data-x="['center']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-100'']"
                  data-fontsize="['30']"
                  data-lineheight="['65']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1200" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">Some People Want Average
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white bg-dark-transparent pl-10 pr-10" 
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-30'']"
                  data-fontsize="['90','64','54','24']"
                  data-lineheight="['95']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1500" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:700;">I Desire Great
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white bg-theme-colored-transparent pl-10 pr-10" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['50'']"
                  data-fontsize="['24']"
                  data-lineheight="['40']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1800" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Health Zone
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{STATIC_BASE_URL.'img/gym/bg/bg4.jpg'}}" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{STATIC_BASE_URL.'img/gym/bg/bg4.jpg'}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-130'']"
                  data-fontsize="['48']"
                  data-lineheight="['75']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:500;">Don't ever Say
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-80']"
                  data-fontsize="['48']"
                  data-lineheight="['75']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1300" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:500;">That it's not
                </div>

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase font-raleway text-center text-white" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['0']"
                  data-fontsize="['90','64','54','24']"
                  data-lineheight="['95']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:700;"><span class="text-theme-colored">Possible!</span>
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['80']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="2000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-flat btn-theme-colored" href="index-gym-mp-layout3.html#">Become a member</a>
                </div>
              </li>

            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
              sliderType:"standard",
              jsFileLocation: "js/revolution-slider/js/",
              sliderLayout: "fullscreen",
              dottedOverlay:"none",
              delay:9000,
              navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                touch:{
                  touchenabled:"on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">title</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [720, 768, 960, 720],
              lazyType: "none",
              parallax:"mouse",
              parallaxBgFreeze:"off",
              parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>

    <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8 mb-sm-30">
              <h3 class="text-uppercase font-28 letter-space-3 mt-0">Who We <span class="text-theme-colored">Are</span> </h3>
              <h5 class="text-uppercase font-weight-400">Cum sociis natoque penatibus et ultrices volutpat. Nullam wisi ultricies a, gravida vitae,</h5>
              <div class="row mb-30">
                <div class="col-md-6">
                  <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut mole stie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermen. </p>
                </div>
                <div class="col-md-6">
                  <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula. Ut mole stie a, ultricies porta urna. Vestibulum commodo volutpat a, convallis ac, laoreet enim. Phasellus fermen. </p>
                </div>
              </div>
              <a href="index-gym-mp-layout3.html#" class="btn btn-theme-colored btn-flat text-uppercase">View More</a>
              <a href="index-gym-mp-layout3.html#" class="btn btn-theme-colored btn-flat text-uppercase ml-20">Pursued Now</a>
            </div>
            <div class="col-md-4">
              <div class="thumb">
                <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/about/3.jpg'}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: services -->
    <section id="services" data-bg-img="{{STATIC_BASE_URL.'img/pattern/p8.png'}}">
      <div class="container pb-0">
        <div class="bg-lighter bg-img-right-top sm-no-bg mt-sm-0" data-bg-img="{{STATIC_BASE_URL.'img/gym/photos/2.png'}}">
          <div class="row">
            <div class="col-md-6 col-md-offset-1 p-sm-40 pt-sm-0 pt-50 pb-20">
              <h2 class="title text-uppercase text-theme-colored">HealthZone <span class="text-black font-weight-300">Features</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. Nunc eu mollis enim, ultrices vehicula ipsum. Ut vel tincidunt elit. Curabitur congue pharetra eros, a dapibus arcu ornare quis. </p>

              <div class="icon-box text-left flip sm-text-center p-0 mt-50 mb-45">
                <a href="index-gym-mp-layout3.html#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                  <i class="flaticon-gym-dumbbell-with-weights-outline text-white no-rotate"></i>
                </a>
                <div>
                  <h5 class="icon-box-title mt-15 mb-10"><strong>Weight Lifting</strong></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                </div>
              </div>

              <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                <a href="index-gym-mp-layout3.html#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                  <i class="flaticon-gym-muscular-male-outline-with-heart-and-lifeline text-white no-rotate"></i>
                </a>
                <div>
                  <h5 class="icon-box-title mt-15 mb-10"><strong>Body Competitions</strong></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                </div>
              </div>

              <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                <a href="index-gym-mp-layout3.html#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                  <i class="flaticon-gym-muscular-gymnast-arm-muscles-show text-white no-rotate"></i>
                </a>
                <div>
                  <h5 class="icon-box-title mt-15 mb-10"><strong>Muscle & Fitness</strong></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                </div>
              </div>

              <div class="icon-box text-left flip sm-text-center p-0 mb-45">
                <a href="index-gym-mp-layout3.html#" class="icon mt-20 mb-30 mr-30 ml-30 pull-left flip sm-pull-none bg-theme-colored rotate">
                  <i class="flaticon-gym-slim-body-with-timer text-white no-rotate font-42"></i>
                </a>
                <div>
                  <h5 class="icon-box-title mt-15 mb-10"><strong>Yoga Classes</strong></h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam interdum diam tortor, egestas varius erat aliquam a. Sed nec dui laoreet risus euismod ullamcorper sit amet eu metus. </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: trainer -->
    <section id="trainer" class="">
      <div class="container-fluid pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase title">Team <span class="text-black font-weight-300">Members</span></h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row ml-md-0 multi-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/1.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/6.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/2.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/3.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/4.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/5.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/6.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 p-0 pr-5 pb-5">
              <div class="trainer-item">
                <div class="trainer-thumb"> <img src="{{STATIC_BASE_URL.'img/gym/team/1.jpg'}}" alt="" class="img-fullwidth img-responsive"> </div>
                <div class="trainer-info">
                  <div class="social-network">
                    <ul class="list-inline">
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter bg-theme-colored"></i></a></li>
                      <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-dribbble bg-theme-colored"></i></a></li>
                    </ul>
                  </div>
                  <div class="trainer-biography">
                    <h3 class="text-white">Steve Smith</h3>
                    <h5 class="text-white">Master</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section Diet Chart -->
      <section id="classes" data-bg-img="{{STATIC_BASE_URL.'img/pattern/p8.png'}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase">Diet Chart</h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
            <div class="col-md-12 diet-questions">
              <div class="select-gender col-md-6">
                  <span><input type="radio" name="gender-radio" value="1" class="gender-radio"><label>Male </label></span>
                  <span><input type="radio" name="gender-radio" value="0" class="gender-radio"><label>Female</label></span>
              </div>
              <div class="physical-activity col-md-6 hidden">
                Physcial Activity
              </div>
              <div class="meat col-md-6 hidden">
                Meat
              </div>
              <div class="col-md-6 veggies hidden">
                Veggies
              </div>
              <div class="col-md-6 fruits hidden">
                Fruits
              </div>
              <div class="col-md-6 products hidden">
                Products
              </div>
              <div class="col-md-6 everyday hidden">
                Everyday
              </div>
              <div class="col-md-6 bad habits hidden">
                Bad Habits
              </div>
              <div class="col-md-6 meals-per-day hidden">
                Meals per day
              </div>
              <div class="col-md-6 measurements hidden">
                Measurements
              </div>
                <div class="col-md-4 progressHolder" style="float:right">
                  <div class="steps clearfix">
                      <div>
                          <div><span>Your gender</span></div>
                          <div></div>
                      </div>

                      <div>
                          <div><span>Physical Activity</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Meat</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Veggies</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Fruits</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Products</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Everyday</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Bad habits</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Number of meals per day</span></div>
                          <div> </div>
                      </div>
                      <div>
                          <div><span>Measurements</span></div>
                          <div></div>
                      </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-md-12">

          </div>
        </div>
      </div>
    </section>
    <!--- -->
    <!-- Section: tranning Class -->
    <section id="classes" data-bg-img="{{STATIC_BASE_URL.'img/pattern/p8.png'}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase">Our Populer Training <span class="text-black font-weight-300">classes</span></h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-3col" data-dots="true">
              <div class="item">
                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                  <div class="thumb mb-20"> <img alt="featured project" src="{{STATIC_BASE_URL.'img/gym/classes/1.jpg'}}" class="img-responsive img-fullwidth"> 
                  </div>
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="text-uppercase font-weight-800 line-bottom">Yates Row Reverse Grip</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                    <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                  <div class="thumb mb-20"> <img alt="featured project" src="{{STATIC_BASE_URL.'img/gym/classes/2.jpg'}}" class="img-responsive img-fullwidth"> 
                  </div>
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="text-uppercase font-weight-800 line-bottom">Arnold Dumbbell Press</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                    <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                  <div class="thumb mb-20"> <img alt="featured project" src="{{STATIC_BASE_URL.'img/gym/classes/3.jpg'}}" class="img-responsive img-fullwidth"> 
                  </div>
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="text-uppercase font-weight-800 line-bottom">Yoga Program</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                    <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="class-item box-hover-effect effect1 mb-md-30 bg-lighter">
                  <div class="thumb mb-20"> <img alt="featured project" src="{{STATIC_BASE_URL.'img/gym/classes/4.jpg'}}" class="img-responsive img-fullwidth"> </div>
                  <div class="content text-left flip p-25 pt-0">
                    <h4 class="text-uppercase font-weight-800 line-bottom">Body Building</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquam ipsum quis ipsum facilisis, sit amet scelerisque augue vulputate.</p>
                    <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider:  -->
    <section class="divider parallax layer-overlay overlay-dark"  data-parallax-ratio="0.7" data-bg-img="{{STATIC_BASE_URL.'img/gym/bg/bg2.jpg'}}">
      <div class="container pb-60">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <div class="call-to-action pt-10 pb-40 mb-20 ">
                <h5 class="text-white">Your reliable Health Partner</h5>
                <h2 class="text-white mb-50">We take care of the whole person, Mind-Body-Spirit.</h2>
                <a class="btn btn-default mr-10" href="index-gym-mp-layout3.html#">Join Now</a> 
                <a class="btn btn-theme-colored" href="index-gym-mp-layout3.html#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Pricing -->
    <section id="pricing" data-bg-img="{{STATIC_BASE_URL.'img/pattern/p8.png'}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase">Pricing <span class="text-black font-weight-300"> Table</span></h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table style1 bg-white-light border-2px border-theme-colored text-center">
                <div class="pt-40 pb-60">
                  <h3 class="package-type mt-40">Body Building</h3>
                  <p>Hurry to grap your offer now</p>
                  <h2 class="price text-theme-colored mb-10 font-weight-300 font-48"><span class="font-40">$</span>35</h2>
                  <ul class="table-list bg-lightest pl-0 mb-20">
                    <li>24 Hour Gym</li>
                    <li>Fitness Assessment</li>
                    <li>Monthly Newsletter</li>
                    <li>Review of Safety Program</li>
                  </ul>
                  <a class="btn btn-colored btn-theme-colored text-uppercase" href="index-gym-mp-layout3.html#">Get Offer!</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table style1 bg-white-light border-2px border-theme-colored text-center">
                <div class="pt-40 pb-60">
                  <h3 class="package-type mt-40">Weight Loss</h3>
                  <p>Hurry to grap your offer now</p>
                  <h2 class="price text-theme-colored mb-10 font-weight-300 font-48"><span class="font-40">$</span>70</h2>
                  <ul class="table-list bg-lightest pl-0 mb-20">
                    <li>24 Hour Gym</li>
                    <li>Fitness Assessment</li>
                    <li>Monthly Newsletter</li>
                    <li>Review of Safety Program</li>
                  </ul>
                  <a class="btn btn-colored btn-theme-colored text-uppercase" href="index-gym-mp-layout3.html#">Get Offer!</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table style1 bg-white-light border-2px border-theme-colored text-center">
                <div class="pt-40 pb-60">
                  <h3 class="package-type mt-40">Body Combat</h3>
                  <p>Hurry to grap your offer now</p>
                  <h2 class="price text-theme-colored mb-10 font-weight-300 font-48"><span class="font-40">$</span>99</h2>
                  <ul class="table-list bg-lightest pl-0 mb-20">
                    <li>24 Hour Gym</li>
                    <li>Fitness Assessment</li>
                    <li>Monthly Newsletter</li>
                    <li>Review of Safety Program</li>
                  </ul>
                  <a class="btn btn-colored btn-theme-colored text-uppercase" href="index-gym-mp-layout3.html#">Get Offer!</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery" class="bg-lighter">
     <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase">HealthZone <span class="text-black font-weight-300">gallery</span></h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
            <!-- Works Filter -->
            <div class="portfolio-filter">
              <a href="index-gym-mp-layout3.html#" class="active" data-filter="*">All</a>
              <a href="index-gym-mp-layout3.html#branding" class="" data-filter=".branding">Branding</a>
              <a href="index-gym-mp-layout3.html#design" class="" data-filter=".design">Design</a>
              <a href="index-gym-mp-layout3.html#photography" class="" data-filter=".photography">Photography</a>
            </div>
            <!-- End Works Filter -->
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
                <!-- Portfolio Item Start -->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}"><i class="fa fa-plus"></i></a>
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item branding">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/gallery/2.jpg'}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-link"></i></a>
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{STATIC_BASE_URL.'img/gym/gallery/2.jpg'}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/gallery/3.jpg'}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{STATIC_BASE_URL.'img/gym/gallery/3.jpg'}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/gallery/4.jpg'}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/gallery/5.jpg'}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}" title="Portfolio Gallery - Photo 1"><img src="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}" alt=""></a></li>
                          <li><a href="{{STATIC_BASE_URL.'img/gym/gallery/2.jpg'}}" title="Portfolio Gallery - Photo 2"><img src="{{STATIC_BASE_URL.'img/gym/gallery/2.jpg'}}" alt=""></a></li>
                          <li><a href="{{STATIC_BASE_URL.'img/gym/gallery/3.jpg'}}" title="Portfolio Gallery - Photo 3"><img src="{{STATIC_BASE_URL.'img/gym/gallery/3.jpg'}}" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="{{STATIC_BASE_URL.'img/gym/gallery/1.jpg'}}"><i class="fa fa-plus"></i></a>
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="{{STATIC_BASE_URL.'img/gym/gallery/2.jpg'}}">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper" data-direction="vertical">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="{{STATIC_BASE_URL.'img/gym/gallery/6.jpg'}}" title="Portfolio Gallery - Photo 1"><img src="{{STATIC_BASE_URL.'img/gym/gallery/6.jpg'}}" alt=""></a></li>
                          <li><a href="{{STATIC_BASE_URL.'img/gym/gallery/5.jpg'}}" title="Portfolio Gallery - Photo 2"><img src="{{STATIC_BASE_URL.'img/gym/gallery/5.jpg'}}" alt=""></a></li>
                          <li><a href="{{STATIC_BASE_URL.'img/gym/gallery/4.jpg'}}" title="Portfolio Gallery - Photo 3"><img src="{{STATIC_BASE_URL.'img/gym/gallery/4.jpg'}}" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="index-gym-mp-layout3.html#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
                          
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Testimonials -->
    <section class="divider parallax layer-overlay overlay-black" data-bg-img="{{STATIC_BASE_URL.'img/gym/bg/bg11.jpg'}}">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="testimonial-carousel owl-carousel-1col" data-dots="true">
              <div class="item text-center">
                <div class="thumb"><img src="{{STATIC_BASE_URL.'img/gym/testimonials/s1.jpg'}}" alt="" width="90" class="img-circle"></div>
                <div class="content">
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt. Aliquam erat volutpat. Integer non porta lorem.</p>
                  <h5 class="author text-theme-colored">Jane Doe</h5>
                  <h6 class="title text-white">Developer</h6>
                </div>
              </div>
              <div class="item text-center">
                <div class="thumb"><img src="{{STATIC_BASE_URL.'img/gym/testimonials/s2.jpg'}}" alt="" width="90" class="img-circle"></div>
                <div class="content">
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt. Aliquam erat volutpat. Integer non porta lorem.</p>
                  <h5 class="author text-theme-colored">Jane Doe</h5>
                  <h6 class="title text-white">Developer</h6>
                </div>
              </div>
              <div class="item text-center">
                <div class="thumb"><img src="{{STATIC_BASE_URL.'img/gym/testimonials/s3.jpg'}}" alt="" width="90" class="img-circle"></div>
                <div class="content">
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt. Aliquam erat volutpat. Integer non porta lorem.</p>
                  <h5 class="author text-theme-colored">Jane Doe</h5>
                  <h6 class="title text-white">Developer</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Products -->
    <section id="products">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="title text-uppercase">Latest <span class="text-black font-weight-300"> Products</span></h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row multi-row-clearfix">
                <div class="owl-carousel-3col" data-dots="true">
                  <div class="item">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="index-gym-mp-layout3.html#"><h5 class="product-title">Product Title Here</h5></a>
                        <div class="star-rating" title="Rated 4.50 out of 5"><span data-width="90%">3.50</span></div>
                        <div class="price"><del><span class="amount">$520.00</span></del><ins><span class="amount">$480.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper no-bg">
                          <a class="btn btn-default btn-sm btn-add-to-cart" href="index-gym-mp-layout3.html#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="index-gym-mp-layout3.html#"><h5 class="product-title">Product Title Here</h5></a>
                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width: 100%;">5.00</span></div>
                        <div class="price"><del><span class="amount">$364.00</span></del><ins><span class="amount">$344.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper no-bg">
                          <a class="btn btn-default btn-sm btn-add-to-cart" href="index-gym-mp-layout3.html#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product">
                      <span class="tag-sale">Hot!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="index-gym-mp-layout3.html#"><h5 class="product-title">Product Title Here</h5></a>
                        <div class="star-rating" title="Rated 5.00 out of 5"><span style="width: 100%;">3.90</span></div>
                        <div class="price"><span class="amount">$245.00</span></div>
                        <div class="btn-add-to-cart-wrapper no-bg">
                          <a class="btn btn-default btn-sm btn-add-to-cart" href="index-gym-mp-layout3.html#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="index-gym-mp-layout3.html#"><h5 class="product-title">Product Title Here</h5></a>
                        <div class="star-rating" title="Rated 4.90 out of 5"><span style="width: 95%;">4.60</span></div>
                        <div class="price"><del><span class="amount">$490.00</span></del><ins><span class="amount">$475.00</span></ins></div>
                        <div class="btn-add-to-cart-wrapper no-bg">
                          <a class="btn btn-default btn-sm btn-add-to-cart" href="index-gym-mp-layout3.html#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product">
                      <span class="tag-sale">Sale!</span>
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="index-gym-mp-layout3.html#"><h5 class="product-title">Product Title Here</h5></a>
                        <div class="star-rating" title="Rated 4.00 out of 5"><span style="width: 80%;">4.00</span></div>
                        <div class="price"><span class="amount">$175.00</span></div>
                        <div class="btn-add-to-cart-wrapper no-bg">
                          <a class="btn btn-default btn-sm btn-add-to-cart" href="index-gym-mp-layout3.html#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product">
                      <div class="product-thumb"> <img alt="" src="https://placehold.it/255x194" class="img-responsive img-fullwidth">
                        <div class="overlay"></div>
                      </div>
                      <div class="product-details text-center">
                        <a href="index-gym-mp-layout3.html#"><h5 class="product-title">Product Title Here</h5></a>
                        <div class="star-rating" title="Rated 2.50 out of 5"><span style="width: 50%;">2.50</span></div>
                        <div class="price"><span class="amount">$265.00</span></div>
                        <div class="btn-add-to-cart-wrapper no-bg">
                          <a class="btn btn-default btn-sm btn-add-to-cart" href="index-gym-mp-layout3.html#">Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider:  -->
    <section class="divider parallax layer-overlay overlay-dark"  data-parallax-ratio="0.7" data-bg-img="{{STATIC_BASE_URL.'img/gym/bg/bg2.jpg'}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="font-weight-300 pb-30 text-theme-colored">Subscribe to our Newsletter</h2>
              <form id="mailchimp-subscription-form" class="newsletter-form">
                <div class="input-group">
                  <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL" >
                        <span class="input-group-btn">
                          <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#mailchimp-subscription-form').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    } else if (resp.result === 'error') {
                        $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                    }
                    $mailchimpform.prepend($response);
                }
              </script>
            </div>
          </div>
        </div>
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Blog -->
    <section id="blog" data-bg-img="{{STATIC_BASE_URL.'img/pattern/p8.png'}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h2 class="title text-uppercase">News & <span class="text-black font-weight-300">blog</span></h2>
              <p class="text-uppercase letter-space-4">Join our Health Zone and be healthy.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <article class="post clearfix mb-30">
              <div class="row equal-height-inner clearfix">
                <div class="col-sm-12 col-md-5 pr-0 pr-sm-15 sm-height-auto">
                  <div class="entry-header md-height-auto">
                    <div class="post-thumb thumb"> <img class="img-responsive md-height img-fullwidth" alt="" src="{{STATIC_BASE_URL.'img/gym/news/1.jpg'}}"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul class="font-12">
                            <li><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                              30 Likes</a></li>
                            <li class="mt-20 mt-md-10"><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                              72 Comments</a></li>
                            <li class="mt-20 mt-md-10"><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                              Share</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-7 pl-sm-15 pl-0 md-height-auto">
                  <div class="entry-content bg-white p-20 pb-30 md-height-auto">
                    <h4 class="entry-title text-white text-uppercase"><a href="index-gym-mp-layout3.html#">Post title here</a></h4>
                    <ul class="entry-date list-inline mt-10 mb-10">
                      <li><a href="index-gym-mp-layout3.html#" class="text-theme-colored">Jan 13, 2015</a></li>
                      <li><a href="index-gym-mp-layout3.html#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                    </ul>
                    <p>Gymnasia apparatus such as bar-bells, parallel bars, jumping board, running path, tennis-balls, cricket field, fencing area, and so forth are used as exercises. In safe weather, outdoor locations are the most conductive to health.... </p>
                    <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </article>
            <article class="post clearfix  mb-sm-30">
              <div class="row equal-height-inner clearfix">
                <div class="col-sm-12 col-md-5 pr-0 pr-sm-15 sm-height-auto">
                  <div class="entry-header md-height-auto">
                    <div class="post-thumb thumb"> <img class="img-responsive md-height img-fullwidth" alt="" src="{{STATIC_BASE_URL.'img/gym/news/2.jpg'}}"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul class="font-12">
                            <li><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                              30 Likes</a></li>
                            <li class="mt-20 mt-md-10">
                                <a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                                72 Comments
                              </a>
                            </li>
                            <li class="mt-20 mt-md-10">
                                <a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                                Share
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-md-7 pl-sm-15 pl-0 md-height-auto">
                  <div class="entry-content bg-white p-20 pb-30 md-height-auto">
                    <h4 class="entry-title text-white text-uppercase"><a href="index-gym-mp-layout3.html#">Post title here</a></h4>
                    <ul class="entry-date list-inline mt-10 mb-10">
                      <li><a href="index-gym-mp-layout3.html#" class="text-theme-colored">Jan 13, 2015</a></li>
                      <li><a href="index-gym-mp-layout3.html#">Written by: <span class="text-theme-colored">Admin</span></a></li>
                    </ul>
                    <p>Gymnasia apparatus such as bar-bells, parallel bars, jumping board, running path, tennis-balls, cricket field, fencing area, and so forth are used as exercises. In safe weather, outdoor locations are the most conductive to health....</p>
                    <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="post clearfix">
              <div class="entry-header">
                <div class="post-thumb thumb"> <img class="img-responsive img-fullwidth" alt="" src="{{STATIC_BASE_URL.'img/gym/news/3.jpg'}}"> 
                </div>
                <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul class="font-12">
                        <li><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-thumbs-o-up"></i> <br>
                          30 Likes</a></li>
                        <li class="mt-20"><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-comments-o"></i> <br>
                          72 Comments</a></li>
                        <li class="mt-20"><a href="index-gym-mp-layout3.html#" class="text-white"><i class="fa fa-share-square-o"></i> <br>
                          Share</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="entry-content p-20 bg-white">
                <h4 class="entry-title text-white text-uppercase"><a href="index-gym-mp-layout3.html#">Post title here</a></h4>
                <ul class="entry-date list-inline mt-10 mb-10">
                  <li><a href="index-gym-mp-layout3.html#" class="text-theme-colored">Jan 13, 2015/ Written by: Name</a></li>
                </ul>
                <p>Lorem elit aimi adipisci conseq uuntur forth are used as exad ercises tempore excep turi culpa perferendis! Quis voluptas consequr, quas magnam dolores ...</p>
                <a href="index-gym-mp-layout3.html#" class="btn-read-more btn-sm">Read More</a>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer divider parallax layer-overlay overlay-dark" data-bg-img="{{STATIC_BASE_URL.'img/gym/bg/bg6.jpg'}}" data-parallax-ratio="0.7">
    <div class="container pb-60 pt-0">
      <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
          <div class="widget dark mb-50"> <img src="{{STATIC_BASE_URL.'img/logo-wide-white.png'}}" alt="" class="mt-10 mb-20">
            <p class="font-12">Corporis dolor soluta officiis quam, repudiandae, culpa nostrum maiores dignissimos quod expedita, aliquid magnam tempore iste minima quaerat adipisci veniam.</p>            
          </div>
        </div>
      </div>
      <div class="row border-bottom-theme-colored">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Quick Contact</h5>
            <form method="post" action="http://kodesolution.com/demo/health-beauty/health-zone/v3.0/includes/quickcontact.php" class="quick-contact-form" name="footer_quick_contact_form" id="quick_contact_form2" novalidate="novalidate">
              <div class="form-group">
                <input type="text" placeholder="Enter Email" required="" class="form-control" name="form_email">
              </div>
              <div class="form-group">
                <textarea rows="3" placeholder="Enter Message" required="" class="form-control" name="form_message"></textarea>
              </div>
              <div class="form-group">
                <input type="hidden" value="" class="form-control" name="form_botcheck">
                <button data-loading-text="Please wait..." class="btn btn-default btn-transparent btn-xs btn-flat mt-0" type="submit">Send Message</button>
              </div>
            </form>

            <!-- Quick Contact Form Validation-->
            <script type="text/javascript">
              $("#quick_contact_form2").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('&lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&gt;&lt;/div&gt;');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Twitter Feed</h5>
            <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Tags</h5>
            <div class="tags">
              <a href="index-gym-mp-layout3.html#">Body building</a>
              <a href="index-gym-mp-layout3.html#">Fitnees</a>
              <a href="index-gym-mp-layout3.html#">Weight lifting</a>
              <a href="index-gym-mp-layout3.html#">Classes</a>
              <a href="index-gym-mp-layout3.html#">mountain</a>
              <a href="index-gym-mp-layout3.html#">Gym</a>
              <a href="index-gym-mp-layout3.html#">Coaches</a>
              <a href="index-gym-mp-layout3.html#">Trainers</a>
              <a href="index-gym-mp-layout3.html#">Workout</a>
              <a href="index-gym-mp-layout3.html#">Yoga</a>
              <a href="index-gym-mp-layout3.html#">Juice</a>
              <a href="index-gym-mp-layout3.html#">Body combat</a>
              <a href="index-gym-mp-layout3.html#">Relax</a>
              <a href="index-gym-mp-layout3.html#">Fruit</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hours">
                <ul class="list-border">
                  <li class="clearfix"> <span> Friday - Saturday :  </span>
                    <div class="value pull-right"> 10.00 am - 6.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Monday - Thusday :</span>
                    <div class="value pull-right"> 8.00 am - 9.00 pm </div>
                  </li>
                  <li class="clearfix"> <span> Sunday : </span>
                    <div class="value pull-right"> Closed </div>
                  </li>
                  <li class="clearfix"> <span> Sunday : </span>
                    <div class="value pull-right"> Closed </div>
                  </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-10">
        <div class="col-md-5">
          <h4 class="text-white">Subscribe Us</h4>
          <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-20">
            <div class="input-group">
              <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" >
              <span class="input-group-btn">
                <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
              </span>
            </div>
          </form>
          <!-- Mailchimp Subscription Form Validation-->
          <script type="text/javascript">
            $('#mailchimp-subscription-form-footer').ajaxChimp({
                callback: mailChimpCallBack,
                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
            });

            function mailChimpCallBack(resp) {
                // Hide any previous response text
                var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                    $response = '';
                $mailchimpform.children(".alert").remove();
                if (resp.result === 'success') {
                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                } else if (resp.result === 'error') {
                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                }
                $mailchimpform.prepend($response);
            }
          </script>
        </div>
        <div class="col-md-4 col-md-offset-3 mt-20">
          <div class="pull-right">
            <ul class="styled-icons icon-bordered small square list-inline mt-10">
              <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-facebook text-white"></i></a></li>
              <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-twitter text-white"></i></a></li>
              <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-skype text-white"></i></a></li>
              <li><a href="index-gym-mp-layout3.html#"><i class="fa fa-youtube text-white"></i></a></li>
            </ul>
          </div>
          <div class="pull-left">
            <h5 class="text-white">Call Us Now</h5>
            <h4 class="text-gray">00144-636894</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copy-right p-20 bg-black-333">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 text-white m-0">Copyright &copy;2015 ThemeMascot. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="index-gym-mp-layout3.html#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->
@endsection