@foreach ($announcements as $annuncio)
    <div class="m-3 col rounded-5 " style="grid-auto-rows: 1fr" data-tilt data-tilt-max="7" data-tilt-reset="true"
        data-tilt-speed="300">
        <div class="card card-m  rounded-5 h-100">
            @if (auth()->user() && auth()->user()->is_revisor)
                <form action="{{ route('announcement.remove', ['announcement' => $annuncio]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" id="removeAnnouncement">
                        <span><i class="fa-solid fa-trash-can"></i></span>
                    </button>
                </form>
            @endif
            <div class="card-body ">
                <img src="{{ !$annuncio->images()->get()->isEmpty() ? $annuncio->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200' }}"
                    class="card-img-top p-3 rounded" alt=" ... ">
                <h5 class="card-title text-center text-primary  fs-3 text-break">{{ $annuncio->title }}</h5>
                <div class="border-2 mb-2 mt-2">
                    <p class="card-text mb-2 text-break" style="height: 70px; overflow: hidden; text-overflow: ellipsis;"><strong>Descrizione</strong>:<br> {{ Str::limit($annuncio->body, 50) }}
                    </p>
                    <p class="card-text mb-2 "><strong>Categoria</strong>: {{ $annuncio->category->name }} </p>
                    <p class="card-text mb-2 "><strong>Prezzo</strong>: {{ $annuncio->price }} €</p>
                </div>
                @php
                    $diffInHours = now()->diffInHours($annuncio->created_at);

                    $hourString = $diffInHours > 1 ? 'ore' : 'ora';

                    $timeElapsed = $diffInHours < 1 ? 'Meno di un ora fa' : $diffInHours . ' ' . $hourString;
                @endphp
                <div class="text-muted border-2">
                    Data di creazione: {{ $timeElapsed }}
                </div>
            </div>
            <div class="card-footer text-center border-0 "
                style=" 
                    border-bottom-left-radius: 32px;
                    border-bottom-right-radius: 32px;
                    ">
                <a href="{{ route('announcements.show', $annuncio) }}" class="btn btn-cta p-2  m-1 mx-auto">{{ __('ui.dipiù') }}</a>
            </div>
        </div>
    </div>
@endforeach

