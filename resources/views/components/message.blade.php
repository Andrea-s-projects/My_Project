@if (session()->has('message'))
    <div class="container mt-3  ">
        <div class="row justify-content-center" style="margin-bottom: 0.8rem">
            <div class="col-md-5 ">
                <div class="alert text-center bg-primary m-0 p-2" role="alert" >
                    <p class="p-0 m-0 ">
                        {{ Session::get('message') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
