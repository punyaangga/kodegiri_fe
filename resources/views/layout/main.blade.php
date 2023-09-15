<!DOCTYPE html>

<html lang="en">
<head>
	@include('partial.header')
</head>

<body>
	<div class="main-wrapper"> {{-- penutup di footer --}}
    {{-- panggil sidebar --}}
	@include('partial.sidebar')
 	{{-- end sidebar	 --}}

		<div class="page-wrapper"> {{-- penutup di footer --}}
            {{-- panggil navbar --}}
            @include('partial.navbar')
            {{-- end navbar --}}
		

			<div class="page-content">
                @yield('content')
			</div>

    {{-- panggil footer --}}
    @include('partial.footer')
    {{-- end footer --}}
</body>
</html>    