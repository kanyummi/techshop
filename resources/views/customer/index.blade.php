@extends('layouts.customer')

@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">LAPTOPS</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    @foreach ($laptops as $laptop)
                                        <div class="product">
                                            <div class="product-img">
                                                <br>
                                                <img src="{{ $laptop->thumbnail }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $laptop->cat_name }}</p>
                                                <div class="product-name">
                                                    <h3 class="product-name"><a
                                                            href="{{ route('detail', $laptop->id) }}">{{ $laptop->name }}</a>
                                                </div>
                                                </h3>
                                                <h4 class="product-price">
                                                    {{ number_format($laptop->price, 0, ',', '.') }}đ</h4>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm giỏ
                                                    hàng</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- /product -->

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- HOT DEAL SECTION -->
    <div id="hot-deal" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="hot-deal">
                        <ul class="hot-deal-countdown">
                            <li>
                                <div>
                                    <h3>02</h3>
                                    <span>Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>10</h3>
                                    <span>Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>34</h3>
                                    <span>Mins</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <h3>60</h3>
                                    <span>Secs</span>
                                </div>
                            </li>
                        </ul>
                        <h2 class="text-uppercase">hot deal cuối tuần</h2>
                        <p>giảm giá sập sàn 50% OFF</p>
                        <a class="primary-btn cta-btn" href="#">Mua ngay</a>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOT DEAL SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">MOBILES</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <!-- product -->
                                    @foreach ($mobiles as $mobile)
                                        <div class="product">
                                            <div class="product-img">
                                                <br>
                                                <img src="{{ $mobile->thumbnail }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $mobile->cat_name }}</p>
                                                <h3 class="product-name"><a
                                                        href="{{ route('detail', $mobile->id) }}">{{ $mobile->name }}</a>
                                                </h3>
                                                <h4 class="product-price">
                                                    {{ number_format($mobile->price, 0, ',', '.') }}đ</h4>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm
                                                    giỏ
                                                    hàng</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- /product -->

                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">MOBILE PHONE</h4>
                        <div class="section-nav">
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-3">
                        <div>
                            <!-- product widget -->
                            @for ($i = 0; $i <= 2; $i++)
                                @if (!empty($mobiles[$i]))
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{ $mobiles[$i]->thumbnail }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $mobiles[$i]->cat_name }}</p>
                                            <h3 class="product-name"><a
                                                    href="{{ route('detail', $mobiles[$i]->id) }}">{{ $mobiles[$i]->name }}</a>
                                            </h3>
                                            <h4 class="product-price">
                                                {{ number_format($mobiles[$i]->price, 0, ',', '.') }}đ</h4>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>

                        <div>
                            <!-- product widget -->
                            @for ($i = 3; $i <= 5; $i++)
                                @if (!empty($mobiles[$i]))
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{ $mobiles[$i]->thumbnail }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $mobiles[$i]->cat_name }}</p>
                                            <h3 class="product-name"><a
                                                    href="{{ route('detail', $mobiles[$i]->id) }}">{{ $mobiles[$i]->name }}</a>
                                            </h3>
                                            <h4 class="product-price">
                                                {{ number_format($mobiles[$i]->price, 0, ',', '.') }}đ</h4>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">LAPTOP</h4>
                        <div class="section-nav">
                            <div id="slick-nav-4" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-4">
                        <div>
                            <!-- product widget -->
                            <div class="product-widget">

                                @for ($i = 0; $i <= 2; $i++)
                                    @if (!empty($laptops[$i]))
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{ $laptops[$i]->thumbnail }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $laptops[$i]->cat_name }}</p>
                                                <h3 class="product-name"><a
                                                        href="{{ route('detail', $laptops[$i]->id) }}">{{ $laptops[$i]->name }}</a>
                                                </h3>
                                                <h4 class="product-price">
                                                    {{ number_format($laptops[$i]->price, 0, ',', '.') }}đ</h4>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>

                        <div>
                            <!-- product widget -->
                            <div class="product-widget">
                                @for ($i = 3; $i <= 5; $i++)
                                    @if (empty($laptop[$i]))
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="{{ $laptops[$i]->thumbnail }}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category">{{ $laptops[$i]->cat_name }}</p>
                                                <h3 class="product-name"><a
                                                        href="{{ route('detail', $laptops[$i]->id) }}">{{ $laptops[$i]->name }}</a>
                                                </h3>
                                                <h4 class="product-price">
                                                    {{ number_format($laptops[$i]->price, 0, ',', '.') }}đ</h4>
                                            </div>
                                        </div>
                                    @endif
                                @endfor
                                <!-- product widget -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-sm visible-xs"></div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Tablet</h4>
                        <div class="section-nav">
                            <div id="slick-nav-5" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-5">
                        <div>
                            @for ($i = 0; $i <= 2; $i++)
                                @if (!empty($tablets[$i]))
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{ $tablets[$i]->thumbnail }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $tablets[$i]->cat_name }}</p>
                                            <h3 class="product-name"><a
                                                    href="{{ route('detail', $tablets[$i]->id) }}">{{ $tablets[$i]->name }}</a>
                                            </h3>
                                            <h4 class="product-price">
                                                {{ number_format($tablets[$i]->price, 0, ',', '.') }}đ</h4>
                                        </div>
                                    </div>
                                @endif
                            @endfor

                        </div>

                        <div>
                            <!-- product widget -->
                            @for ($i = 3; $i <= 5; $i++)
                                @if (!empty($tablets[$i]))
                                    <div class="product-widget">
                                        <div class="product-img">
                                            <img src="{{ $tablets[$i]->thumbnail }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">{{ $tablets[$i]->cat_name }}</p>
                                            <h3 class="product-name"><a
                                                    href="{{ route('detail', $tablets[$i]->id) }}">{{ $tablets[$i]->name }}</a>
                                            </h3>
                                            <h4 class="product-price">
                                                {{ number_format($tablets[$i]->price, 0, ',', '.') }}đ</h4>
                                        </div>
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
