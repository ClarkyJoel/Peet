
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
				<div id="banner-fade">
					<ul class="bjqs">
						<li><img src="images/Slide-IMG-1.png" /></li>
						<li><img src="images/Slide-IMG-2.png" /></li>
					</ul>
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
			</div><!-- .CONTENT -->
			<div class="clear"></div>
			<div id="footer">
			</div><!-- .FOOTER -->
		</div> <!-- .WRAPPER -->
	</body>
</html>