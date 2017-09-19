<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

@include('partials._head')

  <body>

    @include('partials._nav')
        
        <div class="container">
        	@include('partials._messages')

            @yield('content')

    @include('partials._footer')

        </div> <!-- end of container div -->
    @include('partials._javascript')

  </body>

</html>