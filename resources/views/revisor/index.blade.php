<x-layout>
    <div class="container-fluid sfondoServizi p-5">
        <div class="row p-5">
            <h3 class="titolo terziario bordoScritte marginTop text-center">{{ __('ui.Revisor1') }}</h3>
            <div class="col-3">
                <div class="rounded">
                    @if (session()->has('message'))
                    <div class="row justify-content-center">
                        <div id="popup-success" class="col-12 alert alert-success text-center">
                            {{ session('message') }}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div>
            @if($article_to_check)
            <div class="row justify-content-center ">
                <div class="col-10 col-md-8">
                    <div class="row justify-content-center mt-5 mt-md-0">
                        {{-- Se l'articolo ha delle immagini le mostra, altrimenti usa placeholder --}}
                        @if ($article_to_check->images->count())
                        @foreach ($article_to_check->images as $key => $image)
                        <div class="col-10 col-md-4 me-md-5">
                            <img src="{{ $image->getUrl(700, 400) }}" class="img-fluid rounded-5" alt="Immagine {{ $key + 1 }} dell'articolo">
                        </div>
                        {{-- da qui --}}
                        <div class="col-10 col-md-3 col-lg-3 bordoCard primario sottotitolo textShadow3 mb-3 mt-3 showDimPC mt-md-0">
                            <div class="card-body p-5">
                                <h5 class="secondario sottotitolo textShadow">Labels:</h5>
                                @if($image->labels)
                                @foreach($image->labels as $label)
                                #{{ $label }}
                                @endforeach
                                @else
                                <p>No labels</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-10 col-md-3 col-lg-3 p-1 bordoCard primario sottotitolo textShadow3 mb-3 indexDimPC mt-md-0">
                            <div class="card-body ms-5 py-5">
                                <h5 class="ratings secondario sottotitolo textShadow">Ratings:</h5>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->adult }}">
                                        </div>
                                    </div>
                                    <div class="col-10">Adult</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->violence }}">
                                        </div>
                                    </div>
                                    <div class="col-10">Violence</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->spoof }}">
                                        </div>
                                    </div>
                                    <div class="col-10">Spoof</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->racy }}">
                                        </div>
                                    </div>
                                    <div class="col-10">Racy</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->medical }}">
                                        </div>
                                    </div>
                                    <div class="col-10">Medical</div>
                                </div>
                            </div>
                        </div>
                        {{-- a qui --}}
                        @endforeach
                        @else
                        @for ($i = 0; $i < 6; $i++)
                        <div class="col-10 col-md-4 col-lg-4 text-center p-1">
                            <img src="https://picsum.photos/350" alt="immagine placeholder" class="img-fluid rounded">
                        </div>
                        @endfor
                        @endif
                    </div>
                </div>
                <div class="col-10 col-md-3 col-lg-3 justify-content-center bordoCard p-5 mb-3 mt-3 mt-md-0">
                    <div>
                        <h3 class="primario textShadow3 mb-3 mt-5"><span class="secondario textShadow">{{ __('ui.Titolo') }} </span>{{ $article_to_check->title }}</h3>
                        <h5 class="primario textShadow3 mb-3 mt-5"><span class="secondario textShadow">{{ __('ui.Autore') }} </span>{{ $article_to_check->user->name }}</h5>
                        <h5 class="primario textShadow3 mb-3"><span class="secondario textShadow">{{ __('ui.Prezzo') }}</span> {{ $article_to_check->price }}</h5>
                        <h5 class="sottotitolo terziario textShadow3 mb-5"><span class="secondario textShadow">{{ __('ui.Categoria') }}</span> {{ $article_to_check->category->name }}</h5>
                        <p class="h6 primario textShadow3 mb-5"><span class="secondario textShadow">{{ __('ui.Descrizione') }} </span>{{ $article_to_check->description }}</p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">
                                {{ __('ui.Revisor4') }}
                            </button>
                        </form>
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn ms-1 sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">
                                {{ __('ui.Revisor5') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @else
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h5 class="mt-3 primario textShadow3 mb-5">{{ __('ui.Revisor2') }}</h5>
                    <a href="{{ route('homepage') }}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-3 mb-5">
                        {{ __('ui.Revisor3') }}
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
    
    <div class="text-center p-3 linearGradient">
    </div>
    
    <!-- Seconda sezione: Annunci da revisionare ulteriormente -->
    <div id="recheck">
        <div class="container-fluid sfondoServizi">
            <div class="row">
                <h3 class="titolo bordoScritte terziario text-center marginTop mb-5">{{ __('ui.Revisor6') }}</h3>
                {{-- Sezione commentata relativa al popup precedente --}}
            </div>
            <div>
                @if($article_to_re_check)
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 mb-5">
                        <div class="row justify-content-center">
                            @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 col-lg-4 text-center p-1">
                                <img src="https://picsum.photos/350" alt="immagine placeholder" class="img-fluid rounded">
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-lg-4 justify-content-center bordoCard p-5 mb-3">
                        <div>
                            @if($article_to_re_check->is_accepted == 0)
                            <p class="primario textShadow3 mt-5 mb-3 text-center">{{ __('ui.Revisor10') }}:</p>
                            @else
                            <p class="primario textShadow3">{{ __('ui.Revisor11') }}</p>
                            @endif
                            <h3 class="primario textShadow3 mb-3">
                                <span class="secondario textShadow">{{ __('ui.Titolo') }} </span>{{ $article_to_re_check->title }}
                            </h3>
                            <h5 class="primario textShadow3 mb-3">
                                <span class="secondario textShadow">{{ __('ui.Autore') }} </span>{{ $article_to_re_check->user->name }}
                            </h5>
                            <h5 class="primario textShadow3 mb-3">
                                <span class="secondario textShadow">{{ __('ui.Prezzo') }}</span> {{ $article_to_re_check->price }}
                            </h5>
                            <h5 class="sottotitolo terziario textShadow3 mb-3">
                                <span class="secondario textShadow">{{ __('ui.Categoria') }}</span> {{ $article_to_re_check->category->name }}
                            </h5>
                            <p class="h6 primario textShadow3 mb-3">
                                <span class="secondario textShadow">{{ __('ui.Descrizione') }} </span>{{ $article_to_re_check->description }}
                            </p>
                        </div>
                        <div class="d-flex justify-content-around mt-3">
                            @if($article_to_re_check->is_accepted == 0)
                            <form action="{{ route('accept', ['article' => $article_to_re_check]) }}?scroll=second" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">
                                    Accetta
                                </button>
                            </form>
                            @else
                            <form action="{{ route('accept', ['article' => $article_to_re_check]) }}?scroll=second" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">
                                    {{ __('ui.Revisor8') }}
                                </button>
                            </form>
                            @endif
                            @if($article_to_re_check->is_accepted == 1)
                            <form action="{{ route('reject', ['article' => $article_to_re_check]) }}?scroll=second" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn ms-1 sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">
                                    {{ __('ui.Revisor9') }}
                                </button>
                            </form>
                            @else
                            <form action="{{ route('reject', ['article' => $article_to_re_check]) }}?scroll=second" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">
                                    Cestina
                                </button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                @else
                <div class="row justify-content-center align-items-center text-center">
                    <div class="col-12">
                        <h5 class="mt-3 primario textShadow3 p-5">{{ __('ui.Revisor7') }}</h5>
                        <a href="{{ route('revisor.reset') }}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-3 mb-5">
                            {{ __('ui.Revisor15') }}
                        </a>
                        <a href="{{ route('homepage') }}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-3 mb-5">
                            {{ __('ui.Revisor3') }}
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>