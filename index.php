<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Home'; // Set the page title
?>
<?php require './components/header.php'; ?>
<style>
	@media(max-width:575px) {
		.home_container {
			bottom: 145px;
		}
	}
</style>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->

<!-- Home -->
<div class="home">
	<div class="home_slider_container">

		<!-- Home Slider -->
		<div class="owl-carousel owl-theme home_slider">

			<!-- Slider Item -->
			<div class="owl-item">
				<!-- Background image artist https://unsplash.com/@benwhitephotography -->
				<div class="home_slider_background" style="background-image: linear-gradient(rgba(17, 17, 17, 0.5), rgba(17, 17, 17, 0.5)),url(images/Banner.jpg);background-repeat:no-repeat;background-position:center;"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content text-center">

									<div class="home_text">
										<div class="home_title">Sidratul Muntaha Foundation</div>
										<div class="home_subtitle">Sidratul Muntaha Foundation is a non-political, non-profit government-registered organization dedicated to education, da'wah and total human welfare. Registration Number: .</div>
									</div>
									<div class="home_buttons">
										<div class="button home_button"><a href="activities-details.php">Know more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
										<div class="button home_button"><a href="activities.php">All Activities<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slider Item -->
			<div class="owl-item">
				<!-- Background image artist https://unsplash.com/@benwhitephotography -->
				<div class="home_slider_background" style="background-image: linear-gradient(rgba(17, 17, 17, 0.5), rgba(17, 17, 17, 0.5)),url(images/Banner2.jpg);background-repeat:no-repeat;background-position:center;"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content text-center">

									<div class="home_text">
										<div class="home_title">Sidratul Muntaha Foundation</div>
										<div class="home_subtitle">Sidratul Muntaha Foundation is a non-political, non-profit government-registered organization dedicated to education, da'wah and total human welfare. Registration Number: .</div>
									</div>
									<div class="home_buttons">
										<div class="button home_button"><a href="activities-details.php">Know more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
										<div class="button home_button"><a href="activities.php">All Activities<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Slider Item -->
			<div class="owl-item">
				<!-- Background image artist https://unsplash.com/@benwhitephotography -->
				<div class="home_slider_background" style="background-image:linear-gradient(rgba(17, 17, 17, 0.5), rgba(17, 17, 17, 0.5)),url(images/Banner3.jpg)"></div>
				<div class="home_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content text-center">

									<div class="home_text">
										<div class="home_title">Sidratul Muntaha Foundation</div>
										<div class="home_subtitle">Sidratul Muntaha Foundation is a non-political, non-profit government-registered organization dedicated to education, da'wah and total human welfare. Registration Number: .</div>
									</div>
									<div class="home_buttons">
										<div class="button home_button"><a href="activities-details.php">Know more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
										<div class="button home_button"><a href="activities.php">All Activities<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Featured Course -->
<div class=" featured my-5">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
					<div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
					<div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
				</div>
				<div class="featured_container">
					<div class="row">
						<div class="col-lg-6 featured_col">
							<div class="featured_content">
								<div class="featured_header d-flex flex-row align-items-center justify-content-start">

								</div>
								<div class="featured_title">
									<h3><a href="activities.php">For Ummah, With Sunnah</a></h3>
								</div>
								<div class="featured_text ">The Ummah represents a powerful bond of unity among Muslims. Regardless of where they live or their cultural backgrounds, Muslims are considered part of one large family</div> <br />
								<div class="featured_footer d-flex align-items-center justify-content-start">
									<div class="featured_author_image"><img src="images/belowBanner.jpg" alt=""></div>
									<div class="featured_author_name">By <a href="#">a Muslim</a></div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 featured_col">

							<div class="featured_background" style="background-image:url(images/belowBanner.jpg)"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Courses -->
