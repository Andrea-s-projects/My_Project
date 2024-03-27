<x-layout id="announcementsList">
    
    @include('components.message')

    <div class="container mt-4" id="announcementsSection" style="min-height: 80vh;">
        @if ($announcements->isEmpty())
            <div class="alert alert-warning py-3 shadow col-12">
                <div class="lead">Non ci sono annunci per questa ricerca.</div>
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                <x-card_annunci :announcements="$announcements" />
            </div>
        @endif
        {{ $announcements->links() }}
    </div>
</x-layout>