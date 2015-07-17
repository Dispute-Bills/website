<?php 
/**
**  Template Name: Front Page
**/ 
?>
<?php get_header( 'home' ); ?>
<body itemscope="itemscope" itemtype="http://schema.org/WebPage" data-spy="scroll" data-target=".navbar" data-offset="100">
	<header class="masthead" role="banner">

        <!--
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<p>For a free case evaluation: <i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="tel:+13126249171">(312) 624-9171</a>
						</p>
					</div>
					<div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
						<p class="pull-right"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:info@disputebills.com">info@disputebills.com</a>&nbsp;&nbsp; <a class="box" href="http://disputebills.com/blog/" target="_blank">Blog</a>
						</p>
					</div>
				</div>
			</div>
		</div>
        -->

		<nav role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" class="banner-m navbar navbar-default navbar-static-top navbar-transparent">
			<div class="container">

				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 itemprop="headline"> 
                  <div itemscope itemtype="http://schema.org/Organization">
                    <a class="navbar-brand page-scroll" itemprop="url" href="http://disputebills.com/" title="Medical Bill Help, Chicago">
                      <img itemprop="logo" src="<?php echo content_url('/assets/images/logo.png'); ?>" alt="Dispute - Medical Debt Negotiation, Chicago, IL" class="img-responsive">
                    </a>
                  </div>
                </h1>
				</div>

				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden"><a class="page-scroll" href="#what" itemprop="url">What</a>
						</li>
						<li><a class="page-scroll" href="#works" itemprop="url">How It Works</a> </li>
						<li><a class="page-scroll" href="#who" itemprop="url">Who</a>
						</li>
						<li><a class="page-scroll" href="#why" itemprop="url">Why</a>
						</li>
						<li><a class="page-scroll" href="#pricing" itemprop="url">Pricing Options</a>
						</li>
						<li><a class="page-scroll" href="#contact" itemprop="url">Contact</a>
						</li>
              		    <li><a href="http://disputebills.com/news/" itemprop="url">News</a>
                        </li>
					</ul>
				</div>

			</div>
		</nav>
		<!--// .navbar -->
	</header>


	<main role="main" itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" itemscope="itemscope">

		<section id="what">
			<div class="banner">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 aligner">
							<div class="slideUp scrollme" data-when="enter" data-from="0.5" data-to="0" data-opacity="0" data-translatey="-200">
								<h1 class="main-headline"><?php the_field('banner_h1_title_text'); ?><span class="second-color-h1"> <?php the_field('banner_h1_title_text_color'); ?></span></h1>
								<h2 class="green animateme" data-when="exit" data-from=".1" data-to=".9" data-opacity="0.6" data-easing="easeinout" data-translatey="275"><?php the_field('banner_h2_description_text'); ?></h2>
								<a href="#myModal" class="btn btn-dispute animateme" data-toggle="modal" data-when="exit" data-from=".1" data-to=".9" data-opacity="0.6" data-easing="easeinout" data-translatey="250"><?php the_field('call_to_action_main_button'); ?></a>
    <!-- START MY DISPUTE POPUP FORM -->
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Start Your Dispute</h4>
				</div>
				<div class="modal-body">
					<!-- BEGIN DISPUTE FORM -->
					<?php echo do_shortcode( '[contact-form-7 id="62" title="Start Dispute"]'); ?>
					<?php // echo do_shortcode( '[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
					<!--// END FORM  -->
				</div>
			</div>
		</div>
	</div>
    <!--/ END MY DISPUTE POPUP FORM -->

<br><br>
<div><a href="#works" class="page-scroll continue-icon hover animateme" style="
    color: #fff;
    font-size: 23px;
    padding: 10px 10px 5px 10px;
    /* border-radius: 50%; */
    border-color: #fff;
    border-width: 2px;
    border-style: solid;
    width: 40px;
    height: 40px;
    border-radius: 50%;
" data-when="exit" data-from=".1" data-to=".9" data-opacity="0.1" data-easing="easeinout" data-translatey="250"><i class="outline-icon glyphicon glyphicon-menu-down" style="
"></i></a></div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="works">
			<div class="works">
				<div class="container">
					<div class="col-sm-12">
						<div class="row">
							<h1>How it works</h1>
							<span class="center-border-line"></span>
							<div class="col-md-4">
								<h2>Tell us your story</h2>
								<p><img class="alignnone size-full wp-image-13 img-responsive" src="http://disputebills.com/site/uploads/2015/05/w1.png" alt="w1" width="114" height="114" />
								</p>
								<p>Start with a free care evaluation. In order to fight for you, we first need to understand your situation. Don&#8217;t worry, we&#8217;ve seen it all.</p>
							</div>
							<div class="col-md-4">
								<h2>Pick a Plan</h2>
								<p><img class="alignnone size-full wp-image-15 img-responsive" src="http://disputebills.com/site/uploads/2015/05/w2.png" alt="w2" width="115" height="114" /></p>
	
