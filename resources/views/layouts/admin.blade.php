<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Deliveboo amministrazione</title>
	<link rel="shortcut icon" href="public/logo-deliveboo-no-scritta.png" type="image/x-icon">

	<!-- Fontawesome 6 cdn -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
		integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
		crossorigin='anonymous' referrerpolicy='no-referrer' />

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Usando Vite -->
	@vite(['resources/js/app.js'])
</head>

<body>
	<div id="app">

		<div class="container-fluid vh-100">
			<div class="row h-100">
				<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark navbar-dark sidebar collapse">
					<div class="position-sticky pt-3">
						<ul class="nav flex-column">

							<li class="nav-item">
								<a class="nav-link text-white rounded {{ request()->is('admin') ? 'active' : '' }}" 
									href="/admin">
									<i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
								</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link text-white rounded {{ Route::currentRouteName() == 'admin.dishes.index' ? 'active' : '' }}" 
								href="{{ route('admin.dishes.index') }}">
									<i class="fa-solid fa-plate-wheat fa-lg fa-fw"></i> Piatti
								</a>
							</li>

                            <li class="nav-item">
								<a class="nav-link text-white rounded {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}" 
								href="{{ route('admin.orders.index') }}">
                                    <i class="fa-solid fa-truck-fast"></i> Ordini</a>
							</li>

                            <li class="nav-item">
								<a href="{{ url('admin/chart') }}" class="nav-link text-white rounded {{ request()->is('admin/chart') ? 'active' : '' }}">
                                    <i class="fa-solid fa-chart-line"></i> Statistiche</a>
							</li>

							<li class="nav-item">
								<a class="nav-link text-white" href="{{ route('logout') }}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Esci') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
									@csrf
								</form>
							</li>

						</ul>

					</div>
				</nav>

				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
					@yield('content')
				</main>
			</div>
		</div>

	</div>
</body>

</html>
