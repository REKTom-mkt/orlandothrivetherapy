<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php echo $meta_desc; ?>">



	<title><?=$meta_title;?></title>

	<?php if ($bloginfo->search_engine_visibility == 0) { ?>

        <meta name="robots" content="noindex" />

    <?php } ?>	

	

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('../images/favicon/apple-touch-icon.png'); ?>">

	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url('../images/favicon/favicon-32x32.png'); ?>">

	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url('../images/favicon/favicon-16x16.png'); ?>">

	<link rel="manifest" href="<?php echo site_url('../images/favicon/manifest.json'); ?>">

	<link rel="mask-icon" href="<?php echo site_url('../images/favicon/safari-pinned-tab.svg'); ?>" color="#f2bcba">

	<meta name="theme-color" content="#ffffff">



    <!-- Bootstrap Core CSS -->

    <link href="<?php echo site_url('../css/bootstrap.min.css'); ?>" rel="stylesheet" media="all">



    <!-- Custom CSS -->

    <link href="<?php echo site_url('../css/style.css'); ?>" rel="stylesheet" media="all">

	

	<!-- Custom Font -->

	<link href="<?php echo site_url('../fonts/Lato/stylesheet.css'); ?>" rel="stylesheet" media="all" type="text/css">

	<link href="<?php echo site_url('../fonts/Josefin/stylesheet.css'); ?>" rel="stylesheet" media="all" type="text/css">

	<link rel="stylesheet" media="all" type="text/css"  href="<?php echo site_url('style.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="<?php echo site_url('../js/html5shiv.js'); ?>"></script>

        <script src="<?php echo site_url('../js/respond.min.js'); ?>"></script>

    <![endif]-->	

</head>



