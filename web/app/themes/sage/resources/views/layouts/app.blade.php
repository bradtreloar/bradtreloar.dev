<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class('bg-light') @endphp>
    @php do_action('get_header') @endphp
    @include('partials.svg')
    <div class="d-lg-flex flex-row-reverse">
      <div class="navbar-wrapper">
        @include('partials.header')
      </div>
      <div class="flex-grow-1" role="document">
        <div class="container-md">
          <main class="main">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar')
            </aside>
          @endif
      </div>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
