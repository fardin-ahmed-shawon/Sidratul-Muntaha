<?php
$current_page = basename($_SERVER['PHP_SELF']);
$page_title = 'Donate';
?>
<?php require './components/header.php'; ?>



<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->
<div class="donate-home">
    <div class="home">
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Donate Now</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Donate</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="donate-page">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
<div>
                    <h3 class="section-title">Make a Difference Today</h3>
                <p class="section-description">
                    Your generous donation helps us continue our mission to support communities in need. 
                    Every contribution, no matter the size, makes a significant impact in transforming lives 
                    and building a better future together.
                </p>
                
                <p class="section-description">
                    Join thousands of donors who are already making a difference. Your support provides 
                    essential resources, education, and hope to those who need it most.
                </p>
</div>
        <img src="images/Financial Support For Madrasha Students.jpeg" alt="" class="w-100 "> 
                        <p class="section-description pt-3">
Bangladesh is a country prone to natural disasters. Every year, millions of people are affected by floods, cyclones, tidal waves, landslides and other natural disasters. Especially during the rainy season, about 26,000 square kilometers (18%) of the country is flooded, which causes extreme suffering and displacement of people in various regions, including the northern region. In addition, the lives of helpless people are disrupted by various disasters including cyclones, fires, cold waves. As-Sunnah Foundation has been working tirelessly to stand by the people affected by disasters across the country. Since its establishment, we have been implementing relief activities in emergency situations as well as long-term rehabilitation programs in various disasters.
                </p>      
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="donation-card">
                    <!-- Header -->
                    <div class="card-header-custom">
                        <h4>হাত বাড়ান দুর্গতের প্রতি</h4>
                        <p>বন্যা, ঘূর্ণিঝড়, অগ্নিকাণ্ড—প্রতিটি দুর্যোগে অসহায় মানুষের পাশে আছে আস-সুন্নাহ ফাউন্ডেশন। এই মানবিক অভিযাত্রায় আপনিও আমাদের সঙ্গী হতে পারেন।</p>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">
                        <form id="donationForm" method="POST" action="">
                            <!-- Merchant Info -->
                            <div class="merchant-info">
                                <strong>
                                    <i class="bi bi-phone-fill"></i>
                                    Bkash/Nagad: 012345678921
                                </strong>
                                <small>Donate by choosing the payment option below</small>
                            </div>

                            <!-- Quick Amount Selection -->
                            <div class="amount-grid">
                                <button type="button" class="amount-btn" data-amount="100">৳ 100</button>
                                <button type="button" class="amount-btn" data-amount="500">৳ 500</button>
                                <button type="button" class="amount-btn" data-amount="1000">৳ 1,000</button>
                                <button type="button" class="amount-btn" data-amount="5000">৳ 5,000</button>
                                <button type="button" class="amount-btn" data-amount="10000">৳ 10,000</button>
                                <button type="button" class="amount-btn" id="otherBtn">Other</button>
                            </div>

                            <!-- Donation Amount -->
                            <div class="mb-3">
                                <label for="donationAmount" class="form-label">
                                    Donation Amount <span class="required">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">৳</span>
                                    <input type="number" class="form-control" id="donationAmount" name="amount" placeholder="Enter amount" value="100" required min="10">
                                </div>
                            </div>

                            <!-- Your Name -->
                            <div class="mb-3">
                                <label for="yourName" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="yourName" name="name" placeholder="Enter your full name">
                            </div>

                            <!-- Phone / Email -->
                            <div class="mb-3">
                                <label for="contact" class="form-label">
                                    Phone / Email 
                                    <i class="bi bi-info-circle tooltip-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="We'll send the receipt to this contact"></i>
                                </label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter phone number or email">
                            </div>

                            <!-- Donate on behalf of -->
                            <div class="mb-3">
                                <label for="onBehalfOf" class="form-label">Donate on behalf of</label>
                                <input type="text" class="form-control" id="onBehalfOf" name="behalf_of" placeholder="Optional: Someone's name">
                            </div>

                            <!-- Payment Method -->
                            <div class="mb-3">
                                <label class="form-label">
                                    Payment Method <span class="required">*</span>
                                </label>
                                <div class="payment-method">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="aamarpay" value="aamarpay" checked>
                                        <label class="form-check-label d-flex align-items-center" for="aamarpay">
                                            <span class="badge ">Recommended</span>
                                            <span class="px-2">SSL Commerce ,Mobile Banking</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Tax Relief Info -->
                            <div class="info-box">
                                <p>
                                    <i class="bi bi-gift-fill me-2"></i>
                                    <strong>Tax Relief Available!</strong> You will receive tax relief when you donate to As-Sunnah Foundation.
                                    <a href="#" >Learn more</a>
                                </p>
                            </div>

                            <!-- Donate Button -->
                            <button type="submit" class="btn btn-success btn-donate w-100">
                                <i class="bi bi-heart-fill me-2"></i>
                                <span>Donate Now</span>
                            </button>

                            <!-- Terms -->
                            <div class="terms-text">
                                By donating you agree to our 
                                <a href="#">Terms and Conditions</a> and 
                                <a href="#">Privacy Policy</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 <script>
        // Wait for the page to load completely
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Page loaded, initializing donation form...');

            // Get all the elements
            const amountButtons = document.querySelectorAll('.amount-btn:not(#otherBtn)');
            const otherBtn = document.getElementById('otherBtn');
            const donationInput = document.getElementById('donationAmount');
            const form = document.getElementById('donationForm');
            const successMessage = document.getElementById('successMessage');
            const successText = document.getElementById('successText');

            console.log('Found buttons:', amountButtons.length);
            console.log('Found input:', donationInput ? 'Yes' : 'No');
            console.log('Found Other button:', otherBtn ? 'Yes' : 'No');

            // Add click event to each amount button
            amountButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    console.log('Button clicked:', this.getAttribute('data-amount'));

                    // Remove active class from ALL buttons
                    document.querySelectorAll('.amount-btn').forEach(function(btn) {
                        btn.classList.remove('active');
                    });

                    // Add active class to the clicked button
                    this.classList.add('active');

                    // Get the amount from data-amount attribute
                    const amount = this.getAttribute('data-amount');
                    
                    // Set the value in the input field
                    donationInput.value = amount;
                    
                    console.log('Amount set to:', amount);
                });
            });

            // Add click event to "Other" button
            if (otherBtn) {
                otherBtn.addEventListener('click', function() {
                    console.log('Other button clicked');

                    // Remove active from all buttons
                    document.querySelectorAll('.amount-btn').forEach(function(btn) {
                        btn.classList.remove('active');
                    });

                    // Make Other button active
                    this.classList.add('active');

                    // Clear the input and focus it
                    donationInput.value = '';
                    donationInput.focus();
                });
            }

            // When user types in the amount field
            donationInput.addEventListener('input', function() {
                const currentValue = this.value;
                console.log('Input changed to:', currentValue);
                
                let matchFound = false;

                // Check if the typed value matches any preset amount
                amountButtons.forEach(function(button) {
                    if (button.getAttribute('data-amount') === currentValue) {
                        // Remove active from all
                        document.querySelectorAll('.amount-btn').forEach(function(btn) {
                            btn.classList.remove('active');
                        });
                        // Make matching button active
                        button.classList.add('active');
                        matchFound = true;
                    }
                });

                // If no match and there's a value, activate "Other"
                if (!matchFound && currentValue !== '') {
                    document.querySelectorAll('.amount-btn').forEach(function(btn) {
                        btn.classList.remove('active');
                    });
                    if (otherBtn) {
                        otherBtn.classList.add('active');
                    }
                }
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const amount = donationInput.value;
                
                if (!amount || amount < 10) {
                    alert('Please enter a valid donation amount (minimum ৳10)');
                    donationInput.focus();
                    return;
                }

                // Show success message
                successText.textContent = `Thank you for your donation of ৳${amount}!`;
                successMessage.style.display = 'block';

                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                console.log('Form submitted with amount:', amount);
            });

            console.log('All event listeners attached successfully!');
        });
    </script>
<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->

<?php require './components/footer.php'; ?>