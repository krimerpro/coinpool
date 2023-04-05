@extends('layouts.default')
@section('content')

<!-- Content Section Start -->
<div class="midd-container">
    <!-- Main Section Start -->
    <div class="main coinpool-layout white-sec" style="background-image:url({{ asset('images/section-1/section-1-banner.jpg') }});">
        <div class="container">
            <div class="row row-reverse align-items-center">
                <div class="col-sm-12 col-md-6" data-wow-delay="0.5s">
                    <div class="coinpool-animation">
                        <div class="platinum-move-1"></div>
                        <div class="platinum-move-2"></div>
                        <div class="platinum-move-3"></div>
                        <div class="platinum-move-4"></div>
                        <div class="platinum-move-5"></div>
                        <div class="top-part">
                            <div class="coin-icon"></div>
                        </div>

                        <div class="base">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mobile-center">
                    <h1>Trading platform of the <span>future!</span></h1>
                    <p class="lead">Advanced protocol based on smart chain ecosystem</p>
                    <div class="hero-btns">
                        <a href="https://t.me/CoinpoolProtocol" class="btn">JOIN US</a>
                        <a href="https://poocoin.app/tokens/0x46aa42492cd27e4210bf6b5ed5ddfce44a705c0b" class="btn btn3">POOCOIN CHART</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Section End -->

    <!--About Start -->
    <div class="about-section c-l p-tb" id="about">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('images/section-3/sec-3-img1.png') }}" alt="about">
                </div>
                <div class="col-md-6 about-left">
                     <h2 class="section-heading">About <span>COINPOOL</span></h2>
                     <h4>Why to choose COINPOOL?</h4>
                     <h5>We use advanced technology to build our own protocol</h5>
                     <a class="btn" href="#about">Read More</a>

                </div>

            </div>
        </div>
    </div>
    <!--About end -->
    <!--Video Section Start -->
    <div class="video-section">
        <img src="{{ asset('images/section-4/sec-4-bg.jpg') }}" />
        <div class="container">
            <div class="play-button">
                <a class="fancybox-media play-btn" href="#"></a>
            </div>
        </div>
    </div>
    <!--Video Section End -->

    <!-- Benefits Start -->
    <div class="benefits p-tb light-gray-bg coinpool-layout">
        <div class="container">
            <div class="text-center"><h2 class="section-heading">Benefits of Using Our Solution</h2></div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box text-center">
                        <div class="benefit-icon">
                            <img src="{{ asset('images/section-5/safe-secure-icon.png') }}" alt="Safe and Secure">
                        </div>
                        <div class="text">
                            <h4>Safe and Secure</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box text-center">
                        <div class="benefit-icon">
                            <img src="{{ asset('images/section-5/instant-exchange-icon.png') }}" alt="Instant Exchange">
                        </div>
                        <div class="text">
                            <h4>Instant Exchange</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box text-center">
                        <div class="benefit-icon">
                            <img src="{{ asset('images/section-5/margin.png') }}" alt="World Coverage">
                        </div>
                        <div class="text">
                            <h4>World Coverage</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box text-center">
                        <div class="benefit-icon">
                            <img src="{{ asset('images/section-5/mobile-app-icon.png') }}" alt="Mobile Apps">
                        </div>
                        <div class="text">
                            <h4>Mobile Apps</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box text-center">
                        <div class="benefit-icon">
                            <img src="{{ asset('images/section-5/network-icon.png') }}" alt="Strong Network">
                        </div>
                        <div class="text">
                            <h4>Strong Network</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="benefit-box text-center">
                        <div class="benefit-icon">
                            <img src="{{ asset('images/section-5/margin.png') }}" alt="Margin Trading">
                        </div>
                        <div class="text">
                            <h4>Margin Trading</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Benefits End -->
<!-- Currency Convertor Start -->
    <div id="convertor" class="currency-calculator p-tb">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2 class="section-heading">Currency Convertor</h2>
                </div>
                <div class="col-sm-12 col-md-6" style="top: 39px;">
                <div class="currency-box text-center">
                    <div class="currency-icon" >
                            <img src="{{ asset('images/section-6/convert-icon.png') }}" alt="World Coverage" style="">
                        </div>
                    <div class="currency-form">
                        <form method="" action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" name="" id="" placeholder="Enter Amount">
                                <input type="text" class="form-control postpend" name="" readonly="" value="COINPOOL">
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" name="" id="" placeholder="Enter Amount">
                                <select name="" class="form-control postpend" style="background-color: white;">
                                    <option value="USD">USD</option>
                                    <option value="AUD">AUD</option>
                                    <option value="EURO">EURO</option>
                                    <option value="INR">INR</option>
                                    <option value="CAD">CAD</option>
                                    <option value="GBP">GBP</option>
                                    <option value="SGD">SGD</option>
                                </select>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Currency Convertor End -->
<!-- Token Sale start -->
    <div class="token-sale p-tb light-gray-bg" id="token">
        <div class="container">
            <div class="text-center"><h2 class="section-heading">Token Allocation</h2></div>
            <div class="sub-txt mw-650 text-center">&nbsp;
            </div>
            <div class="row">
            <div class="col-lg-12">
                        <div class="chart-img mobile-center ipad-center text-center">
                            <img src="{{ asset('images/tokenomic.jpeg') }}" alt="">
                        </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Token Sale end -->
    <!-- Start featured product -->
     <div class="featured-product-sec p-tb white-sec dark-gray-bg-tone-2" id="featured-product" >
        <div id="gold-tech-bg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ipad-center">
                    <img src="{{ asset('images/section-8/featured-prd-img.png') }}" alt="Featured Product">
                </div>
                <div class="col-lg-6 mobile-center ipad-center">
                    <h2 class="section-heading">Featured Product</h2>
                    <div class="sub-txt">
                        <p class="lead">Upcoming features will be updated on this section</p>
                    </div>
                    <div class="button-wrapper">
                        <a class="btn" href="#">Read More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End featured product -->
     <!-- The Roadmap  start-->
          <div class="roadmap-sec p-tb mercury-layout" id="roadmap">
        <div class="container">
            <div class="text-center"><h2 class="section-heading">Road Map</h2></div>
            <div class="sub-txt text-center">
                <p class="lead">Coinpool Marketing Roadmap 2023</p>
            </div>
            <div class="mercury-roadmap owl-carousel">
                <div class="roadmap-item odd">
                    <div class="roadmap-text">
                        <div class="roadmap-day">
                            <div class="date">COINPOOL Platform idea</div>
                        </div>
                        <div class="roadmap-item-text">
                            <h4>PHASE 1</h4>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item even">
                    <div class="roadmap-text">
                        <div class="roadmap-day">
                            <div class="date">Launch</div>
                        </div>
                        <div class="roadmap-item-text">
                            <h4>PHASE 2</h4>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item odd">
                    <div class="roadmap-text">
                        <div class="roadmap-day">
                            <div class="date">Technical development</div>
                        </div>
                        <div class="roadmap-item-text">
                            <h4>PHASE 3</h4>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item even">
                    <div class="roadmap-text">
                        <div class="roadmap-day">
                            <div class="date">Development kit for integrations</div>
                        </div>
                        <div class="roadmap-item-text">
                            <h4>PHASE 4</h4>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item odd">
                    <div class="roadmap-text">
                        <div class="roadmap-day">
                            <div class="date">Beta version of COINPOOL</div>
                        </div>
                        <div class="roadmap-item-text">
                            <h4>PHASE 5</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Roadmap end-->

</div>
<!-- Content Section End -->

@stop
