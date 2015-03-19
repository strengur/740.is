<!DOCTYPE html>

<html>
	<head><meta charset="UTF-8" />
		<title>740.is - Vefsíður</title>
		<link rel="stylesheet" type="text/css" href="normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

	<body>
		<nav>
			<div class="logo">
				<img src="images/740is-logo-163px.png" alt="Logo 740.is">
			</div>
			
			<div class="menu-items">
				<ul>
						<a href="#heim"><li>Heim</li></a>
						<a href="#verkefni"><li>Verkefni</li></a>
						<a href="#umokkur"><li>Um 740</li></a>
						<a href="#"><li id="display-contact-form">Hafa samband</li></a>
				</ul>
			</div>
			
			<div class="mobile"><img src="images/mobile-button.png"></div>
				
		</nav>
	
		<!--
			IMAGE BACKGROUND WITH BLURRED SECTION FOR TEXT
		-->
		
		<section class="landing" id="heim">
			
			<div class="landing-welcome">
				<h1>Þú ert á réttum stað!</h1>
				<h4>Láttu okkur um netsíðuna þína</h4>
			</div>
			
			<div class="landing-contact">
				<?php include('contact.php'); ?>
			</div>
			
		</section>
		
		<section class="intro" id="kynning">
			<div class="content three-column" id="">  <!-- ID MISSING -->
				
				<div class="intro-content-row-one">
					<center><img src="images/740-intro-img-new.png" alt=""></center>
					<h4>Vefsíðugerð</h4>
					<span id="none-mobile-hr"><hr></span>
					<p>Við leggjum metnað okkar í að hanna flottar, stílhreinar vefsíður sem aðlaga sig að snjallsímum og öðrum snjalltækjum. Passað er upp á að síðurnar séu léttar til að auðveldara sé að skoða þær í símum. Vertu með aðlaðandi útlit á vefsíðunni þinni því það skiptir máli!</p>
<!-- 					<center><button>Smelltu hér</button></center> -->
					<span id="mobile-hr"><hr></span>
				</div>
				
				
				<div class="intro-content-row-two">
					<center><img src="images/740-intro-img-online.png" alt=""></center>
					<h4>Netverslun</h4>
					<span id="none-mobile-hr"><hr></span>
					<p>Notendavæn og traust netverslun sem við sérsníðum að þínu útliti. Sérlega einföld í notkun og hægt að hafa ýmsa greiðsluvalmöguleika. Vertu með vörurnar þínar til sölu allan sólarhringinn!</p>
<!-- 					<center><button>Smelltu hér</button></center> -->
					<span id="mobile-hr"><hr></span>
				</div>
				
				<div class="intro-content-row-three">
					<center><img src="images/740-intro-img-nytt-utlit.png" alt=""></center>
					<h4>Útlitsbreyting</h4>
					<span id="none-mobile-hr"><hr></span>
					<p>Er langtsíðan að vefsíðan hjá þér var uppfærð síðast eða er netsíðan hjá þér lítt spennandi, ónotendavæn og beinlínis fráhrindandi. Það er kominn tími til að gefa núverandi netsíðu nútímalegt og stílhreint útlit - Hafðu samband!</p>
<!-- 					<center><button>Smelltu hér</button></center> -->
<!-- 					<span id="mobile-hr"><hr></span> -->
				</div>
			</div>
		</section>
		
		
		<!--
			IMAGE BACKGROUND WHERE landing and intro SECTION's SCROLL OVER
		-->
		
		<section class="image-gap image-2" id="verkefni">
			<div class="container">
				<h1>FYRRI VERKEFNI</h1>
				<center><button>Sjá Öll</button></center>
  			</div>
		</section>
		
		<section class="testimonials">
			<h2>SÍÐUSTU VERKEFNI</h2>
			<div class="testimonials-left">
				<center><img src="images/ll-netverslun.png" alt="Mynd af tilbúinni vefsíðu" width="250px"></center>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis a nibh id gravida. Vestibulum sed sodales enim, eget pretium tortor. Fusce accumsan accumsan dignissim. Vivamus sollicitudin tristique felis, sit amet iaculis dui vulputate a. Curabitur placerat neque sed mi venenatis tincidunt. Vestibulum eget tempor nulla, ut vehicula velit. Quisque lobortis tortor interdum lectus suscipit, id pharetra augue facilisis.</p>
				<center><button>Skoða Nánar</button></center>
			</div>
			
			<div class="testimonials-right">
				<center><img src="images/thinnlikami-netsida.jpg" alt="Mynd af tilbúinni vefsíðu" width="250px"></center>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis a nibh id gravida. Vestibulum sed sodales enim, eget pretium tortor. Fusce accumsan accumsan dignissim. Vivamus sollicitudin tristique felis, sit amet iaculis dui vulputate a. Curabitur placerat neque sed mi venenatis tincidunt. Vestibulum eget tempor nulla, ut vehicula velit. Quisque lobortis tortor interdum lectus suscipit, id pharetra augue facilisis.</p>
				<center><button>Skoða Nánar</button></center>
			</div>
			
		</section>
		
		<section class="image-gap image-1" id="umokkur">
			<div class="container">
				<h1>UM OKKUR</h1>
  			</div>
		</section>
		
		<section class="content">
			<div class="content-text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis a nibh id gravida. Vestibulum sed sodales enim, eget pretium tortor. Fusce accumsan accumsan dignissim. Vivamus sollicitudin tristique felis, sit amet iaculis dui vulputate a. Curabitur placerat neque sed mi venenatis tincidunt. Vestibulum eget tempor nulla, ut vehicula velit. Quisque lobortis tortor interdum lectus suscipit, id pharetra augue facilisis. Aenean cursus, augue at consequat efficitur, ante ligula consectetur quam, vel eleifend tortor quam sed odio. Sed congue hendrerit justo eget condimentum. Nulla nisi nibh, porta vel cursus in, iaculis eget turpis. Phasellus a eros diam. Vestibulum nec neque tristique purus ornare feugiat sed vitae felis. Nullam quis viverra libero. In in turpis sit amet nunc egestas pretium.</p>
			</div>
		</section>
		
		<footer>
			<h4>&copy;2014-<?php echo date("Y"); ?> | 740.is - Allur réttur áskilinn.</h4>
		</footer>
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/main-java.js"></script>
	</body>
</html>