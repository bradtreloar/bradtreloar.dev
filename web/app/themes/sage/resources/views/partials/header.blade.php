<div class="bg-light navbar-wrapper">
  <div class="container px-0">
    <div class="navbar navbar-light navbar-expand-lg">
      <a class="navbar-brand p-0" href="{{ home_url('/') }}">
        <img src="/app/themes/sage/resources/assets/images/logo.svg" alt="{{ bloginfo( 'name' ) }}" height="48">
      </a>
      <div class="pl-4 ml-auto mr-lg-3 collapse navbar-collapse justify-content-end text-right" id="navbar-nav">
        <div class="offcanvas-header py-1">
          <button class="btn" data-toggle="collapse" data-target="#navbar-nav">
            <svg class="icon fill-light" width="24" height="24">
              <use xlink:href="#times" />
            </svg>
          </button>
        </div>
        <div>
          @if (has_nav_menu('main_menu'))
            {!! wp_nav_menu(['theme_location' => 'main_menu', 'menu_class' => 'navbar-nav']) !!}
          @endif
        </div>
      </div>
      @if (has_nav_menu('contact_menu'))
        {!! wp_nav_menu(['theme_location' => 'contact_menu', 'menu_class' => 'navbar-nav ml-auto mr-sm-3 mr-lg-0']) !!}
      @endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="icon fill-light" width="24" height="24"><use xlink:href="#bars" /></svg>
      </button>
    </div>
  </div>
</div>
