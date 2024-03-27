<x-layout id="workWithUs">

    <section class="container d-flex justify-content-center align-items-center" style="min-height: 80vh; height: auto;">
        <div class="row p-3" id="workWithUsSection">

            <form method="POST" action="{{ route('revisor.send') }}">
                @csrf
                <x-message />
                <div class="row p-2 g-3 justify-content-center"> <!-- Aggiunta di justify-content-center qui -->
                    <div class="col-12 col-md-6">
                        <img class="img-fluid" src="https://picsum.photos/600/300" alt="">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center ">
                        <h1 class="text-primary text-center "><strong class="text-black">{{__('ui.Lavora')}}</strong> {{__('ui.ConNoi')}}</h1>
                        @if (auth()->user()->is_revisor)
                            <div class="row justify-content-center p-2 g-3">
                                <div class="col-10 text-center">
                                    <div class="card bg-light border-primary  ">
                                        <div class="card-body border-5  ">
                                            <h2 class="card-title text-primary mb-4">{{__('ui.GiaRev')}}</h2>
                                            <p class="card-text">{{__('ui.Grazie')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p><strong>{{__('ui.InviaCandidatura')}}</strong></p>
                            <textarea class="mb-3" type="textarea" name="description" rows="5"
                                placeholder="{{__('ui.Presentazione')}}"></textarea>
                            <button class="bg-primary text-white" type="submit">{{__('ui.DiventaRev')}}</button>
                        @endif
                    </div>
                </div>
            </form>

        </div>
    </section>

</x-layout>
