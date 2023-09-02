$(function () {
  $('.search_conditions').click(function () {
    $('.search_conditions_inner').slideToggle();
  });

  $('.subject_edit_btn').click(function () {
    $('.subject_inner').slideToggle();
  });
});

jQuery(function ($) {
  $('.search_conditions').on('click', function () {
    /*矢印の向きを変更*/
    $(this).toggleClass('open', 200);
  });

});
