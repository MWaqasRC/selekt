<?php $page = 'store'; ?>

<?php include('header.php'); ?>

<!-- <div class="store-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="global-img-section">
                    <div class="map-img1">
                        <ol class="gradient-list">
                            <div>
                                <li><a target="_blank" href="https://goo.gl/maps/xpe5vnnT3xrVXDhp9">15-17 Station Road, Edgware, HA8 7JE</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/XXBh6X7qHPqrknjv8">349 North End Road, London, SW6 1NN</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/ko5ue8vP2rrk2k7C9">26 St. Johns Way Corringham, Stanford-Le-Hope Essex, SS17 7LJ</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/FiAsrac8oJpx55kY6">22 Cippenham Lane Slough, Berkshire, SL1 5BS</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/HzKULLDhxr1vMQmd6">16 Urnpike Lane, London, N8 0PT</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/BBTREZVyb7GT8VW88">77 Kingsley Road.</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/bRtr66XnB7L6uHfNA">110 High Street Harlesden, London, NW10 4SL </a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/whmRKdMQ5A9c67ReA">201 Cricklewood Broadway, London, NW2 3HS</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/BZScaRsEbXo2cHQH7">50 High Street, Southall Middelsex, UB1 3DB</a></li>
                            </div>
                            <div class="right-gra">
                                <li><a target="_blank" href="https://goo.gl/maps/mmwy4yop7zvrbJWv8">122 Uxbridge Road, London, W12 8AA</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/c1ktZLWU99rx5nU66">50 Broadway West Ealing, London W13 0SU</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/eK7AZfgbnwSeLpC78">28 Highland Drive Broughton, Milton Keynes, MK10 7EA</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/7n8uY7PGbeYP434c6">93 London, UK NW10 1BD0</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/xN4ZjBYTKwGF8vsv6">70 Vicarage Farm Road, Hounslow Middlesex, TW5 0AB</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/kYvpw8voZJhbmFJr5">20 Glentworth Road West, Morecambe Lancashire, LA4 4SZ</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/9fCZ8QAyaWCkxu9g9">1 Towcester Road, Milton Keynes Buckinghamshire, MK19 6AN</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/9zTboULCLcWz6Ygx8">7 Station Road Harrow, Middlesex, HA1 2UF</a></li>
                                <li><a target="_blank" href="https://goo.gl/maps/CtitVRNVSGUzPA92A">272-274 Ealing Road, Alperton Middlesex, HA0 4LL</a></li>
                            </div>
                        </ol>
                        <video muted id="video1">
                            <source src="images/1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="map-img2">
                        <ol class="gradient-list">
                            <div>
                                <li><a target="_blank" href="https://goo.gl/maps/Tm6z1rfvmyNwtjdN6">Corso Lodi, Milano, 9,020,139</a></li>
                            </div>
                        </ol>
                        <video muted id="video2">
                            <source src="images/2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="map-img3">
                        <ol class="gradient-list">
                            <div></div>
                        </ol>
                        <video muted id="video3">
                            <source src="images/3.mp4" type="video/mp4">
                        </video>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 mt-5 text-center">
            <div class="screen1" id="country1">
                <div class="border-circle">
                    <img src="images/uk.png" alt="" class="img-fluid">
                </div>
                <div class="screen-txt">UK</div>
            </div>
            <div class="single-border"></div>
            <div class="screen1" id="country2">
                <div class="border-circle">
                    <img src="images/italy.png" alt="" class="img-fluid">
                </div>
                <div class="screen-txt">Itlay</div>
            </div>
            <div class="single-border"></div>
            <div class="screen1" id="country3">
                <div class="border-circle border-circle2">
                    <img src="images/pakistan.png" alt="" class="img-fluid">
                </div>
                <div class="screen-txt screen-txt2">Pakistan</div>
            </div>
        </div>
    </div>
</div> -->

