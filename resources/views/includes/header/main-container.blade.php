<header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered navbar-light">
    <div class="container">
      <div class="js-mega-menu navbar-nav-wrap">
        <div class="navbar-brand-wrapper">
          <!-- Logo -->
            @include("includes/navbar/single-logo")
        </div>

        <div class="navbar-nav-wrap-content-right ml-0 w-100 w-md-auto">
          <ul class="navbar-nav align-items-center flex-row justify-content-between">
            <li class="nav-item">
              {{-- Login or trial --}}
              @include("includes/navbar/credentials")
            </li>

            <li class="nav-item">
              @include("includes/navbar/toggle")
            </li>
          </ul>
        </div>

        <!-- Navbar -->
        <div class="navbar-nav-wrap-content-left collapse navbar-collapse" id="navbarNavMenu">
          <div class="navbar-body">
            @include("includes/navbar/nav-menu-no-gutters")
          </div>
        </div>
      </div>
    </div>
  </header>