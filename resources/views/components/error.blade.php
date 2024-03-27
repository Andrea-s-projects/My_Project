@if (session()->has('access.denied'))
<style>
    .bg-danger{
        background-color: #ff4242  !important;
    }
</style>

<div class="container mt-2">
    <div class="row justify-content-center m-2">
        <div class="col-md-5 ">
            <div class="alert text-center bg-danger m-0 p-2" role="alert" >
                <p class="p-0 m-0 ">
                    {{ Session::get('access.denied') }}
                </p>
            </div>
        </div>
    </div>
</div>
@endif
