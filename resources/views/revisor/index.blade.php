<x-layout>
    <div class="container-fluid sfondoServizi mt-4 p-5">
        <div class="row"> 
            <div class="col-3">
               <div class="rounded">     {{--  lascio sta roba anche se mi pare opinabile  --}}
                    @if (session()->has('message'))
                    <div class="row justify-content-center">
                        <div class="col-5 alert alert-success text-center">
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
                    <div class="row justify-content-center">   {{-- sempre roba presente nel documento --}}
                        @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 col-lg-4 text-center p-1">
                            <img src="https://picsum.photos/350" alt="immagine placeholder" class="img-fluid rounded">
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 d-flex flex-column justify-content-center bordoCard">
                    <div>
                        <h3 class="primario textShadow3"><span class="secondario textShadow">Titolo: </span>{{$article_to_check->title}}</h3>
                        <h5 class="primario textShadow3"> <span class="secondario textShadow">Autore: </span>{{$article_to_check->user->name}}</h5>
                        <h5 class="primario textShadow3"><span class="secondario textShadow">Prezzo:</span> {{$article_to_check->price}}</h5>
                        <h5 class="sottotitolo bordoScritte2 textShadow"><span class="secondario textShadow">Categoria:</span> {{$article_to_check->category->name}}</h5>
                        <p class="h6 primario textShadow3"><span class="secondario textShadow">Descrizione: </span>{{$article_to_check->description}}</p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <form action="{{route('accept', ['article' => $article_to_check])}}"" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn py-2 px-5 corretto bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Accetta</button>
                        </form>
                        <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn py-2 px-5 sbagliato bordoBottone vociNavbar sfondoBottone coloreNavTitle2">Rifiuta</button>
                        </form>
                    </div>
                </div>
            </div>      
            @else
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h1 class="">Nessun articolo da revisionare</h1>
                    <a href="{{route('homepage')}}" class="btn">torna alla home</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-layout>