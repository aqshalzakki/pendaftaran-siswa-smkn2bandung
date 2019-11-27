<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      @include('guest-components.styles')
  
  </head>
  <body>

    {{-- AWAL NAV --}}
      @include('guest-components.navbar')
    {{-- END nav --}}
    
      @yield('main-content')

    {{-- FOOTER --}}
      @include('guest-components.footer')
    {{-- END FOOTER --}}


      @include('guest-components.scripts')
  </body>
</html>