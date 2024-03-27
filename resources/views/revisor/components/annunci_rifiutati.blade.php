<div class="col-11 border-color rounded-2 list-item">
    <div class="row row-cols-4 align-items-center">
        <div class="col-12 col-md-7 h-auto">
            <!-- Carousel per le immagini -->
            <div id="carousel{{ $rejected_announcement->id }}" class="carousel slide mb-3 d-none">
                <div class="carousel-inner">
                    @foreach ($rejected_announcement->images as $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ Storage::url($image->path) }}" class="d-block w-100"
                                alt="...">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button"
                    data-bs-target="#carousel{{ $rejected_announcement->id }}"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button"
                    data-bs-target="#carousel{{ $rejected_announcement->id }}"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Pulsante per mostrare/nascondere il carousel -->
            <div class="text-center d-flex justify-content-center align-items-center mb-3">
                <button type="button" class="btn btn-cta toggle-carousel w-auto p-2"
                    data-carousel-id="carousel{{ $rejected_announcement->id }}">{{ __('ui.MostraCarosello') }}</button>
            </div>
        </div>

        <div class="col-12 col-md-4  p-3  h-auto ms-3 text-wrap">

            <p class="text-muted mb-2">
                <strong>Data: {{ $rejected_announcement->created_at->format('d/m/Y') }}</strong>
            </p>
            <p class="mb-2"><strong>{{ $rejected_announcement->title }}</strong></p>
            <p class="mb-2"><strong>{{ __('ui.Descr') }}</strong> {{ $rejected_announcement->body }}</p>
            <p class="mb-2"><strong>{{ __('ui.Category') }}</strong> {{ $rejected_announcement->category->name }}</p>
            <p class="mb-2"><strong>{{ __('ui.Prezzo') }}</strong> {{ $rejected_announcement->price }}</p>
            <form
                action="{{ route('revisor.recheck_announcement', ['announcement' => $rejected_announcement]) }}"
                method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-warning">{{ __('ui.RiportaRevisione') }}</button>
            </form>
        </div>
    </div>
</div>