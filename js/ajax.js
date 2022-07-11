$(document).ready(function () {
  $("#btn").click(function () {
    sendAjaxForm("result", "form-order", "chek.php");
    return false;
  });
});

function sendAjaxForm(result_form, ajax_form, url) {
  $.ajax({
    url: url,
    type: "POST",
    dataType: "html",
    data: $("#" + ajax_form).serialize(),
    success: function (response) {
      $("#result").html(response);
      $("#btn").attr("disabled", true);
      $(".form-select-sm").attr("disabled", true);
    },
    error: function (response) {
      $("#result").html("Данные не отправлены. Попробуйте снова.");
    },
  });
}
