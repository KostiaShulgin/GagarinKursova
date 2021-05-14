<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hardware Tech</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingDesktop.css') }}" >
</head>
<body>

    <div class="body-el" id="header">
        <div id="logo">
            <img src="{{ asset('images/Logo_HT_1.svg') }}">
        </div>
        <div class="header-pic" id="basket-icon">
            <img src="{{ asset('images/add-to-cart.svg') }}">
        </div>
        <div class="header-pic" id="user-icon">
            <img src="{{ asset('images/user.svg') }}">
        </div>
        <div class="header-pic" id="menu-icon">
            <img src="{{ asset('images/Menu.svg') }}">
        </div>
    </div>

    <div class="body-el" id="first-page">
        <div>
            <p class="slogan" id="top-slogan">Сучасне комп'ютерне обладнання</p>
            <p class="slogan" id="bottom-slogan">Більше 20 тисяч товарів за привабливою
                низькою ціною</p>
        </div>
    </div>

    <div class="body-el" id="second-page">
        <div class="search-el" id="cont">
            <div class="search-el" id="catalog-pic">
                <img src="{{ asset('images/dots-menu (black).svg') }}">
            </div>
            <p class="search-el" id="catalog-label">Каталог</p>
            <form class="search-el">
                <input type="text" placeholder="Пошук..." class="search-el">
                <button type="submit" class="search-el">
                    <img src="{{ asset('images/search.svg') }}" id="search-icon">
                </button>
            </form>
        </div>

    </div>

    <div class="body-el" id="third-page">
        <div class="category-label">
            <hr>
            <p>Відеокарти</p>
            <hr>
        </div>
        <div id="carousel">
           
        </div>
        <div id="more-items">

        </div>
    </div>




</body>
</html>
