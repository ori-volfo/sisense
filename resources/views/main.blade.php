<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        @include('navbar')

        <div class="main">
            <div class="background">
                <img src="../images/layer_1.png">
            </div>
            <div class="content">
                <div class="top">
                    <div class="head">
                        <h1><span class="color">Agile BI</span> for everyone</h1>
                    </div>
                    <div class="promo-items container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 item">
                                <img src="../images/readicl_innovation_icon.png">
                                <h3>Radical <div class="strong">Innovation</div></h3>
                            </div>
                            <div class="col-xs-12 col-sm-4 item">
                                <img src="../images/instant_impact_icon.png">
                                <h3>Instant <div class="strong">Impact</div></h3>
                            </div>
                            <div class="col-xs-12 col-sm-4 item">
                                <img src="../images/CS_icon.png">
                                <h3>Obsessed with <div class="strong">Customer Success</div></h3>
                            </div>
                        </div>
                        <div class="promo-text">
                            Data is complex, but getting the answers you need shouldn’t be. Insights should be instantly accessible to everyone, everywhere regardless of their technical ability. Sisense simplifies every step of the analytics process – from data preparation to discovery of insights.
                        </div>
                        <div class="promo-button">
                            <button class="btn">
                                Watch Demo
                            </button>
                        </div>
                    </div>
                    <div class="divide-triangle"></div>
                </div>

                <div class="bottom">

                    <div class="head">
                        <h2 class="vertical">What makes<div>us different</div></h2>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 item">
                                <h3>Radically <strong>Innovative</strong> Technology</h3>
                                <p class="text">
                                    If you want to outpace the competition, you’ll need a partner that’s as progressive as you are. From our core In-Chip&trade; technology to how we’ve built IoT, machine learning, and AI into our cutting edge BI platform, Sisense is leading innovation in the agile business analytics market. Every innovation is designed to help business users easily and quickly get the answers they need from complex data.
                                </p>
                                <button class="text btn">Learn About Sisense BI Technology</button>
                            </div>
                            <div class="col-xs-12 col-sm-6 item">
                                    <img class="video-image" src="../images/image.png">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>

            </div>
        </div>
        @include('footer')

        <!-- Lightbox modal  -->
        @include('registration-form')

    </body>
</html>
