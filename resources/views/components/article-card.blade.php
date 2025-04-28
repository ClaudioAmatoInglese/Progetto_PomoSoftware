<div class="container card mx-auto card-w text-center sfondoCard cardDimension cards article-card">
    {{-- <img src="" alt="placeholder{{$article->title}}" class="card-img-top"> --}}
    <div class="row justify-content-center align-items-center text-center card-body">
        <h4 class="card-title mt-3 mb-3 primario textShadow3">{{$article->title}}</h4>
        <h6 class="card-subtitle mt-3 mb-3 primario textShadow3">{{__('ui.Prezzo')}} {{$article->price}}€</h6>
        <div class="d-flex flex-column align-items-center text-center">
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-secondary sfondoBottone mb-3 vociNavbar bordoScritte2 bordoBottone">{{__('ui.Categoria')}} {{ $article->category->name }}</a>
            <a href="{{route('show.article', compact('article'))}}" class="btn sfondoBottone2 mb-3 coloreNavTitle vociNavbar bordoScritte2 bordoBottone">{{__('ui.Dettaglio')}}</a>
            <p class="primario textShadow3">{{ $article->created_at->diffForHumans() }}</p>
        </div>
    </div>
</div>