<!--							
<p>We have a pricing option for every scenario. For questions on which plan best suites you, <a href="#" id="livilyChatLink" class="livilyChatButton ClickdeskChatLink" image="false" onclick="return false;">click here</a> to speak to a Dispute billing specialist.</p>
-->
<p>We have a pricing option for every scenario. For questions on which plan best suites you, use the chat on the bottom of the screen to speak to a representative.</p>


							</div>
							<div class="col-md-4">
								<h2>We save you money</h2>
								<p><img class="alignnone size-full wp-image-15 img-responsive" src="http://disputebills.com/site/uploads/2015/05/w3.png" alt="w2" width="115" height="114" /></p>
								<p>Let us get to work. We will immediately begin the investigation and recovery process and update you along the way.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="who">
			<div class="who">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Who Is <span class="color-primary">Dispute</span></h1>
							<span class="center-border-line"></span>
							<p style="color: #fff;">We're a national network of money saving, bill fighters. Combined, we leverage over 200 years of medical billing and patient advocacy experience. Our team consists of former billing specialists, patient advocates, and insurance and patient care representatives.</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="why">
			<div class="why">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">

							<h1>Healthcare Trends</h1>
							<span class="center-border-line"></span>
							<p>Health care is expensive and difficult to understand. Sometimes you just need help.</p>

							<div class="flexbox row counting-boxes">
								<div class="flex-card-list">
