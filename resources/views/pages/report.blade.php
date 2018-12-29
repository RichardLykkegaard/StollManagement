@include('includes.header')
@include('includes.navbar')

<!--Secures only logged in users can acces the system -->
@guest
 <!-- if guest -->
 @include('includes.loginInclude')
@else
<!-- if logged in -->
<h1>report page</h1>
@include('includes.footer')

@endguest