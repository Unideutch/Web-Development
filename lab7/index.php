<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <meta charset="UTF-8">
    <title>LabWork 5</title>
</head>
<body>

    <header class="header">
        <h1 class="title">Don't <span class="marked-text">do</span> it</h1>
        <section class="header__ref-container">
            <a href="" class="header__nav-ref title">Что будет на курсе?</a>
            <a href="" class="header__nav-ref title">Вопросы</a>
            <a href="" class="header__nav-ref title">Автор</a>
            <button href="#enroll" class="header__nav-ref course-button title popup__open">
                Записаться на курс
            </button>
        </section>
    </header>

    <main>
        <div class="top">
            <section class="top__section">
                <h2 class="top__header title">
                    Не <span class="title marked-text">делай</span> это
                </h2>
                <p class="top__text text">
                    Онайлн-курс для творческих людей, о том, как управлять своим временем
                </p>
                <button href="#enroll" class="course-button title popup__open">
                    Записаться на курс
                </button>
            </section>
            <img class="top__img" src="images/ChillMan.svg" alt="" />
        </div>
        
        <div class="marked-line">

            <div class="marked-line__item">
                <img class="marked-line__item-img" src="images/Clock.svg" alt="">
                <p class="marked-line__item-text text">
                    Для тех, у кого слишком много идей и слишком мало времени
                </p>
            </div>
            <div class="marked-line__item">
                <img class="marked-line__item-img" src="images/Notebook.svg" alt="">
                <p class="marked-line__item-text text">
                    Метод "списка не дел", который позволит успевать и реализовывать
                </p>
            </div>
            <div class="marked-line__item">
                <img class="marked-line__item-img" src="images/Target.svg" alt="">
                <p class="marked-line__item-text text">
                    Курс научит творческих людей сосредоточит
                </p>
            </div>

        </div>

        <div class="block">
            <img src="images/Finances.svg" alt="" class="block__img" />
            <section>
                <h2 class="block__header title">Ты не успеешь</h2>
                <p class="block__text text">
                    Всех творческих людей объединяет одна проблема - отсутствие времени на 
                    реализацию идей.  суткам часы, рассмотрим в нашем курсе.
                </p>
            </section>
        </div>

        <div class="block">
            <section>
                <h2 class="block__header title">Опять дедлайн</h2>
                <p class="block__text text">
                    В мире, где столько всего интересного, когда же успевать жить?
                </p>
            </section>
            <img src="images/MindBlowing.svg" alt="" class="block__img" />
        </div>

        <div class="abilities">
            <h1 class="abilities__header title">
                На курсе ты <span class="marked-text title">сможешь</span>
            </h1>
            <div class="abilities__container">
                
                <div class="abilities__item">
                    <img class="abilites__item-img" src="images/Finger1.svg" alt="">
                    <p class="abilities__item-text text">
                        Понять, что нужно делать, а что делать не стоит.
                    </p>
                </div>
                <div class="abilities__item">
                    <img class="abilites__item-img" src="images/Finger2.svg" alt="">
                    <p class="abilities__item-text text">
                        Перестать себя искусственно ограничивать.
                    </p>
                </div>
                <div class="abilities__item">
                    <img class="abilites__item-img" src="images/Finger3.svg" alt="">
                    <p class="abilities__item-text text">
                        Определить сильные стороны и начать использовать слабые.
                    </p>
                </div>
                <div class="abilities__item">
                    <img class="abilites__item-img" src="images/Finger1.svg" alt="">
                    <p class="abilities__item-text text">
                        Понять, что нужно делать, а что делать не стоит.
                    </p>
                </div>
                <div class="abilities__item">
                    <img class="abilites__item-img" src="images/Finger2.svg" alt="">
                    <p class="abilities__item-text text">
                        Перестать себя искусственно ограничивать.
                    </p>
                </div>
                <div class="abilities__item">
                    <img class="abilites__item-img" src="images/Finger3.svg" alt="">
                    <p class="abilities__item-text text">
                        Определить сильные стороны и начать использовать слабые.
                    </p>
                </div>
                
            </div>
        </div>
        
    </main>
    <?php
            include 'form.php';
    ?>
    <script src="js/popup.js"></script>
    <footer class="footer">
        <p class="footer__logo title">Don't <span class="marked-text title">do</span> it</px>
    </footer>

</body>
</html>