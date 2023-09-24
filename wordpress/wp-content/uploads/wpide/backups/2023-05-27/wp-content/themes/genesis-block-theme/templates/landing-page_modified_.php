<?php
/**
 * Template Name: Landing Page
 *
 * This template has width, margin and padding containers removed for use with page builder plugins.
 *
 * @package Genesis Block Theme
 */

get_header(); ?>

<div class="home_top">
	<div class="home_top_blue_filter"></div>
	<div class="home_top_center">
		<div class="home_top_logo">
		    Landing Page
			<img src="/wp-content/uploads/2023/05/MARITIME-White.svg"/>
		</div>
		<div class="home_top_copy">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<!-- <section> -->
	<div class="periodic_table_section" id="about">
		<div class="periodic_table">
			<div class="definition">
				<p>DYNE</p>
				<p>/dīn/ <italic>noun</italic></p>
				<p>
					<strong>: a unit of force</strong>; also represents four critical rare earth elements <italic>(CREE)</italic>:
				</p>
			</div>

			<div class="symbols">
				<div class="symbol">
					<img src="/wp-content/uploads/2022/09/dy.svg"/>
				</div>
				<div class="symbol">
					<img src="/wp-content/uploads/2022/09/y.svg"/>
				</div>
				<div class="symbol">
					<img src="/wp-content/uploads/2022/08/nd.svg"/>
				</div>
				<div class="symbol">
					<img src="/wp-content/uploads/2022/08/eu.svg"/>
				</div>
			</div>
		</div>
	</div>
<!-- </section> -->

<div class="ticker_holder" id="news">
	<div class="left_disappear"></div>
	<div class="right_disappear"></div>
<div class="ticker">
	<?php
		$args = array(
		  'numberposts' => 10,
		  'post_type'   => 'news'
		);

		$news = get_posts( $args );
		foreach ($news as $post) { ?>
  <div class="post">
		<a href="<?php echo get_field('url', $post->ID); ?>" target="_blank">
			<div class="post_url"><?php echo get_field('news_outlet', $post->ID); ?></div>
			<div class="post_title"><?php echo $post->post_title; ?></div>
		</a>
	</div>
<?php } ?>
</div>
</div>

<div class="quote_section">
	<div class="quote">
		<div class="text">“Equip yourself for life, not solely for your own benefit, but for the benefit of the whole community”</div>
		<div class="author">Sir John Monash</div>
	</div>
</div>

