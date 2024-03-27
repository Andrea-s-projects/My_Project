<x-layout :title="config('app.name')" id='login'>

    <x-slot:title>
        Accedi
    </x-slot>

<section style="min-height: 80vh;">
    <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center " id="loginSection">
        <div class=" rounded-5 trasmparent">
            <div class="card-body ">
                <form action="/login" method="POST" class="p-5 border border-color p-4 rounded-5">
                    <div class="card-header border-0 text-center text-pr-color-h1 h3 mb-2 ">
                        Accedi
                    </div>
                    @csrf
                    <div class="row g-3">
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <input type="email" name="email" id="email" class="form-control border border-color p-2 rounded-5"
                                placeholder="Email">
                            @error('email')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <input type="password" name="password" id="password" class="form-control border border-color p-2 rounded-5"
                                placeholder="Password">
                            @error('password')
                                <span class="text-danger small">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12  text-center">
                            <button type="submit" class="btn btn-cta">Accedi</button>
                            <p class="small mt-2 text-black ">Non sei registrato? <a href="{{ route('register') }}"
                                    class="small mt-2 text-dark  ">Clicca qui</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
    

</x-layout>
