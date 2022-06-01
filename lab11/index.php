<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don't do it!</title>
</head>
<body class="none-padding">

    <header>
        <div class="header">
            <img class="header_logo" src="images/Don`t do it.svg" alt="Don't do it">
            <p><a href="/" class="link">Что будет на курсе?</a></p>
            <p><a href="/" class="link">Вопросы</a></p>
            <p><a href="/" class="link">Автор</a></p>
            <button class='button popup__open' >Записаться на курс</button>
        </div>
    </header>

    <main>
        <div class="top">
            <div class="top__text">
                <h1 class="top__title">
                    Не <span class="span">делай</span> это
                </h1>
                <p class="top__description">
                    Онлайн-курс для творческих людей, о том, как управлять своим временем
                </p>
                <button class="button button_main popup__open">Записаться на курс</button>
            </div>
            <img class="chillman" src="images/ChillMan.svg" alt="Relax, pale, just relax" />
        </div>

        <div class="main__line">
            <div class="line__inside">
                <img class="small__image" src="images/Time.svg" alt="What's the time?" />
                <p class="line__text">
                    Для тех, у кого слишком много идей и слишком мало времени
                </p>
            </div>
            <div class="line__inside">
                <img class="small__image" src="images/notebook.svg" alt="What did you write?" />
                <p class="line__text">
                    Метод «списка не дел», который позволит успевать и реализовывать
                </p>
            </div>
            <div class="line__inside">
                <img class="small__image" src="images/target.svg" alt="What's your target?" />
                <p class="line__text">
                    Курс научит творческих людей сосредоточиваться
                </p>
            </div>
        </div>

        <div class="normal">
            <img class="finanses" src="images/Finances.svg" alt="Finances" />
            <div class="normal__text">
                <h2 class="normal__title">
                    Ты не успеешь
                </h2>
                <p class="normal__description">
                    Всех творческих людей объединяет одна проблема - отсутствие времени на реализацию идей. Как прибавить суткам часы, рассмотрим в нашем курсе.
                </p>
            </div>
        </div>

        <div class="reverse">
            <img class="mind-blowing" src="images/Mind Blowing.svg" alt="Mind Blowing" />
            <div class="reverse__text">
                <h2 class="reverse__title">
                    Опять дедлайн
                </h2>
                <p class="reverse__description">
                    В мире, где столько всего интересного, когда же успевать жить?
                </p>
            </div>
        </div>

        <div class="boxes">
            <h1 class="presentation">
                На курсе ты <span class="span">сможешь</span>
            </h1>

            <div class="all-squares">
                <div class="three-square">
                   <div class="square">
                        <img class="fingers" src="images/onefinger.svg" alt="" />
                        <p class="square__text">
                           Понять, что нужно делать, а что делать не стоит.
                        </p>
                   </div>
                   <div class="square">
                     <img class="fingers" src="images/twofinger.svg" alt="" />
                      <p class="square__text">
                           Перестать себя искусственно ограничивать.
                       </p>
                   </div>
                   <div class="square">
                       <img class="fingers" src="images/threefinger.svg" alt="" />
                       <p class="square__text">
                            Определить сильные стороны и начать использовать слабые.
                        </p>
                   </div>
                </div>
                <div class="three-square">
                    <div class="square">
                        <img class="fingers" src="images/fourfinger.svg" alt="" />
                        <p class="square__text">
                            Научиться достигать любой цели в 3 понятных шага.
                        </p>
                    </div>
                    <div class="square">
                        <img class="fingers" src="images/sixfinger.svg" alt="" />
                        <p class="square__text">
                            Сотрудничать эффективно и с правильными людьми.
                        </p>
                    </div>
                    <div class="square">
                        <img class="fingers" src="images/fivefinger.svg" alt="" />
                        <p class="square__text">
                            Оптимизировать общение с клиентами и проведение совещаний.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'form.php';
        ?>
        <script src="js/popup.js"></script>
    </main>

    <footer class="footer">
        <div class="ending__line">
            <img class="ending__logo popup__open" src="images/Don`t do it white.svg" alt="" />
        </div>   
    </footer>
</body>
</html>