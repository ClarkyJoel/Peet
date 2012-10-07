
<!DOCTYPE html>
<html>
	<head>
		<title>Peet - Homepage</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/bjqs.css" />
		
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="js/bjqs-1.3.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<img src="images/logo.png" id="logo" />
				
				<div id="navMenu">
					<div class="aboveNavMenu">
						<a href="#FINDPEETS" class="findPeet"><img src="images/findPeet.png" class="findPeetImg"  />Find Peet's</a>
						<nav>
							<a href="#AccountManager">Welcome, Ha Son</a> | 
							<a href="#SignOut">Sign Out</a>
							<a href="#Cart"><img src="images/buyIcon.png" class="cart" />2 Items</a>
						</nav>
					</div>
					<ul>
						<li><a href="#CRAFT">Craft</a></li>
						<li><a href="#COFFE">Coffee</a></li>
						<li><a href="#TEA">Tea</a></li>
						<li><a href="#STORE">Store</a></li>
						<li><a href="#COMMUNITY">Community</a></li>
					</ul>
							
						<img src="images/searchIcon.png" class="searchIcon" />
						<input id="search" type="text" maxlength="20" value="" placeholder="Search" />
				</div>
				<div id="banner-fade">
					<ul class="bjqs">
						<li><img src="images/Slide-IMG-1.png" /></li>
						<li><img src="images/Slide-IMG-2.png" /></li>
					</ul>
					<div class="bannerAds">
						
							<img src="images/coffeIcon.png" class="img1" />
							<h2>Major<br> Dickason’s<br> Blend</h2>
							<h3>Perfected 43 years ago.<br>Roasted daily ever since.</h3>
							<span class="price">$14.95 per lb.</span>
							<strong><a class="shopNow" href="#shopNow">Shop Now</a></strong>
							<p class="description">Since 1969, Major Dickason’s blend has remained synonymous with Alfred Peet. Try a pound to discover Mr. Peet’s idea of the perfect cup.</p>
							<img src="images/BannerAds.png" class="img2" />
						
					</div>
				</div>
				<script class="secret-source">
					jQuery(document).ready(function($) {

					  $('#banner-fade').bjqs({
						height      : 736,
						width       : 1170,
						responsive  : true
					  });

					});
				</script>
				
			</div><!-- .HEADER -->
			<div class="clear"></div>
			<div id="content">
				<div class="wideBannerPromo">
					<h3>Designated space for wide banner promo</h3>
					<img src="images/wideBannerPromoBg.png" />
					
				</div>
				<ul class="promo">
					<li>
						<div class="promo1">
							<h3>Save on fall flavors</h3>
							<img src="images/thumbsPromo1.png" class="thumbs" />
							<p class="description">Fall’s best drinks are here. Sip your way through them all.</p>
							<a href="#GetaCoupon">Get a coupon >></a>
						</div>
					</li>
					<li>
						<div class="promo2">
							<h3>Indian Peaberry</h3>
							<img src="images/thumbsPromo2.png" class="thumbs" />
							<p class="description">Our favorite coffee in all of India. $13.95/lb.</p>
							<strong><a class="shopNow" href="#shopNow">Shop Now</a></strong>
						</div>
					</li>
					<li>
						<div class="promo3">
							<h3>Brewing 101: French Press</h3>
							<img src="images/thumbsPromo3.png" class="thumbs" />
							<p class="description">Learn how to brew a more flavorful cup of Peet’s. Lorem ipsum dolor sit amet consectatur adipsicing.</p>
							<a href="#WATCH">Watch the video >></a>
						</div>
					</li>
					<li>
						<div class="promo4">
							<h3>Put your order on automatic</h3>
							<img src="images/thumbsPromo4.png" class="thumbs" />
							<p class="description">Schedule a recurring order to save 50% on shipping.</p>
							<a href="#ScheduleYourOrder">Schedule your order >></a>
						</div>
					</li>
				</ul>
			</div><!-- .CONTENT -->
			<div class="clear"></div>
			<div id="footer">
				<div class="footerPrimaryLinks footerMenu">
					<ul>
						<li><a href="#MyAccount">My Account</a></li>
						<li><a href="#CustomerService">Customer Service</a></li>
						<li><a href="#StoreLocator">Store Locator</a></li>
						<li><a href="#AtPeetStores">At Peet’s Stores</a></li>
						<li><a href="#PeetCard">Peet’s Card</a></li>
						<li><a href="#NewsletterSign-up">Newsletter Sign-up</a></li>
					</ul>
				</div>
				<div class="footerShopMenu footerMenu">
					<ul>
						<h3>Shop</h3>
						<li><a href="#Coffee">Coffee</a></li>
						<li><a href="#Tea">Tea</a></li>
						<li><a href="#Gifts">Gifts</a></li>
						<li><a href="#Merchandise">Merchandise</a></li>
						<li><a href="#Sale">Sale</a></li>
						<li><a href="#RecurringDelivery">Recurring Delivery</a></li>
					</ul>
				</div>
				<div class="footerAboutUsMenu footerMenu">
					<ul>
						<h3>About Us</h3>
						<li><a href="#OurHistory">Our History</a></li>
						<li><a href="#OurPeople">Our People</a></li>
						<li><a href="#MeettheRoasters">Meet the Roasters</a></li>
						<li><a href="#Sustainability">Sustainability</a></li>
						<li><a href="#AttheGroceryStore">At the Grocery Store</a></li>
						<li><a href="#Careers">Careers</a></li>
						<li><a href="#News/Media">News/Media</a></li>
						<li><a href="#InvestorRelations">Investor Relations</a></li>
					</ul>
				</div>
				<div class="footerForBusinessMenu footerMenu">
					<ul>
						<h3>For Business</h3>
						<li><a href="#OfficeCoffee">Office Coffee</a></li>
						<li><a href="#GroceryProgram">Grocery Program</a></li>
						<li><a href="#FoodService">Food Service</a></li>
						<li><a href="#AffiliateProgram">Affiliate Program</a></li>
					</ul>
				</div>
				<div class="footerJoinUsMenu footerMenu">
					<ul>
						<h3>Join Us On</h3>
						<li><a href="#Twitter"><img src="images/twitterIcon.png" />Twitter</a></li>
						<li><a href="#Facebook"><img src="images/facebookIcon.png" />Facebook</a></li>
						<li><a href="#Instagram"><img src="images/instagramIcon.png" />Instagram</a></li>
					</ul>
				</div>
				<div class="copyright">
					<nav>
						<span>© 2012 PEET’S COFFEE & TEA</span>
						<a href="#PRIVACYPOLICY">PRIVACY POLICY</a>
						<a href="#TERMSOFSERVICE">TERMS OF SERVICE</a>
					</nav>
				</div>
			</div><!-- .FOOTER -->
		</div> <!-- .WRAPPER -->
	</body>
</html>