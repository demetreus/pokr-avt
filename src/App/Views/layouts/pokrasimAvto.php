<!DOCTYPE html>
<html lang="ru">
<head>
    <?=$this->getMeta();?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/img/favicon.ico">


    <!-- Additional CSS libraries -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">

    <!-- Bootstrap framework -->
    <link rel="stylesheet" href="/css/bootstrap.v4.3.1/bootstrap.min.css">

    <!-- Main style file -->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<div class="container shadow-wrapper">

    <div class="row">

        <header class="container">

            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="logo">
                        <a href="#">
                            <img src="/img/logo3.png" alt="Pokrasim Avto" width="100%">
                        </a>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="phone">
                        <div class="wrapper"><span>+380(63)391-33-45</span> <i class="fas fa-phone-square"></i> <span>+380(98)950-59-80</span></div>
                    </div>
                </div>

            </div>

            <div class="row">

                <nav class="navbar navbar-expand-lg navbar-light menu__header">
                    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#menu__header" aria-controls="menu__header" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menu__header">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a href="" class="current"><i class="fas fa-home"></i> Главная</a></li>
                            <li class="nav-item active"><a href=""><i class="fas fa-dice"></i> Наши работы</a></li>
                            <li class="nav-item active"><a href=""><i class="fas fa-hand-holding-usd"></i> Услуги и цены</a></li>
                            <li class="nav-item active"><a href=""><i class="fas fa-users-cog"></i> О нас</a></li>
                            <li class="nav-item active"><a href=""><i class="fas fa-plug"></i> Контакты</a></li>
                        </ul>
                        <form action="" method="GET" class="search form-inline my-2 my-lg-0">
                            <input type="search" class="form-control mr-sm-2" placeholder="Что вы ищите?" aria-label="Поиск">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-search"></i> Найти</button>
                        </form>
                    </div>
                </nav>

            </div>

        </header>
    </div>

    <div class="row">

        <!-- / Start Content / -->
        <main class="col-sm-12 col-md-12 col-lg-8 col-xl-8">

            <?=$content;?>

        </main>
        <!-- / End Content / -->

        <aside class="col-sm-12 col-md-12 col-lg-4 col-xl-4">

            <div class="wrapper">
                <form action="" method="GET" class="search">
                    <input type="search" name="search" placeholder="Что вы ищите?">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class="wrapper">
                <nav class="menu__aside">
                    <ul>
                        <li><a href=""><i class="fas fa-angle-right"></i> Адрес нашей станции</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Гарантии на услуги</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Скидки и акции</a></li>
                        <li><a href=""><i class="fas fa-angle-right"></i> Сотрудничество</a></li>
                    </ul>
                </nav>
            </div>

            <div class="wrapper">
                <div class="widget__aside" id="reviews">
                    <h3>Отзывы клиентов</h3>
                    <div class="no-reviews">
                        <p>Отзывов пока нет<br><em>Будьте первым, кто оставит отзыв</em></p>
                    </div>
<!--                    <div class="review">-->
<!--                        <h4><i class="far fa-user-circle"></i> Иван Иванович</h4>-->
<!--                        <p>Текст комментария клиента...</p>-->
<!--                    </div>-->
<!--                    <div class="review">-->
<!--                        <h4><i class="far fa-user-circle"></i> <a href="#">Николай Николаевич</a></h4>-->
<!--                        <p>Текст комментария клиента...</p>-->
<!--                    </div>-->
                    <button type="submit" class="btn"></button>
                </div>
            </div>

            <div class="wrapper">
                <div class="widget__aside">
                    <h3>Социальные сети</h3>
                    <div class="social-networks">
                        <div class="btn__widget">
                            <a href="https://www.facebook.com/pokrasimAvto/" target="_blank"><i class="fab fa-facebook"></i></a>
                        </div>
                        <div class="btn__widget">
                            <a href="https://www.instagram.com/pokrasim.avto/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </aside>

    </div>

    <div class="row">

        <footer class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <nav class="menu__footer">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Адрес нашей станции</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Гарантии на услуги</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Карта сайта</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <nav class="menu__footer">
                        <ul>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Скидки и акции</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Сотрудничество</a></li>
                            <li><a href="#"><i class="fas fa-angle-right"></i> Персональные данные</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="logo">
                        <a href="#">
                            <img src="/img/logo4.png" alt="Pokrasim Avto" width="100%">
                        </a>
                    </div>
                </div>

                <p class="copyright">При использовании материалов с сайта, ссылка на оригинальный источник обязательна.<br><a href="#">«Покрасим Авто»</a> Все права защищены 2017 — 2019 &#169; | Создано и поддерживается: <a href="https://www.demetreus.io/" target="_blank" id="dev-ref"><i class="fas fa-moon"></i> DEMETREUS.io</a></p>

            </div>
        </footer>

    </div>

</div>

<!-- ---------------------------------------------------------------------------------->

<div class="modal fade" id="modal-window-review" tabindex="-1" role="dialog" aria-labelledby="modal-window-review-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalWindowReviewLongTitle">Оставить отзыв</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" class="feedback">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fullname">Имя и Фамилия</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Укажите ваще имя и фамилию">
                    </div>
                    <div class="form-group">
                        <label for="link">Ссылка на сайт или страницу</label>
                        <input type="text" class="form-control" id="link" aria-describedby="linkName" placeholder="Введите ссылку на ваш сайт или страницу в соц. сетях">
                        <small id="linkName" class="form-text text-muted">Поле не обязательно к заполнению.</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="text" class="form-control" id="phone" placeholder="Укажите ваш номер телефона с кодом страны">
                    </div>
                    <div class="form-group">
                        <label for="message">Ваш отзыв</label>
                        <textarea class="form-control" id="message" rows="3" aria-describedby="messageText"></textarea>
                        <small id="messageText" class="form-text text-muted">Все отзывы проверяются модератором.</small>
                    </div>
                    <div class="col-auto my-1">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing1" aria-describedby="emailHelp">
                            <label class="custom-control-label" for="customControlAutosizing1">С политикой о персональных данных ознакомлен</label>
                            <small id="emailHelp" class="form-text text-muted"><a href="#">Узнать подробнее</a> о том, как мы используем персональные данные своих клиентов</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="width: 30%;" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn" style="width: 70%;"><i class="far fa-share-square"></i> Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/javascript/jQuery/jquery-3.3.1.min.js"></script>
<script src="/javascript/bootstrap.v4.3.1/bootstrap.min.js"></script>
<script src="/javascript/popper.v1.14.7/popper.min.js"></script>
<script src="/javascript/slick.min.js"></script>
<script src="/javascript/main.js"></script>

</body>
</html>