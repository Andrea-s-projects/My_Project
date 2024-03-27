<div class="col-12 border-color rounded-2 list-item">
    <div class="row row-cols-1 row-cols-md-5 align-items-center">
        <div class="col-md-5 h-auto">
            <!-- Carosello -->
            <div id="carousel{{ $announcement->id }}" class="carousel slide w-100 d-none mt-3">
                <div class="carousel-inner">
                    @forelse ($announcement->images as $image)
                        <div class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
                            <img src="{{ Storage::url($image->path) }}" style="max-height:300px"
                                class="d-block w-100 object-fit-cover" alt="...">
                        </div>
                    @empty
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/id/11/1400/550" style="max-height:300px"
                                class="w-100 d-block object-fit-cover" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/17/1400/550" style="max-height:300px"
                                class="w-100 d-block object-fit-cover" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/id/18/1400/550" style="max-height:300px"
                                class="w-100 d-block object-fit-cover" alt="...">
                        </div>
                    @endforelse
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carousel{{ $announcement->id }}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carousel{{ $announcement->id }}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="text-center d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-cta toggle-carousel w-auto p-2 my-2"
                    data-carousel-id="carousel{{ $announcement->id }}">{{ __('ui.MostraCarosello') }}</button>
            </div>
        </div>

        <div class="col-md-4 order-3 order-md-2 p-3">
            <!-- Informazioni sull'annuncio -->
            <p class="text-muted mb-2">
                <strong>Data: {{ $announcement->created_at->format('d/m/Y') }}</strong>
            </p>
            <p class="mb-2"><strong>{{ $announcement->title }}</strong></p>
            <p class="mb-2 text-break"><strong>{{ __('ui.Descr') }}</strong> {{ $announcement->body }}</p>
            <p class="mb-2 text-break"><strong>{{ __('ui.Category') }}</strong> {{ $announcement->category->name }}</p>
            <p class="mb-2 text-break"><strong>{{ __('ui.Prezzo') }}</strong> {{ $announcement->price }}</p>
            <div class="d-inline-block">
                <form
                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">{{ __('ui.Accetta') }}</button>
                </form>
            </div>
            <div class="d-inline-block">
                <form
                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement]) }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow ms-2">{{ __('ui.Rifiuta') }}</button>
                </form>
            </div>
        </div>
        @if ($announcement->images->isNotEmpty() && $announcement->images->first()->labels)
        <div class="col-md-3 order-2 order-md-3 p-3 border-right">
            <h5 class="tc-accent mt-3">Tags</h5>
            <div class="p-2">
           
                    @foreach ($announcement->images->first()->labels as $label)
                        <p class="d-inline">{{$label}},</p>
                    @endforeach
               
            </div>

            <!-- Revisione Immagini -->
            <div class="card-body mt-3">
                <h5 class="tc-accent">Revisione Immagini</h5>
                <p>Adulti: <span class="{{$announcement->images->first()->adult}}"></span></p>
                <p>Satira: <span class="{{$announcement->images->first()->spoof}}"></span></p>
                <p>Medicina: <span class="{{$announcement->images->first()->medical}}"></span></p>
                <p>Violenza: <span class="{{$announcement->images->first()->violence}}"></span></p>
                <p>Contenuto Ammiccante: <span class="{{$announcement->images->first()->racy}}"></span></p>
            </div>
        </div>
        {{-- @else
        <p>Inserire UI</p> --}}
        @endif
    </div>
</div>
