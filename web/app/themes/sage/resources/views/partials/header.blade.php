<div class="bg-white h-100">
  <div class="py-lg-3 h-100">
    <div class="d-flex justify-content-between">
      <div class="px-3 py-2 d-flex align-items-center">
        <a class="d-block h4 m-0 text-dark text-decoration-none" href="{{ home_url('/') }}">
          {{ bloginfo( 'name' ) }}
        </a>
      </div>
      <div class="d-flex d-lg-none align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="icon" width="24" height="24">
            <use xlink:href="#nav" />
          </svg>
        </button>
      </div>
    </div>
    <div class="navbar-expand-lg">
      <div class="collapse navbar-collapse bg-white" id="navbar-collapse">
        <div class="offcanvas-header d-flex align-items-center justify-content-end">
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse">
            <svg class="icon" width="24" height="24">
              <use xlink:href="#close" />
            </svg>
          </button>
        </div>
        <div class="px-3 pt-2">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex-column']) !!}
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
