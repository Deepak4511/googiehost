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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Header</title>
    <link href="assets/css/stylesheet.css" rel="stylesheet" />
</head>

<body>

    <!-- top header -->
    <div class="top-header">
        Unlimited Hosting, Unmatched Performance — <a class="grab_now_btn text-white" href="https://googiehost.com/blog/go/interserver/">Start at $0.01 Now </a>
    </div>

    <header class="header p-2">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container ps-0 pe-0">
                <a class="navbar-brand header-logo" href="/googiehost/googiehost/index.php">
                    <img src="/googiehost/googiehost/depends/logo.png" alt="Googiehost" width="250">
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
                                <a class="nav-link text-white" href="freehosting.php">Free Hosting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white"
                                    href="web-hosting-sale-coupons.php">Paid
                                    Hosting <span class="badge">Save 90%*</span></a>
                            </li>

                            <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                                <a class="nav-link text-white" href="#" id="serversDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servers <i class="fa-solid fa-angle-down  dropdown-icon"></i>
                                </a>
                                <div class="dropdown-menu rounded" aria-labelledby="serversDropdown" id="serversDropdown">
                                    <a class="dropdown-item text-white" href="cheap-vps-hosting.php">VPS Hosting</a>
                                    <a class="dropdown-item text-white" href="#">Dedicated Servers</a>
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
                                            <h5 class="dropdown-header text-white">
                                                <i class="fa fa-wordpress"></i> Hosting
                                            </h5>
                                            <a class="dropdown-item text-white" href="#">YouStable</a>
                                            <a class="dropdown-item text-white" href="#">InterServer</a>
                                            <a class="dropdown-item text-white" href="#">A2 Hosting</a>
                                            <a class="dropdown-item text-white" href="#">UltaHost</a>
                                            <a class="dropdown-item text-white" href="#">Kamatera</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="btn  btn-block mt-2" href="#">VIEW BEST HOSTS→</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="dropdown-header text-white">
                                                <i class="fa fa-bolt"></i> VPN
                                            </h5>
                                            <a class="dropdown-item text-white" href="#">NordVPN</a>
                                            <a class="dropdown-item text-white" href="#">IvacyVPN</a>
                                            <a class="dropdown-item text-white" href="#">ExpressVPN</a>
                                            <a class="dropdown-item text-white" href="#">IPVanish</a>
                                            <a class="dropdown-item text-white" href="#">HotSpotShield</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="btn btn-block mt-2" href="#">VIEW MORE VPN→</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h5 class="dropdown-header text-white">
                                                <i class="fa fa-rss"></i> SEO/Blogging
                                            </h5>
                                            <a class="dropdown-item text-white" href="#">Email Marketing Tools</a>
                                            <a class="dropdown-item text-white" href="#">Top LiveChat Apps</a>
                                            <a class="dropdown-item text-white" href="#">Best Blogging Tools</a>
                                            <a class="dropdown-item text-white" href="#">Blogging Tutorials</a>
                                            <a class="dropdown-item text-white" href="#">Top WordPress Plugins</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="btn btn-block mt-2" href="#">VIEW MORE TOOLS→</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown" onmouseover="showDropdown(this)" onmouseout="hideDropdown(this)">
                                <a class=" btn nav-link SignInUp" href="#" id="loginDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                <div class="dropdown-menu rounded mb-0   " aria-labelledby="loginDropdown"
                                    id="loginDropdown">
                                    <a class="dropdown-item text-white"
                                        href="https://client.googiehost.com/clientarea.php">Account
                                        Login</a>
                                    <a class="dropdown-item text-white mb-0" href="signup.php">Create
                                        Account</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/googiehost/googiehost/assets/js/script.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        function showDropdown(element) {
            let dropdownMenu = element.querySelector(".dropdown-menu");
            dropdownMenu.classList.add("show");
            icon.classList.remove("fa-angle-down");
            icon.classList.add("fa-angle-up"); // Change icon when dropdown is shown
        }

        function hideDropdown(element) {
            let dropdownMenu = element.querySelector(".dropdown-menu");
            dropdownMenu.classList.remove("show");
            icon.classList.remove("fa-angle-up");
            icon.classList.add("fa-angle-down"); // Reset icon when dropdown is hidden
        }
    </script>
</body>

</html>