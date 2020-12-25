/*!
    * Start Bootstrap - Freelancer v6.0.5 (https://startbootstrap.com/theme/freelancer)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-freelancer/blob/master/LICENSE)
    */
    (function($) {
    "use strict"; // Start of use strict
  
    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: (target.offset().top - 71)
          }, 1000, "easeInOutExpo");
          return false;
        }
      }
    });
  
    // Scroll to top button appear
    $(document).scroll(function() {
      var scrollDistance = $(this).scrollTop();
      if (scrollDistance > 100) {
        $('.scroll-to-top').fadeIn();
      } else {
        $('.scroll-to-top').fadeOut();
      }
    });
  
    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
      target: '#mainNav',
      offset: 80
    });
  
    // Collapse Navbar
    var navbarCollapse = function() {
      if ($("#mainNav").offset().top > 100) {
        $("#mainNav").addClass("navbar-shrink");
      } else {
        $("#mainNav").removeClass("navbar-shrink");
      }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
  
    // Floating label headings for the contact form
    $(function() {
      $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
      }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
      }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
      });
    });


// 文字を跳ねさせる
function randomCharactor(c) {

    //跳ねさせる要素をすべて取得
    var randomChar = document.getElementsByClassName(c);

    //for で総当たり
    for (var i = 0; i < randomChar.length; i++) {

        //クロージャー
        (function(i) {

            //i 番目の要素、テキスト内容、文字列の長さを取得
            var randomCharI = randomChar[i];
            var randomCharIText = randomCharI.textContent;
            var randomCharLength = randomCharIText.length;

            //何番目の文字を跳ねさせるかをランダムで決める
            var Num = ~~(Math.random() * randomCharLength);

            //跳ねさせる文字を span タグで囲む、それ以外の文字と合わせて再び文字列を作る
            var newRandomChar = randomCharIText.substring(0, Num) + "<span>" + randomCharIText.charAt(Num) + "</span>" + randomCharIText.substring(Num + 1, randomCharLength);
            randomCharI.innerHTML = newRandomChar;

            //アニメーションが終わったら再び関数を発火させる
            document.getElementsByClassName(c)[0].children[0].addEventListener("animationend", function() {
                randomCharactor(c)
            }, false)
        })(i)
    }
}

//HELLO, WORLD跳ねさせる
randomCharactor("bounce");

  })(jQuery); // End of use strict