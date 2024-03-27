<x-layout>
    <div class="container-fluid bg-gradient bg-primary shadow  py-1">
        <div class="row justify-content-center">
            <div class="col-10 text-center">
                <h1 class="text-light fw-bold">{{ $announcement->title }}</h1>
            </div>
        </div>
    </div>
    
@include('components.success')

    <div class="container mt-4 mb-5 ">
        <div class="row align-items-center justify-content-center  ">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="card shadow rounded-4">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @forelse ($announcement->images as $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ $image->getUrl(400, 300) }}" class="d-block w-100 rounded-4 " alt="Announcement Image">
                                </div>
                            @empty
                                <div class="carousel-item active">
                                    <img src="https://picsum.photos/1400/550" class="d-block w-100" alt="Placeholder Image">
                                </div>
                            @endforelse
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title fst-italic fw-medium">{{ $announcement->title }}</h4>
                        <p class="card-text fst-italic fw-medium">{{ $announcement->body }}</p>
                        <p class="card-text fw-bold">{{ __('ui.Price') }} {{ $announcement->price }} €</p>
                        <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="btn bg-light shadow mb-3">{{ __('ui.Category') }} {{ $announcement->category->name }}</a>

                        <p class="mb-0 text-muted">{{ __('ui.Published') }} {{ $announcement->created_at->format('d/m/Y') }} - {{ __('ui.Author') }} {{ $announcement->user->name ?? '' }}</p>

                    </div>
                    

                    <div class="card-footer text-center border-2 text-muted">
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
                            <textarea name="comment" maxlength="120" rows="3" class="form-control my-" placeholder="{{ __('ui.Entercomment') }}"></textarea>
                            <button type="submit" class="btn bg-light shadow my-2">{{ __('ui.AddComment') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
