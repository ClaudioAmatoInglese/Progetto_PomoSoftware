<div class="container card mx-auto card-w text-center sfondoServizi cardDimension">
    {{-- <img src="" alt="placeholder{{$article->title}}" class="card-img-top"> --}}
    <div class="row justify-content-center align-items-center text-center card-body">
        <h4 class="card-title mt-3 mb-3 primario">{{$article->title}}</h4>
        <h6 class="card-subtitle mt-3 mb-3 primario">Prezzo: {{$article->price}}€</h6>
        <div class="justify-content-center align-items-center text-center">
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-warning mb-3">Categoria: {{ $article->category->name }}</a>
            <a href="{{route('show.article', compact('article'))}}" class="btn btn-primary mb-3">Dettaglio</a>
            <p class="primario">{{ $article->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>