<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/header.php";
?>
    <section class="main__me" id="about-me">
        <div class="main__photo-container">
            <img src="assets/img/foto.jpg" class="main__photo">
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
                        <?
                        $textAboutMe = 'Мне 32 года. По образованию я инженер-металловед, закончила Магнитогорский государственный ' .
                            'технический университет им. Г.И. Носова, Факультет технологий и качества, очное отделение. ' .
                            'Средний бал диплома о высшем образовании 4,6. После унивеситета поехала в Санкт-Петербург, ' .
                            'прожила там 1 год. Освоила для себя профессию менеджер отдела продаж в секторе B2B. В 2015 году вернулась в Магнитогорск. ' .
                            'С 2016 года работаю в сфере продаж бытовой техники от конкретного бренда. На данный момент работаю специалистом по продуктовой линейки от бренда Philips. ' .
                            'Работа в крупных магазинах техники. В 2020 году в периуд локдауна поняла для себя что весь бизнес уйдет в онлайн. В 2021 году поступила в школу програмирования Факт. ' .
                            'В планах успешно её закончить и стать разработчиком. Хобби мне нравится слушать книги в аудиформате, экономит время. ' .
                            'В октебре 2021 года прослушала книгу Джорджа Оруэлла "1984". На данный момент слушаю книгу моего любимого писателя В.Пелевина ' .
                            '"Непобидимое солнце". Мне нравится ютуб канал Юрия Дудя, много полезной информации. Считаю, что главное в жизни это развитие.'
                        ;
                        echo beautyParagraphAboutMe($textAboutMe);
                        ?>
                    </p>
                </div>
                <div class="main__review">
                    <p>
                        <?
                        $textReview = 'На данный момент все нравится.';
                        echo beautyParagraphMainReview($textReview);
                        ?>
                    </p>
                </div>
            </div>

        </div>

    </section>

    <section class="main__news news" id="news-line">
        <div class="news__container">

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new1.jpg" alt="Generation П">
                </div>
                <div class="new__description">
                    "Generation П" Виктор Пелевин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new4.jpg" alt="День опричника">
                </div>
                <div class="new__description">
                    "День опричника" Владимир Сорокин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new2.jpg" alt="Тайные виды на гору Фудзи">
                </div>
                <div class="new__description">
                    "Тайные виды на гору Фудзи" Виктор Пелевин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new3.jpg" alt="Золотой теленок">
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
                    <img src="assets/img/new5.jpg" alt="Ночной портье">
                </div>
                <div class="new__description">
                    "Ночной портье" Ирвин Шоу
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new6.jpg" alt="451 градус по фаренгейту">
                </div>
                <div class="new__description">
                    "451 градус по фаренгейту" Рей Брэдбери
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new7.jpg" alt= "Омон Ра">
                </div>
                <div class="new__description">
                    "Омон Ра" Виктор Пелевин
                </div>
            </div>

            <div class="news__item new">
                <div class="new__picture">
                    <img src="assets/img/new8.jpg" alt="Айфак 10">
                </div>
                <div class="new__description">
                    "Айфак 10" Виктор Пелевин
                </div>
            </div>

        </div>

        <div id="vowel-symbol"></div>
        <div id="words"></div>

        <div>
            <form action="index.php" method="GET">
                <p>Введите дату в следующем формате: 15.11.1990</p>
                <label for="birthday">Дата рождения: </label>
                <input type="text" name="birthday" id="birthday">
                <button type="submit">Посчитать</button>
            </form>

            <?
            if (!empty($_GET['birthday'])) {
                echo getIntervalByBirthday($_GET['birthday']);
            }
            ?>
        </div>

    </section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/footer.php";
?>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let vowelSymbols = getCountVowelSymbols();
        document.querySelector('#vowel-symbol').innerHTML = 'Количество гласных на странице: ' + vowelSymbols;

        let words = getCountWords();
        document.querySelector('#words').innerHTML = 'Количество слов на странице: ' + words;
    });
</script>