<style>
h2.green {
  margin: 20px 0;
  margin-bottom: 27px;
  line-height: 1;
  font-family: 'Museo Sans 900' !important;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
.counter-facts {
  color: #969696;
  -webkit-font-smoothing: antialiased;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  padding: 0;
  margin: 0 0 10px;
  font-family: 'Lato';
  display: block;
  line-height: 28px;
  margin-bottom: 0px;
}
.counter-top {
 display: block;
 margin-bottom: 20px;
}
</style>

									<div data-sr class="flex-card-listitem col-xs-12 col-sm-6 col-md-3">
										<div class="flex-card counter-border">

<h2 class="green">
<span class="counter-top">
<span class="counterup">11</span><span class="counterup-percent">%</span>
</span>
<span class="counter-facts">Increase in out-of-pocket costs in 2015</span>
</h2>

										</div>
									</div>

									<div data-sr class="flex-card-listitem col-xs-12 col-sm-6 col-md-3">
										<div class="flex-card counter-border">
<h2 class="green">
<span class="counter-top">
<span class="counterup">40</span><span class="counterup-percent">%</span>
</span>
<span class="counter-facts">Working age adults skip care due to costs</span>
</h2>											
										</div>
									</div>

									<div data-sr class="flex-card-listitem col-xs-12 col-sm-6 col-md-3">
										<div class="flex-card counter-border">
<h2 class="green">
<span class="counter-top">
<span class="counterup">62</span><span class="counterup-percent">%</span>
</span>
<span class="counter-facts">Of all bankruptcies are caused by medical problems</span>
</h2>	
											
										</div>
									</div>

									<div data-sr class="flex-card-listitem col-xs-12 col-sm-6 col-md-3">
										<div class="flex-card counter-border">


<h2 class="green">
<span class="counter-top">
<span class="counterup">78</span><span class="counterup-percent">%</span>
</span>
<span class="counter-facts">Of medical bankruptcies filed by individuals with insurance</span>
</h2>										</div>
									</div>

								</div>
								<!--// .flex-card-list -->
							</div>
							<!--// .row -->
						</div>
						<!--// .col-sm-12 -->
					</div>
					<!--// .row -->
				</div>
				<!--// .container-fluid -->
			</div>
			<!--// .why -->
		</section>






		<section id="pricing">
			<div class="pricing">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
                          <h1>Pricing<span class="color-primary"> Options</span></h1>
							<span class="center-border-line"></span>
							<p>Pick the scenario that best suits you...</p>
							<div class="flexbox row">
								<div class=flex-card-list>

									<div data-sr="enter left, hustle 20px" class="flex-card-listitem flex-card-left col-sm-6">
										<div class="flex-card">
											<h2>Hourly</h2>
                                            <p class="bold price-table-cost">
												<span class="savings">$100 an hour</span>
											</p>
											<div class="cont flex-card-content">
												<p>Planning for a medical event? Prevent future out-of-pocket costs.</p>
												<a class="btn btn-block btn-lg btn-primary" href="mailto:sales@disputebills.com?subject=Hourly">Select</a>
												<ul>
													<li class="pricing-check fa fa-check">Free Care Evaluation</li>
													<li class="pricing-check fa fa-check">Dedicated Billing Advocate</li>
													<li class="pricing-check fa fa-check">Resolution Summary Report</li>
												</ul>
											</div>
										</div>
									</div>

									<div data-sr="enter right, hustle 20px" class="flex-card-listitem flex-card-right col-sm-6">
										<div class="flex-card">
											<h2>Contingency</h2>
											<p class="bold price-table-cost">
												<span class="savings">30% of savings</span>
											</p>
											<div class="cont flex-card-content">
												<p>Pay only when we save you money. If we don't save you money, don't pay a cent.</p>
												<a class="btn btn-block btn-lg btn-primary" href="mailto:sales@disputebills.com?subject=Contingency">Select</a>
												<ul>
													<li class="pricing-check fa fa-check">Free Care Evaluation</li>
													<li class="pricing-check fa fa-check">Dedicated Billing Advocate</li>
													<li class="pricing-check fa fa-check">Resolution Summary Report</li>
												</ul>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="newsletter">
			<div class="newsletter">
				<div class="container">
					<div class="text-center">
						<h2 class="center-title"> Newsletter</h2>
						<span class="center-border-line"></span>
						<p class="sub-text">Subscribe to our weekly updates</p>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<?php echo do_shortcode( '[contact-form-7 id="115" title="Newsletter"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>


	</main>



	<footer class="footit">

		<section id="contact">
			<div class="contact">
				<div class="container">
					<div class="row">

						<div class="col-sm-12">
							<h1>Contact <span class="color-primary">Us</span></h1>
							<div data-sr="enter bottom">
								<?php echo do_shortcode( '[contact-form-7 id="12" title="Contact Us"]'); ?>
							</div>
						</div>

					</div>
					<!--// .row -->
				</div>
				<!--// .container -->
			</div>
		</section>

		<section class="footer scrollme">
			<div class="footer_block animateme" data-when="enter" data-from="1" data-to="0" data-rotatex="90">
				<div class="container">
					<div class="row">

						<div class="col-sm-6 col-sm-offset-3">
							<div class="social">
								<ul class="flex-container">
									<li class="flex-item"><a href="https://www.facebook.com/disputebills"><i class="fa fa-md fa-facebook"></i></a>
									</li>
									<li class="flex-item"><a href="https://twitter.com/DisputeBills"><i class="fa fa-md fa-twitter"></i></a>
									</li>
									<li class="flex-item"><a href="https://plus.google.com/103378801284776045769"><i class="fa fa-md fa-google-plus"></i></a>
									</li>
<li class="flex-item"><a href="https://linkedin.com/dispute"><i class="fa fa-md fa-linkedin"></i></a>
									</li>

								</ul>
							</div>
						</div>

						<div class="col-sm-6 col-sm-offset-3">
							<address>
							<div itemscope itemtype="http://schema.org/LocalBusiness">
								<span itemprop="name">Dispute - Medical Billing Negotiation & Advocacy</span> 
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> <span itemprop="streetAddress">410 N. May Street</span> <span itemprop="addressLocality">Chicago</span>, <span itemprop="addressRegion">Illinois</span> <span itemprop="postalCode">60642</span> <a style="display: block" href="tel:+13126249171" itemprop="telephone">(312) 624-9171</a> </div>
							</div>
							<small><a href="http://disputebills.com/privacy-policy/">Privacy Policy</a> | <a href="http://disputebills.com/terms-of-use/"> Terms of Use</a> | <a href="http://disputebills.com/support/"> Support</a></small> 
						</address>
						</div>

					</div>
					<!--// .row -->
				</div>
				<!--// .container -->
			</div>
		</section>
<div class="copyright-footer" style="
    background-color: #5E5E5E;
    border-top: 1px solid rgba(238, 238, 238, 0.08);
">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <p style="margin-bottom:0px;color: #ffffff;text-align: center;padding: 15px;">© 2015 - www.disputebills.com. - All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
	</footer>


 

<?php get_footer('home'); ?>



	</body>
</html>