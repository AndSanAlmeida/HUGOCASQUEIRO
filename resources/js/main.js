window.$ = window.jQuery = require("jquery");
require("isotope-layout/dist/isotope.pkgd");
require('imagesloaded/imagesloaded.pkgd');
require('magnific-popup/dist/jquery.magnific-popup');
// ====================================================
// Sticky Navbar
// ====================================================

function sticky() {
    $(window).scroll(function () {
        var $nav = $('#nav');
        var $hcW = $('.hcW');
        var $hcG = $('.hcG');

        $(this).scrollTop() > 300 ? (
            $hcW.hide(),
            $hcG.show(),
            $nav.addClass("sticky"),
            $nav.removeClass("navbar")
        ) : (
                $hcW.show(),
                $hcG.hide(),
                $nav.removeClass("sticky"),
                $nav.addClass("navbar")
            )
    })
}

// ====================================================
// Responsive Navbar
// ====================================================

function navResponsive() {
    var $menuRevealBtn = $('#nav-toggler');
    var $menuHideNavBtn = $('#close-sidenav');
    var $sideNav = $('#sidenav');
    var $sideNavMask = $('#side-nav-mask');

    $menuRevealBtn.on('click', function () {
        $sideNav.addClass('visible');
        $sideNavMask.addClass('visible');
    });

    $sideNavMask.on('click', function () {
        $sideNav.removeClass('visible');
        $sideNavMask.removeClass('visible');
    });

    $menuHideNavBtn.on('click', function () {
        $sideNav.removeClass('visible');
        $sideNavMask.removeClass('visible');
    });
}

// ====================================================
// Slider
// ====================================================

function slider() {
    var timer = setInterval(move_to_next, 5000),
        $slider = $('#carousel'),
        $sliderUl = $slider.find(".carousel-list"),
        $sliderLi = $sliderUl.find("li"),
        count = $sliderLi.length,
        $dots = $slider.find(".carousel-dots");

    // Make the first slider active
    $sliderLi.first().addClass("active");
    // Count and add nav dots
    $sliderLi.each(function () {
        $dots.append("<li/>");
    }
    );
    $dots.find("li").first().addClass("active");
    // Change slider on dot click
    $dots.find("li").click(function () {
        var $this = $(this);
        var i = $this.index();
        next(i);
    });

    // this resets time between slider, e.g. if you click on a slider, 
    // you don't want it to slide over to the next because the timer 
    // has been triggered
    function restart_interval() {
        clearInterval(timer);
        timer = setInterval(move_to_next, 5000);
    }
    // Wor out whats next 
    function move_to_next() {
        var i;
        if ($sliderUl.find("li").last().hasClass("active"))
            i = 0;
        else
            i = $sliderUl.find("li.active").next().index();
        next(i);
    }

    function next(i) {
        var $this = $sliderLi.eq(i);
        $dots.find("li.active").removeClass("active");
        $dots.find("li").eq(i).addClass("active");
        $this.addClass("active");
        $sliderUl.find("li.active").removeClass("active");
        $sliderLi.eq(i).addClass("active");
        restart_interval();
    }

    // Pause the slider in hover
    $sliderUl.hover(
        function () {
            clearInterval(timer);
        }, function () {
            restart_interval();
        }
    );
}

// ====================================================
// Reviews
// ====================================================

function sliderReviews(options) {
    let Privates = {};

    this.slideNext = () => {
        ++Privates.sel.position;

        if (document.body.clientWidth) {
            if (Privates.sel.position >= Privates.sel.slides.length) {
                Privates.sel.position = 0;
            }

            let value = Privates.sel.position * 100;
            Privates.sel.slider_wrap.style.transform = `translateX(-${value}%)`;
        } else {
            if (Privates.sel.position >= Privates.sel.slides.length - 1) {
                Privates.sel.position = 0;
            }

            let value = Privates.sel.position * 50;
            Privates.sel.slider_wrap.style.transform = `translateX(-${value}%)`;
        }

    }

    this.slidePrev = () => {
        --Privates.sel.position;

        if (document.body.clientWidth) {
            if (Privates.sel.position < 0) {
                Privates.sel.position = Privates.sel.slides.length - 1;
            }

            let value = Privates.sel.position * 100;
            Privates.sel.slider_wrap.style.transform = `translateX(-${value}%)`;
        } else {
            if (Privates.sel.position < 0) {
                Privates.sel.position = Privates.sel.slides.length - 2;
            }

            let value = Privates.sel.position * 50;
            Privates.sel.slider_wrap.style.transform = `translateX(-${value}%)`;
        }
    };

    // this.test = () => {
    //     console.log('test');
    // }

    Privates.options = options;
    Privates.sel = {
        slider_wrap: document.querySelector(Privates.options.slider_wrap),
        slides: document.querySelectorAll(Privates.options.slides),
        next_button: document.querySelector(Privates.options.next_button),
        prev_button: document.querySelector(Privates.options.prev_button),
        position: 0,
    };

    if (Privates.sel.next_button != undefined && Privates.sel.next_button != null) {
        Privates.sel.next_button.addEventListener('click', () => {
            this.slideNext();
        });
    }

    if (Privates.sel.prev_button != undefined && Privates.sel.next_button != null) {
        Privates.sel.prev_button.addEventListener('click', () => {
            this.slidePrev();
        });
    }

    // Privates.sel.slider_wrap.addEventListener('touchstart', this.test);
};
const Reviews = new sliderReviews({
    slider_wrap: '.slider-wrap',
    slides: '.reviews-slide',
    next_button: '.slider-control-next',
    prev_button: '.slider-control-prev',
});

// ====================================================
// Isotope
// ====================================================

function isotope() {

    var $grid = $('.isotope-list').isotope({
        itemSelector: '.isotope-item',
        filter: '*',
        transitionDuration: '0.5s',
        masonry: {
            columnWidth: 40,
            fitWidth: true
        }
    });

    $('.isotope-sorters li').click(function () {
        var selector = $(this).attr('data-filter');

        $grid.isotope({
            filter: selector,
        })

        //changing active class with click event
        $('.isotope-sorters li.active').removeClass('active');
        $(this).addClass('active');
    });


    // layout Isotope after each image loads
    $grid.imagesLoaded().progress(function () {
        $grid.isotope('layout');
    });
}

// ====================================================
// MagnificPopup
// ====================================================

function magnificPopup() {
    var groups = {};
    $('.galleryItem').each(function () {
        var id = parseInt($(this).attr('data-group'), 10);

        if (!groups[id]) {
            groups[id] = [];
        }

        groups[id].push(this);
    });


    $.each(groups, function () {

        $(this).magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom',
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    return item.el.attr('data-title');
                }
            },
            gallery: {
                enabled: true
            }
        })

    });
}

// ====================================================
// Back to Top
// ====================================================

function goToTop() {

    var goToTop = $("#goToTop");
    var body = $('html , body');

    $(window).scroll(function () {
        if ($(window).scrollTop() > 200) {
            goToTop.fadeIn()
        } else {
            goToTop.fadeOut()
        };
    });

    goToTop.click(function () {
        body.animate({ scrollTop: 0 }, 800)
    });
}

// ====================================================
// Inicializa funções ONLOAD
// ====================================================

    sticky();
    navResponsive();
    slider();
    isotope();
    magnificPopup();
     goToTop();