<?php
include 'meta.php';
global $page;
if (!isset($page)) {
    $page = "Default Page";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="<?php echo $meta[$page]['description']; ?>">
    <meta name="keywords" content="<?php echo $meta[$page]['keywords']; ?>">
    <title><?php echo $meta[$page]['title']; ?></title>
    <?php echo $meta[$page]['schema']; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/97ebc2bc67.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Header</title>
    <link href="/googiehost/assets/css/stylesheet.css" rel="stylesheet" />
</head>

<body>

    <!-- top header -->

    <div class="top-bar">
        <div class="top-bar-text">Unlimited Hosting, Unmatched Performance  <div class="btn">
            <a href="https://googiehost.com/blog/go/interserver/" target="_blank">Start at $0.01 Now</a>
        </div></div>
        
    </div>



    <header class="header p-2">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container ps-0 pe-0">
                <a class="navbar-brand header-logo" href="/googiehost/index.php">
                    <img src="/googiehost/depends/logo.png" alt="Googiehost" width="250">
                </a>
                <!-- Offcanvas Trigger Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
                    aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i> <!-- Mobile menu icon -->
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="navbarOffcanvas"
                    aria-labelledby="navbarOffcanvasLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title text-white" id="navbarOffcanvasLabel">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/googiehost/freehosting.php">Free Hosting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white"
                                    href="/googiehost/web-hosting-sale-coupons.php">Paid
                                    Hosting <span class="badge">Save 90%*</span></a>
                            </li>

                            <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                                <a class="nav-link text-white" href="#" id="serversDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servers <i class="fa-solid fa-angle-down  dropdown-icon"></i>
                                </a>
                                <div class="dropdown-menu rounded" aria-labelledby="serversDropdown" id="serversDropdown">
                                    <a class="dropdown-item" href="/googiehost/cheap-vps-hosting.php">VPS Hosting</a>
                                    <a class="dropdown-item" href="/googiehost/cheap-dedicated-server.php">Dedicated Servers</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                                <a class="nav-link  text-white" href="#" id="reviewsDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Reviews <i class="fa-solid fa-angle-down dropdown-icon"></i>
                                </a>


                                <div class=" dropdown-menu dropdown-menu-left p-3 rounded" aria-labelledby="reviewsDropdown"
                                    id="reviewsDropdown">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="dropdown-header">
                                                <i class="fa fa-wordpress"></i> Hosting
                                            </h5>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/youstable-review/">YouStable</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/interserver-review/">InterServer</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/a2-hosting-review/">A2 Hosting</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/ultahost-review/">UltaHost</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/kamatera-review/">Kamatera</a>
                                            <a class="btn  btn-block mt-2" href="https://googiehost.com/blog/hosting-reviews/">VIEW BEST HOSTS →</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="dropdown-header">
                                                <i class="fa fa-bolt"></i> VPN
                                            </h5>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/nordvpn-review/">NordVPN</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/ivacy-vpn-review/">IvacyVPN</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/go/expressvpn/">ExpressVPN</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/go/ipvanish/">IPVanish</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/go/hotspotshield/">HotSpotShield</a>
                                            <a class="btn btn-block mt-2" href="https://googiehost.com/blog/vpn">VIEW MORE VPN →</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="dropdown-header">
                                                <i class="fa fa-rss"></i> SEO/Blogging
                                            </h5>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/best-email-marketing-software-tools/">Email Marketing Tools</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/best-live-chat-software/">Top LiveChat Apps</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/best-blogging-tools/">Best Blogging Tools</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/tutorials/">Blogging Tutorials</a>
                                            <a class="dropdown-item" href="https://googiehost.com/blog/top-5-wordpress-plugins/">Top WordPress Plugins</a>
                                            <a class="btn btn-block mt-2" href="https://googiehost.com/blog/blogging/">VIEW MORE TOOLS →</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown me-lg-2">
                                <a class=" btn nav-link SignInUp" href="https://client.googiehost.com/clientarea.php" id="loginDropdown" role="button">Sign In</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class=" btn nav-link SignUp" href="https://googiehost.com/signup.php" id="loginDropdown" role="button">Sign Up</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

