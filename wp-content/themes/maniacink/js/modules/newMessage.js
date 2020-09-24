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
    // var newMessage = {
    //   name: $("#name").val(),
    //   phone: $("#pNumber").val(),
    //   email: $("#email"),
    //   explanation: $("#explanation").val(),
    //   concept: $("#concept").val(),
    //   covid: $("#covid").val(),
    // };
    // $.ajax({
    //   beforeSend: (xhr) => {
    //     xhr.setRequestHeader("XP-WP-Nonce", maniacData);
    //   },
    //   url: maniacData.root_url + "wp-json/wp/v2/contact/",
    //   type: "POST",
    //   data: newMessage,
    //   success: maniacData.root_url + "wp-json/wp/v2/contact/",
    //   error: x,
    // });
    alert("whatsup");
  }
}

export default newMessage;
