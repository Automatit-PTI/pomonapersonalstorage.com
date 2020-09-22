<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- For responsive design -->
    <title><?=$title?> | Pomona Personal Storage</title>
    <meta name="description" content="<?=$description?>">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,300|Yanone+Kaffeesatz:400,700|Open+Sans+Condensed:300,300italic,700">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/accordion.js"></script>
    <?php if(strstr($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'],'index')) { ?>   
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    	<script type="text/javascript" src="js/gmap.js"></script>
    <?  } ?> 
    <script type="text/javascript">
		<!-- Pull function -->
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('#nav');
				menuHeight	= menu.height();
		
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
				var w = $(window).width();
				if(w > 320 && menu.is(':hidden')) { 
					menu.removeAttr('style');
				}
			});
		});
	</script>
</head>
<body>

    <header>

        <div id="TopBanner">
            
            <div id="Logo">
                <a href="index.php"><img src="images/logo-pomona.png" alt="Pomona Personal Storage logo"></a>
            </div>
                
            <div id="NavigationBlock">
                <p id="PhoneNumber">Give Us a Call: 909-591-0441</p>
                <nav>
                    <a id="pull"><img src="images/ic-menu.png" alt="Menu icon"> Menu</a>
                    <ul id="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="https://www.securestoragetransactions.com/sitelink/index.mvc?action=select_unit&sid=601177">View Prices</a></li>
                        <li><a href="http://www.uhaul.com/Locations/Truck-Rentals-near-Pomona-CA-91766/053043/" target="_blank">U-Haul</a></li>
                        <li class="nav-mob"><a href="space-estimator.php">Space Estimator</a></li>
                        <li class="nav-mob"><a href="size-guide.php">Size Guide</a></li>
                        <li class="nav-nomob"><a>What Size Unit?</a>
                            <ul>
                                <li><a href="space-estimator.php">Space Estimator</a></li>
                                <li><a href="size-guide.php">Size Guide</a></li>
                            </ul></li>
                        <li class="nav-mob"><a href="storage-tips.php">Storage Tips</a></li>
                        <li class="nav-mob"><a href="storage-faq.php">FAQ</a></li>
                        <li class="nav-nomob"><a>Storage Help</a>
                            <ul>
                                <li><a href="storage-tips.php">Storage Tips</a></li>
                                <li><a href="storage-faq.php">FAQ</a></li>
                            </ul></li>
                    </ul>        

                </nav>
            
            </div>
            
            <a href="pay-bill.php" id="PayBill"><img src="images/ic-dollar.png" alt="Dollar icon" id="DollarIcon">Pay Bill <span>Online</span></a>    
            
            <div class="ClrFloat"></div>
        </div>
        
    </header>
    