<?php 
$page ='contact';
include 'inc/header.php'; ?>

<div class="hero-section">
    <div class="container py-5">
        <div class="row text-center">
            <div class="hero-left-section">
                <h1 class="entry-title mb-5">Need help? Drop us a message!</h1>
                <a href="https://googiehost.com/team.php" class="button_white">Meet GoogieHost Team !</a>
            </div>
        </div>
    </div>
</div>

<section class="my-5">
    <div class="container bg-white  contact-form-sec">
        <div class="row">
            <div class="col-md-6">
                <h2>Sending a message.</h2><br>
                <p>Feel free to contact us any time. Please do not use this form if you have any free web hosting-related queries, and We request you to go on our forum and create a topic to get instant help from our expert support team, 24X7 support.</p><br>
                <div class="quote-box">
                    <ul style="list-style: none; padding: 0 5px">
                        <li>1309 Coffeen Avenue STE 16488 Sheridan, Wyoming 82801, United State</li>
                        <li>+17273303339</li>
                        <!-- <li>4/453 VIBHAV KHAND GOMTI NAGAR LUCKNOW, INDIA</li> -->
                        <!-- <li>+91 961-678-2253</li> -->
                        <li>SUPPORT@GOOGIEHOST.COM</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-single-tb">
                    <form method="post" action="contact/send.php">
                        <p>
                            <label for="name">Full Name: *</label>
                            <input type="text" name="name" id="name" tabindex="1">
                        </p>
                        <p>
                            <label for="email">Email Address: *</label>
                            <input type="text" name="email" id="email" tabindex="2">
                        </p>
                        <p>
                            <label for="comments">Message: *</label>
                            <textarea name="comments" id="comments" cols="12" rows="6" tabindex="3"></textarea>
                        </p>
                        <p>
                            <input type="submit" name="submit" id="submit" value="Submit" tabindex="4" class="contact-submit-btn">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'inc/footer.php' ?>