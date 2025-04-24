<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12 mt-5">
                <h1>PAGINA DI DETTAGLIO ARTICOLO</h1>                           
            </div>
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6 col-lg-4 p-0 m-0">
                <div class="carousel slide" id="carouselExampleSlidesOnly">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" alt="..." class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" alt="..." class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" alt="..." class="d-block w-100 rounded">
                        </div>
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
                {{-- <div class="col-12 p-0 m-0">                
                    <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($continents as $continent)
                            <a href="{{route('index.post')}}">
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative" data-bs-interval="2800">
                                   <img src="{{Storage::url($continent['img'])}}" class="d-block w-100" id="carouselHome" alt="immagini carosello">
                                </div>
                                <h1 class="titleWelcome">ALECLA<br>Viaggi</h1>
                            </a>
                            @endforeach
                        </div>
    
                    </div> 
                </div> --}}
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <h2 class="display-5 titolo terziario bordoScritte"> <span class="fw-bold fst-italic"></span>{{$article->title}}</h2>
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-secondary sfondoBottone vociNavbar bordoScritte2 bordoBottone mt-3">Categoria: {{ $article->category->name }}</a>
                <div class="d-flex flex-column justify-content-center h-75">
                    <h4 class="sottotiolo primario mb-4 textShadow3">Prezzo: {{$article->price}}</h4>
                    <h5 class="secondario sottotitolo textShadow">Descrizione: </h5>
                    <p class="primario textShadow3">{{$article->description}}</p>
                    <div class="d-flex mt-3 justify-content-between">
                        <p class="fw-bold fst-italic primario me-3 textShadow3"><span class="secondario textShadow">Annuncio di:</span> {{$article->user->name}}</p>
                        <p class="fw-bold fst-italic primario ms-3 textShadow3"><span class="secondario textShadow">Inserito il:</span> {{$article->created_at}}</p>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</x-layout> 
