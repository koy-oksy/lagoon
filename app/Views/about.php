<!DOCTYPE html>
<html lang="en">
<?= view('head', $meta) ?>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KN9K7MT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?= view('menu') ?>

    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video" style=" height: 720px; margin-left: 0px; margin-top: -160px;">
            <source src="<?php echo base_url('video/ocean-sea-wave-video.mp4') ?>" />
        </video>
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>

    <!-- first section - Home -->
    <div id="home" class="home">
        <div class="text-vcenter">
            <h1 class="text-white  sail">Sailing adventure</h1>
            <h2 class="text-color">Аренда катамарана Lagoon 380 в Киеве</h2>
        </div>
    </div>

    <!-- second section - About -->
    <div id="about" class="pad-section">
        <div class="container justify-text-custom">
            <div class="row">
                <div class="col-sm-6 ">
                    <h2>Не знаете, как провести время в выходной или отпраздновать важное событие в жизни?</h2>
                    <p class="lead"> Аренда катамарана в Киеве с нами – это шанс получить незабываемые эмоции, насладиться потрясающими видами, ощутить единение с природой и отдохнуть от городского шума и суеты.</p>
                </div>
                <div class="col-sm-6 relax">
                    <h1 class="text-uppercase display-1 text-center"> Time to relax </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /second section -->

    <!-- third section - Services -->
    <div id="services" class="pad-section">
        <div class="container">
            <h2 class="text-center">Характеристики Lagoon 380</h2>
            <hr />
            <div class="row text-center list-style">
                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item">Характеристики</li>
                        <li class="list-group-item list-group-item-primary">Длина: 11.55 м. Ширина: 6.53 м. Осадка: 1.15 м.</li>
                        <li class="list-group-item list-group-item-primary">Максимальная скорость: 10 км/час.</li>
                        <li class="list-group-item list-group-item-primary">Двигатель: 2 x 18 л.с.</li>
                        <li class="list-group-item list-group-item-primary">Водоизмещение: 7120 кг</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item">Оборудование</li>
                        <li class="list-group-item list-group-item-primary">Кухня с газовой плитой и холодильником</li>
                        <li class="list-group-item list-group-item-primary">Мангал и шампура для пикника на берегу</li>
                        <li class="list-group-item list-group-item-primary">Музыкальное оборудование</li>
                        <li class="list-group-item list-group-item-primary">Розетка 220v</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-group">
                        <li class="list-group-item">На судне</li>
                        <li class="list-group-item list-group-item-primary">Просторная полуоткрытая летняя площадка в задней части судна</li>
                        <li class="list-group-item list-group-item-primary">Большая открытая площадка с сеткой в передней части для загара</li>
                        <li class="list-group-item list-group-item-primary">Каюта для отдыха</li>
                        <li class="list-group-item list-group-item-primary">Каюта для вещей</li>
                        <li class="list-group-item list-group-item-primary">Душ в кокпите</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /third section -->
    <div id class="lagoon">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead justify-text-custom">Парусно-моторный круизный катамаран Lagoon-380, выпущенный французской верфью Lagoon. Быстрый, лёгкий, маневренный и безопасный катамаран подарит комфортный отдых на воде и полное наслаждение от прогулки.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth section - Information -->
    <div id="information" class="pad-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default my-panel">
                        <div class="panel-body lead text-white justify-text-custom">
                            <p>VIP Катамаран Lagoon- идеальный вариант для речных прогулок по Днепру.</p>
                            <p> Большое пространство на палубе даст Вам возможность чувствовать себя свободно и отправиться в путешествие со своими друзьями, семьей, коллегами.</p>
                            <p>На катамаране Lagoon можно отметить девичник, день рождения, провести корпоратив, светскую вечеринку, устроить романтическое свидание, свадебную прогулку, веселые встречи с друзьями или же настоящую фотосессию.</p>
                            <p> Так же можно арендовать наше судно для отработки навыков управления парусным катамараном, отработать основные техники: отход-подход кормой, лагом, постановка паруса... .</p>
                            <p> Наша команда, с удовольствием, порекомендует наиболее подходящий маршрут для Вашей прогулки, создаст атмосферу комфорта и хорошее настроение всем гостям.</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default my-panel">
                        <div class="panel-heading">
                            <h2 class="panel-title text-white">Цена аренды</h2>
                        </div>
                        <div class="panel-body lead text-white">
                            <p>4000 грн/час — миним. заказ — 2 часа (понедельник-четверг);</p>
                            <p>4500 грн/час - миним. заказ — 2 часа (пятница, суббота,воскресенье и будни с 18:00 - 22:00);</p>
                            <p>Дополнительно оплачивается подача яхты в яхт-клуб "Ривьера" с охраняемой автостоянкой, посадка и высадка гостей - 50 грн за одного человека.</p>
                        </div>
                    </div>

                    <div class="my-panel custom-margin">
                        <div class="panel-body lead contact-form-handler">
                            <form id="form-submit">
                                <div class="form-group mb-3">
                                    <label for="firstname" class="text-white">Ваше имя</label>
                                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Имя" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone" class="text-white">Телефон для связи</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="XXX-XXX-XX-XX" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Перезвоните мне</button>
                            </form>
                        </div>
                        <div class="panel-body lead contact-form-success text-white">
                            <h3><span id="success-firstname"></span>, спасибо за заявку, мы перезвоним вам в течении нескольких минут.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <?= view('footer') ?>
</body>

</html>