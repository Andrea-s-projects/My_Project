<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">{{ __('ui.abautusTitle') }}</h3>
                    <p class="text-muted fs-15 mb-0">{{ __('ui.abautusDescr') }}</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="swiper testi-slider">

                    <div class="swiper-wrapper my-5 ">
                        @foreach ($commentsChunked as $comments)
                        <!-- Inizio della slide -->
                        <div class="swiper-slide mb-3 ">
                            <div
                                class="w-100 text-wrap row row-cols-1 row-cols-md-3  justify-content-center align-items-center">
                                <!-- Primo commento -->
                                @foreach ($comments as $comment)
                                <blockquote class="col speech-bubble ml-3 d-inline-block rounded-5 card-m">
                                    <h4>{{ $comment->announcement->title }}</h3>
                                        <p class="p-bubble text-break text-body ">{{ $comment->body }}</p>
                                        <cite class="marg"><b>{{ $comment->user->name }}</b></cite>
                                </blockquote>
                                @endforeach
                            </div>
                        </div>
                        <!-- Fine della slide -->
                        @endforeach


                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Fine della paginazione -->
                </div>
            </div>
        </div>

</section>

<!-- Aggiungi il link alla libreria JavaScript di Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Inizializza Swiper -->
<script>
    var swiper = new Swiper('.testi-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>