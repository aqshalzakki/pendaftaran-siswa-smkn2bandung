<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      @include('components.styles')
  
  </head>
  <body>

    {{-- AWAL NAV --}}
      @include('components.navbar')
    {{-- END nav --}}
    
      @yield('main-content')

    {{-- FOOTER --}}
      @include('components.footer')
    {{-- END FOOTER --}}


      @include('components.scripts')
  </body>
</html>