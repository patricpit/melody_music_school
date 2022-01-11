<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="style1.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>ChrisDavies Orchestra</title>
		<link rel="stylesheet" href="./css/tailwind.css">
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>
    
    	<!-- Styles -->
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">


	</head>
	<body>
    
	<header class="bg-green-800">       
		<!-- Navbar goes here -->
		<nav class="bg-green shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img src="{{ URL::to('/img/cdo.png') }}" alt="Logo" class="h-10 w-80 mr-2">
								<span class="font-semibold text-white-500 text-lg"></span>
							</a>
						</div>
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="/" class="py-4 px-2 text-gray-100 border-green-500 font-semibold">Home</a>
							<a href="/about" class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300">About</a>
							@can('logged-in')
							<a href="/music_lessons" class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300">Online-Classes</a>
							@can('is-admin')
							<a href="{{ route('admin.users.index') }}" class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300">Users</a>
							@endcan
							@endcan
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
                    @guest
						<a href="{{ route('login') }}" class="py-2 px-2 font-medium text-gray-100 rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
                        @if (Route::has('register'))
						<a href="{{ route('register') }}" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-500 transition duration-300">Enroll</a>
                        @endif
                    @else
                        <span class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
					</div>
			
				
					
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-green-500 hover:text-gray-100 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="/" class="block text-sm px-2 py-4 text-gray-100 bg-white-500 font-semibold">Home</a></li>
					<li><a href="/about" class="block text-sm px-2 text-gray-100 py-4 hover:bg-green-500 transition duration-300">About</a></li>
					@can('logged-in')
					<li><a href="/music_lessons" class="block text-sm px-2 text-gray-100 py-4 hover:bg-green-500 transition duration-300">Online-Classes</a></li>
					@can('is-admin')
					<li><a href="{{ route('admin.users.index') }}" class="block text-sm px-2 text-gray-100 py-4 hover:bg-green-500 transition duration-300">Users</a></li>
					@endcan
					@endcan

					@guest
					<li><a href="{{ route('login') }}" class="block text-sm px-2 text-gray-100 py-4 hover:bg-green-500 transition duration-300">Log In</a></li>
					@if (Route::has('register'))
					<li><a href="{{ route('register') }}" class="block text-sm px-2 text-gray-100 py-4 hover:bg-green-500 transition duration-300">Enroll</a></li>
					@endif
					@else
                        <span class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}"
                           class="py-4 px-2 text-gray-100 font-semibold hover:text-none-500 transition duration-300"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>
	</header>		
	
		<div>
            @include('partials.alerts')
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
	</body>
</html>