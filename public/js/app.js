'use strict';

//common
var $window = $(window);
var $menu = $('#menu');
var $navs = $menu.find('.li');
var $cats = $menu.find('.category');
var MIN_WIDTH = 1280;
var $scroll = $('html, body');
var offsetY = 0;
var time = 500;

window.initMap = function () {};

(function () {

  var w = $window.width();

  $('#exam-slider').each(function () {
    var $el = $(this);
    var $ul = $el.find('ul');
    var w = 3520;
    var x = 0;

    setInterval(function () {
      x++;
      if (x > w) {
        x = 0;
      }
      $ul.css({ left: -1 * x });
    }, 33);
  });

  $('#menu-sp-icon').on('click', function () {
    $('#menu-sp').toggleClass('active');
  });

  $('#menu-sp').each(function () {
    var $el = $(this);

    $el.find('.box').click(function () {
      if (!$(this).hasClass('shiryou')) {
        $(this).toggleClass('active');
        $(this).next().slideToggle();
        return false;
      }
    });
  });

  $('#googlemap').each(function () {

    window.initMap = function () {
      var latlng = new google.maps.LatLng(34.0488067, 131.5757389);
      var centerLatlng = new google.maps.LatLng(34.0488067, 131.5757389);

      var option = {
        zoom: 17,
        center: centerLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var map = new google.maps.Map(document.getElementById("googlemap"), option);
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      });
    };
  });

  $('.tabs').each(function () {

    var $el = $(this);
    var $cnts = $('.cnt-wrapper >.cnt');

    $el.find('.tab').on('click', function () {
      $el.find('.tab').removeClass('active');
      $(this).addClass('active');
      $cnts.fadeOut();
      $cnts.eq($(this).index()).fadeIn();
    });
  });

  $('.profile').on('click', function () {
    $('#profile').slideToggle();
    return false;
  });

  $("a.accordion").click(function () {
    $(this).next().slideToggle();
  });

  $('a[href^="#"]').click(function () {
    var target = $(this.hash);

    $('.tab').filter('.active').removeClass('active');
    $(this).parent().parent().addClass('active');

    if (!target.length) return;
    var targetY = target.offset().top + offsetY;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    window.history.pushState(null, null, this.hash);

    return false;
  });

  $('#sound').each(function () {

    // @type audio
    var sound = this;
    var $sound = $('.sound');
    var $txt = $sound.find('.small');
    var isPlay = false;

    $(sound).on('pause', function () {
      isPlay = false;
      console.log('pause');
    });

    $(sound).on('ended', function () {
      isPlay = false;
      console.log('ended');
    });

    $sound.on('click', function () {
      if (sound.play && !isPlay) {
        isPlay = true;
        sound.play();
        $txt.text($txt.data('play'));
      } else if (sound.pause && isPlay) {
        sound.pause();
        $txt.text($txt.data('stop'));
      }
    });
  });


  $('#sound2').each(function () {

    // @type audio
    var sound2 = this;
    var $sound2 = $('.sound2');
    var $txt = $sound2.find('.small');
    var isPlay = false;

    $(sound2).on('pause', function () {
      isPlay = false;
      console.log('pause');
    });

    $(sound2).on('ended', function () {
      isPlay = false;
      console.log('ended');
    });

    $sound2.on('click', function () {
      if (sound2.play && !isPlay) {
        isPlay = true;
        sound2.play();
        $txt.text($txt.data('play'));
      } else if (sound2.pause && isPlay) {
        sound2.pause();
        $txt.text($txt.data('stop'));
      }
    });
  });


  // common
  $('.btnback').on('click', function () {
    $scroll.animate({
      scrollTop: 0
    }, 500);
  });

  // start
  $('.page-top').each(function () {
    var $el = $(this);
    if ($('.page-intro').length) {
      $el.css({
        overflow: 'hidden',
        height: $window.height()
      });
    }

    if ($('.thumb-slider').children().length) {
      $('.thumb-slider').slick({
        dots: false,
        autoplay: true,
        arrows: false,
        fade: true,
        autoplaySpeed: 4000,
        speed: 1200
      });
    }

    $('.start').on('click', function () {
      $el.removeAttr('style').css({ heigth: 'auto', opacity: 1 });
      $('.page-intro').fadeOut(1000, function () {
        $el.animate({
          opacity: 1
        });
      });
      return false;
    });
  });

  // menu hover
  $menu.mouseenter(function () {
    $menu.css('left', 0);
  }).mouseleave(function () {
    $menu.removeAttr('style');
  });

  $navs.on('mouseenter', function () {
    $(this).addClass('on');
  }).on('mouseleave', function () {
    $(this).removeClass('on');
  });

  if (w <= MIN_WIDTH) {
    $menu.addClass('start');

    setTimeout(function () {
      $menu.removeClass('start');
    }, 1600);
  }

  $('.page-top').each(function () {

    var $thumbs = $('.thumbs .li');

    //
    $('.sul').each(function () {
      var $el = $(this);
      var $al = $('.al');
      var $ar = $('.ar');
      var MOVE_X = 420;
      var cur = 0;
      var offset = 2;

      $al.on('click', function () {
        if (cur - 1 != -1) {
          cur--;
          $el.animate({
            left: -1 * (MOVE_X * offset * cur)
          }, 800, 'easeOutQuad');
        }
      });

      $ar.on('click', function () {
        if (cur + 1 < 6) {
          cur++;
          $el.animate({
            left: -1 * (MOVE_X * offset * cur)
          }, 800, 'easeOutQuad');
        }
      });
    });

    var slider = $('.slider').slick({
      dots: false,
      autoplay: true,
      arrows: false,
      fade: true,
      autoplaySpeed: 4000,
      speed: 1200
    });

    slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      $thumbs.removeClass('active');
      $thumbs.eq(nextSlide).addClass('active').index();
    });

    $thumbs.on('click', function () {
      slider.slick('slickGoTo', $(this).index());
    });
  });

  $('#school.event').each(function () {
    var $overlay = $('.event .overlay');
    $('.event .button-link').on('click', function (e) {
      var folder = '/img/pc/school/event/' + $(e.currentTarget).data('folder');
      var note = $(e.currentTarget).data('text');
      var event = $(e.currentTarget).parent().find('.photo-txt').text();
      var max = $(e.currentTarget).data('max');

      if ($('window').height() > 760) {
        $overlay.addClass('table');
      } else {
        $overlay.removeClass('table');
      }

      $overlay.attr('data-folder', folder);
      $overlay.attr('data-num', '01');
      $overlay.attr('data-max', max);
      $overlay.find('.event-name').text(event);
      $overlay.find('.overlay-img').attr('src', folder + '/01.jpg');
      $overlay.find('.event-desc').html(note);
      $overlay.addClass('active');
      $overlay.css('z-index', 100);
      $(window).resize();
    });

    $('.event .close-btn').on('click', function (e) {
      $overlay.removeClass('active');
      setTimeout(function () {
        $overlay.css('z-index', 0);
      }, 500);
    });

    $('.event .event-arrow').on('click', function (e) {
      var $self = $(e.currentTarget);
      var folder = $overlay.attr('data-folder');
      var imgName = parseInt($overlay.attr('data-num'));
      var max = $overlay.attr('data-max');

      if ($self.hasClass('arrow-left')) {
        imgName--;
        if (imgName === 0) {
          imgName = max;
        }
      } else {
        imgName++;
        if (imgName > max) {
          imgName = 1;
        }
      }

      $overlay.find('.overlay-img').attr('src', folder + '/' + ('00' + imgName).slice(-2) + '.jpg');
      $overlay.attr('data-num', ('00' + imgName).slice(-2));
    });

    if ($(window).height() > 760) {
      $overlay.addClass('table');
    } else {
      $overlay.removeClass('table');
    }

    $(window).on('resize', function () {
      var $overlay = $('.event .overlay');

      if ($(window).height() > 760) {
        $overlay.addClass('table');
      } else {
        $overlay.removeClass('table');
      }
    }).resize();
  });
})();
//# sourceMappingURL=app.js.map