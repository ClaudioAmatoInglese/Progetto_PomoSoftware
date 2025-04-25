<x-layout>
    <div class="container-fluid sfondoServizi p-5">
        <div class="row p-5"> 
            <h3 class="primario textShadow3 p-5 text-center">Annunci da revisionare:</h3>
            <div class="col-3">
                <div class="rounded">     
                    @if (session()->has('message'))
                    <div class="row justify-content-center">
                        <div id="popup-success" class="col-12 alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div>
            @if($article_to_check)
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row justify-content-center">   
                        @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 col-lg-4 text-center p-1">
                            <img src="https://picsum.photos/350" alt="immagine placeholder" class="img-fluid rounded">
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-column justify-content-center bordoCard p-5">
                    <div>
                        <h3 class="primario textShadow3"><span class="secondario textShadow">Titolo: </span>{{$article_to_check->title}}</h3>
                        <h5 class="primario textShadow3"> <span class="secondario textShadow">Autore: </span>{{$article_to_check->user->name}}</h5>
                        <h5 class="primario textShadow3"><span class="secondario textShadow">Prezzo:</span> {{$article_to_check->price}}</h5>
                        <h5 class="sottotitolo terziario textShadow3"><span class="secondario textShadow">Categoria:</span> {{$article_to_check->category->name}}</h5>
                        <p class="h6 primario textShadow3"><span class="secondario textShadow">Descrizione: </span>{{$article_to_check->description}}</p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn py-2 px-5 corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Accetta</button>
                        </form>
                        <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn ms-1 py-2 px-5 sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Rifiuta</button>
                        </form>
                    </div>
                </div>
            </div>      
            @else
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h1 class="mt-3 primario textShadow3">Nessun annuncio da revisionare.</h1>
                    <a href="{{route('homepage')}}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-3">Torna alla home</a>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="text-center p-3 linearGradient">
      </div>
    <div class="container-fluid sfondoServizi p-5">
        <div class="row"> 
            <h3 class="primario textShadow3 text-center p-5">Annunci da revisionare ulteriormente:</h3>
            <a href="{{ route('revisor.reset') }}" class="btn sfondoBottone2 vociNavbar bordoScritte2 mb-3">Ripristina Lista Articoli</a>
            <div class="col-3 text-center">
                <div class="rounded">     
                    @if (session()->has('message'))
                    <div class="row justify-content-center">
                        <div id="popup-accept" class="col-12 alert alert-success text-center">
                            {{session('message')}}
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div>
            @if($article_to_re_check)
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="row justify-content-center">   
                        @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 col-lg-4 text-center p-1">
                            <img src="https://picsum.photos/350" alt="immagine placeholder" class="img-fluid rounded">
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-column justify-content-center bordoCard p-5">
                    <div>
                        @if($article_to_re_check->is_accepted == 0)
                        <p class="primario textShadow3">L'annuncio era stato rifiutato</p>
                        @else
                        <p class="primario textShadow3">L'annuncio era stato accettato</p> 
                        @endif
                        <h3 class="primario textShadow3"><span class="secondario textShadow">Titolo: </span>{{$article_to_re_check->title}}</h3>
                        <h5 class="primario textShadow3"> <span class="secondario textShadow">Autore: </span>{{$article_to_re_check->user->name}}</h5>
                        <h5 class="primario textShadow3"><span class="secondario textShadow">Prezzo:</span> {{$article_to_re_check->price}}</h5>
                        <h5 class="sottotitolo terziario textShadow3"><span class="secondario textShadow">Categoria:</span> {{$article_to_re_check->category->name}}</h5>
                        <p class="h6 primario textShadow3"><span class="secondario textShadow">Descrizione: </span>{{$article_to_re_check->description}}</p>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        @if($article_to_re_check->is_accepted == 0)
                        <form action="{{route('accept', ['article' => $article_to_re_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn py-2 px-5 corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Accettato</button>
                        </form>
                        @else <form action="{{route('accept', ['article' => $article_to_re_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn py-2 px-5 corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Confermato</button>
                        </form>
                        @endif
                        
                        @if($article_to_re_check->is_accepted == 1)
                        <form action="{{route('reject', ['article' => $article_to_re_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn ms-1 py-2 px-5 sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Rifiutato</button>
                        </form>
                        @else
                        <form action="{{route('reject', ['article' => $article_to_re_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn py-2 px-5 sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Cestinato</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>      
            @else
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h1 class="mt-3 primario textShadow3 p-5">Nessun annuncio da revisionare ulteriormente.</h1>
                    <a href="{{route('homepage')}}" class="btn sfondoBottone2 vociNavbar bordoScritte2 bordoBottone coloreNavTitle mt-3">Torna alla home</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-layout>