$(document).ready(function () {
  console.log('am I connected?');
  ('use strict');

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
