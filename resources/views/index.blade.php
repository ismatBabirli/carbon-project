<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make Earth Cool Again</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="custom.css">


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Make Earth Cool Again</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
             data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left"
                 data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Save <br>Our World</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find best eco way for your trip</p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section justify-content-end ftco-search">
    <div class="container-wrap ml-auto">
        <div class="row no-gutters">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                       aria-controls="v-pills-1" aria-selected="true">Your Route</a>

                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content p-4 px-5" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                         aria-labelledby="v-pills-nextgen-tab">
                        <div class="search-destination">
                            @method('post')
                            <div class="row">
                                <div class="col-md-4 align-items-end">
                                    <div class="form-group">
                                        <label for="#">From</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-my_location"></span></div>
                                            <input type="text" id="from_input" class="form-control" placeholder="From">
                                            <input type="hidden" id="from_lat">
                                            <input type="hidden" id="from_long">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>

                                <div class="col-md-4 align-items-end">
                                    <div class="form-group">
                                        <label for="#">Where</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                            <input id="to_input" type="text" class="form-control" placeholder="Where">
                                            <input type="hidden" id="to_lat">
                                            <input type="hidden" id="to_long">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-2 align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" onclick="getResult()"
                                                   class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section" id="main_section" style="display:none">

    <div id="all_cars">
        <div class="car_holder">
            <div class="car_div">
                <span id="smoke_value" class="smoke_value">0</span>
                <img src="icons/smoke_icon.png" alt="" width="100px" height="100px" class="smoke_icons">
                <img src="icons/car_icon.png" alt="" width="100px" height="100px" class="cars_icons">
            </div>
            <span class="car_names">&nbsp;&nbsp;Gasoline Car</span>
        </div>

        <div class="car_holder">
            <div class="car_div">
                <span id="smoke_value" class="smoke_value">0</span>
                <img src="icons/smoke_icon.png" alt="" width="100px" height="100x" class="smoke_icons">
                <img src="icons/car_icon.png" alt="" width="100px" height="100px" class="cars_icons">
            </div>
            <span class="car_names">&nbsp;&nbsp;Hybrid Car</span>
        </div>

        <div class="car_holder">
            <div class="car_div">
                <span id="smoke_value" class="smoke_value">0</span>
                <img src="icons/smoke_icon.png" alt="" width="100px" height="100px" class="smoke_icons">
                <img src="icons/car_icon.png" alt="" width="100px" height="100px" class="cars_icons">
            </div>
            <span class="car_names">&nbsp;&nbsp;Electric Car</span>
        </div>


        <div class="car_holder">
            <div class="car_div">
                <span id="smoke_value" class="smoke_value">0</span>
                <img src="icons/smoke_icon.png" alt="" width="100px" height="100px" class="smoke_icons">
                <img src="icons/bus_icon.png" alt="" width="100px" height="100px" class="cars_icons">
            </div>
            <span class="car_names">&nbsp;&nbsp;Bus</span>
        </div>


        <div class="car_holder">
            <div class="car_div" id="car_div">
                <span id="smoke_value" class="smoke_value">0</span>
                <img src="icons/smoke_icon.png" alt="" width="100px" height="100px" class="smoke_icons">
                <img src="icons/plane_icon.png" alt="" width="100px" height="100px" class="cars_icons">
            </div>
            <span class="car_names">&nbsp;&nbsp;Plane</span>
        </div>

        <div class="car_holder">
            <div class="car_div">
                <span id="smoke_value" class="smoke_value">0</span>
                <img src="icons/smoke_icon.png" alt="" width="100px" height="100px" class="smoke_icons">
                <img src="icons/train_icon.png" alt="" width="100px" height="100px" class="cars_icons">
            </div>
            <span class="car_names">&nbsp;&nbsp;Train</span>
        </div>
    </div>

</section>


