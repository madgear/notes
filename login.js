document.addEventListener("DOMContentLoaded", async (e) => {
  set_csrf();
  $(document).on("click", "#btn_login", function () {
    login();
  });

  $("input").on( "keypress", function( event ) {
    if ( event.which == 13 ) {
       event.preventDefault();
       login();
    }

  } );
});

login = () => {
  var uname = $(document).find("#user_name");
  var pass = $(document).find("#user_pass");

  if (uname.val() == "") {
    show_error("Required Field - Username!");
    uname.focus();
    return;
  }

  if (pass.val() == "") {
    show_error("Required Field - Password!");
    pass.focus();
    return;
  }

  var post_pass = encrypt_text(pass.val(), uname.val());

  $.post("", {
    process: "login",
    username: uname.val(),
    password: post_pass,
    csrf: get_csrf(),
  })
    .done(function (data) {
      try {
        var d = JSON.parse(data);        
        if (d.status == 200) {
          location.reload();
        } else {
          show_error(d.message);
        }
      } catch (error) {
        show_error("Error Occured!, Try to Refresh the Page!");
      }
    })
    .fail(function (xhr, status, error) {
      show_info("Page is Offline!");
    });
};
