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
      content:
        "Phone Number:" +
        $("#pNumber").val() +
        " <br> " +
        "Email:" +
        $("#address").val() +
        "<br>" +
        "Explanation of Tattoo: " +
        $("#explanation").val() +
        "<br>" +
        "Concept of Tattoo: " +
        $("#concept").val() +
        "<br>" +
        "Covid Question: " +
        $("#covid").val(),
      status: "private",
    };
    $.ajax({
      beforeSend: (xhr) => {
        xhr.setRequestHeader("X-WP-Nonce", maniacData.nonce);
      },
      url: maniacData.root_url + "/wp-json/wp/v2/contact/",
      type: "POST",
      data: newMessage,
      success: (response) => {
        setTimeout(function () {
          console.log("good");
          console.log(response);
          $("#contactForm").addClass("d-none");
          $("#thankYou").removeClass("d-none");
        }, 850);
      },
      error: (response) => {
        console.log("sorry");
        console.log(response);
        $("#contactForm").addClass("d-none");
        $("#sorry").removeClass("d-none");
      },
    });
  }
}

export default newMessage;
