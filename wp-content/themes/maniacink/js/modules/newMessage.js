import $ from "jquery";

// Create new message
class newMessage {
  constructor() {
    this.events();
  }

  events() {
    $("#submit").on("click", this.messageDispatcher);
  }

  // methods
  messageDispatcher() {
    var newMessage = {
      title: $("#name").val(),
      phone: $("#pNumber").val(),
      email: $("#address").val(),
      explanation: $("#explanation").val(),
      concept: $("#concept").val(),
      covid: $("#covid").val(),
      status: "private",
    };

    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader("X-WP-Nonce", maniacData.nonce);
      },
      url: maniacData.root_url + "/wp-json/maniac/v1/new-message",
      type: "POST",
      data: newMessage,
      success: (response) => {
        console.log(response);
        console.log("good");
        setTimeout(function () {
          $("#contactForm").addClass("d-none");
          $("#thankYou").removeClass("d-none");
        }, 850);
      },
      error: (response) => {
        console.log("sorry");
        console.log(response);
        $("#contactForm").addClass("d-none");
        $("#thankYou").removeClass("d-none");
      },
    });
  }
}

export default newMessage;
