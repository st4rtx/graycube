/** @format */

$("#form-contactus").submit(function(e) {
  e.preventDefault(); // avoid to execute the actual submit of the form.

  var form = $(this);

  $("#form-subscribe").html("<div class='success_btn'> Success </div>");

  // $.ajax({
  //   type: form.attr("method"),
  //   url: form.attr("action"),
  //   data: form.serialize(),
  //   beforeSend: function() {
  //     console.log("Waiting");
  //     $("#form-contactus").html("<div class='waiting_btn'> Please Wait ... </div>");
  //   },
  //   success: function(data) {
  //     console.log("Success");
  //     if (data == "Message has been sent") {
  //       $("#form-contactus").html("<div class='success_btn'> Success </div>");
  //     } else {
  //       $("#form-contactus").html("<div class='error_btn'>Error in sending message</div>");
  //     }
  //   },
  //   fail: function(data) {
  //     console.log("Error" + data);
  //     $("#form-contactus").html("<div class='error_btn'>Error in sending message</div>");
  //   }
  // });
});

$("#form-subscribe").submit(function(e) {
  e.preventDefault(); // avoid to execute the actual submit of the form.

  var form = $(this);

  // $.ajax({
  //   type: form.attr("method"),
  //   url: form.attr("action"),
  //   data: form.serialize(),
  //   beforeSend: function() {
  //     console.log("Waiting");
  //     $("#form-subscribe").html("<div class='waiting_btn'> Please Wait ... </div>");
  //   },
  //   success: function(data) {
  //     console.log("Success");
  //     if (data == "Message has been sent") {
  //       $("#form-subscribe").html("<div class='success_btn'> Success </div>");
  //     } else {
  //       $("#form-subscribe").html("<div class='error_btn'>Error in sending message</div>");
  //     }
  //   },
  //   fail: function(data) {
  //     console.log("Error" + data);
  //     $("#form-subscribe").html("<div class='error_btn'>Error in sending message</div>");
  //   }
  // });

  $("#form-subscribe").html("<div class='success_btn'> Success </div>");
});
