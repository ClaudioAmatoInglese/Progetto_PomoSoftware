<x-layout>
    <div class="container-fluid2 sfondoServizi min-vh-100">
        <div class="row justify-content-center vh-100 mb-5">
            <div class="col-12 text-center">
                <h2 class="display-5 titolo terziario bordoScritte marginTop pt-5"> <span class="titolo"></span>{{$article->title}}</h2>
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-secondary sfondoBottone vociNavbar bordoScritte2 bordoBottone mt-3 mb-1">{{__('ui.Categoria')}} {{__("ui.{$article->category->name}")}}</a>
            </div>
            <div class="col-12 col-lg-4 p-5 mt-3">
                {{-- Inizio nuovo carosello --}}
                @if ($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide" id="carouselExampleSlidesOnly">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ $image->getUrl(700, 400) }}" class="d-block w-100 rounded shadow"
                                    alt="Immagine {{ $key + 1 }} dell’articolo {{ $article->title }}">
                            </div>
                        @endforeach
                    </div>                    
                    @if ($article->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @endif
                </div>
                @else
                <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center mb-md-0 mb-3 d-flex align-items-center mt-3">
                <div class="justify-content-center bordoCard p-2">
                    <h4 class="sottotiolo primario mb-4 textShadow3"><span class="secondario bordoScritte3">{{__('ui.Prezzo')}}</span> {{$article->price}}€</h4>
                    <h5 class="secondario sottotitolo textShadow bordoScritte3">{{__('ui.Descrizione')}} </h5>
                    <p class="primario textShadow3">{{$article->description}}</p>
                    <div class="d-flex mt-3 justify-content-around">
                        <p class="fw-bold fst-italic primario me-3 textShadow3"><span class="secondario bordoScritte3">{{__('ui.Autore')}}</span> {{$article->user->name}}</p>
                        <p class="fw-bold fst-italic primario ms-3 textShadow3"><span class="secondario bordoScritte3">{{__('ui.Creato il')}}</span> {{$article->created_at->format('d F Y, H:i')}}</p>
                    </div>
                </div>       
            </div>
        </x-layout>