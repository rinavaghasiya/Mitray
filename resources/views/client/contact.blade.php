@extends('client.header')
@section('main')

<div class="page-container  " id="PageContainer">
    <main class="main-content" id="MainContent">

        <div class="breadcrumb-container lazy" style="background-image: url('assests/img/mani-banner-2.jpg');" data-was-processed="true">
            <div id="shopify-section-1562828445846" class="shopify-section ishi-slider-section">
                <div class="ishislider">
                    <div class="slideshow-block">

                        <div id="ishislideshow-carousel" class="main-slider owl-carouselowl-carousel slider-with-options owl-theme logo-bar" data-small="1" data-mobile="1" data-tablet="1" data-laptop="1" data-desktop="1" data-autoplaytimeout="5000" data-autoplay="true" data-nav="true" data-dots="true" data-loop="true">


                            <div class="slideshow__item">
                                <div class="slideshow__link">

                                    <img src="assests/img/mani-banner-1.webp" alt="" class="logo-bar__image" />

                                    <img src="assests/img/mani-banner-1-1.webp" alt="" class="logo-bar__image-2" />



                                </div>
                            </div>

                            <div class="slideshow__item">
                                <div href="#" class="slideshow__link">

                                    <img src="assests/img/mani-banner-2.jpg" alt="" class="logo-bar__image" />

                                    <img src="assests/img/mani-banner-1-2.webp" alt="" class="logo-bar__image-2" />

                                </div>
                            </div>

                            <div class="slideshow__item">
                                <div href="#" class="slideshow__link">

                                    <img src="assests/img/mani-banner-3.jpg" alt="" class="logo-bar__image" />

                                    <img src="assests/img/mani-banner-1-3.webp" alt="" class="logo-bar__image-2" />



                                </div>
                            </div>



                        </div>


                    </div>
                </div>

                <style type="text/css">
                    .ishi-slider-section {
                        margin-bottom: 50px;
                    }

                    .ishi-slider-section .slider-content-right {
                        float: right;
                    }

                    .ishi-slider-section .slider-content-left {
                        float: left;
                    }

                    .ishi-slider-section .slider-content-center {
                        margin: 0 auto;
                        float: unset;
                    }

                    @media (max-width: 767px) {
                        .ishi-slider-section {
                            margin-bottom: 30px;
                        }
                    }
                </style>

                <script>
                    $('.main-slider').slick({
                        dots: false,
                        infinite: true,
                        arrows: false,
                        speed: 1000,
                        fade: true,
                        autoplay: true,
                        autoplaySpeed: 1000,
                        cssEase: 'linear'

                    });
                </script>


            </div>
            <nav class="breadcrumbs page-width breadcrumbs-empty">

                <h3 class="head-title">Fashion </h3>

                <a href="/" title="Back to the frontpage">Home</a>
                <span class="divider">‐</span>
                <span>Fashion</span>
            </nav>
        </div>
        <br>
        <br>
        <div class="page-container  " id="PageContainer">
            <main class="main-content" id="MainContent">

                <div class="normal_main_content ">


                    <section id="shopify-section-template--14155864932407__contact-banner" class="shopify-section">
                        <div class="page-width-2" style="    padding-left: 15px;
                            padding-right: 15px;">
                            <div class="section-header text-center">
                                <h2 class="home-title">Contact</h2>
                            </div>
                            <div class="row">

                                <div class="contact-form-information">

                                    <div class="contact-banner col-lg-4 col-md-12">
                                        <div class="image-wrapper ">
                                            <a class="ishi-customhover-fadeinrotate3D" href="#">
                                                <img class="lazy loaded" data-src="{{URL::asset('assests/img/daisyshah.jpg')}} " data-widths="[400] " data-sizes="auto " alt=" " sizes="auto " src="{{URL::asset('assests/img/daisyshah.jpg')}}" data-was-processed="true">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="information-container col-lg-8 col-md-12">
                                        <div class="title-container">

                                            <h3 class="heading">GET IN TOUCH</h3>


                                            <span class="subheading">We'd Love to Hear From You, Lets Get In Touch!</span>

                                        </div>
                                        <div class="list-contact-info col-xs-12">

                                            <div class="contact_info_item col-xs-6">
                                                <h3>Address</h3>
                                                <p>Surat -395003. </p>
                                                <p>Gujarat.</p>
                                            </div>


                                            <div class="contact_info_item col-xs-6">
                                                <h3>Phone</h3>
                                                <p>+91 88665 36050</p>
                                              
                                            </div>


                                            <div class="contact_info_item col-xs-6">
                                                <h3>Email</h3>
                                                <p>
                                                    <a href="mailto:suniljakabari@gmail.com">
                                                    suniljakabari@gmail.com
                                                    </a>
                                                </p>
                                            </div>


                                            <div class="contact_info_item col-xs-6">
                                                <h3>Additional Information</h3>
                                                <p>We are open: Monday - Saturday, 10AM - 5PM and closed on sunday sorry for that.</p>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style type="text/css">
                            #shopify-section-template--14155864932407__contact-banner {
                                margin-bottom: 70px;
                            }

                            @media (max-width: 767px) {
                                #shopify-section-template--14155864932407__contact-banner {
                                    margin-bottom: 30px;
                                }
                            }
                        </style>
                    </section>
                    
                    <section id="shopify-section-template--14155864932407__form" class="shopify-section" style="background-color: #d5d5d5;">
                        <div class="contact-form-bottom page-width">
                            <div class="title-container">

                                <h3 class="heading">LEAVE US A MESSAGE</h3>

                                <span class="subheading">-Good For Nature, Good For You-</span>
                        </div>

                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('message') !!}
                        </div>
                        @elseif(Session::has('error'))
                        <div class="alert alert-danger">
                            <i class="fa-lg fa fa-warning"></i>
                            {!! session('error') !!}
                        </div>
                        @endif


                            <div class="col-sm-12  product-single-left" style="margin: 8px;" data-product-single-media-group="">
                                  <form class="form-horizontal" action="{{ url('addcontact')}}" method="post" >
                                    {{ csrf_field() }}

                                    <div class="col-md-4" style="padding: 8px;">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="name">
                                    </div>
                                    <div class="col-md-4" style="padding: 8px;">
                                        <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                                    </div>
                                    <div class="col-md-4" style="padding: 8px;">
                                        <input type="tel" class="form-control" placeholder="Phone number" aria-label="Phone number" name="mobile">
                                    </div>
                                    <div class="col-md-12" style="padding: 8px;">
                                        <textarea type="tel" class="form-control" placeholder="Comment" aria-label="Comments" name="comments"></textarea>
                                    </div>
                                    <div class="col-md-12" style="padding: 8px;">
                                        <button type="submit" class="btn btn-primary" style="width: 100%; height: 46px;    padding-top: 11px;">
                                            SEND
                                    </button>   
                                    </div>
                                </form>
                            </div>
                        </div>

                        <style type="text/css">
                            #shopify-section-template--14155864932407__form {
                                margin-bottom: 70px;
                            }

                            @media (max-width: 767px) {
                                #shopify-section-template--14155864932407__form {
                                    margin-bottom: 30px;
                                }
                            }
                        </style>


                    </section>
                    <section id="shopify-section-template--14155864932407__iframe" class="shopify-section">
                        <div class="contact-map">


                            <div id="iframe-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238133.1523816246!2d72.68221020433099!3d21.15914250210564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1649823008887!5m2!1sen!2sin" width="100%" height="400" style="border:0;"  frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d112173.0227855024!2d77.1389451881658!3d28.527485061500744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1606909721649!5m2!1sen!2sin" style="border:0;" width="100%" height="400" frameborder="0"></iframe> -->
                            </div>

                        </div>

                        <style type="text/css">
                            #shopify-section-template--14155864932407__iframe {
                                
                                margin-bottom: 30px;
                            }

                            @media (max-width: 767px) {
                                #shopify-section-template--14155864932407__iframe {
                                    margin-bottom: 0px;
                                }
                            }
                        </style>

                    </section>
                   
                </div>
        </div>

        <div id="shopify-section-1604480299f884e0f8" class="shopify-section ishi-collection-section">
            <div class="ishicollectionblock">
                <div class="collectionblock-inner page-width">

                    <div class="section-header text-center">
                        <h2 class="home-title">OUR COLLECTION</h2>
                    </div>



                    <div class="story-image-wrapper banner-image-left col-md-3 col-xs-6">
                        <div class="ishicollectionblock-container" style="border-radius: 4px;">
                            <div class="image-container">
                                <a href="#">

                                    <img class="lazy owl-lazy loaded" data-src="assests/img/banner-1.jpg" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s1.jpg" data-was-processed="true">

                                </a>
                                <a href="#" class="menu-container">
                                    <span class="heading"> WOMEN</span>

                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="story-image-wrapper banner-image-left col-md-3 col-xs-6">
                        <div class="ishicollectionblock-container" style="border-radius: 4px;">
                            <div class="image-container">
                                <a href="#">

                                    <img class="lazy owl-lazy loaded" data-src="assests/img/banner-2.jpg" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s2.jpg" data-was-processed="true">

                                </a>
                                <a href="#" class="menu-container">
                                    <span class="heading"> WOMEN</span>

                                </a>

                            </div>
                        </div>
                    </div>


                    <div class="story-image-wrapper banner-image-left col-md-3 col-xs-6">
                        <div class="ishicollectionblock-container" style="border-radius: 4px;">
                            <div class="image-container">
                                <a href="#">

                                    <img class="lazy owl-lazy loaded" data-src="assests/img/banner-3.jpg" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s3.jpg" data-was-processed="true">

                                </a>
                                <a href="#" class="menu-container">
                                    <span class="heading"> WOMEN</span>

                                </a>

                            </div>
                        </div>
                    </div>


                    <div class="story-image-wrapper banner-image-left col-md-3 col-xs-6">
                        <div class="ishicollectionblock-container" style="border-radius: 4px;">
                            <div class="image-container">
                                <a href="#">
                                    <img class="lazy owl-lazy loaded" data-src="assests/img/banner-4.jpg" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s4.jpg" data-was-processed="true">
                                </a>
                                <a href="#" class="menu-container">
                                    <span class="heading"> WOMEN</span>

                                </a>

                            </div>
                        </div>
                    </div>




                </div>
            </div>

            <style type="text/css">
                .ishi-collection-section {
                    margin-bottom: 40px;
                }

                @media (max-width: 767px) {
                    .ishi-collection-section {
                        margin-bottom: 0px;
                    }
                }
            </style>


        </div>
    </main>

    @endsection