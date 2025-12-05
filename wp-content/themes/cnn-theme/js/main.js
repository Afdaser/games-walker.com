$(function () {


    // padding for header
    function bodyPadd() {
        var height = $("header").outerHeight();
        $("body").attr("style", "padding-top: " + height + "px;")
    };

    bodyPadd()

    // minifier header on scroll
    function offsetWind() {
        var top = $("header").offset().top;
        if (top != 0) {
            $("header.var2 > .container").attr("style", "padding: 0px 15px; max-height: 60px")
        } else {
            $("header.var2 .container").attr("style", "");
            if (parseInt($("body").css("padding-top")) < parseInt($("header.var2").outerHeight() + 5)) {
                $("body").attr("style", "padding-top: " + parseInt($("header.var2").outerHeight()) + "px;")
            }
        }
    };

    offsetWind()

    $(window).on("scroll", function () {
        offsetWind()
    });

    // close top news
    $(".header-news .close").on("click", function () {
        $(".header-news").addClass("hidden");
        bodyPadd()
    });

    // open search field
    $(".search-btn").on("click", function () {
        $("header .search").toggleClass("active");
    });

    // open menu
    $("header .menu").on("click", function () {
        $(this).find(".nav-menu__hamburger").toggleClass("open");
        $("header .main-menu").toggleClass("show");
        $("header").toggleClass("menu-opened");
    });

    // get link from data-href
    $(".link-data").on("click", function () {
        thisdata = $(this).attr('data-href');
        window.location.href = thisdata;
    });

    //videos slider
    var swiper = new Swiper('.swiper-container.videos', {
        slidesPerView: 4,
        slidesPerGroup: 4,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            700: {
              slidesPerView: 3,
            },
            540: {
              slidesPerView: 2,
            },
            440: {
              slidesPerView: 1,
            },
        },
    });

    // fixed video on scroll
    if ($("div").hasClass("video-player fixed") && $(window).outerWidth() >= 992) {
        function offsetVideo() {
            var top = $(".video-player").offset().top,
                topheader = parseInt($("header").offset().top) - parseInt($("header").outerHeight() - 50),
                left = parseInt($(".content .container").css("margin-right")) + 15,
                width = $(".one-news").outerWidth() * 0.3333 - 30
            if (top <= topheader) {
                $(".thevideo").addClass("fixed")
                $(".thevideo").attr("style", "top: " + $("header").outerHeight() + "px; right: " + left + "px; max-width: " + width + "px")
                $(".share-static").hide()
                $(".share-links").addClass("active")
            } else {
                $(".thevideo").removeClass("fixed")
                $(".thevideo").attr("style", "")
                $(".share-static").show()
                $(".share-links").removeClass("active")
            }
        };

        offsetVideo()

        $(window).on("scroll", function () {
            offsetVideo()
        });
        $(window).on("resize", function () {
            offsetVideo()
        });
    }

    // photo page slider
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        slidesPerView: 15,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,        
        breakpoints: {
            1100: {
                slidesPerView: 10,
                slidesPerGroup: 10,
            },
            768: {
                slidesPerView: 5,
                slidesPerGroup: 5,
            },
        },
    });
    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },
    });

    //hide caption
    $(".hide-caption").on("click", function(){
        $(".hide-caption").toggleClass("hidden");
        $($(this).parent().siblings('figcaption')).toggle(300);
    });
    
    //news slider
    var swiper = new Swiper('.swiper-container.news', {
        loop: true,
        navigation: {
            nextEl: '.swiper-container.news .swiper-button-next',
            prevEl: '.swiper-container.news .swiper-button-prev',
        },
    });

    //full width slider
    var swiper = new Swiper('.full-width-slider', {
        loop: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-container.full-width-slider .swiper-button-next',
            prevEl: '.swiper-container.full-width-slider .swiper-button-prev',
        },
        pagination: {
            el: '.full-width-slider .swiper-pagination',
            type: 'fraction',
        },
    });

    //one screen slider
    var swiper = new Swiper('.swiper-container.one-screen-slider', {
        autoplay: {
            delay: 5000,
        },
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });

    //guest slider
    var swiper = new Swiper('.swiper-container.guest-slider', {
        slidesPerGroup: 6,
        slidesPerView: 6,
        spaceBetween: 15,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 4,
                slidesPerGroup: 6,
            },
            480: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            350: {
                slidesPerView: 1,
                slidesPerGroup: 1,
            },
        },
    });
    
    //tabs    
    $(".tab").on("click", function(){
        var num = $(this).index()
        $(".tab").removeClass("active")
        $(this).addClass("active")
        $(".tab-content .tab-cont").removeClass("active")
        $(".tab-content .tab-cont").eq(num).addClass("active")
    });
    
    //share links
    if($('div').hasClass("share-links")){
        function shareLeft(){
            var left = $(".news-block .container").offset().left;
            $(".share-links").attr("style", "left: " + parseInt(left - 40) + "px; ")
        }
        
        shareLeft()
        
        $(window).on("scroll", function(){
            shareLeft()
        });
        
        $(window).on("resize", function(){
            shareLeft()
        });
    }
    
    //mobile menu
    function mobileMenu(){
        if($(window).outerWidth() <= 992){
            $("header.var2 nav").appendTo(".mobile-menu")
            $("header.var2 .social").appendTo(".mobile-menu")
        }else{
            $(".mobile-menu nav").insertBefore("header.var2 .search")
            $(".mobile-menu .social").insertAfter("header.var2 .search")
        }
    }
    mobileMenu()
    $(window).on("resize", function(){
        mobileMenu()
    });
    
    // menu btn
    $(".menu-btn").on("click", function(){
        $(this).toggleClass("open");
        $(".mobile-menu").toggleClass("open");
    });
 
$(".adsbygoogle").each(function () { (adsbygoogle = window.adsbygoogle || []).push({}); })
});