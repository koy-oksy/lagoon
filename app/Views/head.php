<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KN9K7MT');
    </script>
    <!-- End Google Tag Manager -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-26276509-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-29903630-1');
    </script>
    <meta charset="UTF-8">
    <title>Sailing adventure - <?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="tags" content="<?= $tags ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('favicon.ico') ?>" />
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lightgallery.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-zoom.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/justifiedGallery@3.8.1/dist/css/justifiedGallery.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/css/lg-thumbnail.css'>


    <!-- STYLES -->

    <script type="text/javascript">
        let base_url = "<?php echo base_url(); ?>";
    </script>

    <style {csp-style-nonce}>
        /* general styles */
        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Roboto;
        }

        /* padded section */
        .pad-section {
            padding: 10px 10px;
            color: #3f71a3;
        }

        .justify-text-custom h2,
        .justify-text-custom p {
            text-align: justify;
        }

        .my-panel {
            padding: 10px;
            background-color: rgba(0, 0, 0);
            border-radius: 4px;
        }

        .lagoon {
            color: #3f71a3;
        }

        .relax h1 {
            font-size: 100px;
            color: #a4ddff;
        }

        .sail {
            -webkit-text-stroke: 2px #306d9f;
        }

        .text-color {
            color: white;
            -webkit-text-stroke: 0.5px #306d9f;
        }

        .pad-section img {
            width: 100%;
        }

        /* vertical-centered text */
        .text-vcenter {
            display: table-cell;
            text-align: center;
            vertical-align: middle;
        }

        .text-vcenter h1 {
            font-size: 4.5em;
            font-weight: 700;
            margin: 0;
            padding: 0;
        }

        /* additional sections */
        #home {
            background: url(<?php echo base_url('images/catamaran_Lagoon.jpg') ?>) no-repeat center center fixed;
            display: table;
            height: 100%;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #services {
            background-color: #306d9f;
            color: #ffffff;
        }

        #services .glyphicon {
            border: 2px solid #FFFFFF;
            border-radius: 50%;
            display: inline-block;
            font-size: 60px;
            height: 140px;
            line-height: 140px;
            text-align: center;
            vertical-align: middle;
            width: 140px;
        }

        #information {
            background: url(<?php echo base_url('images/img_5991.jpg') ?>) no-repeat center center fixed;
            display: table;
            height: 700px;
            position: relative;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #information .panel {
            opacity: 0.85;
        }

        .list-style {
            padding: 20px 0 !important;
        }

        .custom-margin {
            margin-top: 20px;
        }

        .photo-home {
            background: url (<?php echo base_url('images/photo/cabinscompany.jpg') ?>)s no-repeat center center fixed !important;
        }

        #tm-video-container {
            max-height: 400px;
            overflow: hidden;
            background-color: #333;
            margin-bottom: 90px;
            position: relative;
        }

        #tm-video {
            width: 100%;
            height: auto;
        }

        #tm-video-control-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            color: #e1e1e1;
        }

        .contact-form-success {
            display: none;
        }

        .mr-auto {
            margin-right: auto !important;
        }


        ul {
            margin: 0px;
            padding: 0px;
        }

        .footer-section {
            background: #306d9f;
            position: relative;
        }

        .footer-cta {
            border-bottom: 1px solid #373636;
        }

        .single-cta i {
            color: #ff5e14;
            font-size: 30px;
            float: left;
            margin-top: 8px;
        }

        .cta-text {
            padding-left: 15px;
            display: inline-block;
        }

        .cta-text h4 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 2px;
        }

        .cta-text span {
            color: #fff;
            font-size: 15px;
        }

        .footer-content {
            position: relative;
            z-index: 2;
        }

        .footer-pattern img {
            position: absolute;
            top: 0;
            left: 0;
            height: 330px;
            background-size: cover;
            background-position: 100% 100%;
        }

        .footer-logo {
            margin-bottom: 30px;
        }

        .footer-logo img {
            max-width: 200px;
        }

        .footer-text p {
            margin-bottom: 14px;
            font-size: 18px;
            color: #fff;
            line-height: 28px;
        }

        .footer-social-icon span {
            color: #fff;
            display: block;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-widget-heading h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 40px;
            position: relative;
        }

        .footer-widget-heading h3::before {
            position: absolute;
            left: 0;
            bottom: -15px;
            height: 2px;
            width: 50px;
            background: #ff5e14;
        }

        .footer-widget ul li {
            display: inline-block;
            margin: 10px 5px;
        }

        .myfacebook {
            margin: 10px 20px;
        }

        .footer-widget ul li a:hover {
            color: #ff5e14;
        }

        .footer-widget ul li a {
            color: #fff;
        }

        .subscribe-form {
            position: relative;
            overflow: hidden;
        }

        .subscribe-form input {
            width: 100%;
            padding: 14px 28px;
            background: #2E2E2E;
            border: 1px solid #2E2E2E;
            color: #fff;
        }

        .subscribe-form button {
            position: absolute;
            right: 0;
            background: #ff5e14;
            padding: 13px 20px;
            border: 1px solid #ff5e14;
            top: 0;
        }

        .subscribe-form button i {
            color: #fff;
            font-size: 22px;
            transform: rotate(-6deg);
        }

        .copyright-area {
            background: #202020;
            padding: 25px 0;
        }

        .copyright-text p {
            margin: 0;
            font-size: 14px;
            color: #878787;
        }

        .copyright-text p a {
            color: #ff5e14;
        }


        .heading {
            text-align: center;
            color: #454343;
            font-size: 30px;
            font-weight: 700;
            position: relative;
            margin-bottom: 70px;
            text-transform: uppercase;
            z-index: 999;
        }

        .white-heading {
            color: #ffffff;
        }

        .heading:after {
            content: ' ';
            position: absolute;
            top: 100%;
            left: 50%;
            height: 40px;
            width: 180px;
            border-radius: 4px;
            transform: translateX(-50%);
            background: url(img/heading-line.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .white-heading:after {
            background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
            background-repeat: no-repeat;
            background-position: center;
        }

        .heading span {
            font-size: 18px;
            display: block;
            font-weight: 500;
        }

        .white-heading span {
            color: #ffffff;
        }

        /*-----------service------------*/
        .service-section {
            background-image: linear-gradient(#3f71a3, #003259);
            padding-bottom: 50px;
            padding-top: 50px;
        }

        .service-section:before {
            position: absolute;
            top: -100px;
            left: 0;
            content: " ";
            background-size: 100% 100px;
            width: 100%;
            height: 100px;
            float: left;
            z-index: 99;
        }

        .service-block {
            position: relative;
            color: #fff;
        }

        .service-block .inner-box {
            position: relative;
            overflow: hidden;
        }

        .service-block .inner-box .image {
            position: relative;
        }

        .service-block .inner-box .image .read-more {
            position: absolute;
            right: 0px;
            bottom: 26px;
            left: 60%;
            color: #252525;
            font-size: 16px;
            opacity: 0;
            visibility: hidden;
            padding: 15px 25px;
            transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -webkit-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            background-color: rgba(255, 255, 255, 0.80);
        }

        .service-block .inner-box:hover .image .read-more {
            left: 40%;
            opacity: 1;
            visibility: visible;
        }

        .service-block .inner-box .image .read-more a {
            position: relative;
            color: #252525;
            font-weight: 700;
            transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -webkit-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
        }

        .service-block .inner-box .image .read-more a .icon {
            position: relative;
            top: 1px;
            margin-left: 5px;
            font-size: 16px;
            display: inline-block;
        }

        .service-block .inner-box .image .read-more a:hover {
            color: #ff5e14;
        }

        .service-block .inner-box .image img {
            position: relative;
            width: 100%;
            display: block;
        }

        .service-block .inner-box .lower-content {
            position: relative;
            padding-top: 30px;
            margin-bottom: 40px;
        }

        .service-block .inner-box .lower-content h3 {
            position: relative;
            color: #ffffff;
            font-size: 17px;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .service-block .inner-box .lower-content h3 a {
            position: relative;
            color: #ffffff;
            transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -webkit-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
        }

        .service-section .btn {
            text-align: center;
            background: #ffffff;
            color: #3e3d3d;
            padding: 13px 30px;
            display: block;
            max-width: 190px;
            margin: auto;
            border: 1px solid white;
            -webkit-transform: perspective(1px) translateZ(0);
            -moz-transform: perspective(1px) translateZ(0);
            -o-transform: perspective(1px) translateZ(0);
            transform: perspective(122px) translateZ(0);
        }

        .service-section .btn:hover {
            background: #ff5e14;
            color: #ffffff;
            border: 1px solid #ff5e14;
        }

        .service-section .btn:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #79b82d;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            border: 2px solid #79b82d;
        }

        .service-section .btn:hover:before {
            -webkit-transform: scaleX(1);
            -moz-transform: scaleX(1);
            -o-transform: scaleX(1);
            transform: scaleX(1);
        }

        .gallery-item {
            width: 200px;
            padding: 5px;
        }
    </style>


 

</head>