<body id="top">

	

	<header class="home clearfix">

		<div class="topbar">

			<div class="container">

			<div class="eqheight_wrap">

				<div class="col-md-6 eqheight">

					<div class="social">

						<a href="<?php echo $bloginfo->blog_fb_url; ?>" target="_blank"><i class="icon-facebook"></i></a>

						<a href="<?php echo $bloginfo->blog_insta_url; ?>" target="_blank"><i class="icon-instagram"></i></a>

						
					</div>

				</div>

				<div class="col-md-6 eqheight text-right">					

					<div class="topcontact">

						<a href="tel:(407) 592-8997" class="phone"><i class="icon-phone"></i> (407) 592-8997</a>

						<a href="/contact.html" class="btn hvr-shutter-out-vertical">Start Thriving Now</a>

					</div>

				</div>

			</div>

			</div>

		</div>

		

		<!-- Navigation -->

		<nav class="navbar navbar-inverse clearfix">

			<div class="container clearfix">

			

				<!-- Brand and toggle get grouped for better mobile display -->

				<div class="navbar-header clearfix">

					<a href="/" title="Orlando Thrive Therapy" class="navbar-brand">

						<img src="<?php echo site_url('../images/orlando-thrive-therapy-1.png'); ?>" alt="Orlando Thrive Therapy" />

					</a>

		

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>

				</div>

				

				<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse clearfix" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav">

						<li><a href="/" title="Home" class="hvr-underline-from-center">Home</a></li>

						<li class="menu-item dropdown"> 	

							<a href="#" title="Services" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">Services</a>	

							<ul class="dropdown-menu dm-parent">		

								<li class="menu-item"><a href="/services-offered.html" class="hvr-underline-from-center" title="Expert Services Offered">Expert Services Offered</a></li>
                              	<li class="menu-item"><a href="/blog/2020/using-teletherapy-for-online-counseling.html" class="hvr-underline-from-center" title="Teletherapy Services">Teletherapy Services</a></li>
								<li class="menu-item"><a href="/emdr-therapy.html" class="hvr-underline-from-center" title="EMDR Therapy">EMDR Therapy</a></li>

								<li class="menu-item"><a href="/life-coaching.html" class="hvr-underline-from-center" title="Life Coaching">Life Coaching</a></li>

								<li class="menu-item"><a href="/relationship-therapy.html" class="hvr-underline-from-center" title="Relationship Therapy">Relationship Therapy</a></li>

								<li class="menu-item"><a href="/individual-therapy.html" class="hvr-underline-from-center" title="Individual Therapy">Individual Therapy</a></li>

								<li class="menu-item"><a href="/women-therapy.html" class="hvr-underline-from-center" title="Women Therapy">Women's Therapy</a></li>

								<li class="menu-item"><a href="/blog/2017/mens-counseling-orlando-therapy-for-men.html" class="hvr-underline-from-center" title="Women Therapy">Men's Therapy</a></li>

								<li class="menu-item"><a href="/anxiety-therapy.html" class="hvr-underline-from-center" title="Anxiety Therapy">Anxiety Therapy</a></li>

								<li class="menu-item"><a href="/blog/2017/grief-orlando-counselor.html" class="hvr-underline-from-center" title="Grief Therapy">Grief Therapy</a></li>

                              	<li class="menu-item"><a href="/blog/2022/in-home-marriage-therapy.html" class="hvr-underline-from-center" title="In-Home Marriage Therapy">In-Home Marriage Therapy</a></li>

								

                          </ul>

						</li>

						<!--<li><a href="../rates.html" title="Rates" class="hvr-underline-from-center">Rates</a></li>-->

						<li class="menu-item dropdown"> 	

							<a href="#" title="Our Team" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">Our Team</a>	

							<ul class="dropdown-menu dm-parent">		
                              <li class="menu-item"><a href="/team.html" class="hvr-underline-from-center" title="Our Team">Our Team</a></li>
								<li class="menu-item"><a href="/heather-oller.html" class="hvr-underline-from-center" title="Heather Oller, MS, LMHC">Heather Oller, MS, LMHC</a></li>
                              	<li class="menu-item"><a rel="nofollow" href="/sydney-metler.html" class="hvr-underline-from-center" title="Sydney Metler, AA">Sydney Metler, AA</a></li>
                              	<li class="menu-item"><a rel="nofollow" href="/rachel-hoffmann.html" class="hvr-underline-from-center" title="Rachel Hoffmann">Rachel Hoffmann, BS</a></li>

								<li class="menu-item"><a rel="nofollow" href="/krista-knowles.html" class="hvr-underline-from-center" title="Krista Knowles, MA, LMHC">Krista Knowles, MA, LMHC</a></li>

								<li class="menu-item"><a rel="nofollow" href="/calena-illan.html" class="hvr-underline-from-center" title="Calena Illan, MA, LMHC">Calena Illan, MA, LMHC</a></li>

								

								<li class="menu-item"><a rel="nofollow" href="/lauren-rhodes.html" class="hvr-underline-from-center" title="Lauren Rhodes, MS, LMFT">Lauren Rhodes, MS, LMFT</a></li>						

                                <li class="menu-item"><a rel="nofollow" href="/cindynela-breskic.html" class="hvr-underline-from-center" title="Cindynela Breskic, MS, LMHC">Cindynela Breskic, MS, LMHC</a></li>

								<li class="menu-item"><a rel="nofollow" href="/zachary-spencer.html" class="hvr-underline-from-center" title="Zachary Spencer, MS, LMHC">Zachary Spencer, MS, LMHC</a></li>

								<li class="menu-item"><a rel="nofollow" href="/marie-howlett.html" class="hvr-underline-from-center" title="Marie Howlett, MS, LMHC">Marie Howlett, MS, LMHC</a></li>

								<li class="menu-item"><a rel="nofollow" href="/charles-vogl.html" class="hvr-underline-from-center" title="Charles Vogl, MA, LMHC">Charles Vogl, MA, LMHC</a></li>

								<li class="menu-item"><a rel="nofollow" href="/sarah-gomaa.html" class="hvr-underline-from-center" title="Sarah Gomaa, MA, LMHC">Sarah Gomaa, MA, LMHC</a></li>

								<li class="menu-item"><a rel="nofollow" href="/debra-mulcahy.html" class="hvr-underline-from-center" title="Debra Mulcahy, MS, RMHCI">Debra Mulcahy, MS, RMHCI</a></li>

                                <li class="menu-item"><a rel="nofollow" href="/grace-mueller.html" class="hvr-underline-from-center" title="Grace Mueller, MA, RMHCI">Grace Mueller, MA, RMHCI</a></li>
                              
								<li class="menu-item"><a rel="nofollow" href="/abby-husty.html" class="hvr-underline-from-center" title="Abby Husty, MA, RMHCI, RMFTI">Abby Husty, MA, RMHCI, RMFTI</a></li>
                              
                                <li class="menu-item"><a rel="nofollow" href="/margaret-redmond.html" class="hvr-underline-from-center" title="Margaret Redmond, MSW, LCSW">Margaret Redmond, MSW, LCSW</a></li>
                              
								<li class="menu-item"><a rel="nofollow" href="/charlotte-meier.html" class="hvr-underline-from-center" title="Charlotte Meier, MA, RMHCI">Charlotte Meier, MA, RMHCI</a></li>
								<li class="menu-item"><a rel="nofollow" href="/joyce-dolley.html" class="hvr-underline-from-center" title="Joyce Dolley, MS, RMHCI">Joyce Dolley, MS, RMHCI</a></li>
								<li class="menu-item"><a rel="nofollow" href="/riley-brickey.html" class="hvr-underline-from-center" title="Riley Brickey, MS, RMHCI">Riley Brickey, MS, RMHCI</a></li>
                              	<li class="menu-item"><a rel="nofollow" href="/lorenza-rodriguez.html" class="hvr-underline-from-center" title="Lorenza Rodriguez, MA, RMHCI">Lorenza Rodriguez, MA, RMHCI</a></li>
								<li class="menu-item"><a rel="nofollow" href="/collin-farrell.html" class="hvr-underline-from-center" title="Collin Farrell, Intern">Collin Farrell, Intern</a></li>
								

							</ul>

						</li>						

						<li class="menu-item dropdown"> 	

							<a href="#" title="FAQ" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">FAQ</a>

							<ul class="dropdown-menu dm-parent">		

								<li class="menu-item"><a href="/faqs.html" class="hvr-underline-from-center" title="FAQ">FAQ</a></li>

								<li class="menu-item"><a href="/what-to-expect.html" class="hvr-underline-from-center" title="What To Expect">What To Expect</a></li>

								<li class="menu-item"><a href="/how-therapy-works.html" class="hvr-underline-from-center" title="How Therapy Works">How Therapy Works</a></li>

								<li class="menu-item"><a href="/holistic-interventions.html" class="hvr-underline-from-center" title="Holistic Interventions">Holistic Interventions</a></li>

							</ul>

						</li>

						<li class="menu-item dropdown"> 	

							<a href="#" title="Blog" class="dropdown-toggle hvr-underline-from-center hvr-onpage" data-toggle="dropdown">Blog</a>

							<ul class="dropdown-menu dm-parent">		

								<li class="menu-item"><a href="/blog" class="hvr-underline-from-center" title="View All Blogs">View All Blogs</a></li>

								<li class="dropdown-submenu multi-level">

									<a href="/blog/2017/individual-counseling-orlando.html" class="dropdown-toggle hvr-underline-from-center" title="Individual Counseling">Individual Counseling</a>

									<span class="subtoggle"><i class="icon-caret-down"></i></span>

									<ul class="dropdown-menu">

										<li class="menu-item"><a href="/blog/2017/cognitive-behavioral-therapy-orlando-counseling.html" class="hvr-underline-from-center" title="Cognitive Behavioral Therapys">Cognitive Behavioral Therapy</a></li>

										<li class="menu-item"><a href="/blog/2017/adult-counseling-orlando.html" class="hvr-underline-from-center" title="Adult Therapy">Adult Therapy</a></li>

										<li class="menu-item"><a href="/blog/2017/anxiety-counseling-orlando-stressed-out.html" class="hvr-underline-from-center" title="Anxiety Counseling">Anxiety Counseling</a></li>

										<li class="menu-item"><a href="/blog/2017/life-counseling-orlando.html" class="hvr-underline-from-center" title="Life Counseling">Life Counseling</a></li>

										<li class="menu-item"><a href="/blog/2017/anxiety-counseling-orlando-stressed-out.html" class="hvr-underline-from-center" title="Short Term Counseling">Short Term Counseling</a></li>

										<li class="menu-item"><a href="/blog/2017/orlando-thrive-therapy-past-issues.html" class="hvr-underline-from-center" title="Counseling For Past Issues">Counseling For Past Issues</a></li>

										<li class="menu-item"><a href="/blog/2017/past-trauma-orlando-thrive-therapy.html" class="hvr-underline-from-center" title="Past Trauma Therapy">Past Trauma Therapy</a></li>

										<li class="menu-item"><a href="/blog/2017/adult-children-of-alcoholics-orlando-therapy.html" class="hvr-underline-from-center" title="Therapy for Adult Children of Alcoholics">Therapy for Adult Children of Alcoholics</a></li>

										<li class="menu-item"><a href="/blog/2017/grief-orlando-counselor.html" class="hvr-underline-from-center" title="Grief & Loss Counseling">Grief & Loss Counseling</a></li>

										<li class="menu-item"><a href="/blog/2017/grief-orlando-counselor.html"  class="hvr-underline-from-center" title="Mens Transitions Therapy">Mens Transitions Therapy</a></li>

										<li class="menu-item"><a href="/blog/2017/womens-counseling-orlando.html" class="hvr-underline-from-center" title="Men's Counseling Orlando Therapy">Women's Counseling</a></li>

										<li class="menu-item"><a href="/blog/2017/female-body-image.html" class="hvr-underline-from-center" title="Body Image Therapy for Women">Body Image Therapy for Women</a></li>

										<li class="menu-item"><a href="/blog/2017/job-stress-counseling-orlando.html" class="hvr-underline-from-center" title="Job Stress">Job Stress</a></li>

										<li class="menu-item"><a href="/blog/2017/stress-management-mental-health.html" class="hvr-underline-from-center" title="Stress Management">Stress Management</a></li>

										<li class="menu-item"><a href="/blog/2017/online-counseling-in-orlando.html" class="hvr-underline-from-center" title="Virtual Therapy">Virtual Therapy</a></li>

										

										<li class="menu-item"><a href="/blog/2018/six-ways-to-help-a-woman-in-her-relationship.html" class="hvr-underline-from-center" title="Virtual Therapy">Six Ways To Help A Woman In Her Relationship</a></li>

										<li class="menu-item"><a href="/blog/2018/dealing-with-change.html" class="hvr-underline-from-center" title="Dealing Wih Change - Life Transitions">Dealing Wih Change - Life Transitions</a></li>

										<li class="menu-item"><a href="/blog/2018/life-transitions-orlando-counseling.html" class="hvr-underline-from-center" title="Life Transitions & Orlando Counseling">Life Transitions & Orlando Counseling</a></li>

										<li class="menu-item"><a href="/blog/2018/therapy-services-for-anxiety-orlando.html" class="hvr-underline-from-center" title="Therapy Services For Anxiety Orlando">Therapy Services For Anxiety Orlando</a></li>

									</ul>

								</li>

								<li class="dropdown-submenu multi-level">

									<a href="/blog/2017/couples-counseling-orlando-thrive-therapy.html" class="dropdown-toggle hvr-underline-from-center" title="Relationship Counseling">Relationship Counseling</a>

									<span class="subtoggle"><i class="icon-caret-down"></i></span>

									<ul class="dropdown-menu">

										<li class="menu-item"><a href="/blog/2017/relationship-counseling-orlando-trust-issues.html" class="hvr-underline-from-center" title="Relationship Issues Counseling">Relationship Issues Counseling</a></li>

										<li class="menu-item"><a href="/blog/2017/affairs-marriage-orlando-couples-therapy.html" class="hvr-underline-from-center" title="Couples Therapy after Infidelity">Couples Therapy after Infidelity</a></li>

										<li class="menu-item"><a href="/blog/2017/couples-counseling-orlando-therapist.html" class="hvr-underline-from-center" title="Relationship/Couples Therapy for Better Communication">Relationship/Couples Therapy for Better Communication</a></li>

										<li class="menu-item"><a href="/blog/2017/toxic-relationship-counseling-orlando.html" class="hvr-underline-from-center" title="Toxic/Abusive Relationships">Toxic/Abusive Relationships</a></li>

										<li class="menu-item"><a href="/blog/2017/affairs-marriage-orlando-couples-therapy.html" class="hvr-underline-from-center" title="Affairs Marriage Therapy">Affairs Marriage Therapy</a></li>

										<li class="menu-item"><a href="/blog/2018/relationship-therapy-looking-within.html" class="hvr-underline-from-center" title="Relationship Therapy - How Looking Within Can Help">Relationship Therapy - How Looking Within Can Help</a></li>

										<li class="menu-item"><a href="/blog/2018/save-marriage-from-divorce.html" class="hvr-underline-from-center" title="Tips To Save A Marriage From Divorce">Tips To Save A Marriage From Divorce</a></li>

										<li class="menu-item"><a href="/blog/2018/marriage-therapy-orlando-for-relationship-solutions.html" class="hvr-underline-from-center" title="Marriage Therapy Orlando For Relationship Solutions">Marriage Therapy Orlando For Relationship Solutions</a></li>

									</ul>

								</li>

							</ul>

						</li>

						<li><a href="/contact.html" class="hvr-underline-from-center" title="Contact">Contact</a></li>

					</ul>

				</div>

			</div>

			<!-- /.navbar-collapse -->

		</nav>

	</header>

	

	<?php if($htmlfile):?>

	<div class="subheader clearfix">

	    <div class="wrap">

	    	<div class="section-pink">

		    	<div class="container">

		       		<h1 class="caps"><?=$blog_title;?> <span><?=$blog_sub_title;?></span></h1>

		        </div>

	        </div>

	    </div>

	</div>

	<?php else:?>

	<div class="subheader clearfix">

	    <div class="wrap">

	        <h1 class="caps section-pink">Featured Articles</h1>

	    </div>

	</div>

	<?php endif;?>

	