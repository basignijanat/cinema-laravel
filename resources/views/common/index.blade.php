@extends('layouts.app')

@section('title', 'Page Title')

@section('content')

        <!-- Swiper -->

            <section class="panel">
                <h2>Recently Added</h2>
                <div class="recentslider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/9.jpg"><h3 class="hometitle">Space Betwen Us</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/2.jpg"><h3 class="hometitle">John Wick</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/3.jpg"><h3 class="hometitle">Spider-Man Homecoming</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/4.jpg"><h3 class="hometitle">Beauty and the Beast</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/5.jpg"><h3 class="hometitle">Pirates of the Caribbean: Dead Men Tell No Tales</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/6.jpg"><h3 class="hometitle">Fifty Shades Darker</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/7.jpg"><h3 class="hometitle">Transformers: The Last Knight</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/8.jpg"><h3 class="hometitle">xXx: Return of Xander Cage</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/9.jpg"><h3 class="hometitle">Space Betwen Us</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/2.jpg"><h3 class="hometitle">John Wick</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/3.jpg"><h3 class="hometitle">Spider-Man Homecoming</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/4.jpg"><h3 class="hometitle">Beauty and the Beast</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/5.jpg"><h3 class="hometitle">Pirates of the Caribbean: Dead Men Tell No Tales</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/6.jpg"><h3 class="hometitle">Fifty Shades Darker</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/7.jpg"><h3 class="hometitle">Transformers: The Last Knight</h3></a></div>
                            <div class="swiper-slide"><a href="single.html"><img src="/public/images/8.jpg"><h3 class="hometitle">xXx: Return of Xander Cage</h3></a></div>

                            <div class="swiper-slide"><a href="mostwatched.html"><img src="/public/img/others.png"></a></div>
                        </div>
                        <div class="nextdirection recent-next"><img src="/public/img/right-arrow.svg"> </div>
                        <div class="leftdirection recent-prev"><img src="/public/img/left-arrow.svg"> </div>
                    </div>
                </div>
            </section>

        <!-- Swiper JS -->
        <script src="js/swiper.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            $(document).ready(function(){


                var swiper = new Swiper('.homeslider > .swiper-container', {
                    pagination: '.swiper-pagination',
                    paginationClickable: true,
                    preventClicks:false,
                    preventClicksPropagation:false,
                    effect:'fade',
                    breakpoints: {
                        320: {
                            height:200
                        },

                        480: {
                            height:300
                        },

                        768: {
                            height:400
                        },
                        1024: {
                            height:500
                        }
                    }
                });

                var recentswiper = new Swiper('.recentslider > .swiper-container', {
                    nextButton: '.recent-next',
                    prevButton: '.recent-prev',
                    slidesPerView: 8,
                    paginationClickable: true,
                    preventClicks:false,
                    preventClicksPropagation:false,
                    spaceBetween: 10,
                    breakpoints: {
                        320: {
                            slidesPerView: 3,
                            spaceBetween: 5
                        },

                        480: {
                            slidesPerView: 3,
                            spaceBetween: 5
                        },

                        768: {
                            slidesPerView: 5,
                            spaceBetween: 5
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 10
                        }
                    }
                });

                var mostswiper = new Swiper('.mostslider > .swiper-container', {
                    nextButton: '.most-next',
                    prevButton: '.most-prev',
                    slidesPerView: 8,
                    paginationClickable: true,
                    preventClicks:false,
                    preventClicksPropagation:false,
                    spaceBetween: 10,
                    breakpoints: {
                        320: {
                            slidesPerView: 3,
                            spaceBetween: 5
                        },

                        480: {
                            slidesPerView: 3,
                            spaceBetween: 5
                        },

                        768: {
                            slidesPerView: 5,
                            spaceBetween: 5
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 10
                        }
                    }
                });

                var topswiper = new Swiper('.topslider > .swiper-container', {
                    nextButton: '.top-next',
                    prevButton: '.top-prev',
                    slidesPerView: 8,
                    paginationClickable: true,
                    preventClicks:false,
                    preventClicksPropagation:false,
                    spaceBetween: 10,
                    breakpoints: {
                        320: {
                            slidesPerView: 3,
                            spaceBetween: 5
                        },

                        480: {
                            slidesPerView: 3,
                            spaceBetween: 5
                        },

                        768: {
                            slidesPerView: 5,
                            spaceBetween: 5
                        },
                        1024: {
                            slidesPerView: 6,
                            spaceBetween: 10
                        }
                    }
                });

            });


        </script>


    </div>
    </body>
@endsection