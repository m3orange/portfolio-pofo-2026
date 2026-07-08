<?php include_once("config.php"); ?>



<!doctype html>
<html class="no-js" lang="en">

<head>


	<!-- title -->
	<title>M3Orange | Michelle Muñoz | UX/UI Designer</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />

	<meta name="description" content=" ">
	<meta name="keywords" content="">

	<link rel="shortcut icon" href="<?= BASE_URL ?>images/favicon.png">
	<link rel="apple-touch-icon" href="<?= BASE_URL ?>images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= BASE_URL ?>images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= BASE_URL ?>images/apple-touch-icon-114x114.png">

	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="<?= BASE_URL ?>css/animate.css" />
	<link rel="stylesheet" href="<?= BASE_URL ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= BASE_URL ?>css/et-line-icons.css" />
	<link rel="stylesheet" href="<?= BASE_URL ?>css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= BASE_URL ?>css/themify-icons.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/swiper.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/justified-gallery.min.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/magnific-popup.css" />
	<!-- <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>revolution/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>revolution/css/layers.css">
		<link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>revolution/css/navigation.css"> -->
	<link rel="stylesheet" href="<?= BASE_URL ?>css/bootsnav.css">
	<link rel="stylesheet" href="<?= BASE_URL ?>css/font-icons.min.css">
	<!-- <link rel="stylesheet" href="<?= BASE_URL ?>css/theme-vendors.min.css"> DO NOT USE - Breaks Admin Grid    -->
	<link rel="stylesheet" href="<?= BASE_URL ?>_style.css" /> <!-- Keep higher than overwrites or it breaks-->
	<link rel="stylesheet" href="<?= BASE_URL ?>css/responsive.css" />


	<!-- Needed by Bootstrap tooltips - Start 
		Global one, which the Bootstrap tooltips call for. 
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
			BUT causing conflict with the local Bootstrap CSS, so commenting it for now.
-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


	<!-- Needed by Bootstrap tooltips - End -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap"
		rel="stylesheet">

	<link
		href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<link
		href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=mail" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
	<title>Bootstrap Example</title>
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

	<!--[if IE]>
						<script src="js/html5shiv.js"></script>
				<![endif]-->

	<!-- <link rel="stylesheet" href="<?= BASE_URL ?>_guides.css" /> -->

	<link rel="stylesheet" href="<?= BASE_URL ?>_style-about.css?v=1" />
	<link rel="stylesheet" href="<?= BASE_URL ?>_style-overwrites.css?v=1" />

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="home">

	<!-- start header -->
	<?php include ROOT_PATH . 'includes/global-nav.php'; ?>
	<!-- end header -->



	<section>
		<div class="container">
			<div class="row">
				<div class="col col-12 col-lg-4">


					<div class="pe-0 position-relative z-index-1">
						<!-- start tab navigation -->
						<ul class="nav nav-tabs">
							<li class="nav-item"><a class="nav-link active" href="#tab-four1" data-bs-toggle="tab">Design & Craft</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="#tab-four2" data-bs-toggle="tab">Development</a></li>
						</ul>
						<!-- end tab navigation -->
					</div>


				</div>

				<div class="col col-12 col-lg-8">


					<div class="container tab-style4">


						<div class="tab-content">
							<!-- start tab content -->
							<div class="tab-pane med-text active show" id="tab-four1">
								<div class="row align-items-center">
									<div class="col-12 offset-xl-1">
										<h6 class="margin-20px-bottom">Design & Craft</h6>
										<span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block">We
											use different types of massage for a variety of health related benefits
											purposes.</span>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It
											has survived not only five centuries, but also the leap into electronic
											typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy
											text of the printing.</p>
										<a href="javascript:void(0);" class="btn btn-small btn-rounded btn-dark-gray">Explore services</a>
									</div>
								</div>
							</div>
							<!-- end tab content -->
							<!-- start tab content -->
							<div class="tab-pane fade in" id="tab-four2">
								<div class="row align-items-center">
									<div class="col-12 offset-xl-1">
										<h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">
											Development</h6>
										<span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block">We
											use different types of massage for a variety of health related
											benefits purposes.</span>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting
											industry. It has survived not only five centuries, but also the
											leap into electronic typesetting, remaining essentially
											unchanged. Lorem Ipsum is simply dummy text of the printing.</p>
										<a href="javascript:void(0);" class="btn btn-small btn-rounded btn-dark-gray">Explore
											services</a>
									</div>
								</div>
							</div>
							<!-- end tab content -->
							<!-- start tab content -->
							<div class="tab-pane fade in" id="tab-four3">
								<div class="row align-items-center">
									<div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom">
										<img src="https://via.placeholder.com/1232x816" alt="" class="w-100" />
									</div>
									<div class="col-12 col-xl-5 col-lg-6 col-md-12 offset-xl-1">
										<h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">
											Branding</h6>
										<span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block">We
											use different types of massage for a variety of health related
											benefits purposes.</span>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting
											industry. It has survived not only five centuries, but also the
											leap into electronic typesetting, remaining essentially
											unchanged. Lorem Ipsum is simply dummy text of the printing.</p>
										<a href="javascript:void(0);" class="btn btn-small btn-rounded btn-dark-gray">Explore
											services</a>
									</div>
								</div>
							</div>
							<!-- end tab content -->
							<!-- start tab content -->
							<div class="tab-pane fade in" id="tab-four4">
								<div class="row align-items-center">
									<div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom">
										<img src="https://via.placeholder.com/1232x816" alt="" />
									</div>
									<div class="col-12 col-xl-5 col-lg-6 col-md-12 offset-xl-1">
										<h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">
											Brainstorming</h6>
										<span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block">We
											use different types of massage for a variety of health related
											benefits purposes.</span>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting
											industry. It has survived not only five centuries, but also the
											leap into electronic typesetting, remaining essentially
											unchanged. Lorem Ipsum is simply dummy text of the printing.</p>
										<a href="javascript:void(0);" class="btn btn-small btn-rounded btn-dark-gray">Explore
											services</a>
									</div>
								</div>
							</div>
							<!-- end tab content -->
						</div>

					</div>



				</div>
			</div>
		</div>
	</section>




	<!-- Example Code Start-->









	<!-- start footer -->
	<?php include_once("includes/global-footer.php"); ?>


</body>

</html>