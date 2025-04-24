<?php
$page = 'free hosting';

include 'inc/header.php'; ?>
<!-- hero section  -->
<div class="hero-section position-relative">
    <div class="blury-img"></div>
    <div class="blury-img2"></div>
    <div class="container">
        <div class="row">
            <div class="hero-left-section text-center">
                <h1 class="entry-title">Host Your Website FREE</h1>
                <p class="mb-3">Explore our budget-friendly dedicated server hosting, starting at $45/month. Choose from unmanaged or managed bare metal with Free Control Panel, NVME SSDs, and Linux OS options.</p>

                <div class="rated justify-content-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
                            <path d="M12.5 7.5L8 12L6.5 10.5M9 1L1 5C1 10.1932 3.78428 17.5098 9 19C14.2157 17.5098 17 10.1932 17 5L9 1Z" stroke="#F4FFF9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>No Credit Card required
                </div>

                <div class="hero_feature">
                    <div class="feature1 d-flex"><img src="./assets/images/icons/Mulitple-Server-Locations.png" alt="Server Uptime" class="me-2">
                        <div class="text-start text-white feature_text">
                            <h3>Free Sub Domain</h3>
                            <small>(cu.ma, c1.is, thats.im etc)</small>
                        </div>
                    </div>
                    <div class="feature2 d-flex"><img src="./assets/images/icons/Mulitple-Server-Locations.png" alt="Server Uptime" class="me-2">
                        <div class="text-start text-white feature_text">
                            <h3>Wordpress Installation</h3>
                            <small>Wordpress Installation</small>
                        </div>
                    </div>
                    <div class="feature3 d-flex"><img src="./assets/images/icons/Mulitple-Server-Locations.png" alt="Server Uptime" class="me-2">
                        <div class="text-start text-white feature_text">
                            <h3>Use your own Domain</h3>
                            <small>(.com, .in, .co.in etc)</small>
                        </div>
                    </div>
                    <div class="feature4 d-flex"><img src="./assets/images/icons/Mulitple-Server-Locations.png" alt="Server Uptime" class="me-2">
                        <div class="text-start text-white feature_text">
                            <h3>Upto 99.99% Server Uptime</h3>
                            <small>(Server Uptime is best)</small>
                        </div>
                    </div>
                </div>
                <a href="" class="button_orange mt-4">Deploy Free Server now <i class="fa-solid fa-angle-right ms-3"></i></a>
                <div class="rated justify-content-center">
                    Starting at $45/mo
                </div>
            </div>
        </div>
    </div>
    <h4 class="featured-on text-white text-center">Featured On</h4>
    <div class="inner container" style="padding-top: 0 !important;">
        <img loading="lazy" alt="featured on logos" class="img-fluid" data-cfsrc="depends/featured-logos2.png" src="./assets/images/icons/featured-logos2.png">
    </div>
</div>


<!-- / hero section -->

<!-- plan section  -->
<div class="container pricing-section py-5">
    <h2 class="sec-heading text-center">Choose Your Web Hosting Plan</h2>
    <p class="sec-subheading text-center">GoogieHost offers best free hosting with added features to help you reach new heights. Get free website migration when switching to a premium hosting provider.</p>
    <!-- hosting plan  -->
    <?php include 'inc/hosting-plan.php' ?>
    <!-- hosting plan  -->

</div>
<!--/ plan section  -->



<section>
    <!-- feature section  -->

    <div class="container pb-5 ">
        <h2 class="text-center sec-heading">Web Hosting Features?</h2>
        <p class=" text-center  p-1 sec-subheading">
            We offer ultimate free hosting services packed with our most popular cPanel "DirectAdmin" to manage your free web hosting. Along with our <a href="/freewebsitebuilder.php">free web hosting Website builder</a> you get free webmail access, SSD boosted drives, a fast MySQL database and much more.
        </p>

        <div class="row g-4 mt-4">
            <!-- Feature 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <!-- <img src="./assets/images/icons/root-access.svg" alt="1000MB SSD Storage" class="mb-3"> -->
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">1000MB SSD Storage</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text ">Now you can host unlimited numbers of website files, every free hosting comes with 1000MB SSD boosted space.</p>

                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <!-- <img src="./assets/images/icons/host-unlimited-website.svg" alt="100GB Bandwidth" class="mb-3"> -->
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">100GB Bandwidth</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">Don't worry even if you have good traffic on your website or blog, we offer Unlimited bandwidth with a 100MBPS uplink.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <!-- <img src="./assets/images/icons/dedicated-ip.svg" alt="Hotlink Protection" class="mb-3"> -->
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">Hotlink Protection</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">Protect your website files from being copied using our hotlink protection feature which normaly comes with premium hosting plans.</p>

                    </div>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <!-- <img src="./assets/images/icons/high-traffic-website.svg" alt="2 MySQL Databases" class="mb-3"> -->
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">2 MySQL Databases</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text ">Get the latest MySQL Database version with GoogieHost’s free web hosting account. We offer you 2 MySQL databases to keep your records at your fingertips.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <img src="./assets/images/icons/externded-security.svg" alt="2 FTP Accounts" class="mb-3">
                        <h5 class="card-title">Free Website Builder</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">Our <a href="/freewebsitebuilder.php">Site.pro Website Builder</a> helps you create a professional-looking website even if you have no prior knowledge of coding or programming.</p>
                    </div>
                </div>
            </div>

            <!-- Feature 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">2 FTP Accounts</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">
                            We offer 2 FTP accounts that help you manage your website files using FTP clients like FileZilla.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 7 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">Free CMS Installers</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">
                            Our Softaculous Auto Installer comes with 380+ popular scripts. You can install WordPress, Joomla, SMF etc with just one click.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 8 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">Online File Manager</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">
                            We have 2 different file managers that allow you to manage your files effectively. FileManager2 is featured by Net2FTP.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 9 -->
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class=" mx-auto">
                        <img src="./assets/images/icons/externded-security.svg" alt="Extended Security" class="mb-3">
                        <h5 class="card-title">PHP all versions</h5>
                    </div>
                    <div class="card-body">

                        <p class="card-text ">
                            Choose from PHP version 5.3 to the latest version of PHP 8.0.12 to get better scalability, security and flexibility.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<!-- comparision table -->
