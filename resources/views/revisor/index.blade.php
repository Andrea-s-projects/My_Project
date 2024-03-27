<x-layout>
    <section style="min-height: 75vh; height: auto;">
        <div class="container-fluid bg-gradient shadow py-2">
            <h1 class=" text-center text-pr-color-h1">
                {{ $announcements_to_check->count() ? __('ui.RevTitleSi') : __('ui.RevTitleNo') }}
            </h1>
        </div>
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane show active">
                    <div class="row justify-content-center gap-3 my-5">
                        @forelse ($announcements_to_check as $announcement)
                        <!-- Schedule Item 1 -->
                        @include('revisor.components.annunci_revisione')
                        @empty
                        @endforelse
                        {{ $announcements_to_check->links() }}
                    </div>
                </div>
            </div>
            {{-- Annunci Rifiutati --}}
            <div class="row justify-content-center gap-3 my-5">
                <div class="container-fluid bg-gradient shadow py-0">
                    <h2 class=" text-center text-pr-color-h1">
                        {{ $rejected_announcements->count() ? __('ui.RevAnnuncieliminatiSi') : __('ui.RevAnnuncieliminatiNo') }}
                    </h1>
                </div>
                <h2></h2>
                @forelse ($rejected_announcements as $rejected_announcement)
                {{-- componente per annunci riufiutati --}}
                @include('revisor.components.annunci_rifiutati')
                {{-- componente per annunci riufiutati --}}
                @empty
                @endforelse
               {{ $rejected_announcements->links() }} 
            </div>
            <script>
                document.querySelectorAll('.toggle-carousel').forEach(button => {
                    button.addEventListener('click', function() {
                        const carouselId = this.getAttribute('data-carousel-id');
                        const carousel = document.getElementById(carouselId);
                        carousel.classList.toggle('d-none');

                        // Modifica il testo del pulsante in base allo stato del carosello
                        const buttonText = carousel.classList.contains('d-none') ?
                            '{{ __('ui.MostraCarosello') }}' :
                            '{{ __('ui.ChiudiCarosello') }}';
                        this.textContent = buttonText;
                    });
                });
            </script>
            
        </div>

<!-- Sezione per i commenti in attesa di revisione -->
{{-- <div class="container">
    <h2>Commenti da revisionare</h2>
    @if($comments_to_check->isEmpty())
        <p>Non ci sono commenti in attesa di revisione al momento.</p>
    @else
        <ul>
            @foreach($comments_to_check as $comment)
                <li>
                    <strong>Utente:</strong> {{ $comment->user->name }} <br>
                    <strong>Annuncio:</strong> {{ $comment->announcement->title }} <br>
                    <strong>Contenuto:</strong> {{ $comment->body }} <br>
                    <form action="{{ route('revisor.acceptComment', $comment->id) }}" method="POST">
                        @csrf
                        <button type="submit">Accetta commento</button>
                    </form>
                    <form action="{{ route('revisor.rejectComment', $comment->id) }}" method="POST">
                        @csrf
                        <button type="submit">Rifiuta commento</button>
                    </form>
                    <form action="{{ route('revisor.recheckComment', $comment->id) }}" method="POST">
                        @csrf
                        <button type="submit">Riporta in revisione</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div> --}}

    </section>


</x-layout>
