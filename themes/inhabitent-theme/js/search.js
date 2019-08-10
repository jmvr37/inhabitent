jQuery(document).ready(function($) {
  $('.main-navigation .search-field').val('');
  $('.main-navigation .search-field').on('blur', event => {
    if ($('.main-navigation .search-field').val().length > 0) {
      return false;
    }
    $('.main-navigation .search-submit').removeClass('after-select');
  });

  $('.main-navigation .search-submit').click(function() {
    event.preventDefault();
    if ($('.main-navigation .search-field').val().length > 0) {
      $('.main-navigation .search-form').submit();
    } else {
      $('.main-navigation .search-field').toggle(300);
      $('.main-navigation .search-submit').toggleClass('after-select');
      $('.main-navigation .search-field').focus();
    }
  });
});
