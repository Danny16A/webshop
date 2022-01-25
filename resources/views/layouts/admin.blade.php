<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 12:19:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Cartzilla | Account Settings</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="/vendor/simplebar/dist/simplebar.min.css" />
    <link rel="stylesheet" media="screen" href="/vendor/tiny-slider/dist/tiny-slider.css" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="/css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WKV3GT5');
    </script>
</head>
<!-- Body-->

<body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                        <div class="mb-3">
                            <label class="form-label" for="si-email">Email address</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="si-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-wrap justify-content-between">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="si-remember">
                                <label class="form-check-label" for="si-remember">Remember me</label>
                            </div><a class="fs-sm" href="#">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
                    </form>
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <div class="mb-3">
                            <label class="form-label" for="su-name">Full name</label>
                            <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="su-email">Email address</label>
                            <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password-confirm">Confirm password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <main class="page-wrapper">
        <!-- Add Payment Method-->
        <form class="needs-validation modal fade" method="post" id="add-payment" tabindex="-1" novalidate>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add a payment method</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" id="paypal" name="payment-method">
                            <label class="form-check-label" for="paypal">PayPal<img class="d-inline-block align-middle ms-2" src="/img/card-paypal.png" width="39" alt="PayPal"></label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" id="card" name="payment-method" checked>
                            <label class="form-check-label" for="card">Credit / Debit card<img class="d-inline-block align-middle ms-2" src="/img/cards.png" width="187" alt="Credit card"></label>
                        </div>
                        <div class="row g-3 mb-2">
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                                <div class="invalid-feedback">Please fill in the card number!</div>
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                <div class="invalid-feedback">Please provide name on the card!</div>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                                <div class="invalid-feedback">Please provide card expiration date!</div>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                                <div class="invalid-feedback">Please provide card CVC code!</div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary d-block w-100" type="submit">Register this card</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Navbar Marketplace-->
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        @include('shared.admin.header')
        <!-- Dashboard header-->
        <div class="container mb-5 pb-3">
            <div class="bg-light shadow-lg rounded-3 overflow-hidden">
                <div class="row">
                    <!-- Sidebar-->
                    <aside class="col-lg-4 pe-xl-5">
                        <!-- Account menu toggler (hidden on screens larger 992px)-->
                        <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
                        <!-- Actual menu-->
                        <div class="h-100 border-end mb-2">
                            <div class="d-lg-block collapse" id="account-menu">
                                <div class="bg-secondary p-4">
                                    <h3 class="fs-sm mb-0 text-muted">Account</h3>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-settings.html"><i class="ci-settings opacity-60 me-2"></i>Settings</a></li>
                                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.html"><i class="ci-basket opacity-60 me-2"></i>Purchases</a></li>
                                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.html"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-sm text-muted ms-auto">4</span></a></li>
                                </ul>
                                <div class="bg-secondary p-4">
                                    <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
                                </div>
                                <ul class="list-unstyled mb-0">
                                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-sales.html"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">$1,375.00</span></a></li>
                                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-products.html"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">5</span></a></li>
                                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-add-new-product.html"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a></li>
                                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-payouts.html"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a></li>
                                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                                </ul>
                                <hr>
                            </div>
                        </div>
                    </aside>
                    <!-- Content-->
                    <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
    @include('shared.admin.footer')
    <!-- Toolbar for handheld devices (Marketplace)-->
    <div class="handheld-toolbar">
        <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="dashboard-favorites.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$56.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
</body>

<!-- Mirrored from cartzilla.createx.studio/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jan 2022 12:19:18 GMT -->

</html>