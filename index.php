<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <link href="style.css" rel="stylesheet">
    <?php
    $hour = (int)date("G");
    if (($hour >= 8) && ($hour < 20)) {
        echo '<link href="daily.css" rel="stylesheet">';
    } else {
        echo '<link href="nightly.css" rel="stylesheet">';
    }
    ?>
    <title>Title</title>
</head>
<body>


<header class="header">
    <img src="img/logo.png" class="header__logo">
    <div class="header__menu">
        <a href="#about-me">Обо мне</a>
        <a href="#news-line">Новости одной строкой</a>
        <a href="#news-tile">Новости плиткой</a>
    </div>
</header>

<main class="main">
    <section class="main__me" id="about-me">
        <div class="main__photo-container">
            <img src="img/foto.jpg" class="main__photo">
        </div>
        <div class="main__about">
            <div class="main__name">
                <h2>
                    Лиля Хакова
                </h2>
            </div>
            <div class="main__description">
                <div class="main__about-me">
                    <p>
                        Мне 32 года. По образованию я инженер-металловед,
                        закончила Магнитогорский государственный
                        технический университет им. Г.И. Носова,
                        Факультет технологий и качества,
                        очное отделение.
                        Средний бал диплома о высшем образовании 4,6.
                        После унивеситета поехала в Санкт-Петербург
                        прожила там 1 год.
                        Освоила для себя профессию менеджер отдела продаж в секторе B2B.
                        В 2015 году вернулась в Магнитогорск.
                        С 2016 года работаю в сфере
                        продаж бытовой техники от конкретного бренда.
                        На данный момент работаю специалистом по продуктовой линейки
                        от бренда Philips.
                        Работа в крупных магазинах техники.
                        В 2020 году в периуд локдауна
                        поняла для себя что весь бизнес уйдет в онлайн.
                        В 2021 году поступила в школу програмирования Факт.
                        В планах успешно её закончить и стать разработчиком.
                        Хобби мне нравиться слушать книги в аудиформате,
                        экономит время.
                        В октебре 2021 года прослушала книгу
                        Джорджа Оруэлла "1984"
                        На данный момент слушаю книгу
                        моего любимого писателя В.Пелевина
                        "Непобидимое солнце".
                        Мне нравится ютуб канал Юрия Дудя,
                        много полезной информации.
                        Считаю что главное в жизни это развитие.

                    </p>
                </div>
                <div class="main__review">
                    <p>
                        На данный момент все нравится
                    </p>
                </div>
            </div>

        </div>

    </section>

    <section class="main__news news" id="news-line">
        <div class="news__container">

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new1.jpg" alt="Generation П">
                </div>
                <div class="new__description">
                    "Generation П" Виктор Пелевин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new4.jpg" alt="День опричника">
                </div>
                <div class="new__description">
                    "День опричника" Владимир Сорокин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new2.jpg" alt="Тайные виды на гору Фудзи">
                </div>
                <div class="new__description">
                    "Тайные виды на гору Фудзи" Виктор Пелевин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new3.jpg" alt="Золотой теленок">
                </div>
                <div class="new__description">
                    "Золотой теленок" Илья Ильф и Евгений Петров
                </div>
            </div>

        </div>
    </section>

    <section class="main__news news news_second" id="news-tile">
        <div class="news__container">

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new5.jpg" alt="Ночной портье">
                </div>
                <div class="new__description">
                    "Ночной портье" Ирвин Шоу
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new6.jpg" alt="451 градус по фаренгейту">
                </div>
                <div class="new__description">
                    "451 градус по фаренгейту" Рей Брэдбери
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new7.jpg" alt= "Омон Ра">
                </div>
                <div class="new__description">
                    "Омон Ра" Виктор Пелевин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="img/new8.jpg" alt="Айфак 10">
                </div>
                <div class="new__description">
                    "Айфак 10" Виктор Пелевин
                </div>
            </div>

        </div>
    </section>


</main>

<footer>
    <div class="contacts">
        <a href="vk.com">ВКонтакте</a>
        <a href="instagram.com">Instagram</a>
        <a href="fb.com">Facebook</a>
    </div>
</footer>





</body>
</html>