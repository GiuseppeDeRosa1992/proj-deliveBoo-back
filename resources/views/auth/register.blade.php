@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registrati') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3 row">
                                <p class="text-danger">Tutti i campi sono obbligatori</p>
                            </div>
                            <!-- Email -->
                            <div class="mb-4 row">
                                <label for="e-mail"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                                        title="Per favore, inserisci un'email valida che termini con .it o .com">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-4 row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" minlength="6" maxlength="255">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4 row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password:') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!-- Nome del Ristorante -->
                            <div class="mb-4 row">
                                <label for="restaurant_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nome Ristorante:') }}</label>
                                <div class="col-md-6">
                                    <input id="restaurant_name" type="text"
                                        class="form-control @error('restaurant_name') is-invalid @enderror"
                                        name="restaurant_name" value="{{ old('restaurant_name') }}" required minlength="3"
                                        maxlength="255">
                                    @error('restaurant_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Indirizzo del Ristorante -->
                            <div class="mb-4 row">
                                <label for="restaurant_address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo Ristorante:') }}</label>
                                <div class="col-md-6">
                                    <input id="restaurant_address" type="text"
                                        class="form-control @error('restaurant_address') is-invalid @enderror"
                                        name="restaurant_address" value="{{ old('restaurant_address') }}"required
                                        minlength="5" maxlength="255">
                                    @error('restaurant_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Partita IVA del Ristorante -->
                            <div class="mb-4 row">
                                <label for="p_iva"
                                    class="col-md-4 col-form-label text-md-right">{{ __('P.iva:') }}</label>
                                <div class="col-md-6">
                                    <input id="p_iva" type="text"
                                        class="form-control @error('p_iva') is-invalid @enderror" name="p_iva"
                                        value="{{ old('p_iva') }}" required minlength="11" maxlength="11">
                                    @error('p_iva')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Immagine del Ristorante -->
                            <div class="mb-4 row">
                                <label for="image"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Logo Ristorante:') }}</label>
                                <div class="col-md-6">
                                    <input id="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" name="image" required
                                        accept="image/*">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- types -->
                            <div id="type-form">
                                @foreach ($types as $type)
                                    <div>
                                        <input type="checkbox" name="types[]" id="type-{{ $type->id }}" value="{{ $type->id }}">
                                        <label for="icon" class="form-check-label">{{ $type->name }}</label>
                                    </div>
                                @endforeach

                                <div class="invalid-feedback" role="alert" id="error-message" style="display: none;">
                                    <strong>Errore: seleziona almeno un'opzione</strong>
                                </div>
                            </div>

                    </div>

                    <!-- Pulsante di invio -->
                    <div class="mb-4 row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrati') }}
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const password = document.getElementById('password');
            const passwordConfirm = document.getElementById('password-confirm');
            const form = password.closest('form');
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            const errorMessage = document.getElementById('error-message');
            const typeForm = document.getElementById('type-form');

            form.addEventListener('submit', function (event) {
                if (password.value !== passwordConfirm.value) {
                    event.preventDefault();
                    alert('Le password non coincidono. Per favore, riprova.');
                }
            });

            function validateCheckboxes() {
                const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
                if (anyChecked) {
                    errorMessage.style.display = 'none';
                } else {
                errorMessage.style.display = 'block';
                }
            };
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', validateCheckboxes);
            });
            typeForm.addEventListener('submit', function(event) {
                if (!validateCheckboxes()) {
                    event.preventDefault();
            }
            });
            validateCheckboxes();
        });
    </script>
@endsection
