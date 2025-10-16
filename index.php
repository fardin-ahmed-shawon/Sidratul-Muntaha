<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Home'; // Set the page title
?>
<?php require './components/header.php'; ?>
<style>
	.join {
    position: absolute;
    top: -41%;
    left: 0%;
    background: transparent;
}
.footer {
    width: 100%;
    background: #0F2920;
    color: #fff;
    padding-top: 174px;
    padding-bottom: 50px;
}
	@media(max-width:991px) {
		.join-input {
    width: 58%;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    border: none;
    outline: none;
    padding: 5px 20px;
}
.join {
    position: absolute;
    top: -16%;
    left: 0%;
    background: transparent;
}
	}
	@media(max-width:575px) {
		.home_container {
			bottom: 145px;
		}
		.join {
    position: absolute;
    top: -16%;
    left: 3%;
    background: transparent;
}
.footer {

    padding-top: 228px;
    padding-bottom: 50px;
}
	}
</style>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->

<!-- Home -->
<div class=" home">
	<div class="home-background">
		<div class="overlay"></div>
		<div
		data-aos="fade-right"
		 class="content container px-4">
			<h1>Sidratul Muntaha Foundation</h1>
			<p>Sidratul Muntaha Foundation is a non-political, non-profit government-registered organization dedicated to education, da'wah and total human welfare. Registration Number: S-14117/2024 .</p>
			<div class="buttons">
				<a href="about.php" class="btn">Know More</a>
				<a href="activities.php" class="btn btn-outline"> Activities</a>
			</div>
		</div>
	</div>

</div>


<!-- Featured Course -->


<!-- Courses -->
<div class="home-page courses">
	<div class="container">
		<div class="row donate-form-bg mx-auto">
			<div class="col-lg-10 offset-lg-1 ">
				<div class="section_title text-center">
					<h2>Make Your Donation</h2>
				</div>

			</div>
			<div class="col">
				<div class="">
					<form action="#" class="mt-3 course_search_form d-flex flex-md-row gap-2 flex-column align-items-start justify-content-between">
						<div>
							<label class="course-lable">Donation Fund<span>*</span></label>
							<select class="course_input" required>
								<option value="" disabled selected class="p-2">Select Donation Category</option>
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

						<div>
							<label class="course-lable">Mobile No. <span>*</span></label>
							<input type="text" class="course_input " placeholder="Phone" required="required">
						</div>
						<div>
							<label class="course-lable">Ammount <span>*</span></label>
							<input type="text" class="course_input" placeholder="Donation Ammount" required="required">
						</div>
						<div class="btn-margin"><button class="course_button "><span>Donate</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button></div>
					</form>
					<div class="section_subtitle">You may receive tax relief when you donate to Sidratul Muntaha Foundation.</div>
				</div>
			</div>
		</div>
		<div class="section_title">
			<h2 class="text-center  pt-5 pb-2 ">For Ummah, With Sunnah</h2>
		</div>
		<div
			data-aos="fade-up"
			class="about-quotes mb-5">
			<div class="container mx-auto">
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-4">

						<div class=" quote-item d-flex flex-column justify-content-center align-items-center">
							<i class="fa fa-graduation-cap " aria-hidden="true"></i>
							<h1 class="text-sm-center">Education</h1>
							<p class="text-sm-center">Establishing and managing madrasas with an integrated syllabus of religious and general education to produce distinguished Islamic scholars and contemporary da'wah practitioners.</p>
						</div>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">

						<div class=" quote-item d-flex flex-column justify-content-center align-items-center">
							<i class="fa fa-handshake-o" aria-hidden="true"></i>
							<h1 class="text-sm-center">Service</h1>
							<p class="text-sm-center">Empowering the poor, providing relief and rehabilitation for flood victims, installing tube wells and water purification plants, tree plantation, distributing winter clothing, Iftar meals, and organizing inclusive Qurbani programs, among other welfare activities.</p>
						</div>

					</div>
					<div class="col-sm-12 col-md-6 col-lg-4">

						<div class=" quote-item d-flex flex-column justify-content-center align-items-center">
							<i class="fa fa-book" aria-hidden="true"></i>
							<h1 class="text-sm-center">Dawah</h1>
							<p class="text-sm-center">Online-based da'wah, writing and publishing Islamic books, conducting religious study circles, and organizing training programs and workshops for Islamic outreach.</p>
						</div>

					</div>


				</div>
			</div>
		</div>

		<div class="about-quote-btn">
			<a href="about.php">See More</a>
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

