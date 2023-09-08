(function ($) {
  'use strict';

  // Sticky Menu
  $(window).scroll(function () {
    if ($('.navigation').offset().top > 100) {
      $('.navigation').addClass('nav-bg');
    } else {
      $('.navigation').removeClass('nav-bg');
    }
  });

  // team slider
  $('.team-slider').slick({
    dots: false,
    infinite: false,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    prevArrow: '<button type=\'button\' class=\'prevArrow\'><i class=\'ti-arrow-left\'></i></button>',
    nextArrow: '<button type=\'button\' class=\'nextArrow\'><i class=\'ti-arrow-right\'></i></button>',
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });

  // clients logo slider
  $('.client-logo-slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    ]
  });

  // about video popup
  $(document).ready(function () {
    $('.venobox').venobox();
  });

  // animation scroll js
  var html_body = $('html, body');
  $('.page-scroll').on('click', function () { //use page-scroll class in any HTML tag for scrolling
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        html_body.animate({
          scrollTop: target.offset().top - 50
        }, 1500, 'easeInOutExpo');
        return false;
      }
    }
  });

  // easeInOutExpo Declaration
  jQuery.extend(jQuery.easing, {
    easeInOutExpo: function (x, t, b, c, d) {
      if (t === 0) {
        return b;
      }
      if (t === d) {
        return b + c;
      }
      if ((t /= d / 2) < 1) {
        return c / 2 * Math.pow(2, 10 * (t - 1));
      } + b;
      return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
    }
  });

})(jQuery);


$(document).ready(function () {


  // Get the "Suivant" button element by its ID
  const suivantButton = document.querySelector('#btn-secteur-next');
  const suivantButtonSante = document.querySelector('#btn-sante-next');
  const suivantButtonplusp = document.querySelector('#btn-plusp-next');


  //Reintialisation

  const secteurDiv = document.getElementById("secteur");
  const santeDiv = document.getElementById("sante");
  const formationDiv = document.getElementById("formation");
  const autreDiv = document.getElementById("autre");
  const orthalisDiv = document.getElementById("orthalis");
  const pluspDiv = document.getElementById("plusp");
  const moinpDiv = document.getElementById("moinp");

  

  Array.from(document.getElementsByClassName('btn-reset')).forEach(element => {
    element.addEventListener('click', function () {
      secteurDiv.style.display = 'block'
      santeDiv.style.display = 'none'
      formationDiv.style.display = 'none'

    });
  });





  // Add a click event listener to the "Suivant" button
  suivantButton.addEventListener('click', function () {
    const btnpricingElements = document.querySelectorAll('.btnpricing');
    btnpricingElements.forEach(function (element) {
      if (element.classList.contains('selected')) {



        //partie1

        if (element.id == 'btn-sante') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'block'
        }

        if (element.id == 'btn-formation') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'block'
        }
        if (element.id == 'btn-autre') {
          secteurDiv.style.display = 'none'
          autreDiv.style.display = 'block'
        }
        if (element.id == 'btn-artisant') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'block'
        }




        //partie3


      



      }
    });
  });

  suivantButtonSante.addEventListener('click', function () {
    const btnpricingElements = document.querySelectorAll('.btnpricing');
    btnpricingElements.forEach(function (element) {
      if (element.classList.contains('selected')) {
     
        //partie2


        if (element.id == 'btn-veasy') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'none'
          santeDiv.style.display = 'block'
        }

        if (element.id == 'btn-orthalis') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'none'
          orthalisDiv.style.display = 'block'
        }
        if (element.id == 'btn-orthokis') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'none'
          orthalisDiv.style.display = 'block'
        }
        if (element.id == 'btn-custom') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'none'
          formationDiv.style.display = 'block'
        }


      }
    });
  });


  suivantButtonplusp.addEventListener('click', function () {
    const btnpricingElements = document.querySelectorAll('.btnpricing');
    btnpricingElements.forEach(function (element) {
      if (element.classList.contains('selected')) {
      

        //partie3

        if (element.id == 'btn-moinp') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'none'
          pluspDiv.style.display = 'block'
        }

        if (element.id == 'btn-plusp') {
          secteurDiv.style.display = 'none'
          santeDiv.style.display = 'none'
          formationDiv.style.display = 'none'
          pluspDiv.style.display = 'block'
        }


      }
    });
  });

  // Add click event listeners to the "btnpricing" elements to toggle the "selected" class
  const btnpricingElements = document.querySelectorAll('.btnpricing');
  btnpricingElements.forEach(function (element) {
    element.addEventListener('click', function () {
      // Remove the "selected" class from all "btnpricing" elements
      btnpricingElements.forEach(function (btnElement) {
        btnElement.classList.remove('selected');
      });

      // Add the "selected" class to the clicked element
      element.classList.add('selected');
    });
  });

})