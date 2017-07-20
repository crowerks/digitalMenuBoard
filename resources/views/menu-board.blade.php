
@extends('layouts.menu-board-template')
@section('content')
<div class="navbar-brand">
    <a href="http://localhost/digitalMenuBoard/public/subscriber"><img src="http://schwieterts.com/wp-content/uploads/2016/07/Schwieterts-Cones-and-Candy.png" title="Schwieterts Cones and Candy - The candy store with more!" alt="Schwieterts Cones and Candy - The candy store with more!" class="brand-logo img-responsive"></a>
</div>
<div class="row all0 full-height white-bar-top" style="border-image: url(images/color-bar.jpg) 50 repeat stretch;">
    <div class="col-xs-6 bg-pink full-height all0" style="background-image:url(images/ice-cream-edit.jpg);">
        <!-- left side -->
        <div class="row pink-burbles" style="background-image:url(images/pink-banner.png);"></div>
        <div class="row heading-banner banner-pink" style="background-image:url(images/banner-pink.png);">
            <h1 class="text-pink uppercase">{{\App\Heading::where('id', 1)->pluck('products')[0]}}</h1>
        </div>


        <div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Wrapper for slides -->
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(0) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(5) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(10) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(15) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(20) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(25) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(30) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    @foreach(\App\Product::ChosenElements(35) as $product)
                                        <li>{{$product->flavor}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /left side -->
    <div class="col-xs-6 full-height all0">
        <!-- right side -->
        <div class="half-height bg-orange">
            <div class="row heading-banner banner-orange" style="background-image:url(images/banner-orange.png);">
                <h1 class="text-white uppercase alignright">{{\App\Heading::where('id', 1)->pluck('pricing')[0]}}</h1>
            </div>
            <div class="row all0 full-height">
                <div class="col-xs-4 full-height">
                    <div class="position-burst">
                        <div id="starburst" class="starburst-white" style="background-image:url(images/starburst-white.png);">
                            <h3>{{\App\Pricing::where('id', 1)->pluck('size')[0]}}<br>${{\App\Pricing::where('id', 1)->pluck('price')[0]}}</h3>
                        </div>
                    </div>
                    <div class="background-image-contain img-responsive opacity full-height" style="background-image:url(images/cup.png);">
                    </div>
                </div>
                <div class="col-xs-4 full-height">
                    <div class="position-burst">
                        <div id="starburst" class="starburst-white" style="background-image:url(images/starburst-white.png);">
                            <h3>{{\App\Pricing::where('id', 2)->pluck('size')[0]}}<br>${{\App\Pricing::where('id', 2)->pluck('price')[0]}}</h3>
                        </div>
                    </div>
                    <div class="background-image-contain img-responsive opacity full-height" style="background-image:url(images/waffle-cone.png);">
                    </div>

                </div>
                <div class="col-xs-4 full-height">
                    <div class="position-burst">
                        <div id="starburst" class="starburst-white" style="background-image:url(images/starburst-white.png);">
                              <h3>{{\App\Pricing::where('id', 3)->pluck('size')[0]}}<br>${{\App\Pricing::where('id', 3)->pluck('price')[0]}}</h3>
                        </div>
                    </div>
                    <div class="background-image-contain img-responsive opacity full-height" style="background-image:url(images/sugar-cone.png);">
                    </div>
                </div>
            </div>
        </div>
        <div class="half-height bg-blue background-image-cover" style="background-image:url(images/icecream-blue-bg.jpg);">
            <div class="row heading-banner banner-blue" style="background-image:url(images/banner-blue.png);">
                <h1 class="text-white uppercase">{{\App\Heading::where('id', 1)->pluck('specials')[0]}}</h1>
            </div>
            <div class="position-burst-right">
                <div id="starburst" class="starburst-blue text-white" style="background-image:url(images/starburst-blue.png);">
                    <h3>${{\App\Special::active()->pricing}}</h3>
                </div>

            </div>
            <div class="specialdiv">
                <h2 class="text-black uppercase">
                    {{ \App\Special::active()->special }}
                </h2>
            </div>
        </div>
    </div>
    <!-- /right side -->
</div>
@endsection