<div class="home-page courses">
	<div class="container">
		<div class="row donate-form-bg">
			<div class="col-lg-10 offset-lg-1 ">
				<div class="section_title text-center">
					<h2>Make Your Donation</h2>
				</div>
				<div class="section_subtitle">Planting Tree is Sadaqah Jariyah.As Long as animals and other people benifite from the tree ,the one wo planted it will continue to earn ...</div>
			</div>
			<div class="col">
				<div class="">
					<form action="#" class="course_search_form d-flex flex-md-row gap-2 flex-column align-items-start justify-content-between">
						<div>
							<select class="course_input" required>
								<option value="" disabled selected>Select Donation Category</option>
								<option value="education">Education Support</option>
								<option value="healthcare">Healthcare Aid</option>
								<option value="food">Food & Nutrition</option>
								<option value="disaster_relief">Disaster Relief</option>
								<option value="orphan_support">Orphan Support</option>
								<option value="mosque_fund">Mosque Fund</option>
								<option value="environment">Environmental Projects</option>
								<option value="other">Other</option>
							</select>
						</div>

						<div><input type="text" class="course_input text-black" placeholder="Phone" required="required"></div>
						<div><input type="text" class="course_input" placeholder="Donation Ammount" required="required"></div>
						<button class="course_button"><span>Donate</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">

				<!-- Courses Slider -->
				<br><br><br>
				<div class="section_title text-center">
					<h2>Ongoing Activities</h2>
				</div>
				<div class="courses_slider_container">
					<div class="owl-carousel owl-theme courses_slider">

						<!-- Slider Item -->
						<div class="owl-item">
							<div class="course">
								<div class="course_image"><a href="activities-details.php"><img src="images/tree-plantation.webp" alt=""></a></div>
								<div class="course_body">
									<div class="course_header d-flex flex-row align-items-center justify-content-start">
										<div class="course_tag"><a href="#">Activities</a></div>

									</div>
									<div class="course_title">
										<h3><a href="activities-details.php">Tree Plantation</a></h3>
									</div>
									<div class="course_text">Planting Tree is Sadaqah Jariyah.As Long as animals and other people benifite from the tree ,the one wo planted it will continue to earn ... </div>
									<div class="course_footer d-flex align-items-center justify-content-start">
										<!-- <div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
											<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
											<div class="course_sales ml-auto"><span>352</span> Sales</div> -->
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Item -->
						<div class="owl-item">
							<div class="course">
								<div class="course_image"><a href="activities-details.php"><img src="images/self-reliance.webp" alt=""></a></div>
								<div class="course_body">
									<div class="course_header d-flex flex-row align-items-center justify-content-start">
										<div class="course_tag"><a href="#">New</a></div>

									</div>
									<div class="course_title">
										<h3><a href="activities-details.php">General Fund</a></h3>
									</div>
									<div class="course_text">Planting Tree is Sadaqah Jariyah.As Long as animals and other people benifite from the tree ,the one wo planted it will continue to earn ...</div>
									<div class="course_footer d-flex align-items-center justify-content-start">
										<!-- <div class="course_author_image"><img src="images/course_author_2.jpg" alt=""></div>
											<div class="course_author_name">By <a href="#">Mark Smith</a></div>
											<div class="course_sales ml-auto"><span>352</span> Sales</div> -->
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Item -->
						<div class="owl-item">
							<div class="course">
								<div class="course_image"><a href="activities-details.php"><img src="images/dawah-education.webp" alt="https://unsplash.com/@annademy"></a></div>
								<div class="course_body">
									<div class="course_header d-flex flex-row align-items-center justify-content-start">
										<div class="course_tag"><a href="#">Featured</a></div>

									</div>
									<div class="course_title">
										<h3><a href="activities-details.php">Dawah</a></h3>
									</div>
									<div class="course_text">Planting Tree is Sadaqah Jariyah.As Long as animals and other people benifite from the tree ,the one wo planted it will continue to earn ...</div>
									<div class="course_footer d-flex align-items-center justify-content-start">
										<!-- <div class="course_author_image"><img src="images/course_author_3.jpg" alt=""></div>
											<div class="course_author_name">By <a href="#">Julia Williams</a></div>
											<div class="course_sales ml-auto"><span>352</span> Sales</div> -->
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Courses Slider Nav -->
					<div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
					<div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Milestones -->
