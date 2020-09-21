import $ from "jquery";

$("body").css("opacity", 0);
$("html").css("backgroundColor", "#000");

$(document).ready(function () {
  $("body").css("transition", "1.3s ease-in");
  $("body").css("opacity", 1);
  //	$('html').css("backgroundColor", "#fff")

  /*Large Tattoos*/
  $("#thumb1").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 1</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/tattoos/13.jpg">	<div class="container"><p style="color:#fff;">This piece reminds me of Beauty and the beast kind of love.</p></div>'
    );
  });

  $("#thumb2").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 2</h3>');
    $(".modal-body").html(
      '<div id="tattoocarouselModal" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img src="css/tattoos/2.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img src="css/tattoos/2-1.jpg" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#tattoocarouselModal" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#tattoocarouselModal" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div><div class="container"><p style="color:#fff">He gave me his concept and I designed his idea to reality!! Such a dope experience!</p></div>'
    );
  });

  $("#thumb3").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 3</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/tattoos/20.jpg">');
  });

  $("#thumb4").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 4</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/tattoos/1.jpg"><div class="container"><p style="color:#fff">She came with her inspirations and dreams to fly. Her first piece and I was honor to give her wings "To fly is Heavenly, To hover is Divine, I do Both".</p></div>'
    );
  });

  $("#thumb5").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 5</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/tattoos/18.jpg"><div class="container"><p style="color:#fff">Buddha and Pagoda sleeve.</p></div>'
    );
  });

  $("#thumb6").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 6</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/tattoos/15.jpg"><div class="container"><p style="color:#fff;">Phoenix with burning rose.</p></div>'
    );
  });

  $("#thumb7").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 7</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/tattoos/19.jpg"><div class="container"><p style="color:#fff">Egyptian Cat Arm Tattoo.</p></div>'
    );
  });

  $("#thumb8").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 8</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/tattoos/8.jpg">');
  });

  $("#thumb9").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 9</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/tattoos/9.jpg">');
  });

  /*Small Tattoos*/
  $("#thumb10").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 1</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/small_tattoo/1.jpg">'
    );
  });

  $("#thumb11").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 2</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/small_tattoo/2.jpg">'
    );
  });

  $("#thumb12").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 3</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/small_tattoo/3.jpg">'
    );
  });

  $("#thumb13").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 4</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/small_tattoo/4.jpg">'
    );
  });

  $("#thumb14").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 5</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/small_tattoo/5.jpg">'
    );
  });

  $("#thumb15").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 6</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/small_tattoo/6.jpg">'
    );
  });

  /*Coverups*/
  $("#thumb16").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 2</h3>');
    $(".modal-body").html(
      '<div class="container"><div id="carouselOne" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img class="img-fluid" src="css/coverups/2_7-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/2_6-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/2_0-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/2_1-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/2_3-1.jpg" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselOne" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselOne" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><div class="container"><p style="color:#fff">This is one special tattoo, Ana and I have been working together for a while to accomplish this beautiful multi tattoo piece. Not only was this such a dope process, but it was also an amazing experience for me, I was able to master this cover up that she has always wanted!The placement of the tattoo was extremely difficult and painful, but with her power and strength she was able to endure the pain! The hours and pain cannot be taken back, but the beauty and the meaning behind this tattoo makes up for all of that. I just wanted to say thank you for trusting me enough to tattoo you, and thank you for your amazing vibes!</p></div></div></div>'
    );
  });

  $("#thumb17").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 3</h3>');
    $(".modal-body").html(
      '<div class="container"><div id="carouselTwo" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img class="img-fluid" src="css/coverups/1_0-0.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/1_3-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/1_2-1.jpg" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselTwo" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselTwo" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><div class="container"><p style="color: #fff">Tummy tuck scar cover up! No more scar!! Definitely was a fun experience being able to design a tattoo that expresses elegance and beauty! Its been 6yrs since she got her tummy tuck, but the scar was a constant reminder of the event she went through.</p></div></div></div>'
    );
  });

  $("#thumb18").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 4</h3>');
    $(".modal-body").html(
      '<div class="container"><div id="carouselThree" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img class="img-fluid" src="css/coverups/3_0-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/3_1-1.jpg" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a><div class="container"><p style="color: #fff">Coverup!!! Such a dope experience</p></div></div></div>'
    );
  });

  $("#thumb20").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 6</h3>');
    $(".modal-body").html(
      '<div class="container"><div id="carouselFive" class="carousel slide" data-ride="carousel"><div class="carousel-inner"><div class="carousel-item active"><img class="img-fluid" src="css/coverups/5_0-1.jpg" class="d-block w-100" alt="..."></div><div class="carousel-item"><img class="img-fluid" src="css/coverups/5_1-1.jpg" class="d-block w-100" alt="..."></div></div><a class="carousel-control-prev" href="#carouselFive" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselFive" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a></div></div>'
    );
  });

  /*Portraits*/
  $("#thumb21").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 1</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/portriats/1.jpg">');
  });

  $("#thumb22").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 2</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/portriats/2.jpg">');
  });

  $("#thumb23").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 3</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/portriats/3.jpg">');
  });

  $("#thumb24").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 4</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/portriats/4.jpg"><br><p style="color:#fff;">Malcom X portrait, this leg work will have additional portraits. So the background is not fully completed. This is my first portrait, and can\'t wait to do more!</p>'
    );
  });

  $("#thumb25").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 5</h3>');
    $(".modal-body").html('<img class="img-fluid" src="css/portriats/5.jpg">');
  });

  $("#thumb26").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">Tattoo 6</h3>');
    $(".modal-body").html(
      '<img class="img-fluid" src="css/portriats/6.jpg"><br><p style="color:#fff;">Long session but it was so worth it. Half a sleeve mythology. Zues, Venus, and Cupid</p>'
    );
  });

  $(".mobileviewmorebtn").click(function () {
    $(".mobiledisplay").show();
    $(this).hide();
  });

  $("#custi1").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">@maripositaunica</h3>');
    $(".modal-body").css("text-align", "center");
    $(".modal-body").html(
      '<iframe src="https://www.instagram.com/p/B5VVps7HAkn/embed/" style="max-width:100%; height:505px;"></iframe>'
    );
  });

  $("#custi2").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">@chonina87</h3>');
    $(".modal-body").css("text-align", "center");
    $(".modal-body").html(
      '<iframe src="https://www.instagram.com/p/B2AA2MSHf5q/embed/" style="max-width:100%; height:505px;"></iframe>'
    );
  });

  $("#custi3").click(function () {
    $(".modal-header").html('<h3 style="color:#ffffff;">@eessinned</h3>');
    $(".modal-body").css("text-align", "center");
    $(".modal-body").html(
      '<iframe src="https://www.instagram.com/p/B4xUWlrnDcf/embed/" style="max-width:100%; height:505px;"></iframe>'
    );
  });
});
