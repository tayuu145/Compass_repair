$(function () {
  $('.calendar-modal-open').on('click', function () {
    $('.js-modal').fadeIn();
    var getData = $(this).attr('getData');
    var getPart = $(this).attr('getPart');
    var getAria = $(this).attr('getAria');
    $('.modal-getData').text(getData);
    $('.modal-getPart').text(getPart);
    $('.modal-getAria').text(getAria);
    return false;
  });
  $('.js-modal-close').on('click', function () {
    $('.js-modal').fadeOut();
    return false;
  });
});
