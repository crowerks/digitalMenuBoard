
@extends('layouts.menu-board-template')
@section('content')
<div class="navbar-brand">
    <img src="http://schwieterts.com/wp-content/uploads/2016/07/Schwieterts-Cones-and-Candy.png" title="Schwieterts Cones and Candy - The candy store with more!" alt="Schwieterts Cones and Candy - The candy store with more!" class="brand-logo img-responsive">
</div>
<div class="row all0 full-height white-bar-top">
    <div class="col-xs-6 bg-pink full-height all0">
        <!-- left side -->
        <div class="row pink-burbles"></div>
        <div class="row heading-banner banner-pink">
            <h1 class="text-pink uppercase">Featured Flavors</h1>
        </div>


        <div id="carousel-example" class="carousel slide" data-ride="carousel" data-interval="5000">
            <!-- Wrapper for slides -->
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="carousel-content">
                                <ul>
                                    <li>Strawberry</li>
                                    <li>Very Vanilla</li>
                                    <li>Chocolate</li>
                                    <li>Banana</li>
                                    <li>Wild Berry</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    <li>Mango</li>
                                    <li>Coconut</li>
                                    <li>Peach</li>
                                    <li>Pineapple</li>
                                    <li>Watermelon</li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="carousel-content">
                                <ul>
                                    <li>Chunks Peanut Butter</li>
                                    <li>Crazy Horse</li>
                                    <li>Volcano</li>
                                    <li>Mud Slide</li>
                                    <li>Quintuple Chocolate</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Controls -->
            <!--
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
            -->

        </div>

    </div>
    <!-- /left side -->
    <div class="col-xs-6 full-height all0">
        <!-- right side -->
        <div class="half-height bg-orange">
            <div class="row heading-banner banner-orange">
                <h1 class="text-white uppercase alignright">Choose a Size</h1>
            </div>
            <div class="row all0 full-height">
                <div class="col-xs-4 full-height">
                    <div class="position-burst">
                        <div id="starburst" class="starburst-white">
                            <h3>cup<br>$2</h3>
                        </div>
                    </div>
                    <div class="background-image-contain img-responsive opacity full-height" style="background-image:url(/../images/cup.png);">
                    </div>
                </div>
                <div class="col-xs-4 full-height">
                    <div class="position-burst">
                        <div id="starburst" class="starburst-white">
                            <h3>waffle cone<br>$3.50</h3>
                        </div>
                    </div>
                    <div class="background-image-contain img-responsive opacity full-height" style="background-image:url(/../images/waffle-cone.png);">
                    </div>

                </div>
                <div class="col-xs-4 full-height">
                    <div class="position-burst">
                        <div id="starburst" class="starburst-white">
                            <h3>sugar cone<br>$3</h3>
                        </div>
                    </div>
                    <div class="background-image-contain img-responsive opacity full-height" style="background-image:url(/../images/sugar-cone.png);">
                    </div>
                </div>
            </div>
        </div>
        <div class="half-height bg-blue background-image-cover" style="background-image:url(/../images/icecream-blue-bg.jpg);">
            <div class="row heading-banner banner-blue">
                <h1 class="text-white uppercase">Cool Summer Treat!</h1>
            </div>
            <div class="position-burst-right">
                <div id="starburst" class="starburst-blue text-white">
                    <h3>special price</h3>
                </div>
            </div>
            <div class="special-div">
                <h2 class="text-black uppercase">
                    some special here
                </h2>
            </div>
        </div>
    </div>
    <!-- /right side -->
</div>
@endsection

