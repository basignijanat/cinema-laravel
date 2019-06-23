<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/public/css/swiper.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">

    <script src="/public/js/jquery-3.1.1.min.js"></script>
    <script src="/public/js/script.js"></script>


    <!-- Demo styles -->
    <style type="text/css">
        .hall{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            border-color: white;
            border-style: solid;
            border-width: 1px;

            color: red;

            margin: 5% 15%;
            padding: 2.5%;

        }
        .row{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .seat{
            display: flex;
            flex-direction: row;
            justify-content: center;

            border-color: gray;
            border-style: solid;
            border-width: 1px;

            margin: 0.25em;
            padding: 0px;

            /*height: 25px;
            width: 25px;*/

            background-color: green;
        }
        .occupied{
            background-color: darkgray;
        }
        .seat input{
            opacity: 0;
            cursor: pointer;
            width: 15px;
            background-color: blue;
            margin: 0px;
        }
        .seat input:checked{
            cursor: pointer;
        }
        .seat:hover{
            background-color: #4358d7;
        }
    </style>
</head>
<body>
<div class="wrapper">

    <header class="header">
        <figure class="logo"><a href="index.html"><img src="/public/img/logo.png" alt="Logo"></figure></a>
        <nav class="menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a>Genres</a>
                    <ul>
                        <li><a href="genre.html">Action</a></li>
                        <li><a href="genre.html">Comedy</a></li>
                        <li><a href="genre.html">Drama</a></li>
                        <li><a href="genre.html">Romance</a></li>
                    </ul>
                </li>
                <li><a>Year</a>
                    <ul>
                        <li><a href="year.html">2017</a></li>
                        <li><a href="year.html">2016</a></li>
                        <li><a href="year.html">2015</a></li>
                        <li><a href="year.html">2014</a></li>
                    </ul>
                </li>
                <li><a>Language</a>
                    <ul>
                        <li><a href="language.html">English</a></li>
                        <li><a href="language.html">German</a></li>
                    </ul>
                </li>
                <li><a href="mostwatched.html">Most Watched</a></li>
                <li class="mobsearch">
                    <form class="mobform" action="/search">
                        <input type="text" name="search" class="mobsearchfield" placeholder="Search...">
                        <input type="submit" value="" class="mobsearchsubmit">
                    </form>
                </li>
            </ul>
        </nav>
        <form class="search" action="/search">
            <input type="text" name="search" class="searchfield" placeholder="Search...">
            <input type="submit" value="" class="searchsubmit">
        </form>

        <div class="toggle"><img src="/public/img/menu.svg"></div>
    </header>

    <div class="homeslider">
        <div class="swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/public/images/slider/poster2.jpg">
                    <div class="caption">
                        <div class="captioninside">
                            <h3>Movie Title</h3>
                            <p>Lorem ipsum dolor siamet</p>
                            <a href="single.html" class="playbutton">Play</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/poster1.jpg">
                    <div class="caption">
                        <div class="captioninside">
                            <h3>Movie Title 2</h3>
                            <p>Lorem ipsum dolor siamet</p>
                            <a href="single.html" class="playbutton">Play</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/public/images/slider/poster2.jpg">
                    <div class="caption">
                        <div class="captioninside">
                            <h3>Movie Title 3</h3>
                            <p>Lorem ipsum dolor siamet</p>
                            <a href="single.html" class="playbutton">Play</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <main class="content">
        <!--div class="container"-->
            @yield('content')
        <!--/div-->
    </main>

    <footer class="footer">
        <div class="copyright"><p>Copyright &copy 2017 www.focusoncode.com</p></div>
        <div class="footermenu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="terms.html">Terms and conditions</a></li>
            </ul>
        </div>
        <div class="tags">
            <ul>
                <li>Watch Free Movies Trailers</li>
                <li>Movie Trailers</li>
                <li>English Subtitled Movies Trailers</li>
                <li>Latest Movies Trailers</li>
                <li>New Movies Trailers</li>

            </ul>
        </div>

    </footer>
    <!--   Core JS Files   -->
    <script src="/public/admin/js/core/jquery.min.js"></script>
    <script src="/public/admin/js/core/popper.min.js"></script>
    <script src="/public/admin/js/core/bootstrap.min.js"></script>
    <script src="/public/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="/public/admin/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/public/admin/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="/public/admin/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="/public/admin/demo/demo.js"></script>
    <script src="/public/admin/js/delete.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/public/admin/js/delete.js"></script>

    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });

        function toggleSeat(checkbox_id){
            if ($('#c' + checkbox_id.toString()).prop('checked')) {
                $('#s' + checkbox_id.toString()).css('background-color', 'red');
            }
            else{
                $('#s' + checkbox_id.toString()).css('background-color', 'green');
            }
        }

    </script>

</div>

</body>