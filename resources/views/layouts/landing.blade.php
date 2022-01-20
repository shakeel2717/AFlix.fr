<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/vendor.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    @stack('styles')
</head>

<body>
    {{-- @include("includes/header/main-container") --}}
    <header id="header"
        class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide shadow-sm bg-white"
        data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
        <div class="container">
            <nav class="js-mega-menu navbar-nav-wrap">
                <!-- Default Logo -->
                <a class="navbar-brand" href="index.html" aria-label="Front">
                    <img class="navbar-brand-logo" src="assets/svg/logos/logo.svg" alt="Logo">
                </a>
                <!-- End Default Logo -->

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-default">
                        <i class="bi-list"></i>
                    </span>
                    <span class="navbar-toggler-toggled">
                        <i class="bi-x"></i>
                    </span>
                </button>
                <!-- End Toggler -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul id="navbarNavDropdownNav" class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#homeSection">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#aboutSection">Features</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#pricingSection">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contactsSection">Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                        </li>

                        <!-- Button -->
                        <li class="nav-item">
                            <a class="btn btn-primary btn-transition"
                                href="{{ route('register') }}">Get your <strong>Free 15-Days Trial</strong></a>
                        </li>
                        <!-- End Button -->
                    </ul>
                </div>
                <!-- End Collapse -->
            </nav>
        </div>
    </header>

    <main id="content" role="main" class="main">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    {{-- <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <p class="font-size-sm mb-0">&copy; Front. <span
                        class="d-none d-sm-inline-block">{{ now()->year }}.</span>
                </p>
            </div>
            <div class="col-auto">
                <div class="d-flex justify-content-end">
                    <!-- List Dot -->
                    <ul class="list-inline list-separator">
                        <li class="list-inline-item">
                            <a class="list-separator-link" href="#">FAQ</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="list-separator-link" href="#">License</a>
                        </li>

                        <li class="list-inline-item">
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                    href="javascript:;" data-hs-unfold-options='{
                                    "target": "#keyboardShortcutsSidebar",
                                    "type": "css-animation",
                                    "animationIn": "fadeInRight",
                                    "animationOut": "fadeOutRight",
                                    "hasOverlay": true,
                                    "smartPositionOff": true
                                   }'>
                                    <i class="tio-command-key"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- End List Dot -->
                </div>
            </div>
        </div>
    </div> --}}

    {{-- @include("includes/modals/modal-welcome") --}}
    <!-- ========== FOOTER ========== -->
    <footer class="container content-space-1">
        <div class="row align-items-md-center text-center text-sm-start">
            <div class="col-md mb-3 mb-md-0">
                <!-- Logo -->
                <a href="index.html" aria-label="Front">
                    <img class="brand" src="assets/svg/logos/logo.svg" alt="Logo">
                </a>
                <!-- End Logo -->
            </div>

            <div class="col-sm mb-3 mb-sm-0">
                <!-- List -->
                <ul class="list-inline list-separator mb-0">
                    <li class="list-inline-item"><a class="link-sm link-secondary" href="#">Home</a></li>
                    <li class="list-inline-item"><a class="link-sm link-secondary" href="#">Feature</a></li>
                    <li class="list-inline-item"><a class="link-sm link-secondary" href="#">Pricing</a></li>
                    <li class="list-inline-item"><a class="link-sm link-secondary" href="#">Testimonials</a></li>
                    <li class="list-inline-item"><a class="link-sm link-secondary" href="#">Contacts</a></li>
                </ul>
                <!-- End List -->
            </div>

            <div class="col-sm-auto">
                <!-- Socials -->
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon rounded-circle" href="#">
                            <i class="bi-facebook"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon rounded-circle" href="#">
                            <i class="bi-google"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon rounded-circle" href="#">
                            <i class="bi-twitter"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn btn-soft-secondary btn-xs btn-icon rounded-circle" href="#">
                            <i class="bi-github"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Social -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Sign Up -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Header -->
                <div class="modal-close">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="modal-body">
                    <!-- Log in -->
                    <div id="signupModalFormLogin" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Log in</h2>
                            <p>Don't have an account yet?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-2">
                            <a class="btn btn-white btn-lg" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg"
                                        alt="Image Description">
                                    Log in with Google
                                </span>
                            </a>

                            <a class="js-animation-link btn btn-primary btn-lg" href="#"
                                data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Email</a>
                        </div>
                    </div>
                    <!-- End Log in -->

                    <!-- Log in with Modal -->
                    <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Log in</h2>
                            <p>Don't have an account yet?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <form class="js-validate needs-validation" novalidate>
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormLoginEmail" placeholder="email@site.com"
                                    aria-label="email@site.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                                    <a class="js-animation-link form-label-link" href="javascript:;"
                                        data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                                </div>

                                <input type="password" class="form-control form-control-lg" name="password"
                                    id="signupModalFormLoginPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required minlength="8">
                                <span class="invalid-feedback">Please enter a valid password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Log in with Modal -->

                    <!-- Sign up -->
                    <div id="signupModalFormSignup">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Sign up</h2>
                            <p>Already have an account?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <div class="d-grid gap-3">
                            <a class="btn btn-white btn-lg" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="avatar avatar-xss me-2" src="assets/svg/brands/google-icon.svg"
                                        alt="Image Description">
                                    Sign up with Google
                                </span>
                            </a>

                            <a class="js-animation-link btn btn-primary btn-lg" href="#"
                                data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

                            <div class="text-center">
                                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                        Conditions</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sign up -->

                    <!-- Sign up with Modal -->
                    <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Sign up</h2>
                            <p>Already have an account?
                                <a class="js-animation-link link" href="javascript:;" role="button"
                                    data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
                            </p>
                        </div>
                        <!-- End Heading -->

                        <form class="js-validate need-validate" novalidate>
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormSignupEmail" placeholder="email@site.com"
                                    aria-label="email@site.com" required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3">
                                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password"
                                    id="signupModalFormSignupPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required>
                                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="mb-3" data-hs-validation-validate-class>
                                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm
                                    password</label>
                                <input type="password" class="form-control form-control-lg" name="confirmPassword"
                                    id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required"
                                    aria-label="8+ characters required" required
                                    data-hs-validation-equal-field="#signupModalFormSignupPassword">
                                <span class="invalid-feedback">Password does not match the confirm password.</span>
                            </div>
                            <!-- End Form -->

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
                            </div>

                            <div class="text-center">
                                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and
                                        Conditions</a></p>
                            </div>
                        </form>
                    </div>
                    <!-- End Sign up with Modal -->

                    <!-- Reset Password -->
                    <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
                        <!-- Heading -->
                        <div class="text-center mb-7">
                            <h2>Forgot password?</h2>
                            <p>Enter the email address you used when you joined and we'll send you instructions to reset
                                your password.</p>
                        </div>
                        <!-- En dHeading -->

                        <form class="js-validate need-validate" novalidate>
                            <div class="mb-3">
                                <!-- Form -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="form-label" for="signupModalFormResetPasswordEmail"
                                        tabindex="0">Your email</label>

                                    <a class="js-animation-link form-label-link" href="javascript:;"
                                        data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                                        <i class="bi-chevron-left small"></i> Back to Log in
                                    </a>
                                </div>

                                <input type="email" class="form-control form-control-lg" name="email"
                                    id="signupModalFormResetPasswordEmail" tabindex="1"
                                    placeholder="Enter your email address" aria-label="Enter your email address"
                                    required>
                                <span class="invalid-feedback">Please enter a valid email address.</span>
                                <!-- End Form -->
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- End Reset Password -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="modal-footer d-block text-center py-sm-5">
                    <small class="text-cap mb-4">Trusted by the world's best teams</small>

                    <div class="w-85 mx-auto">
                        <div class="row justify-content-between">
                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>

    <!-- Go To -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
        <i class="bi-chevron-up"></i>
    </a>
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-form-search/dist/hs-form-search.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>

    <!-- JS Front -->
    <script src="assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            new HSHeader('#header').init()


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            new HSMegaMenu('.js-mega-menu', {
                desktop: {
                    position: 'left'
                }
            })


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            new HSShowAnimation('.js-animation-link')


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF GO TO
            // =======================================================
            new HSGoTo('.js-go-to')


            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });


            // INITIALIZATION OF TEXT ANIMATION (TYPING)
            // =======================================================
            HSCore.components.HSTyped.init('.js-typedjs')


            // SCROLLSPY
            // =======================================================
            // new bootstrap.ScrollSpy(document.body, {
            //     target: '#navbarNavDropdownNav'
            // })

            new HSScrollspy('#navbarNavDropdown', {
                breakpoint: 'lg',
                scrollOffset: -10
            })


            // INITIALIZATION OF BOOTSTRAP VALIDATION
            // =======================================================
            HSBsValidation.init('.js-validate', {
                onSubmit: data => {
                    data.event.preventDefault()
                    alert('Submited')
                }
            })


            // INITIALIZATION OF LEAFLET
            // =======================================================
            const leaflet = HSCore.components.HSLeaflet.init(document.getElementById('map'))

            L.tileLayer(
                'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    id: 'mapbox/light-v9'
                }).addTo(leaflet)
        })()
    </script>

    {{-- Additional JS --}}
    @stack('scripts')

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

</html>
