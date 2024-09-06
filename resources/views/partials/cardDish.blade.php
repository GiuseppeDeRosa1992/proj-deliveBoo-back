<section>
    <div class="text-center px-2 row m-0">
        @foreach ($dishes as $dish)
            <div class="col-4 mt-3">
                <div class="card p-0 h-100">
                    <div class="row g-0 m-0">
                        <div class="col-12">
                            @if (Str::startsWith($dish->image, 'http'))
                                <img src="{{ $dish->image }}" class="card-img-top mb-2" alt="immagine-ristorante">
                            @else
                                <img src="{{ asset('storage/' . $dish->image) }}" class="card-img-top mb-2" />
                            @endif
                        </div>
                        <h5 class="card-title"><b>Nome Piatto:</b> {{ $dish->name }}</h5>
                    </div>
                    <div>
                        <a href="{{ route('admin.dishes.show', $dish->id) }}"
                            class="btn btn-outline-primary my-2 py-1 px-3">Dettagli
                            Piatto
                            <i class="fa-solid fa-info"></i></a>
                    </div>
                    <div>
                        <a href="{{ route('admin.dishes.edit', $dish->id) }}"
                            class="btn btn-outline-primary my-2 py-1 px-2">Modifica
                            Piatto
                            <i class="fa-solid fa-pencil"></i></a>
                    </div>
                    <!-- Modal trigger button -->
                    <div class="py-2">
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-{{ $dish->id }}">Elimina Piatto
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </div>



                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modal-{{ $dish->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitle-{{ $dish->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                            role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitle-{{ $dish->id }}">
                                        Elmina questo piatto
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    Elimina questo piatto: <Strong>{{ $dish->name }}</Strong>
                                    ⚡Attento, non puoi annullare questa operazione
                                </div>
                                <div class="modal-footer justify-content-center">
                                    {{-- CREO FORM PER CANCELLARE UN FUMETTO DAL DATABASE GLI DO LA ROTTA DESTROY E IL METODO POST POI SOTTO LO CAMBIO NEL METODO DELETE --}}
                                    <form method="POST" action="{{ route('admin.dishes.destroy', $dish->id) }}">
                                        @csrf

                                        @method('DELETE')
                                        <button type="submit" href="" class="btn btn-outline-danger my-2"
                                            data-bs-dismiss="modal">
                                            elimina
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
