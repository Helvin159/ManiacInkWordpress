<?php 
  get_header();
  ?>
  <!--Hero-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active itemOne" style="background:url(<?php echo get_theme_file_uri('assets/img/3.jpg'); ?>); background-size:cover; background-position:center center;height:30vh; width:100vw;">
          <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemTwo" style="background:url(<?php echo get_theme_file_uri('assets/img/2.jpg');?>); background-size:cover; background-position:center center;height:30vh; width:100vw;">
        <!-- <img class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/1.jpg');?>); background-size:cover; background-position:center center;height:30vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
        </div>
      </div>


  <div class="container-fluid py-5">



    <div class="container p-3 ">
      <h1 class="sedgewick display-1 text-center">Contact</h1>
      <div class="container px-5">
          <?php 
          require_once('includes/contact.php'); 
          //the_content();
          ?>
      </div>

    </div>
  </div>

  <!-- Categories -->
<div class="container-fluid">
	<div class="container">
		<h2 class="sedgewick display-3">Categories</h2>
		<hr class="w-100 pb-3">
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/portraits/queen.png')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('portraits')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Portraits <i class="fas fa-external-link-alt"></i></a>
      </div>
    </div>
    <div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/small_tattoo/5.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('small-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Small Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
		<div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/coverups/2_3-1.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('cover-ups')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Cover-Ups <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
		<div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/tattoos/13.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('large-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Large Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
	</div>
</div>
<?php
  get_footer();
?>