<section id="section_image" class="ftco-section">
    <div class="container lake"  id="images" style="display:none;">
        <span class="quote-main">Don't you want to prevent this?</span>
        <img id="image_1" width="99%" height="99%" src="images/lake/lake1.jpeg">
        <img id="image_2" style="position: absolute;left: 0; top: 5%" width="99%" height="99%"
             src="images/lake/lake2.jpeg">
    </div>

</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Adventure</h2>
                    <p>MECA: Make Earth Cool Again.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">About Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li><a href="#"><span class="icon icon-phone"></span><span
                                        class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@meca.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | <a
                        href="http://localhost:2000" target="_blank">MECA</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpI4lx0aaCqHoCSUsngMRUKlCD0yMOEVc&amp;libraries=places"></script>

<script>
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('from_input');
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.addListener('place_changed', function () {
            var place = autocomplete.getPlace();
            // place variable will have all the information you are looking for.
            $('#from_lat').val(place.geometry['location'].lat());
            $('#from_long').val(place.geometry['location'].lng());
        });

        var input2 = document.getElementById('to_input');
        var autocomplete2 = new google.maps.places.Autocomplete(input2);
        autocomplete2.addListener('place_changed', function () {
            var place = autocomplete2.getPlace();
            // place variable will have all the information you are looking for.
            $('#to_lat').val(place.geometry['location'].lat());
            $('#to_long').val(place.geometry['location'].lng());
        });
    }


</script>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>

<script>
    function getResult() {
        let fromLat = document.getElementById('from_lat').value;
        let fromLong = document.getElementById('from_long').value;

        let toLat = document.getElementById('to_lat').value;
        let toLong = document.getElementById('to_long').value;
        let URL = "http://localhost:2000/api/distance";
        let data = {
            'fromLat': fromLat,
            "fromLong": fromLong,
            'toLat': toLat,
            'toLong': toLong,
        };

        let values = document.querySelectorAll('#smoke_value');
        let main_div = document.getElementById('main_section');
        console.log('values', values);

        $.post(URL,
            data,
            function (data, status, xhr) {
                data.forEach(function (object, key) {
                    values[key].innerHTML = object.value;
                });
                main_div.style.display = "";
                smoothScroll("main_section");
                let x = document.getElementById("car_div");
                x.addEventListener("animationend", imageProcess);
            },
            'json');
    }


    function imageProcess() {
        document.getElementById('images').style.display = '';
        smoothScroll("section_image")
    }


    function smoothScroll(eID) {
        var startY = currentYPosition();
        var stopY = elmYPosition(eID);
        var distance = stopY > startY ? stopY - startY : startY - stopY;
        if (distance < 100) {
            scrollTo(0, stopY);
            return;
        }
        var speed = Math.round(distance / 12);
        if (speed >= 20) speed = 20;
        var step = Math.round(distance / 25);
        var leapY = stopY > startY ? startY + step : startY - step;
        var timer = 0;
        if (stopY > startY) {
            for (var i = startY; i < stopY; i += step) {
                setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
                leapY += step;
                if (leapY > stopY) leapY = stopY;
                timer++;
            }
            return;
        }
        for (var i = startY; i > stopY; i -= step) {
            setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
            leapY -= step;
            if (leapY < stopY) leapY = stopY;
            timer++;
        }
    }

    function elmYPosition(eID) {
        var elm = document.getElementById(eID);
        var y = elm.offsetTop;
        var node = elm;
        while (node.offsetParent && node.offsetParent != document.body) {
            node = node.offsetParent;
            y += node.offsetTop;
        }
        return y;
    }

    function currentYPosition() {
        // Firefox, Chrome, Opera, Safari
        if (self.pageYOffset) return self.pageYOffset;
        // Internet Explorer 6 - standards mode
        if (document.documentElement && document.documentElement.scrollTop)
            return document.documentElement.scrollTop;
        // Internet Explorer 6, 7 and 8
        if (document.body.scrollTop) return document.body.scrollTop;
        return 0;
    }


</script>
</body>
</html>
