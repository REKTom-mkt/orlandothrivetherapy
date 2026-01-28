<?php //Blog Informations 
$bloginfo = blog_info();
?>
	<div class="section1 section-md blogpage-btm section-lbrown clearfix">
		<div class="container text-center">
			<h4 class="js-reg spacer-3">Rise above any circumstance, for GROWTH, EMPOWERMENT, and better QUALITY of life!<br><a href="tel:(407) 592-8997" class="pink js-bold">Call</a> today for more information. Follow Orlando Thrive on <a href="<?php echo $bloginfo->blog_fb_url; ?>" class="js-bold pink" target="_blank">Facebook</a> or <a href="<?php echo $bloginfo->blog_insta_url; ?>" class="pink js-bold" target="_blank">Instagram</a>.</h4>
			<a href="tel:(407) 592-8997" class="pink spacer-15"><h2>(407) 592-8997</h2></a>
			<h5 class="js-reg">216 Pasadena Pl<br>Orlando, Florida 32803</h5>
		</div>
	</div>

	<div class="section-md section-lgray clearfix">
		<div class="container text-center">
			<div class="col-sm-5 eqheight spacer-5-mb">
				<img src="<?php echo site_url('../images/misc/heather-oller.webp'); ?>" alt="Heather Oller" class="max100 img-small shadow-lwhite center"> 
			</div>
			<div class="col-sm-7 eqheight text-justify">				
				<p class="js-reg fs16 spacer-2">Heather Oller is the owner and founder of Orlando Thrive Therapy, Coaching, and Counseling. She is a licensed counselor and a family mediator who has over 23 years of dedicated work as a professional in the mental health field. Through her company's mission, she continues to pave the way for future therapists, and their clients, who want a higher quality of life....and who want to thrive, rather than just survive. You can contact Orlando Thrive Therapy at (407) 592-8997 for more information.</p>

				<div class="text-center">
					<a href="/" class="btn btn-pink hvr-shutter-out-vertical spacer-2">More Information</a>   
					<a href="/contact.html" class="btn btn-pink hvr-shutter-out-vertical spacer-2">Contact Now</a>
				</div>				
			</div>
		</div>	
	</div>

<!-- Footer -->
    <footer class="clearfix">
		<a href="#top" class="totop"><i class="icon-angle-up"></i><span>to top</span></a>

		<div class="container">
			<div class="col-sm-6">
				© Orlando Thrive Therapy. All Rights Reserved.
			</div>
			<div class="col-sm-6 text-right">
				Web Design, SEO & Hosting by <a href="https://www.rekmarketing.com/" target="_blank">REK Marketing & Design</a>
			</div>
		</div>

    </footer>

   
   
   <!-- Javascripts -->
    <script src="<?php echo site_url('../js/jquery.js'); ?>"></script>
    <script src="<?php echo site_url('../js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo site_url('../js/jquery.flexslider-min.js'); ?>"></script>

    <script src="<?php echo site_url('../js/script.js'); ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js" integrity="sha512-/bOVV1DV1AQXcypckRwsR9ThoCj7FqTV2/0Bm79bL3YSyLkVideFLE3MIZkq1u5t28ke1c0n31WYCOrO01dsUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">      
      $('.main_heading').matchHeight();
      
      $(document).on('click', '.paginate_button', function(){
        $.fn.matchHeight._update();
      });
    </script>
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KNV1PRW2S8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-KNV1PRW2S8');
		gtag('config', 'UA-103233606-1');
		gtag('config', 'UA-103233606-2');
		gtag('config', 'UA-103233606-3');
    </script>
      <script>
    nl_lang = "en";
    nl_pos = "bl";
    nl_compact = "1";
    nl_dir = "/vendor/nagishli/nl-files/";
    </script>
    <script src="/vendor/nagishli/nagishli.js?v=2.3" charset="utf-8" defer></script>