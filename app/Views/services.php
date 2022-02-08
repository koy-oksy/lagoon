<!DOCTYPE html>
<html lang="en">
<?= view('head', $meta) ?>

<body>
    <?= view('menu') ?>

    <section class="service-section">
        <div class="container">
            <div class="heading white-heading">
                <p>Наши услуги</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="#"><img src="<?php echo base_url('images/devichnik-na-yakhte-v-kieve.jpg') ?>" alt="" /></a>
                                
                            </div>
                            <div class="lower-content">
                                <h3><a href="https://www.instagram.com/arenda_lagoon_kiev/">Девичник на Lagoon380</a></h3>
                                <div class="text">Девичник на lagoon 380 – торжество, которое запомнится навсегда.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="#"><img src="<?php echo base_url('images/catamaran_wedding.jpg') ?>" alt="" /></a>
                                
                            </div>
                            <div class="lower-content">
                                <h3><a href="https://www.instagram.com/arenda_lagoon_kiev/">Свадьба на катамаране</a></h3>
                                <div class="text">Свадьба вместе с Sailing adventure.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="#"><img src="<?php echo base_url('images/birthday_on_a_catamaran.jpg') ?>" alt="" /></a>
                                
                            </div>
                            <div class="lower-content">
                                <h3><a href="https://www.instagram.com/arenda_lagoon_kiev/">День Рождения</a></h3>
                                <div class="text">День Рождения на катамаране – идеальный праздник.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href=""><img src="<?php echo base_url('images/dinner_catamaran.jpg') ?>" alt="" /></a>
                                
                            </div>
                            <div class="lower-content">
                                <h3><a href="https://www.instagram.com/arenda_lagoon_kiev/">Закат на катамаране</a></h3>
                                <div class="text">Что может быть лучше заката летом.</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image">
                                <a href="#"><img src="<?php echo base_url('images/photosession_on_a_catamaran.jpg') ?>" alt="" /></a>
                                
                            </div>
                            <div class="lower-content">
                                <h3><a href="https://www.instagram.com/arenda_lagoon_kiev/">Фотосессия на катамаране</a></h3>
                                <div class="text">Фотосессия на шикарном катамаране это возможно!</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <?= view('footer') ?>
</body>

</html>