<div class="section_normal" id="team">
	<div class="section_title">Leadership</div>
	<div class="team">
		<?php
			$args = array(
			  'numberposts' => 5,
			  'post_type'   => 'team',
				'order'=> 'DESC',
				'orderby' => 'title'
			);

			$team = get_posts( $args );
			foreach ($team as $team_member) { ?>
				<div class="team_member">
					<div class="team_member_image" data-popup="<?php echo $team_member->post_name; ?>">
						<img src="<?php echo get_the_post_thumbnail_url($team_member->ID); ?>"/>
					</div>
					<div class="team_member_info">
						<div class="team_member_name"><?php echo $team_member->post_title; ?></div>
						<div class="team_member_bio_excerpt"><?php echo wp_trim_words( $team_member->post_content, 30, '.' ); ?><div class="read_more"  data-popup="<?php echo $team_member->post_name; ?>">READ MORE</div></div>
						<?php if (get_field('linkedin_url', $team_member->ID)) { ?><div class="team_member_linkedin"><a href="<?php echo get_field('linkedin_url', $team_member->ID); ?>"><svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_143_31)">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M5.20002 38.7H35.3C37.6758 38.7 39.6 36.7758 39.6 34.4V4.3C39.6 1.92425 37.6758 0 35.3 0H5.20002C2.82427 0 0.900024 1.92425 0.900024 4.3V34.4C0.900024 36.7758 2.82427 38.7 5.20002 38.7Z" fill="#C4C4C4"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M34.225 33.3249H28.4845V23.5424C28.4845 20.8603 27.4633 19.3607 25.3455 19.3607C23.0343 19.3607 21.8303 20.9194 21.8303 23.5424V33.3249H16.294V14.6898H21.8303V17.1999C21.8303 17.1999 23.4965 14.1201 27.4471 14.1201C31.3978 14.1201 34.2304 16.5334 34.2304 21.5268V33.3249H34.225ZM9.68815 12.2496C7.80152 12.2496 6.27502 10.7123 6.27502 8.80957C6.27502 6.90682 7.80152 5.36957 9.68815 5.36957C11.5748 5.36957 13.1013 6.90682 13.1013 8.80957C13.1013 10.7123 11.5748 12.2496 9.68815 12.2496ZM6.82865 33.3249H12.6014V14.6898H6.82865V33.3249V33.3249Z" fill="white"/>
						</g>
						<defs>
						<clipPath id="clip0_143_31">
						<rect width="38.7" height="38.7" fill="white" transform="translate(0.900024)"/>
						</clipPath>
						</defs>
						</svg></a></div><?php } ?>
					</div>
				</div>

				<div class="popup_holder" id="<?php echo $team_member->post_name; ?>">
					<div class="popup_inner_holder">
						<div class="popup">
							<div class="close_popup">X</div>
							<div class="popup_inner">
								<div class="popup_top">
									<div class="popup_title"><?php echo $team_member->post_title; ?></div>
									<?php if (get_field('linkedin_url', $team_member->ID)) { ?><div class="popup_linkedin"><a href="<?php echo get_field('linkedin_url', $team_member->ID); ?>"><svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_143_31)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M5.20002 38.7H35.3C37.6758 38.7 39.6 36.7758 39.6 34.4V4.3C39.6 1.92425 37.6758 0 35.3 0H5.20002C2.82427 0 0.900024 1.92425 0.900024 4.3V34.4C0.900024 36.7758 2.82427 38.7 5.20002 38.7Z" fill="#C4C4C4"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M34.225 33.3249H28.4845V23.5424C28.4845 20.8603 27.4633 19.3607 25.3455 19.3607C23.0343 19.3607 21.8303 20.9194 21.8303 23.5424V33.3249H16.294V14.6898H21.8303V17.1999C21.8303 17.1999 23.4965 14.1201 27.4471 14.1201C31.3978 14.1201 34.2304 16.5334 34.2304 21.5268V33.3249H34.225ZM9.68815 12.2496C7.80152 12.2496 6.27502 10.7123 6.27502 8.80957C6.27502 6.90682 7.80152 5.36957 9.68815 5.36957C11.5748 5.36957 13.1013 6.90682 13.1013 8.80957C13.1013 10.7123 11.5748 12.2496 9.68815 12.2496ZM6.82865 33.3249H12.6014V14.6898H6.82865V33.3249V33.3249Z" fill="white"/>
									</g>
									<defs>
									<clipPath id="clip0_143_31">
									<rect width="38.7" height="38.7" fill="white" transform="translate(0.900024)"/>
									</clipPath>
									</defs>
									</svg></a></div><?php } ?>
								</div>
								<div class="popup_bottom">
									<div class="popup_copy"><?php echo $team_member->post_content; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>
	</div>
</div>

<div class="white_sections_divider"></div>

