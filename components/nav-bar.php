        <!-- Navbar -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
									<div class="logo_content">
										<!-- <div class="logo_img">
											<img src="images/logo.png" alt="">
										</div> -->
										<h2><b>LOGO</b></h2>
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li 
										<?php 
										if ($current_page == 'index.php') {
											echo 'class="active"';
										} 
										?>
									>
										<a href="index.php">home</a>
									</li>
									<li 
										<?php 
										if ($current_page == 'about.php') {
											echo 'class="active"';
										} 
										?>
									>
										<a href="about.php">about us</a>
									</li>
									<li 
										<?php 
										if ($current_page == 'courses.php') {
											echo 'class="active"';
										} 
										?>
									>
										<a href="courses.php">courses</a>
									</li>
									<li 
										<?php 
										if ($current_page == 'news.php') {
											echo 'class="active"';
										} 
										?>
									>
										<a href="news.php">news</a>
									</li>
									<li 
										<?php 
										if ($current_page == 'contact.php') {
											echo 'class="active"';
										} 
										?>
									>
										<a href="contact.php">contact</a>
									</li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>