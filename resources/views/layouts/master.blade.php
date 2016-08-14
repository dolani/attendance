<!DOCTYPE html>
<html>
    @include('layouts.head')
	<body>
		@include('layouts.navbar')
        
        @yield('body')
        
        @include('layouts.footer')
	</body>    
</html>