<div class="section_normal" id="advisors">
	<div class="section_title">Advisors</div>
	<div class="advisors">
		<?php
			$args = array(
			  'numberposts' => 10,
			  'post_type'   => 'advisors',
				'order'=> 'ASC',
				'meta_key'			=> 'last_name',
				'orderby'			=> 'meta_value',
			);

			$advisors = get_posts( $args );
			foreach ($advisors as $advisor) { ?>
				<div class="advisor" data-popup="<?php echo $advisor->post_name; ?>">
					<div class="advisor_image">
						<img src="<?php echo get_the_post_thumbnail_url($advisor->ID); ?>"/>
					</div>
					<div class="advisor_title"><?php echo $advisor->post_title; ?></div>
				</div>

				<div class="popup_holder" id="<?php echo $advisor->post_name; ?>">
					<div class="popup_inner_holder">
						<div class="popup">
							<div class="close_popup">X</div>
							<div class="popup_inner">
								<div class="popup_top">
									<div class="popup_title"><?php echo $advisor->post_title; ?></div>
									<?php if (get_field('linkedin_url', $advisor->ID)) { ?><div class="popup_linkedin"><a href="<?php echo get_field('linkedin_url', $advisor->ID); ?>"><svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0_143_31)">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M5.20002 38.7H35.3C37.6758 38.7 39.6 36.7758 39.6 34.4V4.3C39.6 1.92425 37.6758 0 35.3 0H5.20002C2.82427 0 0.900024 1.92425 0.900024 4.3V34.4C0.900024 36.7758 2.82427 38.7 5.20002 38.7Z" fill="#C4C4C4"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M34.225 33.3249H28.4845V23.5424C28.4845 20.8603 27.4633 19.3607 25.3455 19.3607C23.0343 19.3607 21.8303 20.9194 21.8303 23.5424V33.3249H16.294V14.6898H21.8303V17.1999C21.8303 17.1999 23.4965 14.1201 27.4471 14.1201C31.3978 14.1201 34.2304 16.5334 34.2304 21.5268V33.3249H34.225ZM9.68815 12.2496C7.80152 12.2496 6.27502 10.7123 6.27502 8.80957C6.27502 6.90682 7.80152 5.36957 9.68815 5.36957C11.5748 5.36957 13.1013 6.90682 13.1013 8.80957C13.1013 10.7123 11.5748 12.2496 9.68815 12.2496ZM6.82865 33.3249H12.6014V14.6898H6.82865V33.3249V33.3249Z" fill="white"/>
									</g>
									<defs>
									<clipPath id="clip0_143_31">
									<rect width="38.7" height="38.7" fill="white" transform="translate(0.900024)"/>
									</clipPath>
									</defs>
									</svg></a></div><?php } ?>
								</div>
								<div class="popup_bottom">
									<div class="popup_copy"><?php echo $advisor->post_content; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
	</div>
</div>
<!--
<div class="white_sections_divider"></div>

<div class="section_normal" id="featured-investment">
	<div class="section_subtitle">FEATURED INVESTMENT</div>
	<div class="section_title">Cook Islands Consortium</div>
	<div class="video_section_holder">
		<div class="video_left">
			<div class="video_section">
				<div class="starting_background" style="background-image: url('/wp-content/uploads/2022/08/video_background.png');"></div>
				<div class="video_holder" id="video">
				</div>
				<div class="play_button_holder">
					<div id="video_play" class="slider_button button-dark">
						<img src="/wp-content/uploads/2022/08/play_button.svg"/>
					</div>
				</div>
				<!-- /wp-content/uploads/2022/07/play_button_arrow.svg -->
				<!--
			</div>
			<div class="video_caption">Gerald McCormack, Cook Islands Natural Heritage Trust</div>
		</div>
		<div class="video_right">
			<p>CIC’s technology and the Cook Isalnd's unique geology ensure the project will cause de minimis harm to the marine environment, emit no CO2, and help the Cook Islanders shore up their coastline, all while offering access to battery minerals for building electric vehicles and avoiding the humanitarian concerns of “Conflict Cobalt” from the DRC.</p>
			<p><strong>DYNE Capital, a DYNE Asset Management affiliate, is the Cook Island government-approved investor</strong></p>
		</div>
	</div>
</div>
-->
<?php get_footer(); ?>


<script>

