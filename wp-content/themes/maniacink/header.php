<!doctype html>
<html <?php language_attributes();?> >
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
</head>
<body>


<!--Nav-->
<nav class="navbar navbar-expand-lg navbar-dark " >
	<a class="navbar-brand" href="<?php esc_url(site_url());?>">Maniac Ink <img src="<?php echo get_theme_file_uri('assets/img/logo3.png');?>"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav m-auto ">
			<li class="nav-item <?php if(is_page('home')) echo 'active';?>">
				<a class="nav-link" href="<?php echo esc_url(site_url());?>">Home<span class="sr-only"></span></a>
			</li>
			<li class="nav-item <?php if(is_page('categories')) echo 'active';?>">
				<a class="nav-link" href="<?php echo esc_url(site_url('/categories'));?>">My Work<span class="sr-only"></span></a>
			</li>			
			<li class="nav-item <?php if(is_page('blog')) echo 'active';?>">
				<a class="nav-link" href="<?php echo esc_url(site_url('/blog'));?>">Blog<span class="sr-only"></span></a>
			</li>


			<li class="nav-item <?php if(is_page('contact')) echo 'active';?>">
				<a  href="<?php echo esc_url(site_url('contact'))?>" class="nav-link">
					Contact Me!
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="https://www.instagram.com/inkmaniac03/" tabindex="-1" target="_blank"><i class="fab fa-instagram"></i></a>

			</li>
		</ul>
		<form method="post" action="dhsignup.php" class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="email" name="email" placeholder="Sign-up">
			<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Sign-up</button>
		</form>
	</div>
</nav>
