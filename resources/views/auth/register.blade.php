<x-layout :title="config('app.name')" id='register'>

<x-slot:title>
Registrati
</x-slot>

<section style="min-height: 80vh;">
    <div class="container d-flex justify-content-center align-items-center" id="registerSection">
    <div class=" rounded-5 col-6">
        <div class="card-body">
            <form action="/register" method="POST" class="p-5 border border-color p-4 rounded-5">
                <div class="card-header border-0 text-center text-pr-color-h1 h3 mb-2 ">
                    Registrati
                </div>
                @csrf
                <div class="row g-3">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="text" name="name" id="name" class="form-control border border-color p-2 rounded-5" placeholder="Name">
                        @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="email" name="email" id="email" class="form-control border border-color p-2 rounded-5" placeholder="Email">
                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="password" name="password" id="password" class="form-control border border-color p-2 rounded-5" placeholder="Password">
                        @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border border-color p-2 rounded-5" placeholder="Conferma Password">
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-3 text-center">
                        <button type="submit" class="btn btn-cta">Registrati</button>
                        <p class="small mt-2 text-black">Già registrato? <a href="{{ route('login') }}" class="small mt-2 text-dark  ">Clicca qui</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>


</x-layout>