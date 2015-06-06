		<?php get_header(); ?>

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
			<div class="content three-column">
				
				<div class="intro-content-row-one">
					<h4><img src="<?php bloginfo('template_directory');?>/images/740-intro-img-new.png" alt="Hringlaga útlínumynd af vefsíðu"><br><br>
					Vefsíðugerð</h4>
					<div class="none-mobile-hr"><hr></div>
					<p>Við leggjum metnað okkar í að hanna flottar, stílhreinar vefsíður sem aðlaga sig að snjallsímum og öðrum snjalltækjum. Passað er upp á að síðurnar séu léttar til að auðveldara sé að skoða þær í símum. Vertu með aðlaðandi útlit á vefsíðunni þinni því það skiptir máli!</p>
<!-- 					<center><button>Smelltu hér</button></center> -->
					<div class="mobile-hr"><hr></div>
				</div>
				
				
				<div class="intro-content-row-two">
					<h4><img src="<?php bloginfo('template_directory');?>/images/740-intro-img-online.png" alt="Hringlaga mynd af innkaupakerru"><br><br>
					Netverslun</h4>
					<div class="none-mobile-hr"><hr></div>
					<p>Notendavæn og traust netverslun sem við sérsníðum að þínu útliti. Sérlega einföld í notkun og hægt að hafa ýmsa greiðsluvalmöguleika. Vertu með vörurnar þínar til sölu allan sólarhringinn!</p>
<!-- 					<center><button>Smelltu hér</button></center> -->
					<div class="mobile-hr"><hr></div>
				</div>
				
				<div class="intro-content-row-three">
					<h4><img src="<?php bloginfo('template_directory');?>/images/740-intro-img-nytt-utlit.png" alt="Orðin NÝTT ÚTLIT inn í hring"><br><br>
					Útlitsbreyting</h4>
					<div class="none-mobile-hr"><hr></div>
					<p>Er langt síðan að vefsíðan hjá þér var uppfærð síðast eða er netsíðan hjá þér lítt spennandi, ónotendavæn og beinlínis fráhrindandi. Það er kominn tími til að gefa núverandi netsíðu nútímalegt og stílhreint útlit - Hafðu samband!</p>
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
				<div class="button-white"><a href="#">Skoða Öll</a></div>
  			</div>
		</section>
		
		<section class="testimonials">
			<h2>SÍÐUSTU VERKEFNI</h2>
			<div class="testimonials-left">
				<?php

					$args = array('category_name' => 'verkefni', 'posts_per_page' => 1, 'offset' => 0);
					$query = new WP_Query( $args );

					$firstPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => 1, 'offset' => 0, 'post_status' =>'any' ); 
					$firstAttachments = get_posts( $firstPhoto );
					
					if ( $firstAttachments ) {
						foreach ( $firstAttachments as $firstAttachment ) {
							echo '<div class="testimonials-image">';
							the_attachment_link( $firstAttachment->ID , true);
							echo '</div>';
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}
					
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();

							echo '<a href="';
								the_permalink();
							echo '"><h1>';
								the_title();
							echo '</h1></a>';
							echo '<p>';
								the_excerpt_max_charlength(310);
							echo '</p>';
						}
						
						echo '<div class="button-gray"><a href="';
						the_permalink();
						echo '">Skoða Nánar</a></div>';

						wp_reset_postdata();

					} else {

						echo "Því miður finnst engin grein til að birta.";
					}
				?>

			</div>
			
			<div class="testimonials-right">
				<?php
					
					$args = array('category_name' => 'verkefni', 'posts_per_page' => 1, 'offset' => 1);
					$query = new WP_Query( $args );
					
					$secondPhoto = array( 'post_type' => 'attachment', 'posts_per_page' => 1, 'offset' => 2, 'post_status' =>'any' ); 
					$secondAttachments = get_posts( $secondPhoto );

					if ( $secondAttachments ) {
						foreach ( $secondAttachments as $secondAttachment ) {
							
							echo '<div class="testimonials-image">';
							the_attachment_link( $secondAttachment->ID , true);
							echo '</div>';
							}
					} else {
						echo "Því miður vantar mynd með þessari færslu.";
					}

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post();

							echo '<a href="';
								the_permalink();
							echo '"><h1>';
								the_title();
							echo '</h1></a>';
							echo '<p>';
								the_excerpt_max_charlength(310);
							echo '</p>';
						}
						
						echo '<div class="button-gray"><a href="';
						the_permalink();
						echo '">Skoða Nánar</a></div>';
						
						wp_reset_postdata();

					} else {
						echo "Því miður finnst engin grein til að birta";
					}
				?>
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
		
		<?php get_footer(); ?>