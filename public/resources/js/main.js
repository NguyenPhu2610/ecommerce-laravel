/*  ---------------------------------------------------
    Template Name: Male Fashion
    Description: Male Fashion - ecommerce teplate
    Author: Colorib
    Author URI: https://www.colorib.com/
    Version: 1.0
    Created: Colorib
---------------------------------------------------------  */

'use strict';

(function ($) {

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut(100);
        $("#preloder").delay(100).fadeOut("slow");

        /*------------------
            Gallery filter  
        --------------------*/
        $('.filter__controls li').on('click', function () {
            $('.filter__controls li').removeClass('active');
            $(this).addClass('active');
        });
        if ($('.product__filter').length > 0) {
            var containerEl = document.querySelector('.product__filter');
            var mixer = mixitup(containerEl);
        }
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('show.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas-menu-wrapper").addClass("active");
        $(".offcanvas-menu-overlay").addClass("active");
    });

    $(".offcanvas-menu-overlay").on('click', function () {
        $(".offcanvas-menu-wrapper").removeClass("active");
        $(".offcanvas-menu-overlay").removeClass("active");
    });

    /*-----------------------
        Hero Slider
    ------------------------*/
    $(".hero__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: false,
        nav: true,
        navText: ["<span class='arrow_left'><span/>", "<span class='arrow_right'><span/>"],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: false
    });

    /*--------------------------
        Select
    ----------------------------*/
    $("select").niceSelect();

    /*-------------------
		Radio Btn
	--------------------- */
    $(".product__details__option__color label").on("click",function(){
        $(".product__details__option__color label").removeClass("active");
        $(this).addClass("active");
    });

    $(".shop__sidebar__size label").on("click",function(){
        $(".shop__sidebar__size label,").removeClass("active");
        $(this).addClass("active");
    });

    $(".product__details__option__size label").on("click",function(){
        $(".product__details__option__size label").removeClass("active");
        $(this).addClass("active");
    });


    // $(".product__details__option__color label, .shop__sidebar__size label, .product__details__option__size label").on('click', function () {
    //     $(".product__details__option__color label, .shop__sidebar__size label, .product__details__option__size label").removeClass('active');
    //     $(this).addClass('active');
    // });

    /*-------------------
		Scroll
	--------------------- */
    $(".nice-scroll").niceScroll({
        cursorcolor: "#0d0d0d",
        cursorwidth: "5px",
        background: "#e5e5e5",
        cursorborder: "",
        autohidemode: true,
        horizrailenabled: false
    });

    /*------------------
        CountDown
    --------------------*/
    // For demo preview start
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    if(mm == 12) {
        mm = '01';
        yyyy = yyyy + 1;
    } else {
        mm = parseInt(mm) + 1;
        mm = String(mm).padStart(2, '0');
    }
    var timerdate = mm + '/' + dd + '/' + yyyy;
    // For demo preview end


    // Uncomment below and use your date //

    /* var timerdate = "2020/12/30" */

    $("#countdown").countdown(timerdate, function (event) {
        $(this).html(event.strftime("<div class='cd-item'><span>%D</span> <p>Days</p> </div>" + "<div class='cd-item'><span>%H</span> <p>Hours</p> </div>" + "<div class='cd-item'><span>%M</span> <p>Minutes</p> </div>" + "<div class='cd-item'><span>%S</span> <p>Seconds</p> </div>"));
    });

    /*------------------
		Magnific
	--------------------*/
    $('.video-popup').magnificPopup({
        type: 'iframe'
    });

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="fa fa-angle-up dec qtybtn"></span>');
    proQty.append('<span class="fa fa-angle-down inc qtybtn"></span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    var proQty = $('.pro-qty-2');
    proQty.prepend('<span class="fa fa-angle-left dec qtybtn"></span>');
    proQty.append('<span class="fa fa-angle-right inc qtybtn"></span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    /*------------------
        Achieve Counter
    --------------------*/
    $('.cn_num').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})(jQuery);

// USER DEFINE

//Search Focus
var searchBox = document.querySelector('.header__search__box');
var searchInput = document.querySelector('.header__search');
// searchInput.onfocus = function() { searchBox.style.border = '2px solid red'; }

document.querySelector('.header__search').addEventListener('focus', function(e) {
    searchBox.style.border = '2px solid #bebebe'; // Change to desired color
});

document.querySelector('.header__search').addEventListener('blur', function(e) {
    searchBox.style.border = '2px solid transparent'; // Change to desired color
});

//** Detail Picture Picked **

// var mainImage = document.querySelector('.main__pic__detail .main-pic');
// var itemImageClick = document.querySelectorAll('.tab__pic__item');
// var itemImage = document.querySelectorAll('.tab__pic__item img');

// var currentIndex = 0

// mainImage.src = itemImage[currentIndex].src

// // loop through all image
// itemImageClick.forEach((item, index) => {
//     item.addEventListener('click', () => {
//         itemImage[currentIndex].style.border = '2px solid transparent';
//         itemImage[index].style.border = '2px solid var(--red-dark)';
//         currentIndex = index;
//         mainImage.src = itemImage[index].src
//     })
// });

// var minusButton = document.querySelector('.quantity--minus');
// var plusButton= document.querySelector('.quantity--plus');
// var quantityInput = document.querySelector('.quantity__input #quantity');

// function incrementValue() {
//     var value = parseInt(quantityInput.value, 10);
//     quantityInput.value = isNaN(value) ? 1 : value + 1;
// }

// // Function to decrement value
// function decrementValue() {
//     var value = parseInt(quantityInput.value, 10);
//     quantityInput.value = isNaN(value) || value < 2 ? 1 : value - 1;
// }

// // Event listener for plus button
// plusButton.addEventListener('click', function() {
//     incrementValue();
// });

// // Event listener for minus button
// minusButton.addEventListener('click', function() {
//     decrementValue();
// });

document.getElementById("cart-number").innerHTML = parseInt(JSON.parse(localStorage.getItem("data")), 10) || 0;


// $('.header__search__box button').on('click', function (){
//     this.parentElement.classList.toggle('open');
//     this.previousElementSibling.focus();
// });

// $('body').on('click', function(){
    
// });

// jQuery(window).bind(
//     "beforeunload", 
//     function() { 
//         return confirm("Do you really want to close?") 
//     }
// )