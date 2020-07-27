<?php
    use \App\Http\Controllers\CartController;
    $res = ((new CartController)->get());
    $cart = json_decode($res->getContent());

    function titleSort($a, $b) {
        $a = $a['title'];
        $b = $b['title'];
        if ($a == $b)
            return 0;
        return ($a > $b) ? 1 : -1;
    }
    usort($products, "titleSort");
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VAIMO STORE</title>
        <link rel="stylesheet" href="dist/app.css" />
    </head>
    <body>
        <div id="app">
            <div class="columns">
                <div class="blue-banner-top"></div>
            </div>
            <div class="columns">
                <div class="column is-6">
                    <img src="img/Logo_Transparent.png" class="logo" alt="Vaimo Store">
                </div>
                <div class="column is-6 align-right">
                    <popover :width="300" trigger="hover">
                        <button class="button shopping-cart-button">
                            <span class="no-left-margin icon">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <span class="no-left-margin">
                                3 items in your cart
                            </span>
                            <span class="heavy-font">
                                €75.00
                            </span>
                        </button>
                        <div slot="content">
                            @foreach($cart->items as $item)
                                <div class="columns">
                                    <img class="cart-image" src="{{$item->imgSrc}}" alt="{{$item->name}}">
                                    <div class="w-100">
                                        <div class="inline-container item-details">
                                            <div>
                                                {{$item->name}}
                                            </div>
                                            <div>
                                                {{$item->qty}} x € {{$item->price}}
                                            </div>
                                        </div>
                                        <div class="inline-container">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </popover>
                </div>
            </div>
            <div class="columns bottom-border-thick">
                <div class="column is-9">
                    <dropdown trigger="hover">
                <a class="button nav-button">
                    <span class="heavy-font">WOMEN</span>
                </a>
                <div slot="content">
                    <menus>
                        <menu-item>
                            <span>2014</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                        <menu-item>
                            <span>2013</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                        <menu-item>
                            <span>2012</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                        <menu-item>
                            <span>2011</span>
                            <menus slot="sub" type="float">
                                <menu-item>SUMMER</menu-item>
                                <menu-item>AUTUMN</menu-item>
                                <menu-item>WINTER</menu-item>
                                <menu-item>SPRING</menu-item>
                            </menus>
                        </menu-item>
                    </menus>
                </div>
            </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">MEN</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">JUNIOR</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">ACCESSORIES</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font">COLLECTIONS</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                    <dropdown trigger="hover">
                    <a class="button nav-button">
                        <span class="heavy-font red-color">SALE</span>
                    </a>
                    <div slot="content">
                        <menus>
                            <menu-item>
                                <span>2014</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2013</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2012</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                            <menu-item>
                                <span>2011</span>
                                <menus slot="sub" type="float">
                                    <menu-item>SUMMER</menu-item>
                                    <menu-item>AUTUMN</menu-item>
                                    <menu-item>WINTER</menu-item>
                                    <menu-item>SPRING</menu-item>
                                </menus>
                            </menu-item>
                        </menus>
                    </div>
                </dropdown>
                </div>
                <div class="column is-3 align-right">
                    <dropdown trigger="hover">
                        <a class="button nav-button">
                            <span class="heavy-font">MY ACCOUNT</span>
                        </a>
                        <div slot="content">
                            <menus>
                                <menu-item icon="user" to="/">Profile</menu-item>
                                <menu-item icon="ticket">Orders</menu-item>
                                <menu-item icon="lock">Settings</menu-item>
                                <div class="divider"></div>
                                <menu-item icon="power-off">Sign out</menu-item>
                            </menus>
                        </div>
                    </dropdown>
                </div>
            </div>
            <div class="columns">
                <div class="column is-6">
                    <img src="img/Hero_Banner.png" class="hero-banner" alt="Hero Banner">
                </div>
                <div class="column is-6">
                    <div class="columns">
                        <h1>This is Vaimo Store</h1>
                    </div>
                    <div class="columns">
                        <h2>YOUR ONE-STOP FASHION DESTINATION</h2>
                    </div>
                    <div class="columns">
                        <h4>
                            Shop from over 850 of the best brands, including VAIMO's own label.  Plus, get your daily
                            fix of the freshest style, celebrity and music news.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-1">
                    <p class="strikethrough"></p>
                </div>
                <div class="column is-3">
                    <h2>OUR FAVOURITES</h2>
                </div>
                <div class="column is-8">
                    <p class="strikethrough"></p>
                </div>
            </div>
            <div class="columns">
                @foreach($products as $product)
                    <div class="column is-3-desktop">
                        <div>
                            <img src="{{$product['image']}}" class="grey-border" alt="{{$product['title']}}">
                            <h5 class="uppercase align-center product-title">
                                {{$product['title']}}
                            </h5>
                            @if (strlen($product['specialPrice']) == 0)
                                <div>
                                    <h5 class="align-center">
                                        € {{$product['price']}}
                                    </h5>
                                </div>
                            @endif
                            @if (strlen($product['specialPrice']) != 0)
                                <div>
                                    <h5 class="align-right col-2-custom strikethrough-text">
                                        € {{$product['price']}}
                                    </h5>
                                    <h5 class="align-left col-2-custom red-color">
                                        € {{$product['specialPrice']}}
                                    </h5>
                                </div>
                            @endif
                            <div class="align-center">
                                <button class="button vaimo-button">
                                    ADD TO CART
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="columns footer">
                <div class="column is-3">
                    <h3>
                        TOP CATEGORIES
                    </h3>
                    <h6>
                        WOMEN
                    </h6>
                    <h6>
                        MEN
                    </h6>
                    <h6>
                        JUNIOR
                    </h6>
                    <h6>
                        ACCESSORIES
                    </h6>
                </div>
                <div class="column is-3">
                    <h3>
                        CUSTOMER SERVICE
                    </h3>
                    <h6>
                        RETURNS
                    </h6>
                    <h6>
                        SHIPPING
                    </h6>
                    <h6>
                        ABOUT US
                    </h6>
                    <h6>
                        CONTACT US
                    </h6>
                </div>
                <div class="column is-6">
                    <h3>
                        NEWSLETTER SUBSCRIBE
                    </h3>
                    <i class="fa fa-envelope-o"></i>
                    <input class="input w-80" type="text" placeholder="Enter your email address">
                    <button class="button vaimo-button">
                        SUBSCRIBE
                    </button>
                </div>
            </div>
        </div>
        <script src="dist/app.js"></script>
    </body>
</html>