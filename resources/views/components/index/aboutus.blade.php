<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">{{ __('ui.abautusTitle') }}</h3>
                    <p class="text-muted fs-15">{{ __('ui.abautusDescr') }}</p>
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
                            <div class="swiper-slide mt-5">
                                <div class="w-100 d-flex justify-content-center align-items-center gap-5">
                                    <!-- Primo commento -->
                                    @foreach ($comments as $comment)
                                        <blockquote class="speech-bubble ml-3 d-inline-block rounded-5 card-m">
                                            <h3>{{ $comment->announcement->title }}</h3>
                                            <p class="p-bubble text-break ">{{ $comment->body }}</p>
                                            <cite><b>{{ $comment->user->name }}</b></cite>
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