$(function() {

	var $slider = $( '.ticker');
 var CLASS_NAME = 'pause-state-class';

	 $slider.mouseenter(function() {
		 var track = $slider.find('.slick-track')[0];
		 var style = window.getComputedStyle(track);

		 const matrix = style.transform || style.webkitTransform || style.mozTransform;
		 const matrixValues = matrix.match(/matrix.*\((.+)\)/)[1].split(', ')
		 var pauseClass = $(`
				 <style id="${CLASS_NAME}">
						 .${CLASS_NAME} {
								 transform: translate3d(${matrixValues[4]}px, 0px, 0px) !important;
								 transition: none !important;
						 }
				 </style>`);
		 $(`html > head`).append(pauseClass);
		 $slider.find('.slick-track').addClass(CLASS_NAME);
		 $slider.slick('slickPause');
	 }).mouseleave(function() {
		 isSliderHover = false;
		 $slider.find('.slick-track').removeClass(CLASS_NAME);
		 $(`#${CLASS_NAME}`).remove();
		 $slider.slick('slickPlay');
	 });

 $slider.on('click', (e) => {
	 if (!isSliderInitialized) {
		 return;
	 }
	 var className = e.target.className;
	 var isPrev = className.includes('slick-prev');
	 var isNext = className.includes('slick-next');
	 if (!isPrev && !isNext) {
		 return;
	 }
	 $slider.find('.slick-track').removeClass(CLASS_NAME);
	 if (isPrev) {
		 $slider.slick('slickPrev');
	 } else if (isNext){
		 $slider.slick('slickNext');
	 }
 });
    $('.ticker').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 10000,
        cssEase:'linear',
				arrows: false,
				variableWidth: true,
				infinite: true,
				pauseOnHover: true,
    });

		$('.home_top_blue_filter').vegas({
		    slides: [
		        {   src: '/wp-content/uploads/2022/08/penrhyn-scaled.jpg',
		            video: {
		                src: [
		                    '/wp-content/uploads/2022/08/dyne-hero.mp4-720p.mp4',
		                ],
		                loop: true,
		                mute: true
		            }
		        }
		    ]
		});

		$(document).ready(function() {

	if(window.location.hash) {
		var href = window.location.hash;
			$('html, body').animate({
					scrollTop: $(href).offset().top - 100
			}, 1000);
	}

			$(".menu a").click(function() {
				var href = $(this).attr('href')
			    $('html, body').animate({
			        scrollTop: $(href).offset().top - 100
			    }, 1000);
					$('#cross').parent().toggleClass('open')
			});

			$('#cross').click(function() {
				$(this).parent().toggleClass('open')
			})

			$('.advisor').click(function() {
				var popup = $(this).data('popup')
				$('html').addClass('pause')
				$('#'+ popup).addClass('active')
			})

			$('.read_more').click(function() {
				var popup = $(this).data('popup')
				$('html').addClass('pause')
				$('#'+ popup).addClass('active')
			})

			$('.team_member_image').click(function() {
				var popup = $(this).data('popup')
				$('html').addClass('pause')
				$('#'+ popup).addClass('active')
			})

			$('.close_popup').click(function() {
				$('html').removeClass('pause')
				$('.popup_holder.active').removeClass('active')
			})



			var options = {
					id: 716255185,
	        // url: 'https://player.vimeo.com/video/737166886?h=9dd1906d7e',
	        width: 640,
	        loop: false,
					responsive: true,
					controls: true
	    };

	    var player = new Vimeo.Player('video', options);
			// var iframe = document.getElementById('video');
		  // var player = new Vimeo.Player(iframe);
			console.log(player)
			$('.play_button_holder').click(function() {
				$(this).fadeOut()
				$('.starting_background').hide()
				player.play()

				var width = $(window).width()
				if (width < 600) {
					player.requestFullscreen().then(function() {
					    // the player entered fullscreen
					}).catch(function(error) {
					    // an error occurred
					});
				}
			 player.on('ended', function() {
				 console.log('ENDED')
				 if (width < 600) {
	 				player.exitFullscreen().then(function() {
	 				    // the player entered fullscreen
	 				}).catch(function(error) {
	 				    // an error occurred
	 				});
	 			}
				 	$('.play_button_holder').fadeIn()
					$('.starting_background').show()

					player.stop()
					player.reload()

				});
			})
		})
});

</script>
