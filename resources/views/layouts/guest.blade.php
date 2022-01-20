<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sign Up | {{ config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icon-set/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
  </head>

  <body class="d-flex align-items-center min-h-100">

    <!-- ========== HEADER ========== -->
    <header class="position-absolute top-0 left-0 right-0 mt-3 mx-3">
      <div class="d-flex d-lg-none justify-content-between">
        <a href="{{ route('home') }}">
          <img class="w-100" src="assets/svg/logos/logo.svg" alt="Image Description" style="min-width: 7rem; max-width: 7rem;">
        </a>

        <!-- Select -->
        <div id="languageSelect2" class="select2-custom select2-custom-right z-index-2">
          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;"
                  data-hs-select2-options='{
                    "dropdownParent": "#languageSelect2",
                    "minimumResultsForSearch": "Infinity",
                    "placeholder": "Select language",
                    "customClass": "custom-select custom-select-sm custom-select-borderless bg-transparent",
                    "dropdownAutoWidth": true,
                    "dropdownWidth": "12rem"
                  }'>
            <option label="empty"></option>
            <option value="language1" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/us.svg') }}" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
            <option value="language1" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/fr.svg') }}" alt="Image description" width="16"/><span>Français (FR)</span></span>'>Français (FR)</option>
            {{-- <option value="language2" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/gb.svg') }}" alt="Image description" width="16"/><span>English (UK)</span></span>'>English (UK)</option>
            <option value="language3" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/de.svg') }}" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
            <option value="language4" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/dk.svg') }}" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
            <option value="language5" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/es.svg') }}" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
            <option value="language6" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/nl.svg') }}" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
            <option value="language7" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/it.svg') }}" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
            <option value="language8" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="{{ asset('assets/flag-icon-css/flags/1x1/cn.svg') }}" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option> --}}
          </select>
        </div>
        <!-- End Select -->
      </div>
    </header>

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
      <!-- Content -->
      {{ $slot }}
    </main>

    <!-- JS Global Compulsory @@deleteLine:build -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/select2.full.min.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/js/hs.core.js') }}"></script>
    <script src="{{ asset('assets/js/hs.validation.js') }}"></script>
    <script src="{{ asset('assets/js/hs.select2.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
        // INITIALIZATION OF SHOW PASSWORD
        // =======================================================
        $('.js-toggle-password').each(function () {
          new HSTogglePassword(this).init()
        });


        // INITIALIZATION OF FORM VALIDATION
        // =======================================================
        $('.js-validate').each(function() {
          $.HSCore.components.HSValidation.init($(this), {
            rules: {
              confirmPassword: {
                equalTo: '#signupSrPassword'
              }
            }
          });
        });


        // INITIALIZATION OF SELECT2
        // =======================================================
        $('.js-select2-custom').each(function () {
          var select2 = $.HSCore.components.HSSelect2.init($(this));
        });
      });
    </script>

    <!-- IE Support -->
    <script>
      if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
  </body>
</html>