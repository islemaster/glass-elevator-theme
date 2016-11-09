<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo theme_url('/css/glass-elevator-arts.css'); ?>"/>

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>
		<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>

	    <meta name="viewport" content="width=device-width">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

	</head>
	<body class="<?php echo body_class(); ?>">
    <header>
      <h1>Glass Elevator</h1>
      <h2>Arts Consulting</h2>
    </header>
    <nav>
      <a href="/about">
        <img
  			  src="<?php echo theme_url('img/ReginaInMorningLight_square.png'); ?>"
  				alt="About"
  				title="About Glass Elevator Arts"
  			/>
        <span>About</span>
      </a>
      <a href="/artists">
        <img
  			  src="<?php echo theme_url('img/diane_square.jpg'); ?>"
  				alt="Artists"
  				title="List of represented artists"
  			/>
        <span>Artists</span>
      </a>
      <a href="/services">
        <img
  			  src="<?php echo theme_url('img/cgag_square.jpg'); ?>"
  				alt="Services"
  				title="What we can do for you"
  			/>
        <span>Services</span>
      </a>
      <a href="/gallery">
        <img
  			  src="<?php echo theme_url('img/goofballs_square.jpeg'); ?>"
  				alt="Gallery"
  				title="See our work"
  			/>
        <span>Gallery</span>
      </a>
    </nav>
  </body>
</html>
