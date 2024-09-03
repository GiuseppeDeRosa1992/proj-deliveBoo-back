@extends('layouts.app')

@section('content')
	<div class="container mt-4">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Register') }}</div>

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}">
							@csrf

							<div class="mb-4 row">
								<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

								<div class="col-md-6">
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" required autocomplete="name" autofocus minlength="4" maxlength="255">

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							<div class="mb-4 row">
								<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
										value="{{ old('email') }}" required autocomplete="email" pattern=".+@.+.(com|it)$" maxlength="255">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>

							{{-- MESSAGGIO DI ERRORE SE NON SI COMPLETANO I CAMPI CHE SONO OBBLIGATORI --}}
							<div>
								@if ($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
							</div>


							<form method="POST" action="{{ route('admin.restaurants.store') }}" enctype="multipart/form-data">
								@csrf

								{{-- Step 1: Nome Ristorante --}}
								<div class="mb-3">
									<label for="title" class="form-label">Come si chiama il tuo ristorante?</label>
									<input type="text" class="form-control" name="name" value="{{ old('name') }}" required minlength="5">
									@error('name')
										<div class="form-text text-danger">{{ $message }}</div>
									@enderror
								</div>

								{{-- Step 2: Immagine Ristorante --}}
								<div class="mb-3">
									<label for="image" class="form-label">Scegli l'immagine per il tuo ristorante</label>
									<input type="file" class="form-control" name="image" placeholder="" required accept="image/*">
									@error('image')
										<div class="form-text text-danger">The Image field is required.</div>
									@enderror
								</div>

								{{-- Step 3: PIva Ristorante --}}
								<div class="mb-3">
									<label for="description" class="form-label">Qual'è la tua Partita Iva?</label>
									<input type="text" class="form-control" name="p_iva" value="{{ old('p_iva') }}" pattern="\d{11}"
										required>
									@error('p_iva')
										<div class="form-text text-danger">{{ $message }}</div>
									@enderror
								</div>

								{{-- Step 4: Indirizzo Ristorante --}}
								<div class="mb-3">
									<label for="address" class="form-label">Qual'è l'indirizzo del ristorante</label>
									<input type="text" class="form-control" name="address" value="{{ old('address') }}" required
										maxlength="255">
									@error('address')
										<div class="form-text text-danger">{{ $message }}</div>
									@enderror
								</div>


								<div class="mb-3">
									@foreach ($types as $type)
										<div>
											<label for="icon" class="form-check-label">{{ $type->name }}</label>
											<input type="checkbox" name="types[]" id="" value="{{ $type->id }}">
										</div>
									@endforeach

									@error('types[]')
										<div class="form-text text-danger">The Link Preview field is required.</div>
									@enderror
								</div>

								<div class="mb-4 row">
									<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

									<div class="col-md-6">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
											name="password" required autocomplete="new-password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>

								<div class="mb-4 row">
									<label for="password-confirm"
										class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

									<div class="col-md-6">
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
											autocomplete="new-password">
									</div>
								</div>

								<div class="mb-4 row mb-0">
									<div class="col-md-6 offset-md-4">
										<button type="submit" class="btn btn-primary">
											{{ __('Register') }}
										</button>
									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