<!-- <div class="milestones">
	
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg" data-speed="0.8"></div>
	<div class="container">
		<div class="row milestones_container">


			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/milestone_1.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="1548">0</div>
					<div class="milestone_text">Online Courses</div>
				</div>
			</div>

	
			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/milestone_2.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="7286">0</div>
					<div class="milestone_text">Students</div>
				</div>
			</div>


			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/milestone_3.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="257">0</div>
					<div class="milestone_text">Teachers</div>
				</div>
			</div>


			<div class="col-lg-3 milestone_col">
				<div class="milestone text-center">
					<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
					<div class="milestone_counter" data-end-value="39">0</div>
					<div class="milestone_text">Countries</div>
				</div>
			</div>

		</div>
	</div>
</div> -->



<!-- Video -->
<div class="video">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="video_container_outer">
					<div class="video_container">
						<!-- Video poster image artist: https://unsplash.com/@annademy -->
						<!-- <video id="vid1" class="video-js vjs-default-skin" controls data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=wShlz3zKWHo"}], "youtube": { "iv_load_policy": 1 } }'>
							</video> -->
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/7Y757eEzZlk?si=St5TWqWSxHTgD9RS" title="YouTube video player" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Photos   -->
<div class="photos">
	<div class="container py-5">
		<h1 class="text-center py-2">Photos</h1>
		<div class="row pt-3 ">

			<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">
				<a href="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (7).jpeg" data-lightbox="news-gallery">
					<img src="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (7).jpeg" alt="" class="img-fluid ">
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">
				<a href="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (2).jpeg" data-lightbox="news-gallery">
					<img src="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (2).jpeg" alt="" class="img-fluid ">
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">
				<a href="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (3).jpeg" data-lightbox="news-gallery">
					<img src="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (3).jpeg" alt="" class="img-fluid ">
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">
				<a href="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (4).jpeg" data-lightbox="news-gallery">
					<img src="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (4).jpeg" alt="" class="img-fluid ">
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">
				<a href="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (5).jpeg" data-lightbox="news-gallery">
					<img src="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (5).jpeg" alt="" class="img-fluid ">
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">
				<a href="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (8).jpeg" data-lightbox="news-gallery">
					<img src="images/WhatsApp Image 2025-09-26 at 2.28.54 AM (8).jpeg" alt="images/whats" class="img-fluid ">
				</a>
			</div>
		</div>
		<div class="d-flex justify-content-center mt-4">
			<button class="course_button "><a href="gallery.php"><span>See More</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></button>
		</div>
	</div>
