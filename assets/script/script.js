$("document").ready(function () {
  $(".membership-form").on("submit", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    formData.append("fullName", $("#fname").val() + " " + $("#lname").val());
    var formEle = $(this);

    $.ajax({
      url: "mailer.php",
      dataType: "json",
      method: "post",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        console.log(response);
        $(".statusMsg").html("");
        if (response) {
          $("body").append(
            '<div class="alert alert-success" role="alert"><strong>Success! </strong>Submit success!</div>'
          );
        } else {
          $("body").append(
            '<div class="alert alert-danger" role="alert"><strong>Fail! </strong>Submit fail!</div>'
          );
        }
        alertFunc();
        formEle[0].reset();
      },
    });
  });

  $(".shower-form").on("submit", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    var formEle = $(this);

    $.ajax({
      url: "showerMailer.php",
      dataType: "json",
      method: "post",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (response) {
        console.log(response);
        $(".statusMsg").html("");
        if (response) {
          $("body").append(
            '<div class="alert alert-success" role="alert"><strong>Success! </strong>Submit success!</div>'
          );
        } else {
          $("body").append(
            '<div class="alert alert-danger" role="alert"><strong>Fail! </strong>Submit fail!</div>'
          );
        }
        alertFunc();
        // formEle[0].reset();
      },
    });
  });

  function alertFunc() {
    window.setTimeout(function () {
      $(".alert")
        .fadeTo(500, 0)
        .slideUp(500, function () {
          $(this).remove();
        });
    }, 2000);
  }
  // nav bar js start
  var burgerMenu = document.getElementById("burger");
  var navbarMenu = document.getElementById("menu");

  // Responsive Navbar Toggle
  burgerMenu.addEventListener("click", function () {
    navbarMenu.classList.toggle("active");
    burgerMenu.classList.toggle("active");
  });
  // nav bar js end
  $("#docInfo").change(function () {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    $("#filename").html(filename);
  });
});