<div class="container my-5 comparison-table">
    <h2 class="text-center w-md-50 m-auto">Why GoogieHost Is The Best Free Hosting Provider Over The Internet</h2>

    <div class="table-responsive  py-3">
        <table class="table table-bordered text-center hosting-comparison-table">
            <thead>
                <tr class="table-freeHosting-section">
                    <th></th>
                    <th class="best-free-hosting">Best Free Hosting</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr class="table-heading-section">
                    <th>Features</th>
                    <th class=" googiehost-table-heading">GoogieHost</th>
                    <th class="table-heading-sec">InfinityFree</th>
                    <th class="table-heading-sec">Weebly</th>
                    <th class="table-heading-sec">Wix</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <td class="text-start">NVMe SSD</td>
                    <td class="googiehost-table-col"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus "></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr>
                    <td class="text-start">Business Emails</td>
                    <td class="googiehost-table-col1"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                </tr>
                <tr class="table-active">
                    <td class="text-start">LiteSpeed</td>
                    <td class="googiehost-table-col"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr>
                    <td class="text-start">Cloudflare</td>
                    <td class="googiehost-table-col1"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr class="table-active">
                    <td class="text-start">Control Panel</td>
                    <td class="googiehost-table-col"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr>
                    <td class="text-start">1-Click Installer</td>
                    <td class="googiehost-table-col1"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr class="table-active">
                    <td class="text-start">Malware Protection</td>
                    <td class="googiehost-table-col"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr>
                    <td class="text-start">SSL Certificate</td>
                    <td class="googiehost-table-col1"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
                <tr class="table-active">
                    <td class="text-start">SitePad Website Builder</td>
                    <td class="googiehost-table-col"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-check check compare-table-check"></i></td>
                </tr>
                <tr>
                    <td class="text-start">No Forced Ads</td>
                    <td class="googiehost-table-col1"><i class="fa-solid fa-check check compare-table-check"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                    <td><i class="fa-solid fa-minus compare-table-minus"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- / comparision table -->

<!-- block-single section  -->
<?php include 'inc/single-features.php' ?>

<!-- / block-single section  -->


<!-- faq section  -->
<div class="container mt-5 faq mb-5">
    <h2 class="text-center mb-5 fw-bold">Free Hosting FAQ</h2>
    <div class="accordion bg-white" id="accordionExample">
        <div class="row">
            <div class="col-md-6">
                 <!-- Section 1 -->
        <div class="accordion-item ">
            <h2 class="accordion-header " id="headingOne">
                <button class="accordion-button border-bottom-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How long will my website stay on GoogieHost Free web hosting?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show border-top-0" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Well! It's been <strong>
                            13 years GoogieHost powering up over 2,70,082 websites
                        </strong> at the moment without charging them a penny and we don’t have any plan to shut it down.</p>
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How many websites will host on free web hosting cPanel?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Free Account limited to 3 Website per user, if we found multiple accounts in any condition then we reserve the rights to terminate your all accounts and ban you from our platform.</p>
                </div>
            </div>
        </div>

        <!-- Section 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Will I get free domain name with free web hosting?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> We offer <a href="">free short Sub-Domains</a> like yourname.cu.ma or yourname.thats.im but if you want standard domain name like .com, .in, .us etc then you will have to pay Normal Registration charges which are starting from $1.99/year.</p>
                </div>
            </div>
        </div>

        <!-- Section 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    How do you make profit if its Free forever?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> This is the most common que coming from thousands of people using our Free Hosting service, The answer is we recover our server cost from showing ads on our own website <strong>(Not on Customer’s Website)</strong> and many people need to upgrade their hosting plan to premium which makes us money.</p>
                </div>
            </div>
        </div>

            </div>
            <div class="col-md-6">
                 <!-- Section 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Is free web hosting secure?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Yes it is… We offer almost everything to insure quality hosting, its FREE that doesn’t mean we use third class hardware or don’t care about your resecurity. All Server have CloudLinux, LiteSpeed, Firewall Setup, SSL Certificate etc.</p>
                </div>
            </div>
        </div>

        <!-- Section 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Can I monetize a website using GoogieHost free web hosting?
                </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Yes! You are allowed to monetize your website with any ad network you want we don’t restrict you on that and there is no commission sharing as well like other Free Web Host out there.</p>
                </div>
            </div>
        </div>

        <!-- Section 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    How can Upgrade my Free hosting account if need more resources?
                </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p> Its pretty easy, Goto <a href="premiumhosting.php">Premium Hosting page</a> to choose your Paid Hosting plan, once you purchase the Premium Hosting open support ticket for FREE MIGRATION to premium plan which usually takes up 24 hours.</p>
                </div>
            </div>
        </div>
            </div>
                <!-- Section 5 -->
        </div>
       
       
    </div>
</div>
<!-- /faq section  -->

<?php include 'inc/footer.php' ?>