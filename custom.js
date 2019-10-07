"use strict";

/* eslint-disable */
jQuery(document).ready(function ($) {
  var Logo = $('#logo');
  var Hero = $('.kb-home-hero');
  var HeroSingle = $('.kb-hero');
  var HeroShop = $('.kb-shop-hero');
  var Error404 = $('.kb-background-image');
  var SingleProduct = $('.single-product #et-main-area');
  var Header = $('header');
  var MenuItem = $('#top-menu-nav > ul > li > a');
  var MessageShop = 'Detalle del Producto';
  var PageBlog = $('.page-blog');
  var PostMeta = $('.post-meta');
  /**
   * Function to check if any element is on the Viewport
   *
   * @returns Boolean
   */

  $.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on('resize scroll', function () {
    if (Hero.length > 0 && Hero.isInViewport()) {
      Logo.attr("src", "/wp-content/uploads/2019/07/logo-white.png");
      Header.css("background-color", "transparent");
      MenuItem.css("color", "white");
      $('.mobile_nav').removeClass('kb-over');
      $('.et-cart-info').removeClass('kb-over');
    } else {
      Logo.attr("src", "/wp-content/uploads/2019/07/logo.png");
      Header.css("background-color", "white");
      MenuItem.css("color", "black");
      $('.mobile_nav').addClass('kb-over');
      $('.et-cart-info').addClass('kb-over');
    }
  });

  if (HeroShop.length > 0) {
    $(window).on('resize scroll', function () {
      if (HeroShop.isInViewport()) {
        Logo.attr("src", "/wp-content/uploads/2019/07/logo-white.png");
        Header.css("background-color", "transparent");
        MenuItem.css("color", "white");
        $('.mobile_nav').removeClass('kb-over');
        $('.et-cart-info').removeClass('kb-over');
      } else {
        Logo.attr("src", "/wp-content/uploads/2019/07/logo.png");
        Header.css("background-color", "white");
        MenuItem.css("color", "black");
        $('.mobile_nav').addClass('kb-over');
        $('.et-cart-info').addClass('kb-over');
      }
    });
  }

  if (HeroSingle.length > 0) {
    $(window).on('resize scroll', function () {
      if (HeroSingle.isInViewport()) {
        Logo.attr("src", "/wp-content/uploads/2019/07/logo-white.png");
        Header.css("background-color", "transparent");
        MenuItem.css("color", "white");
        $('.mobile_nav').removeClass('kb-over');
        $('.et-cart-info').removeClass('kb-over');
      } else {
        Logo.attr("src", "/wp-content/uploads/2019/07/logo.png");
        Header.css("background-color", "white");
        MenuItem.css("color", "black");
        $('.mobile_nav').addClass('kb-over');
        $('.et-cart-info').addClass('kb-over');
      }
    });
  }

  if (SingleProduct.length > 0) {
    $(SingleProduct).prepend("<div class=\"kb-shop-hero\"><h2>".concat(MessageShop, "</h2></div>"));
    $(window).on('resize scroll', function () {
      Logo.attr("src", "/wp-content/uploads/2019/07/logo-white.png");
      Header.css("background-color", "transparent");
      MenuItem.css("color", "white");
    });
  }

  if (Error404.length > 0) {
    $(window).on('resize scroll', function () {
      if (Error404.isInViewport()) {
        Logo.attr("src", "/wp-content/uploads/2019/07/logo-white.png");
        Header.css("background-color", "transparent");
        MenuItem.css("color", "white");
        $('.mobile_nav').removeClass('kb-over');
        $('.et-cart-info').removeClass('kb-over');
      } else {
        Logo.attr("src", "/wp-content/uploads/2019/07/logo.png");
        Header.css("background-color", "white");
        MenuItem.css("color", "black");
        $('.mobile_nav').addClass('kb-over');
        $('.et-cart-info').addClass('kb-over');
      }
    });
  }

  if (window.innerWidth < 900) {
    $('header').css('position', 'fixed');
  }
});