<!-- Donation Category  -->
<div class="container mx-auto mb-5">
	<div class="section_title text-center pb-5">
		<h2>Donation Fund</h2>
	</div>
	<div
		data-aos="fade-up"
		data-aos-delay="500"
		class="row">
		<div class="col-sm-6 col-md-6 col-lg-4">
			<div class="donate-preview_item">
				<div class="course">
					<div class="course_image"><a href="donate.php"><img src="images/regular donation.jpg" alt="" class="w-100"></a></div>
					<div class="course_body ">
						<div class="course_title ">
							<h3 class=""><a href="donate.php">Regular Donation Fund</a></h3>
						</div>
						<div class="course_text text-truncated">Many people want to donate regularly but often forget to do so.From now on, bKash-Nagad App and Visa-Mastercard users can make regular donations from the As-Sunnah Foundation website by activating the automated system. On our website, you can choose from daily, or monthly donation options and select the amount. Even if you forget, the specified amount will be credited to the foundation's account at the scheduled time.

							Users can opt out of this feature at any time.</div>
						<div class="course_footer d-flex align-items-center justify-content-start">
							<!-- <div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
											<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
											<div class="course_sales ml-auto"><span>352</span> Sales</div> -->
						</div>
						<div class="d-flex justify-content-center">
							<a href="donate.php" class=" donate-preview_item-btn">Donate Fund</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-4">

			<div class="donate-preview_item">
				<div class="course">
					<div class="course_image"><a href="donate.php"><img src="images/tree-plantation.jpg" alt="" class="w-100"></a></div>
					<div class="course_body ">
						<div class="course_title ">
							<h3 class=""><a href="donate.php">General Fund</a></h3>
						</div>
						<div class="course_text text-truncated">Many people want to donate regularly but often forget to do so.From now on, bKash-Nagad App and Visa-Mastercard users can make regular donations from the As-Sunnah Foundation website by activating the automated system. On our website, you can choose from daily, or monthly donation options and select the amount. Even if you forget, the specified amount will be credited to the foundation's account at the scheduled time.

							Users can opt out of this feature at any time.</div>
						<div class="course_footer d-flex align-items-center justify-content-start">
							<!-- <div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
											<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
											<div class="course_sales ml-auto"><span>352</span> Sales</div> -->
						</div>
						<div class="d-flex justify-content-center">
							<a href="donate.php" class=" donate-preview_item-btn">Donate Fund</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-lg-4">

			<div class="donate-preview_item">
				<div class="course">
					<div class="course_image"><a href="donate.php"><img src="images/sadaqah.jpg" alt="" class="w-100"></a></div>
					<div class="course_body ">
						<div class="course_title ">
							<h3 class=""><a href="donate.php">Sadaquah Jariyah</a></h3>
						</div>
						<div class="course_text text-truncated">Many people want to donate regularly but often forget to do so.From now on, bKash-Nagad App and Visa-Mastercard users can make regular donations from the As-Sunnah Foundation website by activating the automated system. On our website, you can choose from daily, or monthly donation options and select the amount. Even if you forget, the specified amount will be credited to the foundation's account at the scheduled time.

							Users can opt out of this feature at any time.</div>
						<div class="course_footer d-flex align-items-center justify-content-start">
							<!-- <div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
											<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
											<div class="course_sales ml-auto"><span>352</span> Sales</div> -->
						</div>
						<div class="d-flex justify-content-center">
							<a href="donate.php" class=" donate-preview_item-btn">Donate Fund</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row my-5 d-flex justify-content-center align-items-center">
		<div class="about-quote-btn">
			<a href="donation-fund.php">See All</a>
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

<div class="container mx-auto">
	<div class="section_title">
		<h2 class="text-center">Our Associatives</h2>
	</div>
	<div class="d-flex justify-content-center gap-4 my-5 associatives">

		<img src="images/islami bank img.png" alt="">
		<img src="images/assunnah.png" alt="">
		<img src="images/insurancep.png" alt="">

	</div>
</div>




<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->

<?php require './components/footer.php'; ?>