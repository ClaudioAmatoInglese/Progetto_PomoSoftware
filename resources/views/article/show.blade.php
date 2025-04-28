<x-layout>
    <div class="container-fluid sfondoServizi">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="display-5 titolo terziario bordoScritte marginTop pt-5 mb-3"> <span class="titolo"></span>{{$article->title}}</h2>
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-secondary sfondoBottone vociNavbar bordoScritte2 bordoBottone mt-1 mb-1">Categoria: {{ $article->category->name }}</a>
             <h2 class="display-5 titolo terziario bordoScritte marginTop pt-5 mb-3"> <span class="titolo"></span>{{$article->title}}</h2>
             <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-secondary sfondoBottone vociNavbar bordoScritte2 bordoBottone mt-1 mb-1">{{__('ui.Categoria')}} {{ $article->category->name }}</a>
            </div>
            <div class="col-12 col-lg-4 mb-5">
                {{-- Inizio nuovo carosello --}}
                @if ($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide" id="carouselExampleSlidesOnly">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                        <div class="carousel-item mt-3 @if ($loop->first) active @endif">
                            <img src="{{ Storage::url($image->path) }}" class="d-block w-100 rounded shadow"
                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
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
                
                {{-- fine nuovo carosello --}}
                
                {{-- INIZIO VECCHIO CAROSELLO --}}
                {{-- <div class="carousel slide" id="carouselExampleSlidesOnly">
                    <div class="carousel-inner">
                        <div class="carousel-item active mt-3">
                            <img src="https://picsum.photos/800" alt="..." class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-item active mt-3">
                                <img src="https://picsum.photos/1200" alt="..." class="d-block w-100 rounded">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1200" alt="..." class="d-block w-100 rounded">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1200" alt="..." class="d-block w-100 rounded">
                            </div>
                            
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Precedente</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Successiva</span>
                            </button>
                        </div>
                    </div>
                </div> --}}
                {{-- FINE VECCHIO CAROSELLO --}}
            </div>
            {{-- <div class="col-12 p-0 m-0">                
                <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($continents as $continent)
                        <a href="{{route('index.post')}}">
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative" data-bs-interval="2800">
                                <img src="{{Storage::url($continent['img'])}}" class="d-block w-100" id="carouselHome" alt="immagini carosello">
                            </div>
                            <h1 class="titleWelcome">ALECLA<br>Viaggi</h1>
                        </div> 
                    </div> --}}
                    <div class="col-12 col-md-6 col-lg-4 text-center pb-5 mb-5 mt-3">
                        <div class="justify-content-center bordoCard p-2">
                            <h4 class="sottotiolo primario mb-4 textShadow3"><span class="secondario bordoScritte3">Prezzo:</span> {{$article->price}}</h4>
                            <h5 class="secondario sottotitolo textShadow bordoScritte3">Descrizione: </h5>
                            <p class="primario textShadow3">{{$article->description}}</p>
                            <div class="d-flex mt-3 justify-content-around">
                                <p class="fw-bold fst-italic primario me-3 textShadow3"><span class="secondario bordoScritte3">Annuncio di:</span> {{$article->user->name}}</p>
                                <p class="fw-bold fst-italic primario ms-3 textShadow3"><span class="secondario bordoScritte3">Inserito il:</span> {{$article->created_at->format('d F Y, H:i')}}</p>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </x-layout>