@if (session()->has('success'))
    <div class="container mt-3  ">
        <div class="row justify-content-center ">
            <div class="col-md-5 ">
                <div class="alert text-center alert-success m-0 p-2" role="alert" >
                    <p class="p-0 m-0 ">
                        {{ session('success') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
