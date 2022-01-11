<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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

		<script src="{{ asset('js/app1.js') }}" defer></script>
    
    	<!-- Styles -->
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">

      <style>
      * {
          margin: 0;
          padding: 0;
          font-family:sans-serif;
      }
      body{
          background: #ecf4fb;
      }
      .img-gallery{
        width: 80%;
        margin:100px auto 50px;
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 30px;
      }
      .img-gallery img{
          width: 100%;
          cursor: pointer;
      }

      .img-gallery img:hover{
          transform: scale(0.8) rotate(-15deg);
          border-radius: 20px;
          box-shadow: 0 32px 75px rgba(68, 77, 136, 0.2);
      }

      
</style>		
		
	</head>
	<body class="bg-primary">
    
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
							<a href="/about" class="py-4 px-2 text-gray-100 font-semibold border-green-500 hover:border-b-4 border-green-500 transition duration-300">About</a>
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
					<li class="active"><a href="/" class="py-4 px-2 text-gray-100 font-semibold">Home</a></li>
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

  <section id="img-gallery" class="bg-light">

<h1 class="text-center p-3 bg-black" style="color:yellow;"><b>Mission and Vision</b></h1>
<p class="text-l text-gray_700 pt-6 pb-8 leading-8 bg-white"><b>Our Mission:</b> To empower idividuals through music training.</p>
<hr/>
<p class="text-l text-gray_700 pt-6 pb-8 leading-8 bg-white"><b>Our Vision:</b> To inspire a multitude of people to find peace and focus in instrumental music, thereby being the largest promoter of musical in our generation.</p>

<div class="img-gallery">
  <img src="img/p1.jpg">
  <img src="img/p3.jpg">
  <img src="img/ochfm.jpg">
  <img src="img/ochfm1.jpg">
  <img src="img/p7.jpg">
  <img src="img/p14.jpg"> 
</div>
<br/>
      
      
</section>

      <section id="instructors" class="p-5 bg-primary">
        <div class="container">
          <h2 class="text-center text-white">Our Instructors</h2>
          <p class="lead text-center text-white mb-5">
            Our instructors all have 3+ years working as music instructors in the
            industry
          </p>
          <div class="row g-4">
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_1.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Desmond Okeke</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_2.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Chioma Anosike</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_3.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Daniel Omeaku</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_4.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Rita Chukwunenye</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
          </div>
      
        <br/>
        <div class="row g-4">
        <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_5.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Agnes Anosike</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
        
        <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_6.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Angela Anosike</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <img
                    src="{{ URL::to('/images/instr_7.jpg') }}"
                    class="rounded-circle mb-3"
                    alt=""
                  />
                  <h3>Nnena Mgbenwelu</h3>
                  
                  <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                  <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                </div>
              </div>
            </div>

        </div>
      </div>
      </section>

      <footer class="bg-green-800 py-20 mt-20">
    <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2
    border-green-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-100">
                <li class="pb-1">
                    <a href="/">
                        Home
                    </a>
                </li>

                <li class="pb-1">
                    <a href="/about">
                        About
                    </a>
                </li>
                @can('logged-in')
                <li class="pb-1">
                    <a href="/music_lessons">
                        Online-Classes
                    </a>
                </li>
                @endcan
                @can('is-admin')
                <li class="pb-1">
                    <a href="{{ route('admin.users.index') }}">
                        Users
                    </a>
                </li>
                @endcan
                @guest
                <li class="pb-1">
                    <a href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                @if (Route::has('register'))
                <li class="pb-1">
                    <a href="{{ route('register') }}">
                        Enroll
                    </a>
                </li>
                @endif
                @endguest
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Find Us
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-100">
                <li class="pb-1">
                    <a href="/blog">
                        What we do
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/about">
                        Address
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/about">
                        Phone
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/about">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Latest Posts
            </h3>

            <ul class="py-4 sm:text-s pt-4 text-gray-100">
                <li class="pb-1">
                    <a href="/">
                        Why we love music
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Musical instruments
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        4 most used chords in music
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/">
                        Musical notes
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6 lead text-center">
        Copyright &copy; 2021 code with Peter Ndiuwem Patrick. All rights Reserved
    </p>
</footer>

	</body>
</html>