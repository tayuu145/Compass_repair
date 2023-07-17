$(function () {
  $('.calendar-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var getData = $(this).attr('getData');
    var getPart = $(this).attr('getPart');
    $('.modal-getData').text(getData);
    $('.modal-getPart').text(getPart);
    return false;
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
