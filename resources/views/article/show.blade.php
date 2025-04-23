<x-layout>
    <div class="container-fluid sfondoServizi vh-100">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-6 col-lg-4 p-0 m-0">
                <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <a href="">
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative" data-bs-interval="2800">
                                <img src="https://picsum.photos/400" alt="..." class="d-block w-100 rounded">
                            </div>
                            <h1 class="titleWelcome">ALECLA<br>Viaggi</h1>
                        </a>
                    </div>
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
                <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-warning mt-3">Categoria: {{ $article->category->name }}</a>
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
