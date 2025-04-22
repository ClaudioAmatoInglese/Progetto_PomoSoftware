<div class="card mx-auto card-w text-center">
    <img src="" alt="placeholder{{$article->title}}" class="card-img-top">
    <div class="card-body">
        <h4 class="card-title mb-2">{{$article->title}}</h4>
        <h6 class="card-subtitle mb-3">{{$article->price}}</h6>
        <div>
            <a href="" class="btn btn-primary">dettaglio annuncio</a>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <p>{{ $article->created_at->diffForHumans() }}</p>
            <p class="d-none">{{ $article->created_at->diffForHumans() }}</p>
            <p>Categoria: <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="text-decoration-none">{{ $article->category->name }}</a></p>
        </div>
    </div>
</div>