<div id="store-location">
    <div class="container">
        <div class="mx-auto" id="img-container">
            <img src="img/logo.png" class="img mx-auto d-block top-img" id="store-logo" alt="logo">
            <img src="img/plane.png" class="img mx-auto d-block top-img" id="air-plane" alt="plane">
            <div id="pin-container">
                <div id="pin-test"></div>
                <img src="img/pin.png" class="img" id="pin" alt="pin">
            </div>
        </div>

        <div class="col-lg-6 col-md-12 mx-auto my-5 text-center" id="list-country">
            <div class="screen1" id="country1">
                <div class="border-circle">
                    <img src="images/uk.png" alt="" class="img">
                </div>
                <div class="screen-txt">UK</div>
            </div>

            <div class="single-border"></div>
            <div class="screen1" id="country2">
                <div class="border-circle">
                    <img src="images/italy.png" alt="" class="img">
                </div>
                <div class="screen-txt">Itlay</div>
            </div>

            <div class="single-border"></div>
            <div class="screen1" id="country3">
                <div class="border-circle">
                    <img src="images/pakistan.png" alt="" class="img">
                </div>
                <div class="screen-txt screen-txt2">Pakistan</div>
            </div>
        </div>

        <ol class="gradient-list location-list" id="list-1">
            <div>
                <li><a target="_blank" href="https://goo.gl/maps/xpe5vnnT3xrVXDhp9">
                        15-17 Station Road, Edgware, HA8 7JE</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/XXBh6X7qHPqrknjv8">
                        349 North End Road, London, SW6 1NN</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/ko5ue8vP2rrk2k7C9">
                        26 St. Johns Way Corringham, Stanford-Le-Hope Essex, SS17 7LJ</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/FiAsrac8oJpx55kY6">
                        22 Cippenham Lane Slough, Berkshire, SL1 5BS</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/HzKULLDhxr1vMQmd6">
                        16 Urnpike Lane, London, N8 0PT</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/BBTREZVyb7GT8VW88">
                        77 Kingsley Road.</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/bRtr66XnB7L6uHfNA">
                        110 High Street Harlesden, London, NW10 4SL </a></li>

                <li><a target="_blank" href="https://goo.gl/maps/whmRKdMQ5A9c67ReA">
                        201 Cricklewood Broadway, London, NW2 3HS</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/BZScaRsEbXo2cHQH7">
                        50 High Street, Southall Middelsex, UB1 3DB</a></li>
            </div>

            <div>
                <li><a target="_blank" href="https://goo.gl/maps/mmwy4yop7zvrbJWv8">
                        122 Uxbridge Road, London, W12 8AA</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/c1ktZLWU99rx5nU66">
                        50 Broadway West Ealing, London W13 0SU</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/eK7AZfgbnwSeLpC78">
                        28 Highland Drive Broughton, Milton Keynes, MK10 7EA</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/7n8uY7PGbeYP434c6">
                        93 London, UK NW10 1BD0</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/xN4ZjBYTKwGF8vsv6">
                        70 Vicarage Farm Road, Hounslow Middlesex, TW5 0AB</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/kYvpw8voZJhbmFJr5">
                        20 Glentworth Road West, Morecambe Lancashire, LA4 4SZ</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/9fCZ8QAyaWCkxu9g9">
                        1 Towcester Road, Milton Keynes Buckinghamshire, MK19 6AN</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/9zTboULCLcWz6Ygx8">
                        7 Station Road Harrow, Middlesex, HA1 2UF</a></li>

                <li><a target="_blank" href="https://goo.gl/maps/CtitVRNVSGUzPA92A">
                        272-274 Ealing Road, Alperton Middlesex, HA0 4LL</a></li>
            </div>
        </ol>

        <ol class="gradient-list location-list" id="list-2">
            <div>
                <li><a target="_blank" href="https://goo.gl/maps/Tm6z1rfvmyNwtjdN6"> Corso Lodi, Milano, 9,020,139</a></li>
            </div>
        </ol>

        <ol class="gradient-list location-list" id="list-3">
            <div>
                <li><a target="_blank" href="javascript:void(0)">no record found </a></li>
            </div>
        </ol>
    </div>
</div>

<div class="sec-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6  wow fadeInLeft">
                <div class="sec-3-inner vertical-center">
                    <h3><span>We care about you</span>Coronavirus (Covid-19)</h3>
                    <img src="images/covd.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6  wow fadeInRight">
                <div class="sec-3-inner sec-3-inner-2 vertical-center">
                    <h3><span>Social Media</span>Join Our Community</h3>
                    <p>
                        <a target="_blank" href="#"><img src="images/join-fb.png" alt="" class="img-fluid"></a>
                        <a target="_blank" href="#"><img src="images/join-insta.png" alt="" class="img-fluid"></a>
                        <a target="_blank" href="#"><img src="images/join-utube.png" alt="" class="img-fluid"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>