<x-layout>
<section style="min-height: 80vh;">

    <div class="container-fluid shadow mb-2">
        <div class="row">
            <div class="col-12 text-light p-2">
                <h1 class="text-center text-pr-color-h1">{{__('ui.ShowCategoryTitle')}} {{ $category->name }}</h1>

            </div>
        </div>
    </div>


    <div class="container">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center text-center">
            @forelse ($announcements as $announcement)
                <div class="col mb-4">
                    <a href="{{ route('announcements.show', compact('announcement')) }}" class="text-decoration-none">
                        <div class="card border rounded-3 shadow h-100 border-color">
                            <img src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 300) : 'https://picsum.photos/200' }}" class="card-img-top rounded-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fs-4 text-pr-color-h1">{{ $announcement->title }}</h5>
                                <p class="card-text mb-3 announcement-body text-pr-color-h3" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $announcement->body }}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="card-text fs-5 fw-bolder text-pr-color-h1">{{ $announcement->price }} €</p>
                                    <p class="card-text fw-lighter text-pr-color-h3">Pubblicato il : {{ $announcement->created_at->format('d/m/Y') }}</p>
                                </div>
                                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="btn btn-sm btn-outline-success mt-3 w-100 border-color text-pr-color-h1">Categoria: {{ $announcement->category->name }}</a>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12">
                    <h2 class="text-muted">{{__('ui.ShowCategoryMess')}}</h2>
                    
                </div>
                <div class="col-12">
                    <div class="mt-3">
                        <p class="h5">{{__('ui.Pubblicane')}}</p>
                        <a href="{{ route('announcements.create', ['category' => $category]) }}" class="btn btn-cta shadow">{{__('ui.NuovoAnnuncio')}}</a>
                    </div>
                </div>
            @endforelse
        </div>
      
    </div>
</section>
    

</x-layout>
