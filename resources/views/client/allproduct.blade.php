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

                                    <img src="{{URL::asset('assests/img/mani-banner-1.webp')}}" alt="" class="logo-bar__image" />

                                    <img src="{{URL::asset('assests/img/mani-banner-1-1.webp')}}" alt="" class="logo-bar__image-2" />

                                </div>
                            </div>

                            <div class="slideshow__item">
                                <div href="#" class="slideshow__link">

                                    <img src="{{URL::asset('assests/img/mani-banner-2.jpg')}}" alt="" class="logo-bar__image" />

                                    <img src="{{URL::asset('assests/img/mani-banner-1-2.webp')}}" alt="" class="logo-bar__image-2" />

                                </div>
                            </div>

                            <div class="slideshow__item">
                                <div href="#" class="slideshow__link">

                                    <img src="{{URL::asset('assests/img/mani-banner-3.jpg')}}" alt="" class="logo-bar__image" />

                                    <img src="{{URL::asset('assests/img/mani-banner-1-3.webp')}}" alt="" class="logo-bar__image-2" />

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
                <a href="{{url('/')}}">Home</a>
                <span class="divider">‐</span>
                <span>Fashion</span>
            </nav>
        </div>
</div><br><br>



<!-- product detail -->
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 column" style="background: #fff;padding: 15px; border-radius: 5px;">
            <button class="sidebar-toggle position-left" data-toggle="modal" data-target="#modalShopFilters"><i class="icon-layout"></i></button>
            <aside class="sidebar sidebar-offcanvas">
                <!-- Widget Categories-->
                <section class="widget widget-categories">
                    <h3 class="widget-title">Shop Categories</h3>
                    <ul>

                        <?php $data = App\Category::get(); ?>
                        @foreach($data as $cat)
                        <li><a href="{{ url('product') }}/{{ $cat->cname }}">{{$cat->cname}}</a>
                        </li>

                        @endforeach

                    </ul>
                </section>
                <!-- Widget Price Range-->




                <section class="widget">
                    <h3 class="widget-title">Recent </h3>
                    <!-- Single Post -->
                    <?php $data = App\Product::get()->take(3)->sortByDesc('created_at'); ?>




                    @foreach ($data as $product)

                    <div class="d-table">
                        @php $a = explode(",",$product->pimage); @endphp
                        @foreach ($a as $b)
                        <a class="product-thumb" href="{{ url('productdetail') }}/{{ $product->id }}">
                            <img class="d-block w-200 mx-auto img-thumbnail rounded-circle d-table-cell align-middle" src="{{ url('item_img') }}/{{ $b }}" alt="{{ url('item_img') }}/{{ $b }}">
                        </a>
                        @endforeach
                        <div class="pl-3 d-table-cell align-middle">
                            <h5><a href="{{ url('productdetail') }}/{{ $product->id }}">{{$product->title}}</a>
                            </h5>
                            <p class="text-muted mb-2">{{$product->price}}.00</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </section>
            </aside>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-6">
            <div class="prow" style="margin: top 5px;">

                <?php $data = App\Product::paginate(9); ?>
                @foreach ($data as $product)

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="grid-item" style="margin-bottom: 10px;">
                        <div class="product-card">
                            @php $a = explode(",",$product->pimage); @endphp
                            @foreach ($a as $b)
                            <a class="product-thumb" href="{{ url('productdetail') }}/{{ $product->id }}">
                                <img src="{{ url('item_img') }}/{{ $b }}" alt="{{ url('item_img') }}/{{ $b }}">
                            </a>

                            <h3 class="product-title">
                                <a href="{{ url('productdetail') }}/{{ $product->id }}">{{$product->title}}</a>
                            </h3>
                            @endforeach
                            <h4 class="product-price">


                                {{$product->price}}.00
                            </h4>
                            <div class="product-buttons" style="    display: flex;">
                                <a class="btn" href="{{url('login')}}" data-id="3" title="Whishlist">
                                    <i class="mdi mdi-heart-outline menu-icon"></i></a>
                                <a class="btn " href="">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="gutter-sizer"></div>
                    <div class="grid-sizer"></div>
                </div>
                @endforeach
            </div>

            <nav class="pagination1">
                <div class="column">
                    <ul class="pages">
                        <li class="active">
                            <nav>
                                <ul class="pagination">
                                    <li> {{ $data->links() }}</li>
                                    <!-- <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="https://dssaree.com/product-grids?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link" href="https://dssaree.com/product-grids?page=3">3</a></li>
                                    <li class="page-item"><a class="page-link" href="https://dssaree.com/product-grids?page=4">4</a></li>
                                    <li class="page-item"><a class="page-link" href="https://dssaree.com/product-grids?page=5">5</a></li>



                                    <li class="page-item">
                                        <a class="page-link" href="https://dssaree.com/product-grids?page=2" rel="next" aria-label="Next »">›</a>
                                    </li> -->
                                </ul>
                            </nav>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>

<!--End  -->

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

                            <img class="lazy owl-lazy loaded" data-src="assests/img/mani-banner-1-1.webp" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s1.jpg" data-was-processed="true">

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

                            <img class="lazy owl-lazy loaded" data-src="assests/img/mani-banner-1-1.webp" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s2.jpg" data-was-processed="true">

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

                            <img class="lazy owl-lazy loaded" data-src="assests/img/mani-banner-1-1.webp" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s3.jpg" data-was-processed="true">

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
                            <img class="lazy owl-lazy loaded" data-src="assests/img/mani-banner-1-1.webp" data-widths="[450]" data-sizes="auto" alt="" sizes="auto" src="assests/img/product/section6/s4.jpg" data-was-processed="true">
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

@endsection