</div>
<!-- Sections -->
<div class="grouped_sections">
	<div class="container">
		<div class="row">

			<!-- Why Choose Us -->

			<div class="col-lg-4 grouped_col">
				<div class="grouped_title">Why Choose Us?</div>
				<div class="accordions">
					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center active">
							<div>Mauris vehicula nisi congue?</div>
						</div>
						<div class="accordion_panel">
							<div>
								<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center">
							<div>Vehicula nisi congue, blandit?</div>
						</div>
						<div class="accordion_panel">
							<div>
								<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center">
							<div>Mauris vehicula nisi congue?</div>
						</div>
						<div class="accordion_panel">
							<div>
								<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
							</div>
						</div>
					</div>

					<div class="accordion_container">
						<div class="accordion d-flex flex-row align-items-center">
							<div>Nisi congue, blandit purus sed?</div>
						</div>
						<div class="accordion_panel">
							<div>
								<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</p>
							</div>
						</div>
					</div>

				</div>

			</div>

			<!-- Notices -->

			<div class="col-lg-4 grouped_col">
				<div class="grouped_title">Latest Notices</div>
				<div class="events">

					<!-- Notice -->
					<div class="event d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">20</div>
								<div class="event_month">April</div>
							</div>
						</div>
						<div class="event_body">
							<div class="event_title"><a href="notice-details.php">New Marketing Course Release</a></div>
							<div class="event_subtitle">Location: Online Platform</div>
						</div>
					</div>

					<!-- Notice -->
					<div class="event d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">23</div>
								<div class="event_month">April</div>
							</div>
						</div>
						<div class="event_body">
							<div class="event_title"><a href="notice-details.php">Students Art Workshop</a></div>
							<div class="event_subtitle">Location: Online Platform</div>
						</div>
					</div>

					<!-- Notice -->
					<div class="event d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">25</div>
								<div class="event_month">April</div>
							</div>
						</div>
						<div class="event_body">
							<div class="event_title"><a href="notice-details.php">Launch Party for a new Platform</a></div>
							<div class="event_subtitle">Location: Online Platform</div>
						</div>
					</div>

					<!-- Notice -->
					<div class="event d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">27</div>
								<div class="event_month">April</div>
							</div>
						</div>
						<div class="event_body">
							<div class="event_title"><a href="notice-details.php">New Marketing Course</a></div>
							<div class="event_subtitle">Location: Online Platform</div>
						</div>
					</div>

					<!-- Notice -->
					<div class="event d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="event_date d-flex flex-column align-items-center justify-content-center">
								<div class="event_day">29</div>
								<div class="event_month">April</div>
							</div>
						</div>
						<div class="event_body">
							<div class="event_title"><a href="notice-details.php">New Marketing Course</a></div>
							<div class="event_subtitle">Location: Online Platform</div>
						</div>
					</div>

				</div>
			</div>

			<!-- Activities -->

			<div class="col-lg-4 grouped_col">
				<div class="grouped_title">Upcoming Activities</div>
				<div class="news">

					<!-- Activity -->
					<div class="news_post d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="news_post_image"><img src="images/news_1.jpg" alt="https://unsplash.com/@beccatapert"></div>
						</div>
						<div class="news_post_body">
							<div class="news_post_date">April 02, 2018</div>
							<div class="news_post_title"><a href="activities-details.php">Why Choose online education?</a></div>
							<div class="news_post_author text-elipsis">description</div>
						</div>
					</div>

					<!-- News Post -->
					<div class="news_post d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="news_post_image"><img src="images/news_2.jpg" alt="https://unsplash.com/@nbb_photos"></div>
						</div>
						<div class="news_post_body">
							<div class="news_post_date">April 02, 2018</div>
							<div class="news_post_title"><a href="activities-details.php">Why Choose online education?</a></div>
							<div class="news_post_author text-elipsis">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid veniam officia accusamus, voluptatem blanditiis eius, rerum omnis expedita minus saepe temporibus, obcaecati esse recusandae laudantium facilis dignissimos pariatur hic commodi!60

							</div>
						</div>
					</div>

					<!-- News Post -->
					<div class="news_post d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="news_post_image"><img src="images/news_3.jpg" alt="https://unsplash.com/@rawpixel"></div>
						</div>
						<div class="news_post_body">
							<div class="news_post_date">April 02, 2018</div>
							<div class="news_post_title"><a href="activities-details.php">Why Choose online education?</a></div>
							<div class="news_post_author text-elipsis">description</div>
						</div>
					</div>

					<!-- News Post -->
					<div class="news_post d-flex flex-row align-items-start justify-content-start">
						<div>
							<div class="news_post_image"><img src="images/news_4.jpg" alt="https://unsplash.com/@jtylernix"></div>
						</div>
						<div class="news_post_body">
							<div class="news_post_date">April 02, 2018</div>
							<div class="news_post_title"><a href="activities-details.php">Why Choose online education?</a></div>
							<div class="news_post_author text-elipsis">description</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Join -->
<?php require './components/join-platform-text.php'; ?>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->

<?php require './components/footer.php'; ?>