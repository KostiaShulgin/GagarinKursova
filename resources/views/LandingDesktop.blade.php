<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hardware Tech</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingDesktop.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Сarousel.css') }}" >
    <script>
        /* Устанавливаем индекс слайда по умолчанию */
        let slideIndex = 1;
        showSlides(slideIndex);

        /* Увеличиваем индекс на 1 — показываем следующий слайд*/
        function nextSlide() {
            showSlides(slideIndex += 1);
        }

        /* Уменьшает индекс на 1 — показываем предыдущий слайд*/
        function previousSlide() {
            showSlides(slideIndex -= 1);
        }

        /* Устанавливаем текущий слайд */
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        /* Функция перелистывания */
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("item");

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

            /* Проходим по каждому слайду в цикле for */
            for (let slide of slides) {
                slide.style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>
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
        <!-- Основной блок слайдера -->
        <div class="slider">

            <!-- Первый слайд -->
            <div class="item">
                <img src="https://s3.tproger.ru/uploads/2020/07/field.jpg">
            </div>

            <!-- Второй слайд -->
            <div class="item">
                <img src="https://s3.tproger.ru/uploads/2020/07/rose.jpg">
            </div>

            <!-- Третий слайд -->
            <div class="item">
                <img src="https://s3.tproger.ru/uploads/2020/07/leaf.jpg">
            </div>

            <!-- Кнопки-стрелочки -->
            <a class="previous" onclick="previousSlide()">&#10094;</a>
            <a class="next" onclick="nextSlide()">&#10095;</a>
        </div>
        <div id="more-items">

        </div>
    </div>




</body>
</html>
