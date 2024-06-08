$(document).ready(function () {
  console.log('am I connected?');
  ('use strict');

  //look at fixes in the Pen https://codepen.io/ghaste/pen/OJqLbvg
//for adding mouse trail to a page that scrolls beyond the viewport, as would be the case with most websites - lol
let x1 = 0, y1 = 0;
const 
  vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0),
  dist_to_draw = 50,
  delay = 1000,
  fsize = [
    '1.1rem', '1.4rem', '.8rem', '1.7rem'
  ],
  colors = [
  '#E23636',
  '#F9F3EE',
  '#E1F8DC',
  '#B8AFE6',
  '#AEE1CD',
  '#5EB0E5'
],
  rand = (min, max) => 
    Math.floor(Math.random() * (max - min + 1)) + min,
  selRand = (o) => o[rand(0, o.length - 1)],
  distanceTo = (x1, y1, x2, y2) => 
    Math.sqrt((Math.pow(x2 - x1, 2)) + (Math.pow(y2 - y1, 2))),
  shouldDraw = (x, y) => 
    (distanceTo(x1, y1, x, y) >= dist_to_draw),
  addStr = (x, y) => {
    const str = document.createElement("div");
    str.innerHTML = '&#10022;';
    str.className = 'star';
    str.style.top = `${y + rand(-20, 20)}px`;
    str.style.left = `${x}px`;
    str.style.color = selRand(colors);
    str.style.fontSize = selRand(fsize);
    str.style.zIndex = 9999; // Added z-index to ensure it appears above other divs
    document.body.appendChild(str);

    const fs = 10 + 5 * parseFloat(getComputedStyle(str).fontSize);

    str.animate({
      translate: `0 ${(y + fs) > vh ? vh - y : fs}px`,
      opacity: 0,
      transform: `rotateX(${rand(1, 500)}deg) rotateY(${rand(1, 500)}deg)`
    }, {
      duration: delay,
      fill: 'forwards',
    });

    setTimeout(() => {
      str.remove();
    }, delay);
  }

addEventListener("mousemove", (e) => {
  const { clientX, clientY } = e;
  if (shouldDraw(clientX, clientY)) {
    addStr(clientX, clientY);
    x1 = clientX;
    y1 = clientY;
  }
});

  var usernameError = true,
    emailError = true,
    passwordError = true,
    passConfirm = true;

  // Detect browser for css purpose
  if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
    $('.form form label').addClass('fontSwitch');
  }

  // Label effect
  $('input').focus(function () {
    $(this).siblings('label').addClass('active');
  });

  // Form validation function
  function validateForm() {
    // Reset error states
    usernameError = emailError = passwordError = passConfirm = false;

    $('input.name').each(function () {
      if ($(this).val().length === 0) {
        $(this).siblings('span.error').text('Please type your full name').fadeIn().parent('.form-group').addClass('hasError');
        usernameError = true;
      } else if ($(this).val().length > 1 && $(this).val().length <= 6) {
        $(this).siblings('span.error').text('Please type at least 6 characters').fadeIn().parent('.form-group').addClass('hasError');
        usernameError = true;
      } else {
        $(this).siblings('span.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
        usernameError = false;
      }
    });

    $('input.email').each(function () {
      if ($(this).val().length === 0) {
        $(this).siblings('span.error').text('Please type your email address').fadeIn().parent('.form-group').addClass('hasError');
        emailError = true;
      } else {
        $(this).siblings('span.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
        emailError = false;
      }
    });

    $('input.pass').each(function () {
      if ($(this).val().length < 8) {
        $(this).siblings('span.error').text('Please type at least 8 characters').fadeIn().parent('.form-group').addClass('hasError');
        passwordError = true;
      } else {
        $(this).siblings('span.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
        passwordError = false;
      }
    });

    if ($('.pass').val() !== $('.passConfirm').val()) {
      $('.passConfirm').siblings('span.error').text("Passwords don't match").fadeIn().parent('.form-group').addClass('hasError');
      passConfirm = true;
    } else {
      $('.passConfirm').siblings('span.error').text('').fadeOut().parent('.form-group').removeClass('hasError');
      passConfirm = false;
    }
  }
  // Form switch

  $('a.switch').click(function (e) {
    $(this).toggleClass('active');

    e.preventDefault();

    if ($('a.switch').hasClass('active')) {
      $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
    } else {
      $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
    }
  });
  // Form submit
  $('form.signup-form').submit(function (event) {
    console.log('Form submit handler called');
    event.preventDefault();

    // Perform validation
    validateForm();

    if (usernameError || emailError || passwordError || passConfirm) {
      console.log('usernameError', usernameError);
      console.log('emailError', emailError);
      console.log('passwordError', passwordError);
      console.log('passConfirm', passConfirm);
      console.log('Form has errors');
    } else {
      console.log('No errors, submitting form');
      this.submit();
    }
  });

  // Reload page
  $('a.profile').on('click', function () {
    location.reload(true);
  });
});
