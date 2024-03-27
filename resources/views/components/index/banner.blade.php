<style>
    .time-blocks {
        max-width: auto; /* Utilizza tutta la larghezza disponibile */
        margin: 0 auto; /* Centra orizzontalmente */
    }
    
    .block {
        background-color: #f0f0f0 ;
        padding: auto !important;
        border-radius: 8px;
        min-width: auto !important;
        max-width: auto !important;
    }
    
    .side-text {
        font-size: 23px !important;
        color: #888;
    }
    
    .time-text {
        font-size: 35px !important;
        font-weight: bold;
        color: #333;
    }
    
    @media (max-width: 991px) {
        .side-text {
        font-size: auto !important;
        color: #888;
    }
    .time-text {
        font-size: auto !important;
        font-weight: bold;
        color: #333;
    }
        .time-blocks {
            flex-direction: row; Imposta la flessione della riga in verticale su schermi medio-piccoli
             /* Centra verticalmente gli elementi */
        }
    }
    </style>
    
    <section class="bg-cta py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="py-lg-3">
                        <p class="text-uppercase badge bg-danger-subtle text-danger fs-13 text-break">{{ __('ui.bannerB') }}</p>
                        <h1 class="lh-base fw-semibold mb-3 text-capitalize">{{ __('ui.bannerTitle') }}</h1>
                        <p class="fs-16 mt-2">{{ __('ui.bannerdescription') }}</p>
                        <div class="time-blocks d-flex justify-content-center align-items-center mt-4 ">
                            <div class="block text-center">
                                <span class="side-text ">DAYS</span>
                                <span class="time-text space" id="days">0</span>
                            </div>
                            <div class="block text-center">
                                <span class="side-text">HOURS</span>
                                <span class="time-text space" id="hours">0</span>
                            </div>
                            <div class="block text-center">
                                <span class="side-text">MINUTES</span>
                                <span class="time-text space" id="minutes">0</span>
                            </div>
                            <div class="block text-center">
                                <span class="side-text">SECONDS</span>
                                <span class="time-text space" id="seconds">0</span>
                            </div>
                        </div>
                        {{-- <div class="pt-4 d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="#!" class="btn btn-primary btn-hover">{{ __('ui.Shopping') }}</a>
                            <a href="#!" class="btn btn-danger btn-hover">{{ __('ui.Subscribe') }}</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-12 text-center text-lg-end" >
                    <div class="box-image">
                        <img src="./img/cta.png" alt="buy" class="img-fluid" style="max-height: 400px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    